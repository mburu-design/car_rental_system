<?php

namespace App\Http\Controllers;

use App\Livewire\RideRequest;
use App\Models\Bookings;
use App\Models\Listings;
use App\Models\Payments;
use App\Models\RideRequests;
use App\Models\Riders;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class MpesaController extends Controller
{
    public $requestedRideID;
    public $riderId;
    public $statuCode;
    public $CheckoutRequestID;

    public function token()
    {
        $consumerKey = env('CONSUMERKEY');
        $consumerSecret = env('CONSUMERSECRET');
        $credentials = base64_encode($consumerKey . ":" . $consumerSecret);
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $response = Http::withBasicAuth($consumerKey, $consumerSecret)->get($url);
        return $response['access_token'];
    }

    public function initiateStkPush(Request $request)
    {


        $this->requestedRideID = $request->requestedCarId;
        $this->riderId = $request->riderId;
        /***/
        $riderPaymentPhone = substr(Riders::where('id', $request->riderId)->value('payment_phone'), 1, 12);

        $accessToken = $this->token();
        $url = env('APIURL');
        $PassKey = env('APIPASSKEY');
        $BusinessShortCode = env('BusinessShortCode');
        $Timestamp = Carbon::now()->format('YmdHis');
        $Password = base64_encode($BusinessShortCode . $PassKey . $Timestamp);
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = (int) RideRequests::where('riders_id', $request->riderId)->first()->requestListing->total_cost;
        $PartyA = $riderPaymentPhone;
        $PartyB = 174379;
        $CallbackUrl = env('CALLBACKURL') . '/' . $this->requestedRideID;

        $AccountReference = 'Quickoffice';
        $TransactionDescription = 'Payment e-service';
        try {

            $response = Http::withToken($accessToken)->post($url, [
                'BusinessShortCode' => $BusinessShortCode,
                'Password' => $Password,
                'Timestamp' => $Timestamp,
                'TransactionType' => $TransactionType,
                'Amount' => 1,
                'PartyA' => $PartyA,
                'PartyB' => $PartyB,
                'PhoneNumber' => $riderPaymentPhone,
                'CallBackURL' => $CallbackUrl,
                'AccountReference' => $AccountReference,
                'TransactionDesc' => $TransactionDescription
            ]);

            if ($response->getStatusCode() !== 200) {
                throw new \Exception('Error in payment request. Response status code: ' . $response->getStatusCode());
            }

            $res = json_decode($response->body());
            $ResponseCode = $res->ResponseCode;
            $this->CheckoutRequestID = $res->CheckoutRequestID;
            $this->stkQuery();
            return redirect()->route('thankyoupage', ['requestId' => $this->requestedRideID]);
        } catch (\Throwable $e) {
            return redirect('/error')->with(['error' => $e->getMessage()]);
        }
    }

    public function stkCallback(Request $request)
    {
        // return $request->all();
        $data = file_get_contents('php://input');
        Log::info($data);
        Storage::disk('local')->put('stk.txt', $data);
        $response = json_decode($data, true);
        // session(['apiResults' => $response]);
        $ResultCode = $response['Body']['stkCallback']['ResultCode'];

        if ($ResultCode == 0) {

            $this->statuCode = 0;
            $MerchantRequestID = $response['Body']['stkCallback']['MerchantRequestID'];
            $CheckoutRequestID = $response['Body']['stkCallback']['CheckoutRequestID'];
            $ResultDesc = $response['Body']['stkCallback']['ResultDesc'];
            $Amount = $response['Body']['stkCallback']['CallbackMetadata']['Item'][0]['Value'];
            $MpesaReceiptNumber = $response['Body']['stkCallback']['CallbackMetadata']['Item'][1]['Value'];
            //$Balance=$response['Body']['stkCallback']['CallbackMetadata']['Item'][2]['Value'];
            $TransactionDate = $response['Body']['stkCallback']['CallbackMetadata']['Item'][3]['Value'];
            $PhoneNumber = $response['Body']['stkCallback']['CallbackMetadata']['Item'][4]['Value'];
            $payment = new Payments();
            $payment->ride_requests_id = $request->ride_requests_id;
            $payment->riders_id = RideRequests::where('id', $request->ride_requests_id)->value('riders_id');
            $payment->lessor_id = RideRequests::where('id', $request->ride_requests_id)->value('car_owners_id');
            $payment->payment_method = "MPESA";
            $payment->payment_phone = $PhoneNumber;
            $payment->amount = $Amount;
            $payment->transaction_code = $MpesaReceiptNumber;
            $payment->description = $ResultDesc;
            $payment->MerchantRequestID = $MerchantRequestID;
            $payment->CheckoutRequestID = $CheckoutRequestID;
            $payment->status = 'paid';
            $payment->save();

            $Booking = new Bookings();
            $Booking->ride_requests_id = $request->ride_requests_id;
            $Booking->car_owners_id = RideRequests::where('id', $request->ride_requests_id)->value('car_owners_id');
            $Booking->payments_id = Payments::where('ride_requests_id', $request->ride_requests_id)->first()->value('id');
            $Booking->riders_id = RideRequests::where('id', $request->ride_requests_id)->value('riders_id');
            $Booking->save();
            $fleetId = RideRequests::where('id', $request->ride_requests_id)->value('fleet_id');
            $listing = Listings::where('fleet_id', $fleetId)->where('status', 'requested')->first();
            $listing->status = 'booked';
            $listing->update();
        }
    }

    public function stkQuery()
    {
        $accessToken = $this->token();
        $BusinessShortCode = 174379;
        $PassKey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';
        $Timestamp = Carbon::now()->format('YmdHis');
        $Password = base64_encode($BusinessShortCode . $PassKey . $Timestamp);
        $CheckoutRequestID = $this->CheckoutRequestID;
        $response = Http::withToken($accessToken)->post($url, [
            'BusinessShortCode' => $BusinessShortCode,
            'Timestamp' => $Timestamp,
            'Password' => $Password,
            'CheckoutRequestID' => $CheckoutRequestID
        ]);
        $result = json_decode($response, true);
        Log::info($result);

        if (isset($result['ResultCode'])) {
            $ResultCode = $result['ResultCode'];
            if ($ResultCode == 1032) {
                session()->flash('ResultCode', 1032);
            }
            if ($ResultCode == 0) {
                session()->flash('ResultCode', 0);
                session()->flash('CheckoutRequestID', $result['CheckoutRequestID']);
            }
        }
    }
}

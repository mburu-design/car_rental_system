<?php

namespace App\Livewire\Profile;

use App\Models\RideRequests;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CheckoutPage extends Component
{
    public $requestCheckout;
    public $rideRequestId;
    public function mount($request_id)
    {
        $this->rideRequestId = $request_id;
        $this->requestCheckout = RideRequests::where('id', $request_id)->where('status', 'approved')->first();
    }


    public function processPayment($riderId, $rideRequestId)
    {
        return redirect()->route('initiateStkPush', ['riderId' => $riderId, 'requestedCarId' => $rideRequestId]);
    }


    public function render()
    {
        return view('livewire.profile.checkout-page')->extends('layouts.app');
    }
}

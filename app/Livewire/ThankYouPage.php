<?php

namespace App\Livewire;

use App\Http\Controllers\MpesaController;
use App\Models\Bookings;
use App\Models\Payments;
use Livewire\Attributes\On;
use Livewire\Component;

class ThankYouPage extends Component
{
    // public $requestId;
    // public $payment;
    // public $pickup_place;
    // #[On('pickupPlace')]
    // public function updatePickup($pickupPlace)
    // {
    //     $this->pickup_place = "kinuthia";
    // }

    public $bookingId;
    public $listingId;

    public function mount($requestId)
    {
        $this->bookingId = Bookings::where('ride_requests_id', $requestId)->value('id');
    }



    public function render()
    {

        return view('livewire.thank-you-page')->extends('layouts.app');
    }
}

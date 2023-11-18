<?php

namespace App\Livewire;

use App\Http\Controllers\MpesaController;
use App\Models\Payments;
use Livewire\Attributes\On;
use Livewire\Component;

class ThankYouPage extends Component
{
    public $requestId;
    public $payment;
    public $pickup_place;
    #[On('pickupPlace')]
    public function updatePickup($pickupPlace)
    {
        $this->pickup_place = "kinuthia";
    }

    // public function mount($requestId)
    // {
    //     $this->payment = new MpesaController();
    //     $this->requestId = $requestId;
    //     //  $this->payment==Payments::where('requestId',$this->$requestId);

    // }

    public function render()
    {

        return view('livewire.thank-you-page')->extends('layouts.app');
    }
}

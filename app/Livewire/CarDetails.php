<?php

namespace App\Livewire;

use App\Models\Listings;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CarDetails extends Component
{
    public $listedCar;
    public function mount($id)
    {
        $this->listedCar = Listings::where('fleet_id', $id)->first();
    }
    public function rideRequest($listing_id)
    {

        // Put 'intended_action' into the session
        session(['intended_action' => url()->previous()]);

        return redirect('/ride/request/' . $listing_id);
    }
    public function render()
    {
        return view('livewire.car-details')->extends('layouts.app');
    }
}

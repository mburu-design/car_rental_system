<?php

namespace App\Livewire;

use App\Models\Fleet;
use App\Models\Listings;
use App\Models\RideRequests;
use App\Models\Riders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RideRequest extends Component
{
    public $listing_id;
    public $car;
    public function mount($listing_id)
    {
        $this->listing_id = $listing_id;
        $this->car = Listings::find($listing_id);
        // $newRequest = new RideRequests();
        // $newRequest->listing_id = $listing_id;
        // $newRequest->riders_id = Riders::where('user_id', Auth::user()->id)->value('id');
        // $newRequest->fleet_id = Listings::where('id', $listing_id)->value('fleet_id');

        // Get the rider's ID
        $riderId = Riders::where('user_id', Auth::user()->id)->value('id');

        // Get the fleet ID for the given listing
        $fleetId = Listings::where('id', $listing_id)->value('fleet_id');
        $carOwnerId = Listings::where('id', $listing_id)->value('car_owners_id');

        // Check if the rider has already requested this car
        $existingRequest = RideRequests::where('listing_id', $listing_id)
            ->where('riders_id', $riderId)
            ->where('fleet_id', $fleetId)
            ->first();

        if (!$existingRequest) {
            // If the request doesn't exist, create a new request
            $newRequest = new RideRequests();
            $newRequest->listing_id = $listing_id;
            $newRequest->riders_id = $riderId;
            $newRequest->fleet_id = $fleetId;
            $newRequest->car_owners_id = $carOwnerId;
            if ($newRequest->save()) {
                $listing = Listings::where('id', $listing_id)->first();
                $listing->status = 'requested';
                $listing->update();
                session()->flash('requestSuccess', 'Request successful, please wait for lessor to approve your request');
            } else {
                session()->flash('requestFailed', 'oops! unexpected error ocuured , Try Again later');
            }
        } else {
            // Handle the case where the rider has already requested this car (e.g., display an error message).
            return back()->with('status', 'You had earlier requested for this car. Please wait for car owner to approve your reques');
        }
    }


    public function render()
    {
        return view('livewire.ride-request')->extends('layouts.app');
    }
}

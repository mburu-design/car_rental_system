<?php

namespace App\Livewire\Admin;

use App\Models\Bookings;
use App\Models\CarOwners;
use App\Models\Fleet;
use App\Models\Listings;
use App\Models\RideRequests;
use App\Models\Riders;
use App\Models\User;
use Livewire\Component;

class DefaultDashboard extends Component
{
    public function render()
    {
        $carOwners = CarOwners::all()->count();
        $drivers = Riders::all()->count();
        $users = User::all()->count();
        $fleets = Fleet::all()->count();
        $Requests = RideRequests::all()->count();
        $totalBookings = Bookings::all()->count();
        $totalListings = Listings::all()->count();
        return view('livewire.admin.default-dashboard', ['carOwners' => $carOwners, 'drivers' => $drivers, 'users' => $users, 'fleets' => $fleets, 'rideRequests' => $Requests, 'totalBookings' => $totalBookings, 'totalListings' => $totalListings]);
    }
}

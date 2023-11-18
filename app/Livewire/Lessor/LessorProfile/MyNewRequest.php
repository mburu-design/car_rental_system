<?php

namespace App\Livewire\Lessor\LessorProfile;

use App\Models\CarOwners;
use App\Models\RideRequests;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyNewRequest extends Component
{
    public $riderId;
    public $LessorId;
    public $fleet_id;
    public $pendingRequests;

    public function mount()
    {
        $this->LessorId = CarOwners::where('user_id', Auth::user()->id)->value('id');
        $this->pendingRequests = RideRequests::where('car_owners_id', $this->LessorId)->where('status', 'pending')->get();
    }
    public function approveRequest($id)
    {
        $rideRequest = RideRequests::find($id);
        $rideRequest->status = 'approved';
        $rideRequest->update();
        return redirect('/lessor/profile');
    }
    public function rejectRequest($id)
    {
        $rideRequest = RideRequests::find($id);
        $rideRequest->status = 'declined';
        $rideRequest->update();
        return redirect('/lessor/profile');
    }
    public function render()
    {
        return view('livewire.lessor.lessor-profile.my-new-request');
    }
}

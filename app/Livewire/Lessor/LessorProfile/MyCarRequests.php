<?php

namespace App\Livewire\Lessor\LessorProfile;

use App\Models\CarOwners;
use App\Models\RideRequests;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyCarRequests extends Component
{
    public $newRequest;
    public $lessorId;
    public function mount()
    {
        $this->lessorId = CarOwners::where('user_id', Auth::user()->id)->value('id');
        $this->newRequest = RideRequests::where('car_owners_id', $this->lessorId)->where('status', 'pending')->get();
    }
    public function render()
    {
        return view('livewire.lessor.lessor-profile.my-car-requests');
    }
}

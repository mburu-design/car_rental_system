<?php

namespace App\Livewire\Lessor\LessorProfile;

use App\Models\Bookings;
use App\Models\CarOwners;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CarLeases extends Component
{
    public $myLeases;
    public $rating = 0;

    public function mount()
    {
        $lessorId = CarOwners::where('user_id', Auth::user()->id)->value('id');
        $this->myLeases = Bookings::where('car_owners_id', $lessorId)->get();
    }

    public function hello()
    {
        dd(2);
    }
    public function render()
    {
        return view('livewire.lessor.lessor-profile.car-leases');
    }
}

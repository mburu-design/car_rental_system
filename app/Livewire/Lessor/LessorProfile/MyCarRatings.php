<?php

namespace App\Livewire\Lessor\LessorProfile;

use App\Models\CarOwners;
use App\Models\CarRatings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyCarRatings extends Component
{
    public $carRatings;
    public function mount()
    {
        $lessorId = CarOwners::where('user_id', Auth::user()->id)->value('id');
        $this->carRatings = CarRatings::where();
    }

    public function render()
    {

        return view('livewire.lessor.lessor-profile.my-car-ratings');
    }
}

<?php

namespace App\Livewire\Profile;

use App\Models\DriverRatings as ModelsDriverRatings;
use App\Models\Riders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DriverRatings extends Component
{
    public  $driverAverageRating;
    public $countReviewers = 0;
    public $reviews;
    public function mount()

    {
        $driverId = Riders::where('user_id', Auth::user()->id)->value('id');
        $this->driverAverageRating = (int) ModelsDriverRatings::where('riders_id', $driverId)->avg('score');
        $this->countReviewers = ModelsDriverRatings::where('riders_id', $driverId)->count();
        $this->reviews = ModelsDriverRatings::where('riders_id', $driverId)->get();
    }
    public function render()
    {
        return view('livewire.profile.driver-ratings');
    }
}

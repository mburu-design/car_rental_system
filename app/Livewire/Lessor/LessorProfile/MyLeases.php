<?php

namespace App\Livewire\Lessor\LessorProfile;

use App\Models\Bookings;
use App\Models\CarOwners;
use App\Models\DriverRatings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyLeases extends Component
{
    public $myLeases;
    public $rating = 0;
    public $reviewComment;

    public function mount()
    {
        $lessorId = CarOwners::where('user_id', Auth::user()->id)->value('id');
        $this->myLeases = Bookings::where('car_owners_id', $lessorId)->get();
    }
    public $rules = [
        'reviewComment' => 'required|string|min:10|max:50',
    ];
    public function setRating($rating)
    {

        $this->rating = $rating;
    }
    public function saveRatings($riderId)
    {

        $this->validate();
        $driverRating = new DriverRatings();
        $driverRating->riders_id = $riderId;
        $driverRating->rater_id = CarOwners::where('user_id', Auth::user()->id)->value('id');
        $driverRating->score = $this->rating;
        $driverRating->review_comments    = $this->reviewComment;
        if ($driverRating->save()) {
            session()->flash('message', 'rating sucessful');
        } else {
            session()->flash('message', 'Failed');
        }

        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.lessor.lessor-profile.my-leases');
    }
}

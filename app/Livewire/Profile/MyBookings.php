<?php

namespace App\Livewire\Profile;

use App\Models\Bookings;
use App\Models\CarRatings;
use App\Models\Listings;
use App\Models\Riders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyBookings extends Component
{
    public $myBookings;
    public $rating = 0;
    public $reviewComment;
    public function mount()
    {
        if (Auth::user()) {
            $riderId = Riders::where('user_id', Auth::user()->id)->value('id');
            $this->myBookings = Bookings::where('riders_id', $riderId)->get();
        }
    }
    public $rules = [
        'reviewComment' => 'required|string|min:10|max:50',
    ];
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function saveRatings($bookingId)
    {
        $this->validate();
        $fleetId = Bookings::where('id', $bookingId)->first()->rideRequest->fleet_id;
        $carRating = new CarRatings();
        $carRating->fleet_id = $fleetId;
        $carRating->rater_id = Auth::user()->id;
        $carRating->score = $this->rating;
        $carRating->review_comments = $this->reviewComment;
        $carRating->save();

        session()->flash('message', 'rating sucessful');
        return redirect('/dashboard');
    }

    public function render()
    {

        return view('livewire.profile.my-bookings');
    }
}

<?php

namespace App\Livewire;

use App\Models\Bookings;
use App\Models\DriverRatings;
use App\Models\Riders;
use App\Models\User;
use Livewire\Component;

class UserPage extends Component
{
    public $user;
    public $ratings;
    public $bookings;
    public function mount($userId)
    {
        $this->user = User::find($userId);
        $riderId = Riders::where('user_id', $userId)->value('id');
        $this->ratings = DriverRatings::where('riders_id', $riderId)->count();
        $this->bookings = Bookings::where('riders_id', $riderId)->count();
    }
    public function render()
    {
        return view('livewire.user-page')->extends('layouts.app');
    }
}

<?php

namespace App\Livewire\Profile;

use App\Models\RideRequests;
use App\Models\Riders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyRequests extends Component
{
    public $myRequest;
    public function mount()
    {
        $this->myRequest = RideRequests::where('riders_id', Riders::where('user_id', Auth::user()->id)->value('id'))->get();
    }
    public function render()
    {
        return view('livewire.profile.my-requests');
    }
}

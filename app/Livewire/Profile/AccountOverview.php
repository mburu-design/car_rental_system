<?php

namespace App\Livewire\Profile;

use App\Models\Riders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AccountOverview extends Component
{
    public $rider;
    public function mount()
    {
        $this->rider = Riders::where('user_id', Auth::user()->id)->first();
    }
    public function render()
    {
        return view('livewire.profile.account-overview');
    }
}

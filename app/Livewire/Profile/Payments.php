<?php

namespace App\Livewire\Profile;

use App\Models\Payments as ModelsPayments;
use App\Models\Riders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Payments extends Component
{

    public $mypayment;
    public function mount()
    {
        $driverId = Riders::where('user_id', Auth::user()->id)->value('id');
        $this->mypayment = ModelsPayments::where('riders_id', $driverId)->get();
    }
    public function render()
    {
        return view('livewire.profile.payments');
    }
}

<?php

namespace App\Livewire\Lessor\LessorProfile;

use App\Models\CarOwners;
use App\Models\Payments as ModelsPayments;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Payments extends Component
{
    public $mypayment;
    public function mount()
    {
        $lessorId = CarOwners::where('user_id', Auth::user()->id)->value('id');
        $this->mypayment = ModelsPayments::where('lessor_id', $lessorId)->get();
    }
    public function render()
    {
        return view('livewire.lessor.lessor-profile.payments');
    }
}

<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class BookingPayments extends Component
{
    public function mount()
    {
        dd('we hre');
    }
    public function payments(Request $request)
    {
        Log::info($request->all());
    }
    public function render()
    {
        return view('livewire.booking-payments');
    }
}

<?php

namespace App\Livewire;

use App\Models\CarOwners;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public $isLessor = false;
    public function mount()
    {
        if (Auth::check()) {
            if (CarOwners::where('user_id', Auth::user()->id)->first()) {
                $this->isLessor = true;
            }
        }
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}

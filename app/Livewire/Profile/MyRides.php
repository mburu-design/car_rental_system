<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class MyRides extends Component
{
    public $rides;
    public function mount()
    {
    }
    public function render()
    {
        return view('livewire.profile.my-rides');
    }
}

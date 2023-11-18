<?php

namespace App\Livewire;

use Livewire\Component;

class DriverProfile extends Component
{
    public function render()
    {
        return view('livewire.driver-profile')->extends('layouts.app');
    }
}

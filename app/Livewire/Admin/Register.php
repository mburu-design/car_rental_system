<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.admin.register')->extends('layouts.app');
    }
}

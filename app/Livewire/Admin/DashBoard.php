<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DashBoard extends Component
{
    public $currentComponent;
    public function mount()
    {
        // $activeUsers = Session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        // dd($activeUsers);
    }
    public function setCurrentComponent($component)
    {
        $this->currentComponent = $component;
    }
    public function render()
    {

        return view('livewire.admin.dash-board')->extends('layouts.app');
    }
}

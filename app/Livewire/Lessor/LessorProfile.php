<?php

namespace App\Livewire\Lessor;

use Livewire\Component;

class LessorProfile extends Component
{
    public $setView;
    public function mount()
    {
        $this->setView = 0;
    }

    public function defaultView()
    {
        $this->setView = 0;
    }
    public function myRequest()
    {
        $this->setView = 1;
    }
    public function myReservation()
    {
        $this->setView = 2;
    }
    public function myRides()
    {
        $this->setView = 3;
    }
    public function myRatings()
    {
        $this->setView = 4;
    }
    public function myInbox()
    {
        $this->setView = 5;
    }
    public function myPayments()
    {
        $this->setView = 6;
    }
    public function render()
    {
        return view('livewire.lessor.lessor-profile')->extends('layouts.app');
    }
}

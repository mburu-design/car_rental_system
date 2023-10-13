<?php

namespace App\Livewire\Lessor;

use App\Models\CarOwners;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class Register extends Component
{
    public $paymentPhone;
    public $idNumber;


    public function lessorRegister()
    {

        $lessor = new CarOwners();
        $lessor->user_id = Auth::user()->id;
        $lessor->ID_number = $this->idNumber;
        $lessor->payment_phone = $this->paymentPhone;
        $lessor->save();

        return redirect('/car/register');
    }
    public function render()
    {
        return view('livewire.lessor.register')->extends('layouts.app');
    }
}

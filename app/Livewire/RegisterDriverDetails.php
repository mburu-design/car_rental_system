<?php

namespace App\Livewire;

use App\Models\Riders;
use App\Rules\PhoneNumber;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegisterDriverDetails extends Component
{
    public $ID_number;
    public $driver_license_number;
    public $payment_phone;
    public function mount()
    {
        $this->payment_phone = substr(Auth::user()->telephone, 4, 9);
    }
    protected function rules()
    {

        return [
            'ID_number' => 'required|numeric|digits_between:7,8|unique:riders',
            'driver_license_number' => 'required|string|min:5|max:6|unique:riders',
            'payment_phone' => ['required', 'digits:9', 'numeric', 'unique:riders'],
        ];
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function driverRegister()
    {
        $this->validate();
        $phone = '+254' . $this->payment_phone;
        $newRider = new Riders();
        $newRider->user_id = Auth::user()->id;
        $newRider->ID_number = $this->ID_number;
        $newRider->driver_license_number = $this->driver_license_number;
        $newRider->payment_phone = $phone;
        if ($newRider->save()) {
            return redirect('/');
        } else {
            return back()->with('error', 'server error');
        }
    }

    public function render()
    {
        return view('livewire.register-driver-details')->extends('layouts.app');
    }
}

<?php

namespace App\Livewire\Lessor\LessorProfile;

use App\Models\CarOwners;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileOverView extends Component
{
    public $firstName;
    public $surName;
    public $idNumber;
    public $mobile;
    public $email;
    public $dob;
    public function mount()
    {
        $this->firstName = strtoupper(Auth::user()->firstName);
        $this->surName = strtoupper(Auth::user()->lastName);
        $this->idNumber = CarOwners::where('user_id', Auth::user()->id)->value('ID_number');
        $this->mobile = Auth::user()->telephone;
        $this->email = Auth::user()->email;
        $this->dob = Auth::user()->DOB;
    }
    public function render()
    {
        return view('livewire.lessor.lessor-profile.profile-over-view');
    }
}

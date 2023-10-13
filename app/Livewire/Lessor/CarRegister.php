<?php

namespace App\Livewire\Lessor;

use App\Http\Controllers\Cars;
use App\Models\CarOwners;
use App\Models\Fleet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class CarRegister extends Component
{
    use WithFileUploads;
    /**from file car brands and their body types**/
    public $cars;
    public $categories;
    public $insuranceProvider;
    public $policyNumber;
    /**  */
    /**car Number plate*/
    public $firstLetter1;
    public $secondLetter2;
    public $thirdLetter3;
    public $firstDigit4;
    public $secondDigit5;
    public $thirdDigit6;
    public $lastLetter7;
    //
    public $makeYear;
    public $bodyType;
    public $brand;
    public $carModel;
    public $fuelType;
    public $transmission;
    public $numberOfseats;
    public $numberOfdoors;
    public $exteriorFrontImage;
    public $exteriorSideImage;
    public $exteriorRearImage;
    public $interiorFrontImage;
    public $interiorBackImage;


    public $carRegistrationNumber;
    public $car_owner_id;

    public function mount()
    {
        $this->firstLetter1 = 'K';
        $this->secondLetter2 = 'A';
        $this->thirdLetter3 = 'A';
        $this->firstDigit4 = 0;
        $this->secondDigit5 = 0;
        $this->thirdDigit6 = 0;
        $this->lastLetter7 = 'A';

        /**car owner */
        $this->car_owner_id = CarOwners::where('user_id', Auth::user()->id)->value('id');
        // $this->car_owner_id = DB::table('car_owners')->where('user_id', '=', Auth::user()->id)->get('id');
    }
    protected $rules = [
        'insuranceProvider' => 'required|min:3',
        'policyNumber' => 'required|numeric|digits_between:8,10',
        'bodyType' => 'required',
        'brand' => 'required',
        'carModel' => 'required',
        'fuelType' => 'required',
        'transmission' => 'required',
        'makeYear' => 'required',
        'numberOfdoors' => 'required',
        'numberOfseats' => 'required',
        'exteriorFrontImage' => 'required|image|max:2048', // 1MB Max
        'exteriorSideImage' => 'required|image|max:2048', // 1MB Max
        'exteriorRearImage' => 'required|image|max:2048', // 1MB Max
        'interiorFrontImage' => 'required|image|max:2048', // 1MB Max
        'interiorBackImage' => 'required|image|max:2048', // 1MB Max

    ];
    protected $messages = [
        'insuranceProvider.min' => 'Enter a valid insurace providers name',
        'policyNumber.min' => 'policy number should not be less than 8 numbers ',
        'policyNumber.max' => 'policy number should not be exceed than 10 numbers ',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function carRegister()
    {
        $this->validate();
        $this->carRegistrationNumber = $this->firstLetter1 . $this->secondLetter2 . $this->thirdLetter3 . " " . $this->firstDigit4 . $this->secondDigit5 . $this->thirdDigit6 . " " . $this->lastLetter7;
        $exteriorFrontImage = $this->exteriorFrontImage->store('car_photos', 'public');
        $exteriorSideImage = $this->exteriorSideImage->store('car_photos', 'public');
        $exteriorRearImage = $this->exteriorRearImage->store('car_photos', 'public');
        $interiorFrontImage = $this->interiorFrontImage->store('car_photos', 'public');
        $interiorBackImage = $this->interiorBackImage->store('car_photos', 'public');

        $fleet = new Fleet();
        $fleet->car_owners_id = $this->car_owner_id;
        $fleet->car_registration_number = $this->carRegistrationNumber;
        $fleet->insurance_provider = $this->insuranceProvider;
        $fleet->insurace_policy_number = $this->policyNumber;
        $fleet->category = $this->bodyType;
        $fleet->make = $this->brand;
        $fleet->model = $this->carModel;
        $fleet->fuel_type = $this->fuelType;
        $fleet->year = $this->car_owner_id;
        $fleet->transmission_type = $this->transmission;
        $fleet->exterior_front_image = $exteriorFrontImage;
        $fleet->exterior_side_image = $exteriorSideImage;
        $fleet->exterior_rear_image = $exteriorRearImage;
        $fleet->interior_front_image = $interiorFrontImage;
        $fleet->interior_back_image = $interiorBackImage;
        $fleet->number_of_doors = $this->numberOfdoors;
        $fleet->number_of_seats = $this->numberOfseats;
        $fleet->save();

        return redirect('/lessor/profile');
    }

    // public $toyota = $car[0]['brand'];
    public function render()
    {
        $this->cars = Cars::$cars;
        $this->categories = Cars::$categories;
        return view('livewire.lessor.car-register')->extends('layouts.app');
    }
}

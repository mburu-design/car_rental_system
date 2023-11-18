<?php

namespace App\Livewire\Lessor\LessorProfile;

use App\Models\CarOwners;
use App\Models\Fleet;
use App\Models\Listings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyCars extends Component
{

    public $myCar;
    public $pickupAddress;
    public $pickupDate;
    public $pickupTime;
    public  $returnDate;
    public $returnTime;
    public $costPerDay;
    public  $totalCost;
    //
    private $carOwner;
    //
    protected $rules = [
        'pickupAddress' => 'required',
        'pickupDate' => 'required|date|after_or_equal:today',
        'pickupTime' => 'required',
        'returnTime' => 'required',
        'costPerDay' => 'required|numeric',
        'returnDate' => 'required|date|after_or_equal:pickupDate'
    ];
    //
    public function mount()
    {
        $this->carOwner = CarOwners::where('user_id', Auth::user()->id)->value('id');
        $this->myCar = Fleet::where('car_owners_id', $this->carOwner)->get();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function deleteCar($carId)
    {
        Fleet::find($carId)->delete();
        session()->flash('message', "car removed from the platform successfully deleted successfully.");
        $this->redirect('/lessor/profile');
    }

    public function addToListing($carId)
    {


        $this->validate();
        $newListing = new Listings();
        $newListing->fleet_id = Fleet::where('id', $carId)->value('id');
        $newListing->car_owners_id = Fleet::where('id', $carId)->value('car_owners_id');
        $newListing->pickup_date = $this->pickupDate;
        $newListing->pickup_time = $this->pickupTime;
        $newListing->dropoff_date = $this->returnDate;
        $newListing->dropoff_time = $this->returnTime;
        $newListing->pickup_location = $this->pickupAddress;
        $newListing->total_cost = $this->costPerDay;
        $newListing->save();
        session()->flash('message', 'Car successfully added to listing.');
        $this->redirect('/lessor/profile');
    }
    public function removeListing($carId)
    {
        Listings::where('fleet_id', $carId)->first()->delete();
        session()->flash("listing deleted successfully deleted successfully.");
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.lessor.lessor-profile.my-cars');
    }
}

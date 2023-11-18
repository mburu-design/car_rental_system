<?php

namespace App\Livewire;

use App\Models\Listings;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowFeacturedCars extends Component
{
    public $listedCars;
    public function mount()
    {
        $this->listedCars = Listings::all();
    }
    public $pickup_place;
    public $pickup_date;
    public $pickup_time;
    public $return_date;
    public $return_time;
    public $searchResults = [];
    public function updatePickupDate($pickupDate)
    {
        $this->pickup_date = $pickupDate;
    }

    public function updateReturnDate($returndate)
    {
        $this->return_time = $returndate;
    }
    #[On('searchQuery')]
    public function setQuery($location, $pickupDate, $pickupTime, $returnDate, $returnTime)
    {
        $this->pickup_place = $location;
        $this->pickup_date = $pickupDate;
        $this->pickup_time = $pickupTime;
        $this->return_date = $returnDate;
        $this->return_time = $returnTime;
        $this->searchResults = Listings::query()
            ->when($this->pickup_place, function ($query) {
                $query->where('pickup_location', 'like', '%' . $this->pickup_place . '%');
            })
            ->when($this->pickup_date, function ($query) {
                $query->where('pickup_date', '>=', $this->pickup_date);
            })
            ->when($this->return_date, function ($query) {
                $query->where('dropoff_date', '<=', $this->return_date);
            })->get();
    }
    public function render()
    {

        return view('livewire.show-feactured-cars');
    }
}

<?php

namespace App\Livewire;

use App\Models\Listings;
use Livewire\Component;
use Livewire\Livewire;

class CarSearchBar extends Component
{
    public $pickup_place;
    public $pickup_date;
    public $pickup_time;
    public $return_date;
    public $return_time;

    public $query = '';
    public $suggestions = [];

    protected $rules = [
        'pickup_date' => 'required|date|after_or_equal:today',
        'return_date' => 'required|date|after_or_equal:pickup_date',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function search()
    {
        $this->validate();
        $this->dispatch('searchQuery', $this->pickup_place, $this->pickup_date, $this->pickup_time, $this->return_date, $this->return_time);
    }
    public function render()
    {
        return view('livewire.car-search-bar');
    }
}

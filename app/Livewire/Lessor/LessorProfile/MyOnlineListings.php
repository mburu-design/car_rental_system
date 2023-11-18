<?php

namespace App\Livewire\Lessor\LessorProfile;

use App\Models\CarOwners;
use App\Models\Listings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyOnlineListings extends Component
{
    public $myListing;
    public function mount()
    {
        $LessorId = CarOwners::where('user_id', Auth::user()->id)->value('id');
        $this->myListing = Listings::where('car_owners_id', $LessorId)->get();
    }
    public function render()
    {
        return view('livewire.lessor.lessor-profile.my-online-listings');
    }
}

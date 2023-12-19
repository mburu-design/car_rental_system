<?php

namespace App\Livewire\Admin;

use App\Models\Listings;
use Livewire\Component;

class ManageListings extends Component
{
    public function deleteListing($listingId)
    {
        Listings::find($listingId)->delete();
        session()->flash('message', 'listing deleted sucessfully!');
        return redirect('/admin/dashboard');
    }

    public function render()
    {
        $listings = Listings::all();
        return view('livewire.admin.manage-listings', ['listings' => $listings]);
    }
}

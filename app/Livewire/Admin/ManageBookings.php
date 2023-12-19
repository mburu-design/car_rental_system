<?php

namespace App\Livewire\Admin;

use App\Models\Bookings;
use Livewire\Component;

class ManageBookings extends Component
{
    public function render()
    {
        $booking = Bookings::paginate(10);
        return view('livewire.admin.manage-bookings', ['bookings' => $booking]);
    }
}

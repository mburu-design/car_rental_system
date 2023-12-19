<?php

namespace App\Livewire\Admin;

use App\Models\RideRequests;
use Livewire\Component;

class ManageRideRequests extends Component
{

    public function deleteRequest($requestId)
    {
        RideRequests::find($requestId)->delete();
        session()->flash('message', 'request deleted sucessfully!');
        return redirect('/admin/dashboard');
    }
    public function render()
    {
        $rideRequests = RideRequests::Paginate(10);
        return view('livewire.admin.manage-ride-requests', ['rideRequests' => $rideRequests]);
    }
}

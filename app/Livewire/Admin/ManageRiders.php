<?php

namespace App\Livewire\Admin;

use App\Models\BlackList;
use App\Models\Riders;
use Livewire\Component;

class ManageRiders extends Component
{


    public function   banRider($riderId)
    {
        $blackList = new BlackList();
        $blackList->riders_id = $riderId;
        $blackList->complaint_category = "misconduct";
        $blackList->comments = "blacklisted";
        $blackList->save();
        session()->flash('message', 'Rider black listed sucessfully!');
        return redirect('/admin/dashboard');
    }
    public function deleteRider($riderId)
    {
        Riders::find($riderId)->delete();
        session()->flash('message', 'Rider deleted sucessfully!');
        return redirect('/admin/dashboard');
    }
    public function render()
    {
        $riders = Riders::all();
        return view('livewire.admin.manage-riders', ['riders' => $riders]);
    }
}

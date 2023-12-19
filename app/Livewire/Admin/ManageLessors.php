<?php

namespace App\Livewire\Admin;

use App\Models\CarOwners;
use Livewire\Component;

class ManageLessors extends Component
{

    public function deleteLessor($lessorId)
    {
        CarOwners::find($lessorId)->delete();
        session()->flash('message', 'lessor deleted sucessfully!');
        return redirect('/admin/dashboard');
    }
    public function render()
    {
        $lessors = CarOwners::all();
        return view('livewire.admin.manage-lessors', ['lessors' => $lessors]);
    }
}

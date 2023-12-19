<?php

namespace App\Livewire\Admin;

use App\Models\Fleet;
use Livewire\Component;
use Livewire\WithPagination;

class ManageFleets extends Component
{
    use WithPagination;


    public function deleteCar($carId)
    {
        Fleet::find($carId)->delete();
        session()->flash('message', 'car deleted sucessfully!');
        return redirect('/admin/dashboard');
    }
    public function render()
    {
        $fleets = Fleet::paginate(1);
        return view('livewire.admin.manage-fleets', ['fleets' => $fleets]);
    }
    //  {{ $posts->links() }}
}

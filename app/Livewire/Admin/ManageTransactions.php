<?php

namespace App\Livewire\Admin;

use App\Models\Payments;
use Livewire\Component;

class ManageTransactions extends Component
{
    public function render()
    {
        $Payments = Payments::paginate(10);
        return view('livewire.admin.manage-transactions', ['transactions' => $Payments]);
    }
}

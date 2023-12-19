<?php

namespace App\Livewire\Admin;

use App\Models\BlackList;
use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $userQuery;
    public $queryResults;

    public $firstName;
    public $lastName;
    public $telephone;
    public $email;
    public $DOB;
    public $profile_image;
    public $password;
    public $confirm_password;
    public $tosCheckbox;

    public function searchUser()
    {
        if ($this->userQuery) {
            $this->queryResults = User::where('email', $this->userQuery)->get();
        }
    }
    public function editUser($userId)
    {
        dd($userId);
        session()->flash('message', 'User created successfully!');
        return redirect('/admin/dashboard');
    }
    public function deleteUser($userId)
    {
        User::find($userId)->delete();
        session()->flash('message', 'User created successfully!');
        return redirect('/admin/dashboard');
    }


    public function banUser($userId)
    {

        session()->flash('message', 'User created successfully!');
    }

    public function render()
    {
        $user = User::all();
        return view('livewire.admin.manage-users', ['user' => $user]);
    }
}

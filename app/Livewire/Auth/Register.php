<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Rules\AgeRule;
use App\Rules\PhoneNumber;
use App\Rules\yourAge;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    public $firstName;
    public $lastName;
    public $telephone;
    public $email;
    public $DOB;
    public $profile_image;
    public $password;
    public $confirm_password;
    public $tosCheckbox;


    public function mount()
    {
    }
    protected function rules()
    {

        return [
            'firstName' => 'required|string|alpha',
            'lastName' => 'required|string|alpha',
            'telephone' => ['required', 'digits:9', 'numeric', new PhoneNumber()],
            'email' => 'required|email|unique:users',
            'DOB'   => ['required', new AgeRule()],
            'profile_image' => 'required|image|max:2048|mimes:jpeg,png,jpg',
            'password' => [
                'required',
                RulesPassword::min(6)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'tosCheckbox' => 'required|accepted',
            'confirm_password' => 'required|same:password'
        ];
    }


    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'email.unique' => 'provided email address is already registered by onother user',

        'telephone.digits' => 'please enter a valid phone number',

    ];

    protected $validationAttributes = [
        'email' => 'email address'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    public function registerUser(Request $request)
    {
        //$validatedData = $this->validate();
        $this->validate();
        $image_path = $this->profile_image->store('profile_photos', 'public');
        $phone = '+254' . $this->telephone;
        $user = new User();
        $user->firstName = $this->firstName;
        $user->lastName = $this->lastName;
        $user->telephone = $phone;
        $user->email = $this->email;
        $user->DOB = $this->DOB;
        $user->profile_image = $image_path;
        $user->password = Hash::make($this->password);
        $user->save();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $request->session()->regenerate();
            if (session()->has('intended_action')) {

                // Get the intended action from the session
                $intendedAction = session('intended_action');

                // Clear the intended action from the session
                session()->forget('intended_action');

                // Redirect the user to the intended action
                return redirect()->route($intendedAction);
            }
            return $this->redirect('/home', navigate: true);
        }



        //Contact::create($validatedData);
    }

    protected function guard()
    {
        return Auth::guard();
    }


    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app');
    }
}

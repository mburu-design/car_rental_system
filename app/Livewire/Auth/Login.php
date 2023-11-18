<?php

namespace App\Livewire\Auth;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;


    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        try {
            if (Auth::attempt($credentials)) {
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
            return back()->with('error', 'Incorrect email or password');
        } catch (Exception $e) {
            return back()->with('error', 'server error');
        }
    }


    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app');
    }
}

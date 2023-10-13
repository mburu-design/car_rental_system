<?php

use App\Http\Controllers\auth\Logout;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Lessor\CarRegister;
use App\Livewire\Lessor\LessorProfile;
use App\Livewire\Lessor\Register as LessorRegister;
use App\Livewire\Profile\AccountOverview;
use App\Livewire\RiderProfile;
use App\Livewire\SignIn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Auth routes

*/

Route::get('register', Register::class)->name('register');
Route::get('login', Login::class)->name('login');
Route::get('/logout', [Logout::class, 'logout'])->name('logout')->middleware('auth');



Route::get('/', function () {
    return view('welcome');
});
/*
*user routes
*/


Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->middleware('auth.basic');

    Route::get('/dashboard', RiderProfile::class)->name('dashboard');
    Route::get('/lessor/register', LessorRegister::class)->name('lessorRegister');
    Route::get('/car/register', CarRegister::class)->name('car_register')->middleware('lessorAuth');
    Route::get('/lessor/profile', LessorProfile::class)->name('lessor_profile')->middleware('lessorAuth');
});

/*
*car owners
*/

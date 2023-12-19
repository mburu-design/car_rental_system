<?php

use App\Http\Controllers\auth\Logout;
use App\Http\Controllers\MpesaController;
use App\Livewire\Admin\DashBoard as AdminDashboard;
use App\Livewire\Admin\Register as AdminRegister;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\CarDetails;
use App\Livewire\DriverProfile;
use App\Livewire\Lessor\CarRegister;
use App\Livewire\Lessor\LessorProfile;
use App\Livewire\Lessor\Register as LessorRegister;
use App\Livewire\Profile\AccountOverview;
use App\Livewire\Profile\CheckoutPage;
use App\Livewire\Profile\Payments;
use App\Livewire\RegisterDriverDetails;
use App\Livewire\RideRequest;
use App\Livewire\RiderProfile;
use App\Livewire\SearchResults;
use App\Livewire\SignIn;
use App\Livewire\ThankYouPage;
use App\Livewire\UserPage;
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
Route::get('/driverprofile', DriverProfile::class);
Route::get('/car/details/{id}', CarDetails::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/searchresults', SearchResults::class)->name('searchresults');

/*
*user routes
*/


Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->middleware('auth.basic');

    Route::get('/dashboard', RiderProfile::class)->name('dashboard');
    Route::get('/lessor/register', LessorRegister::class)->name('lessorRegister');
    /**admin register */
    Route::get('/car/register', CarRegister::class)->name('car_register')->middleware('lessorAuth');
    Route::get('/lessor/profile', LessorProfile::class)->name('lessor_profile')->middleware('lessorAuth');
    Route::get('request%sucesss', ThankYouPage::class)->name('requestsuccess');
    Route::get('/ride/request/{listing_id}', RideRequest::class)->middleware('driverAuth');
    Route::get('/rider/register', RegisterDriverDetails::class);
    // Route::get('/rider-profile/home', 'RiderProfileController@home')->name('rider-profile.home');
    Route::get('/rider-profile/payments', RiderProfile::class)->name('rider-profile.payments');
    Route::get('/ride/request/checkout/{request_id}', CheckoutPage::class)->name('request.checkout');
    Route::get('/mpesa/payment/{riderId}/{requestedCarId}', [MpesaController::class, 'initiateStkPush'])->name('initiateStkPush');
    Route::get('thankyou/{requestId}', ThankYouPage::class)->name('thankyoupage');
});
Route::get('thankyou/{requestId}', ThankYouPage::class)->name('thankyoupage');

Route::get('/error', function () {
    dd(session('error'));
});
// Example of a route that requires admin access
Route::middleware(['admin'])->group(function () {
    // Admin routes go here
    Route::get('/admin/dashboard', AdminDashboard::class);
});
Route::get('/user/profile/{userId}', UserPage::class);

/*
*car owners
*/

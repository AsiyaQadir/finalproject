<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('admin/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

// user dashboard
// Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
//     return view('user/dashboard');
// })->name('dashboard');

Route::view("user/addvehicle","user/addVehicle");
Route::view("user/bookings","user/bookings");
Route::view("user/help","user/help");
Route::view("user/viewservices","user/services");
Route::view("user/viewvehicles","user/vehicles");
Route::view("user/completedbookings","user/viewCompleteBooking");
Route::view("user/pendingbookings","user/viewPendingBooking");


// admin dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/stations', function () {
    return view('admin/station_details');
})->name('stations');


// Route::view("admin/dashboard","admin/dashboard");


// Route::view("admin/addservices","admin/add_services");
// Route::view("admin/addstaff","admin/add_staff");
// Route::view("admin/bookings","admin/bookings");
// Route::view("admin/services","admin/services");
// Route::view("admin/staffmanagement","admin/staff_management");
// Route::view("admin/stationsdetail","admin/station_details");
// Route::view("admin/completedbookings","admin/view_complete_booking");
// Route::view("admin/pendingbookings","view_pending_booking");





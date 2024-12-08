<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('auth/login', [AuthController::class,'login']);
Route::post('auth/logout', [AuthController::class, 'logout'])->middleware('auth:api');

Route::group(['middleware' => 'auth:api'], function () {
    // Flight Management Routes
    Route::post('/flights/upload', [FlightController::class, 'uploadFlight']);
    Route::get('/flights', [FlightController::class, 'getFlights']);
    Route::get('/flights/{id}', [FlightController::class, 'getFlight']);
    Route::put('/flights/{id}', [FlightController::class, 'updateFlight']);
    Route::delete('/flights/{id}', [FlightController::class, 'deleteFlight']);

    // Booking Routes
    Route::post('/bookings', [BookingController::class, 'createBooking']);
    Route::get('/bookings', [BookingController::class, 'getBookings']);
    Route::delete('/bookings/{id}', [BookingController::class, 'cancelBooking']);
});

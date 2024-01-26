<?php

use App\Http\Controllers\HotelController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix("/hotel")->group(function () {
    Route::get("/", [HotelController::class, "index"])->name('hotel.index');
    Route::get("/create", [HotelController::class, "create"])->name('hotel.create');
    Route::post("/create", [HotelController::class, "store"])->name("hotel.store");
    Route::get("/update/{hotel}", [HotelController::class, "edit"])->name('hotel.edit');
    Route::put("/update/{hotel}", [HotelController::class, "update"])->name('hotel.update');
});

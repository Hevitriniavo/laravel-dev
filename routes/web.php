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


Route::prefix("/hotel")->name("hotel.")->controller(HotelController::class)->group(function (){
    Route::get("/" ,"index")->name('index');

    Route::get("/create" ,"create")->name('create');
    Route::post("/create" ,"store")->name("store");

    Route::get("/update/{hotel}" ,"edit")->name('edit');
    Route::put("/update/{hotel}" ,"update")->name('update');
});

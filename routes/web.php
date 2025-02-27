<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController; // impor ItemController

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
// /world untuk nama page url
Route::get('/about', function () {
    return 'Faiza / 2341760105';
});

Route::resource('items', ItemController::class); // membuat crud untuk items

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
// method get dapat menambahkan comentar pada url.
// sedangkan method post dapat menampilkan coment pada tampilannya.
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;});
    
Route::resource('items', ItemController::class); // membuat crud untuk items

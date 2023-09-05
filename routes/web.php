<?php

use App\Http\Controllers\PolicemanController;
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

Route::get('/test', function (){
    return view('Test9');
})->name('test');

// Route::post('/policemen', 'PolicemanController@store')->name('policemen.store');
Route::resource('policemen', PolicemanController::class);



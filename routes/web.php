<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fitrahController;

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

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/baru', [fitrahController::class, 'fitrahview']);

Route::get('/fitrah', function () {
    return view('fitrah');
});

Route::post('/fitrah/tambah-fitrah', [fitrahController::class, 'tambahfitrah']);

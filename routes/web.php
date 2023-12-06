<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultationController;

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
    return view('/homepage/about');
});

Route::get('/about.php', function () {
    return view('/homepage/about');
});

Route::get('/home.php', function () {
    return view('/homepage/home');
});

Route::get('/bookingconsult.php', function () {
    return view('/consultation/bookingconsult');
});

Route::get('/pembayaran.php', function () {
    return view('/consultation/pembayaran');
});

Route::get('/artikel.php', function () {
    return view('/header/artikel');
});


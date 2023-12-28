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
    return view('/index');
});

Route::get('/about.php', function () {
    return view('/homepage/about');
});

Route::get('/konselor.php', function () {
    return view('/header/konselor');
});

Route::get('/artikel.php', function () {
    return view('/header/artikel');
});

Route::get('/riwayat.php', function () {
    return view('/header/riwayat');
});

Route::get('/login.php', function () {
    return view('/login/login');
});

Route::get('/register.php', function () {
    return view('/login/register');
});

Route::get('/bookingconsult.php', function () {
    return view('/booking/bookingconsult');
});

Route::get('/pembayaran.php', function () {
    return view('/booking/pembayaran');
});

Route::get('/confirmation.php', function () {
    return view('/booking/confirmation');
});


Route::get('/artikel.php', function () {
    return view('/header/artikel');
});

Route::get('/artikel-1.php', function () {
    return view('/header/artikel-1');
});






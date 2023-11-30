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
    return view('/homepage/dashboard');
});

Route::get('/about.php', function () {
    return view('/homepage/about');
});

Route::get('/index.html', function () {
    return view('/homepage/index');
});

Route::get('/appointment', function () {
    return view('bookingconsult');
});
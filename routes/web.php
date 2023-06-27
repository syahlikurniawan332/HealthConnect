<?php

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/topik', function () {
    return view('topik');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/tanyadokter', function () {
    return view('tanyadokter');
});

Route::get('/profiledokter', function () {
    return view('profiledokter');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/janjitemu', function () {
    return view('janjitemu');
});

Route::get('/janjitemu1', function () {
    return view('janjitemu1');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
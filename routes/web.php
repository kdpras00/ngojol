<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DriverController;


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
Auth::routes();


Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/fitur', function () {
    return view('fitur', [
        'title' => 'Fitur',
        'active' => 'fitur'
    ]);
});

Route::get('/layanan', function () {
    return view('layanan', [
        'title' => 'Layanan',
        'active' => 'layanan'
    ]);
});

Route::get('/review', function () {
    return view('review', [
        'title' => 'Review',
        'active' => 'review'
    ]);
});

Route::get('/download', function () {
    return view('download', [
        'title' => 'Download',
        'active' => 'download'
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        'title' => 'Berita',
        'active' => 'berita'
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        'title' => 'FAQ',
        'active' => 'faq'
    ]);
});

Route::get('/aman-dan-nyaman-di-era-new-normal', function () {
    return view('aman-dan-nyaman-di-era-new-normal', [
        'title' => 'Aman dan Nyaman Di Era New Normal',
        'active' => 'aman-dan-nyaman-di-era-new-normal'
    ]);
});

Route::get('/pendaftaran-driver-baru', function () {
    return view('pendaftaran-driver-baru', [
        'title' => 'Pendaftaran Driver',
        'active' => 'pendaftaran-driver-baru'
    ]);
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');

Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/api/registers', [RegisterController::class, 'getAllRegisters'])->name('api.registers');

Route::get('/pendaftaran-driver-baru', [DriverController::class, 'create']);
Route::post('/submit-pendaftaran-driver', [DriverController::class, 'store']);

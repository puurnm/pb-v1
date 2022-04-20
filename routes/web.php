<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
});

// Route Homepage
Route::redirect('/', '/home');
Route::get('/home', function () {
    return view('homepage.home');
})->name('home');
Route::get('/berita', function () {
    return view('homepage.berita');
})->name('berita');
Route::get('/contact-us', function () {
    return view('homepage.contactus');
})->name('contact');

// Route Administrator
Route::prefix('admin')->group(function () {
    Auth::routes();
});
Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

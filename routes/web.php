<?php

use App\Http\Controllers\KategoriBeritaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
<<<<<<< HEAD
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
=======
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
>>>>>>> d2b3257150e6ec3ddca30c38562a9d061576435b
    Route::resource('kategori', KategoriBeritaController::class);
    Route::resource('berita', BeritaController::class);
});
Route::redirect('/admin', '/admin/login');

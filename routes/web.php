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
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
<<<<<<< HEAD
<<<<<<< HEAD


    Route::get('berita', BeritaController::class);
    Route::get('berita/add',BeritaController::class);

=======
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
>>>>>>> 513fe2bcbf2bfd85075b5949eddd32883a97a1ab
=======
    Route::resource('kategori', KategoriBeritaController::class);
    Route::resource('berita', BeritaController::class);
>>>>>>> 8833853 (create kategori)
});
Route::redirect('/admin', '/admin/login');

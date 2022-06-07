<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Homepage\BeritaController as HomepageBeritaController;
use App\Http\Controllers\KategoriBeritaController;
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
Route::get('/home', [App\Http\Controllers\Homepage\HomeController::class, 'index'])->name('home');
Route::resource('berita', HomepageBeritaController::class);
Route::get('/kategori', [App\Http\Controllers\HomepageController::class, 'kategoriShow'])->name('kategoriShow');
Route::get('/contact-us', function () {
    return view('homepage.contactus');
})->name('contact');

// Route Administrator
Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    Route::resource('kategori', KategoriBeritaController::class);
    Route::resource('news', BeritaController::class);
    Route::post('change-news', [App\Http\Controllers\BeritaController::class, 'updateNews'])->name('news.change');;
    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
    Route::get('profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('change-password', [App\Http\Controllers\ProfileController::class, 'password'])->name('password');
    Route::post('change-password', [App\Http\Controllers\ProfileController::class, 'store'])->name('password.store');
});

Route::redirect('/admin', '/admin/login');

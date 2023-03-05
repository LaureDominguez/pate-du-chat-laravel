<?php

use App\Http\Controllers\ActuController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {return view('home');})->name('home');
// Route::get('news-carousel', [\App\Http\Controllers\Controller::class, 'newsCarousel']);

//News
Route::get('news', [\App\Http\Controllers\ActuController::class, 'index'])->name('news');
Route::post('news', [\App\Http\Controllers\ActuController::class, 'store'])->name('news.store');

// Shop
Route::get('shop', [\App\Http\Controllers\ProductController::class, 'index'])->name('shop');
Route::get('new-product', [\App\Http\Controllers\ProductController::class, 'create'])->name('shopping.form');
Route::post('store-form', [\App\Http\Controllers\ProductController::class, 'store'])->name('shopping.new');
Route::get('detail-{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('shopping.show');

// Gallery
Route::get('image-gallery', [\App\Http\Controllers\ImageGalleryController::class, 'index'])->name('gallery');
Route::post('image-gallery', [\App\Http\Controllers\ImageGalleryController:: class, 'upload']);
Route::delete('image-gallery/{id}', [\App\Http\Controllers\ImageGalleryController:: class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

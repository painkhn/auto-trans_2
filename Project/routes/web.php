<?php

use App\Http\Controllers\{ProfileController, AdminController, CarController, FavouriteController};
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile.index');


Route::get('/cars/{model?}', [CarController::class, 'index'])->name('cars.index');
Route::get('/car/{id}', [CarController::class, 'show'])->name('cars.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/favourite', [FavouriteController::class, 'index'])->name('favourite.index');
    Route::post('/cars/{car}/add-to-favourites', [FavouriteController::class, 'addToFavourites'])->name('favourites.add');
    Route::delete('/cars/{car}/remove-from-favourites', [FavouriteController::class, 'removeFromFavourites'])->name('favourites.remove');
});

Route::middleware(IsAdmin::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/model/upload', [CarController::class, 'upload'])->name('model.upload');
});

require __DIR__.'/auth.php';

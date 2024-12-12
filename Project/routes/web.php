<?php

use App\Http\Controllers\{ProfileController, AdminController, CarController, FavouriteController, OrderController, ReviewController};
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/rewievs', [ReviewController::class, 'index'])->name('comment.index');

Route::get('/profile',  [ProfileController::class, 'index'])->middleware(['auth'])->name('profile.index');


Route::get('/cars/{model?}', [CarController::class, 'index'])->name('cars.index');
Route::get('/car/{id}', [CarController::class, 'show'])->name('cars.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/favourite', [FavouriteController::class, 'index'])->name('favourite.index');
    Route::post('/cars/{car}/add-to-favourites', [FavouriteController::class, 'addToFavourites'])->name('favourites.add');
    Route::delete('/cars/{car}/remove-from-favourites', [FavouriteController::class, 'removeFromFavourites'])->name('favourites.remove');
    Route::post('/order/upload', [OrderController::class, 'upload'])->name('order.upload');
    Route::post('/rewiev/upload', [ReviewController::class, 'upload'])->name('comment.upload');
});

Route::middleware(IsAdmin::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/model/upload', [CarController::class, 'upload'])->name('model.upload');
    Route::delete('/model/delete/{car_id}', [CarController::class, 'delete'])->name('car.delete');
    Route::get('/model/edit/{car_id}', [CarController::class, 'openEdit'])->name('model.edit');
    Route::patch('/model/edit/{car_id}', [CarController::class, 'update'])->name('model.edit.save');
    Route::patch('/orders/{orderId}', [OrderController::class, 'update'])->name('order.update');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/residents', [ResidentController::class, 'index'])->name('residents.index');
Route::get('/residents/create', [ResidentController::class, 'create'])->name('residents.create');
Route::post('/residents', [ResidentController::class, 'store'])->name('residents.store');
Route::get('/residents/{resident}', [ResidentController::class, 'show'])->name('residents.show');
Route::get('/residents/{resident}/edit', [ResidentController::class, 'edit'])->name('residents.edit');
Route::put('/residents/{resident}', [ResidentController::class, 'update'])->name('residents.update');
Route::delete('/residents/{resident}', [ResidentController::class, 'destroy'])->name('residents.destroy');


Route::get('/blocks', [BlockController::class, 'index'])->name('blocks.index');
Route::get('/blocks/create', [BlockController::class, 'create'])->name('blocks.create');
Route::post('/blocks', [BlockController::class, 'store'])->name('blocks.store');
Route::get('/blocks/{block}', [BlockController::class, 'show'])->name('blocks.show');
Route::get('/blocks/{block}/edit', [BlockController::class, 'edit'])->name('blocks.edit');
Route::put('/blocks/{block}', [BlockController::class, 'update'])->name('blocks.update');
Route::delete('/blocks/{block}', [BlockController::class, 'destroy'])->name('blocks.destroy');

Route::get('/buildings', [BuildingController::class, 'index'])->name('buildings.index');
Route::get('/buildings/create', [BuildingController::class, 'create'])->name('buildings.create');
Route::post('/buildings', [BuildingController::class, 'store'])->name('buildings.store');
Route::get('/buildings/{building}', [BuildingController::class, 'show'])->name('buildings.show');
Route::get('/buildings/{building}/edit', [BuildingController::class, 'edit'])->name('buildings.edit');
Route::put('/buildings/{building}', [BuildingController::class, 'update'])->name('buildings.update');
Route::delete('/buildings/{building}', [BuildingController::class, 'destroy'])->name('buildings.destroy');



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/auth.login', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

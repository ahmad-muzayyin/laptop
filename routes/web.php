<?php

use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.frontend');
});

// Data Laptop
Route::get('/laptops', [LaptopController::class, 'index'])->name('laptops');
Route::get('/laptops/kriteria', [LaptopController::class, 'kriteriaSetting'])->name('laptopsKriteria');
Route::get('/laptops/show/{id}', [LaptopController::class, 'show'])->name('laptops.show');
Route::post('/laptops', [LaptopController::class, 'store'])->name('laptops.store');
Route::post('/laptops/cpu', [LaptopController::class, 'updateCpu'])->name('laptopsCpuUpdate');
Route::post('/laptops/ram', [LaptopController::class, 'updateRam'])->name('laptopsRamUpdate');
Route::post('/laptops/storage', [LaptopController::class, 'updateStorage'])->name('laptopsStorageUpdate');
Route::post('/laptops/resolusi_layar', [LaptopController::class, 'updateResolution'])->name('laptopsResolutionUpdate');
Route::post('/laptops/vga', [LaptopController::class, 'updateVga'])->name('laptopsVgaUpdate');
Route::put('/laptops/{id}', [LaptopController::class, 'update']);
Route::delete('/laptops/{id}', [LaptopController::class, 'destroy']);

Route::post('caculateSAW', [LaptopController::class, 'calculateSAW'])->name('caculateSAW');
Route::get('normalizedMatrix', [LaptopController::class, 'showNormalizedMatrix'])->name('normalizedMatrix');
Route::post('showRanking', [LaptopController::class, 'showRanking'])->name('showRanking');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\CustomersController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::post('/register', [CustomersController::class, 'store'])->name('register');
    Route::post('/login', [CustomersController::class, 'authenticate'])->name('login');
    Route::post('/admin/login', [AdminsController::class, 'authenticate'])->name('admin.login');
});

Route::middleware(['auth:user|admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(['auth:customer'])->group(function () {
    Route::get('/receipt/{order}', [ReceiptController::class, 'generatePdf'])->name('admin.dashboard');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/edit/{car}', [CarsController::class, 'update'])->name('update.car');
});
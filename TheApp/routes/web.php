<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\CustomersController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/admin-login', function () {
    return view('admin-login');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/faq', function () {
    return view('faq');
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
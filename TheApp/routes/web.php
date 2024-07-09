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

Route::get('/feedback', function () {
    return view('feedback');
});


Route::get('/faq', function () {
    return view('faq');
});

Route::middleware(['guest'])->group(function () {
    Route::post('/register', [CustomersController::class, 'store'])->name('register');
    Route::get('/login', function () {
        return view('login');
    });
    Route::post('/login', [CustomersController::class, 'authenticate'])->name('login');
    Route::get('/admin/login', [AdminsController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [AdminsController::class, 'authenticate'])->name('admin.login');
});

Route::middleware(['auth:user|admin'])->group(function () {
    Route::get('/index', function () {
        return view('index');
    });
});


// Route::middleware(['auth:customer'])->group(function () {
//     Route::get('/receipt/{order}', [ReceiptController::class, 'generatePdf'])->name('receipt.page');
// });

Route::get('/receipt/{order}', [ReceiptController::class, 'generatePdf'])->name('receipt.page');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/edit/{car}', [CarsController::class, 'update'])->name('update.car');
});
<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\InquiriesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', [CarsController::class, 'index'])->name('menu');

Route::get('/car/{id}', [CarsController::class, 'show_car'])->name('car');

Route::get('/inquiries', function () {
    return view('inquiries');
});
Route::post('/inquiries', [InquiriesController::class, 'store'])->name('inquiries.store');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/401', function () {
    return view('unauthorised');
})->name('unauthorised');

Route::get('/403', function () {
    return view('forbidden');
})->name('forbidden');

Route::get('/addcar', [CarsController::class, 'create'])->name('add.car');
Route::post('/addcar', [CarsController::class, 'store'])->name('add.car');

Route::post('/order-car', [OrdersController::class, 'store'])->name('book.car');

Route::middleware(['guest'])->group(function () {
    Route::post('/register', [CustomersController::class, 'store'])->name('register');
    Route::get('/login', function () {
        return view('login');
    });
    Route::post('/login', [CustomersController::class, 'authenticate'])->name('login');
    Route::get('/admin/login', [AdminsController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [AdminsController::class, 'authenticate'])->name('admin.login');
});

Route::middleware(['auth:customer,admin'])->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');
});


Route::get('/receipt/{order}', [ReceiptController::class, 'generatePdf'])->name('receipt.page');

Route::middleware(['auth:customer'])->group(function () {
    Route::get('/logout', [CustomersController::class, 'logout'])->name('logout');
    Route::get('/upload-payment-receipt/{order}', [PaymentsController::class, 'show'])->name('payment.receipt');
    Route::post('/upload-payment-receipt/{order}', [PaymentsController::class, 'store'])->name('payment.receipt');
    Route::get('/customer/feedback', [FeedbacksController::class, 'index'])->name('customer.feedback');
    Route::post('/customer/feedback', [FeedbacksController::class, 'store'])->name('customer.feedback');
    Route::get('/customer/orders', [OrdersController::class, 'index'])->name('customer.orders');
    Route::get('/view/order/{order}', [OrdersController::class, 'show'])->name('customer.order.show');
    Route::get('/delete/order/{order}', [OrdersController::class, 'destroy'])->name('customer.order.delete');
});


Route::middleware(['auth:admin'])->group(function () {
    Route::get('/editcar/{car}', [CarsController::class, 'edit'])->name('edit.car');
    Route::put('/editcar/{car}', [CarsController::class, 'update'])->name('update.car');
    Route::get('/view-all-cars', [CarsController::class, 'adminView'])->name('view.all.cars');
    Route::delete('/deletecar/{car}', [CarsController::class, 'destroy'])->name('delete.car');
    Route::get('/admin/logout', [AdminsController::class, 'logout'])->name('admin.logout');
    Route::post('/approve-order/{order}', [OrdersController::class, 'approveOrder'])->name('approve.order');
    Route::get('/pending-orders', [OrdersController::class, 'showPending'])->name('pending.orders');
    Route::get('/view-inquiries', [InquiriesController::class, 'index'])->name('view.inquiries');
});
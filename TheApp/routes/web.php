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
    Route::get('/view/order/{order}', [OrdersController::class, 'show'])->name('customer.order.show');
    // Route::get('/receipt/{order}', [ReceiptController::class, 'generatePdf'])->name('receipt.page');
});



// customer routes
Route::middleware(['auth:customer'])->group(function () {
    Route::get('/logout', [CustomersController::class, 'logout'])->name('logout');
    Route::get('/car/{id}', [CarsController::class, 'show_car'])->name('car');
    Route::get('/upload-payment-receipt/{order}', [PaymentsController::class, 'show'])->name('payment.receipt');
    Route::post('/upload-payment-receipt/{order}', [PaymentsController::class, 'store'])->name('payment.receipt');
    Route::get('/customer/feedback', [FeedbacksController::class, 'index'])->name('customer.feedback');
    Route::post('/customer/feedback', [FeedbacksController::class, 'store'])->name('customer.feedback');
    Route::get('/customer/orders', [OrdersController::class, 'index'])->name('customer.orders');
    Route::get('/delete/order/{order}', [OrdersController::class, 'destroy'])->name('customer.order.delete');
    Route::get('/edit/order/{order}', [OrdersController::class, 'edit'])->name('edit.order');
    Route::put('edit/order/{order}', [OrdersController::class, 'update'])->name('edit.order');
    Route::get('/receipt/{order}', [ReceiptController::class, 'generatePdf'])->name('receipt.page');
    Route::get('/forgot-password',[CustomersController::class, 'forgotPasswordForm'])->name('forgot.password');
    Route::post('/forgot-password',[CustomersController::class, 'forgotPassword'])->name('forgot.password');
});

// admin routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/addcar', [CarsController::class, 'create'])->name('add.car');
    Route::post('/addcar', [CarsController::class, 'store'])->name('add.car');
    Route::get('/editcar/{car}', [CarsController::class, 'edit'])->name('edit.car');
    Route::put('/editcar/{car}', [CarsController::class, 'update'])->name('update.car');
    Route::get('/edit/customer/{customer}', [CustomersController::class, 'edit'])->name('edit.customer');
    Route::put('/edit/customer/{customer}', [CustomersController::class, 'update'])->name('update.customer');
    Route::get('/view-all-cars', [CarsController::class, 'adminView'])->name('view.all.cars');
    Route::delete('/deletecar/{car}', [CarsController::class, 'destroy'])->name('delete.car');
    Route::get('/admin/logout', [AdminsController::class, 'logout'])->name('admin.logout');
    Route::post('/approve-order/{order}', [OrdersController::class, 'approveOrder'])->name('approve.order');
    Route::get('/pending-orders', [OrdersController::class, 'showPending'])->name('pending.orders');
    Route::get('/view-inquiries', [InquiriesController::class, 'index'])->name('view.inquiries');
    Route::post('/reject-order/{order}', [OrdersController::class, 'rejectOrder'])->name('orders.reject');
    Route::get('/view-all-orders', [OrdersController::class, 'showAll'])->name('view.all.orders');
    Route::post('/return/{order}', [OrdersController::class, 'returnedOrder'])->name('returned');
    Route::get('/view-all-feedback', [FeedbacksController::class, 'adminIndex'])->name('view.all.feedbacks');
    Route::get('/delete-feedback/{feedback}', [FeedbacksController::class, 'destroy'])->name('delete.feedback');
    Route::get('/view-all-inquiries', [InquiriesController::class, 'adminIndex'])->name('view.all.inquiries');
    Route::get('/delete-inquiry/{inquiry}', [InquiriesController::class, 'destroy'])->name('delete.inquiry');
    Route::get('/view-all-customers', [CustomersController::class, 'index'])->name('view.all.customers');
    Route::get('/delete-customer/{customer}', [CustomersController::class, 'destroy'])->name('delete.customer');
    Route::get('/admin/receipt/{order}', [ReceiptController::class, 'adminGeneratePdf'])->name('admin.receipt.page');
});
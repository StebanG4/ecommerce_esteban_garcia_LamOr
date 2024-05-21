<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:user'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/admin/dashboard','Index');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/all-category','Index')->name('allcategory');
        Route::get('/admin/add-category','AddCategory')->name('addcategory');
    });

    Route::controller(SubCategoryController::class)->group(function(){
        Route::get('/admin/all-subcategory','Index')->name('allsubcategory');
        Route::get('/admin/add-subcategory','AddsubCategory')->name('addsubcategory');
    });

    Route::controller(ProductController::class)->group(function(){
        Route::get('/admin/all-product','Index')->name('allprocuts');
        Route::get('/admin/add-product','AddProduct')->name('addproduct');
    });

    Route::controller(OrderController::class)->group(function(){
        Route::get('/admin/pending-order','Index')->name('pendingorder');
        
    });

});




require __DIR__.'/auth.php';

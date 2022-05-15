<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('welcome');

Route::get('/all-books',[App\Http\Controllers\Frontend\FrontendController::class, 'all_books'])->name('all_books');

Route::get('/about_us',[App\Http\Controllers\Frontend\FrontendController::class, 'about_us'])->name('about_us');


 Route::get('/category/{slug}',[App\Http\Controllers\Frontend\FrontendController::class, 'viewcategory'])->name('viewcategory');

 Route::get('/category/{cate_slug}/{prod_slug}',[App\Http\Controllers\Frontend\FrontendController::class, 'viewproduct'])->name('viewproduct');


Route::middleware(['auth'])->group(function () {
     Route::post('add-to-cart',[App\Http\Controllers\Frontend\CartController::class,'addProduct'])->name('add-to-cart');
     Route::get('cart',[App\Http\Controllers\Frontend\CartController::class,'viewCart'])->name('cart');
     Route::get('delete-cart-item',[App\Http\Controllers\Frontend\CartController::class,'deleteProduct'])->name('elete-cart-item');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function (){
    Route::get('/dashboard',[App\Http\Controllers\Admin\FrontendController::class, 'index'])->name('dashboard');
    Route::get('/categories',[App\Http\Controllers\Admin\CategorieController::class, 'index'])->name('categories');
    Route::get('/add-categories',[App\Http\Controllers\Admin\CategorieController::class, 'add'])->name('add_categories');
    Route::post('/insert-category',[App\Http\Controllers\Admin\CategorieController::class, 'insert'])->name('insert_categories');
    Route::get('/edit-category/{id}',[App\Http\Controllers\Admin\CategorieController::class, 'edit']);
    Route::put('/update-category/{id}',[App\Http\Controllers\Admin\CategorieController::class, 'update']);
    Route::get('/delete-category/{id}',[App\Http\Controllers\Admin\CategorieController::class, 'destroy']);

    Route::get('/products',[App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products');
    Route::get('/add-products',[App\Http\Controllers\Admin\ProductController::class, 'add'])->name('add-products');
    Route::post('/insert-products',[App\Http\Controllers\Admin\ProductController::class, 'insert'])->name('insert-products');
    Route::get('/edit-products/{id}',[App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::put('/update-products/{id}',[App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::get('/delete-products/{id}',[App\Http\Controllers\Admin\ProductController::class, 'destroy']);

    Route::get('/users',[App\Http\Controllers\Admin\UserController::class, 'index'])->name('users');
    Route::get('/delete-users/{id}',[App\Http\Controllers\Admin\UserController::class, 'destroy']);

    Route::get('/orders',[App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders');
    Route::put('/valider-orders/{id}',[App\Http\Controllers\Admin\ProductController::class, 'valider']);
    Route::get('/delete-orders/{id}',[App\Http\Controllers\Admin\ProductController::class, 'destroy']);
    
});

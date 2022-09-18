<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/users', function(){  return 'Admin users';  }); 
Route::get('admin/posts', function(){ return 'Admin posts';});
Route::get('admin/comments', function(){ return 'Admin comments';});
Route::get('admin/products', function(){ return 'Admin products';});
Route::get('admin/orders', function(){ return 'Admin orders';});
Route::get('admin/payments', function(){ return 'Admin payments';});
// Route group( الروابط تحت مسمى واحد مجموعة من )

    // Route::prefix('admin')->group(function(){
    //     Route::get('users', function(){  return 'Admin users'; })->name('admin.users'); 
    //     Route::get('posts', function(){ return 'Admin posts';})->name('admin.posts');
    //     Route::get('comments', function(){ return 'Admin comments';})->name('admin.comment');
    //     Route::get('products', function(){ return 'Admin products';})->name('admin.products');
    //     Route::get('orders', function(){ return 'Admin orders';})->name('admin.orders');
    //     Route::get('payments', function(){ return 'Admin payments';})->name('admin.payments');
    // });

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('users', function(){  return 'Admin users'; })
        ->name('users'); 
        Route::get('posts', function(){ return 'Admin posts';})->name('posts');
        Route::get('comments', function(){ return 'Admin comments';})->name('comment');
        Route::get('products', function(){ return 'Admin products';})->name('products');
        Route::get('orders', function(){ return 'Admin orders';})->name('orders');
        Route::get('payments', function(){ return 'Admin payments';})->name('payments');
    });

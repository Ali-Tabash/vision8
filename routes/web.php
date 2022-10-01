<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alicontroller;
use App\Http\Controllers\webController;

use App\Http\Controllers\siteController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\site1controller;
use App\Http\Controllers\userscontroller;





//use
//namespace

//Route::get('url','action');
//Route::post('url','action');
//Route::patch('url','action');
//Route::put('url','action');
//Route::delete('url','action');


// Route::get('/', function () {
//     return 'Hello World';
// });


// Route::post('ss',function(){
//     return 'ali aa';
// });

// Route::delete('ss',function(){
//     return 'ali aa';
// });

// Route::put('ss',function(){
//     return 'ali aa';
// });
// Route::get('ss',function(){
//     return 'ali aa';
// });

// Route::get('user/ali',function(){
//        return 'welcome ali';
// });

//  لعمل قيمة متغيرة في الرابط
Route::get('user/{name}',function($name){
    return 'welcome' . $name;
});
Route::get('/ali/{name}/{age}',function($name,$age){
    return ' welcome '. $name . 'is age your' .$age;
})->whereAlpha('name')->whereNumber('age');

Route::get('news/{id}',function($id){
    return 'News' .$id;
});
Route::get('news/',function(){
    return'news';
});
//  (?)لجعل الرابطين يعملوا برابط واحد نستعنى عن الاول ونضع فقط علامة
// Route::get('news/{id?}',function($id=null){
//     return 'News' .$id;
// });
// // هذه تسمى Optional Parameters

// Route::get('/user/{name}/{age}',function($name,$age){
//     return ' welcome '. $name . 'is age your' .$age;
// });

// Route::get('admin/users', function(){  return 'Admin users';  });
// Route::get('admin/posts', function(){ return 'Admin posts';});
// Route::get('admin/comments', function(){ return 'Admin comments';});
// Route::get('admin/products', function(){ return 'Admin products';});
// Route::get('admin/orders', function(){ return 'Admin orders';});
// Route::get('admin/payments', function(){ return 'Admin payments';});
// Route group( الروابط تحت مسمى واحد مجموعة من )

    // Route::prefix('admin')->group(function(){
    //     Route::get('users', function(){  return 'Admin users'; })->name('admin.users');
    //     Route::get('posts', function(){ return 'Admin posts';})->name('admin.posts');
    //     Route::get('comments', function(){ return 'Admin comments';})->name('admin.comment');
    //     Route::get('products', function(){ return 'Admin products';})->name('admin.products');
    //     Route::get('orders', function(){ return 'Admin orders';})->name('admin.orders');
    //     Route::get('payments', function(){ return 'Admin payments';})->name('admin.payments');
    // });

    // Route::prefix('admin')->name('admin.')->group(function(){
    //     Route::get('users', function(){  return 'Admin users'; })
    //     ->name('users');
    //     Route::get('posts', function(){ return 'Admin posts';})->name('posts');
    //     Route::get('comments', function(){ return 'Admin comments';})->name('comment');
    //     Route::get('products', function(){ return 'Admin products';})->name('products');
    //     Route::get('orders', function(){ return 'Admin orders';})->name('orders');
    //     Route::get('payments', function(){ return 'Admin payments';})->name('payments');
    // });


    //  Route::get('/', function () {
    //         return 'Hello World';
    //     });
// الشكل النهائي لرابط
//  Route::get('/',[siteController::class,'index'])->name('index');

// Route::get('/',[webController::class,'home'])->name('home');

//    Route::get('/',[postcontroller::class,'index'])->name('index');



   Route::get('/',[alicontroller::class,'fhkifhj'] )->name('fhkifhj');
   Route::get('/about',[alicontroller::class,'about'] )->name('about');
   Route::get('/contact',[alicontroller::class,'contact'] )->name('contact');
   Route::get('/user',[alicontroller::class,'user'] )->name('user');


   Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('/',[admincontroller::class,'index'])->name('index');
        Route::get('/carts',[admincontroller::class,'carts'])->name('carts');
        Route::get('/product',[admincontroller::class,'product'])->name('product');
        Route::get('/ww',[admincontroller::class,'ww'])->name('ww');
        Route::get('/ww',[admincontroller::class,'ww'])->name('ww');
        Route::get('/ww',[admincontroller::class,'ww'])->name('ww');

   });
   Route::prefix('users')->name('users.')->group(function(){
       Route::get('/'  ,[userscontroller::class,'index'])->name('index');
       Route::get('/me',[userscontroller::class,'me'])->name('me');
       Route::get('/qq',[userscontroller::class,'qq'])->name('qq');
       Route::get('/ee',[userscontroller::class,'ee'])->name('ee');
   });

   Route::get('site1',[site1controller::class,'index'])->name('site1');


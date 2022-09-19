<?php

 
use Illuminate\Support\Facades\Route;
use App\Http\controllers\siteController;
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
// Route::get('user/{name}',function($name){
//     return 'welcome' . $name;
// });
// Route::get('/ali/{name}/{age}',function($name,$age){
//     return ' welcome '. $name . 'is age your' .$age;
// })->whereAlpha('name')->whereNumber('age');

// Route::get('news/{id}',function($id){
//     return 'News' .$id;
// });
// Route::get('news/',function(){
//     return'news';
// });
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
     Route::get('/', [siteController::class,'index'])->name('holle world');  
        


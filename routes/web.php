<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alicontroller;
use App\Http\Controllers\webController;

use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\siteController;

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\Formscontroller;
use App\Http\Controllers\postscontroller;
use App\Http\Controllers\site1controller;
use App\Http\Controllers\site2controller;
use App\Http\Controllers\site3controller;
use App\Http\Controllers\userscontroller;
use App\Models\post;

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

   Route::prefix('site2')->name('site2.')->group(function(){
    Route::get('/',[site2controller::class,('index')])->name('index');
    Route::get('/contact',[site2controller::class,('contact')])->name('contact');
    Route::get('/about',[site2controller::class,('about')])->name('about');
    Route::get('/post',[site2controller::class,('post')])->name('post');
   });

   Route::prefix('site3')->name('site3.')->group(function(){
    Route::get('/',[site3controller::class,('index')])->name('index');
    Route::get('/experience',[site3controller::class,('experience')])->name('experience');
    Route::get('/education',[site3controller::class,('education')])->name('education');
    Route::get('/skills',[site3controller::class,('skills')])->name('skills');
    Route::get('/interests',[site3controller::class,('interests')])->name('interests');
    Route::get('/awards',[site3controller::class,('awards')])->name('awards');
   });


    Route::get('form1',[Formscontroller::class,'form1'])->name('form1');
    Route::post('form1',[Formscontroller::class,'form1_data'])->name('form1_data');

    Route::get('form2',[Formscontroller::class,'form2'])->name('form2');
    Route::post('form2',[Formscontroller::class,'form2_data'])->name('form2_data');

    Route::get('form3',[Formscontroller::class,'form3'])->name('form3');
    Route::post('form3',[Formscontroller::class,'form3_data'])->name('form3_data');

    Route::get('form4',[Formscontroller::class,'form4'])->name('form4');
    Route::post('form4',[Formscontroller::class,'form4_data'])->name('form4_data');

    Route::get('form5',[Formscontroller::class,'form5'])->name('form5');
    Route::post('form5',[Formscontroller::class,'form5_data'])->name('form5_data');

    Route::get('send-mail',[mailcontroller::class,'send'])->name('send');

    Route::get('contact_us',[mailcontroller::class,'contact_us'])->name('contact_us');
    Route::post('contact_us',[mailcontroller::class,'contact_us_data'])->name('contact_us_data');

    Route::get('send2-mail',[mailcontroller::class,'send2'])->name('send2');


    Route::get('posts',[postscontroller::class,'index'])->name('posts.index');

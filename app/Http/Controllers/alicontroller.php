<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alicontroller extends Controller
{

public function fhkifhj()

{
    $name='ali';
    $text='wwghegg';

//    return view('test')->with('name',$name)->with('text',$text);  // الطريقة الاولى
      return view('test',compact('name','text')); // الطريقة الثانية من php
      return view('test',[
        'name'=>$name,
        'text'=>$text
      ]); // الطرثة التالتة من laravel
}

public function about()
{
   return 'about page';
}

public function contact()
{
   return 'contact page';
}

public function user()
{
   return 'user page';
}


}


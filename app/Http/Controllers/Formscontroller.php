<?php

namespace App\Http\Controllers;

use App\Rules\checkwordcount;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Runtime;
use Whoops\Run;

class Formscontroller extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }
    public function form1_data(Request $request)
    {
    //  dd($request->all());
    //  dd($request->except('_token'));
    //  dd($request->only(['name','age']));
    // $name = $request->input('name');
    $name = $request->name;
    $age = $request->age;
    // dd($name);
    return "welcome $name, your age is $age";
    }
public function form2()
{
    return view('forms.form2');
}

public function form2_data(Request $request)
{
    // dd($request->all());
    $name = $request->name;
    $email = $request->email;
    $age = $request->age;
    $password = $request->password;
    return view('forms.form2_data', compact('name','email','age','password'));
}

public function form3()
{
    return view('forms.form3');
}

public function form3_data(Request $request)
{
        $request->validate([
            'name'=>'required',
            'email'=>'required',

        ]);

        dd($request->all());
}

public function form4()
{
    return view('forms.form4');
}

public function form4_data(Request $request)
{
        $request->validate([
            // 'name'=>'required|min:3|max:20',
            'name'=>['required', new checkwordcount(3,'ما بينفع يكون الاسم هيك يا عمري')],
            'email'=>'required|email|ends_with:@gmail.com',
            'password'=>'required|confirmed|regex:/^.*
            (?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',

            // 'bio'=>'required',
            'bio'=>['required', new checkwordcount(15,'يسعدك يا غلا بكفى كتابة ارحمني')],
            'age'=>'required'

        ]);

        dd($request->all());
}

public function form5()
{
    // $alpha = range('a','z');
    // dd($alpha [rand(0,25)]); // قلت 25 ع حسب عدد الحروف من  a الى z
    return view('forms.form5');
}

public function form5_data(Request $request){
        $request->validate([
            'name'=>'required',
            'cv'=>'required',

        ]);

        $alpha = range('a','z');  // دالة من php  لاعطاء قيمة بداية ونهاية
        // $img_name=$request->file('cv')->getClientOriginalName();
        $ex =$request->file('cv')->getClientOriginalExtension();
        //$img_name = rand().      // لو رفعت اي ملف اكثر من مرة وما بدك تكون باسمها القديم/اعمل اسم عشوائي ودمج "." تبع الامتداد
        // $img_name= rand().rand(). '_'.rand().rand().rand().'_'.
        // rand().rand().rand().rand().'_'.$alpha [rand(0,25)]  . '.' . $ex;

        $img_name= rand().rand(). '_'.rand().rand().'_'.
        rand().rand().rand().'_'.$alpha [rand(0,count($alpha)-1)]  . '.' . $ex;
        // في مشكلة صغيرة لو بدي الحروف من a اىm لازم اتغير 25 بعمل count
        $request->file('cv')->move(public_path('uploads'), $img_name);

        dd($request->all());
}

}

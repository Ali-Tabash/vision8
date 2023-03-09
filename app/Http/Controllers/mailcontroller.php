<?php

namespace App\Http\Controllers;

use admin;
use App\Mail\alimail;
use App\Mail\contact_usmail;
use App\Mail\testmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{
    public function send()
    {
        Mail::to('admin@gmail.com')->send(new testmail());
                 //عبارة عن كلاس ياخد 2من method
        return 'Done';
        // mail('admin@gmail.com','Test','This is test mail');
    }

    public function send2()
    {
        Mail::to('admin@gmailcom')->send(new alimail());
        return 'sas';
    }




        public function contact_us()
        {
            return view('forms.contact_us');
        }

        public function contact_us_data(Request $request)
        {
            $request->validate(([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'message' => 'required',
                'cv'=>'required',
            ]));
            $data=$request->except('_token');
        $cv_new_name = rand(). time().$request->file('cv')
        ->getClientOriginalExtension();
        // abc.pdf =>9994849457464494abc.pdf
            $request->file('cv')->move(public_path('uploads'),
            $cv_new_name);
            $data['cv']=$cv_new_name; // خلي data array وضيف عليها هذه القيمة


            Mail::to('alitabash@gmail.com')->send(new contact_usMail($data));

           return'sent';
        // dd($request->all());

        }

}

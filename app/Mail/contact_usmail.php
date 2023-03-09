<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contact_usmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data =$data;
        // 3ايام وكود مش شغال ونبحث عن الخطا وسبب انو (data ما بتاخد متغير)
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact_message')->with('data',
    $this->data)->attach(public_path('uploads/'. $this->data ['cv']));
        // اسم ل فيو
        // attach هو الملحق
    }
}

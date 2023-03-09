<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class checkwordcount implements Rule
{
    protected $count;
    protected $msg;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($count,$msg)
    {
        $this->count=$count;   //تاشرع العنصر بحد ذاته لو كان عند 1000عنصر /الحين تاشر ع الاسم و بيو
        $this->msg=$msg;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
    //    return str_word_count($value) < 10 ; كانت تاشر فقط ع بيو الحين رح نعملها لو كان عندي عدد لا نهائي من عناصر
       return str_word_count($value) < $this->count ;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        // return 'بكفي يا غالي برم احنا بدناش انناسبك ';
        return $this->msg;
    }
    // الحين هذه الرسالة لاسم وبيو لو بدي اجعل لكل واحد رسالة لوحه فقط اضيف متغير اخر لكلاس
}

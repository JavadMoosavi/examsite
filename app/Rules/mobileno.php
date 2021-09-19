<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class mobileno implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        return strlen($value) == 11 && is_numeric($value) && substr($value,0,2) == "09";
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'یک شماره موبایل صحیح وارد کنید';
    }
}

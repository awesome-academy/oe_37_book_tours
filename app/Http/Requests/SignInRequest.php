<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'email' => 'bail|required|email|min:6|max:100',
            'password' => 'bail|required|alpha_num|min:6|max:20'
        ];
    }
}

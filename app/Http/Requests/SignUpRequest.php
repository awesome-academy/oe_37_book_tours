<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'bail|required|min:2|max:100',
            'email' => 'bail|required|email|unique:users,email|min:6|max:100',
            'password' => 'bail|required|alpha_num|min:6|max:20',
            're_password' => 'bail|required|alpha_num|same:password|min:6|max:20'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToursRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type_id' => 'numeric',
            'name' => 'required|min:5|max:50',
            'address' => 'required|min:5|max:100',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'description' => 'required|min:10',
            'content' => 'required|min:10',
            'image' => 'required|mimes:jpeg,png|max:10000',
        ];
    }
}

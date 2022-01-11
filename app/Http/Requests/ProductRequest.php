<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
        $user = $this->segment(4);
        $rules = [
            'image_url' => [
                'required',
                'mimes:jpg,jpeg,bmp,png'
            ],
            'name' => "required|unique:products,name,{$user},id",
            'price' => 'required',
            'status' => 'required',
            'department_id' => 'required',
        ];

        return $rules;
    }
}

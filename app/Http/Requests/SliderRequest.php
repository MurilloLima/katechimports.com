<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'image_url' => 'required|mimes:jpeg,jpg,png',
            'department_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image_url.required' => 'Escolha uma imagem!',
            'image_url.mimes' => 'Formato de imagem inválido!',
            'department_id.required' => 'Escolha um departamento!'
        ];
    }
}

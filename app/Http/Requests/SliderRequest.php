<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $id = $this->segment(4);
        return [
            'image_url' => "required|unique:sliders,image_url,{$id},id",
            'department_id' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image_url.required' => 'Escolha uma imagem!',
            'image_url.mimes' => 'Formato de imagem inválido!',
            'image_url.image' => 'O campo file deve ser uma imagem!',
            'department_id.required' => 'Escolha um departamento!'
        ];
    }
}

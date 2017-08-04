<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTarifasRequest extends FormRequest
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
            'nivel'     =>  'required|integer|between:1,10',
            'horas'     =>  'required|integer|between:1,100',
            'precio'    =>  'required|between:0,500',
            'activo'    =>  'required|boolean',
        ];
    }
}

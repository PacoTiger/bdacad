<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAsignaturasRequest extends FormRequest
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
            'nombre'        =>  'required|min:3',
            'activo'        =>  'required|boolean',
            'nivel_tarifa'  =>  'required|min:1',
            'centro_id'     =>  'required|min:1',
            'fecha'         =>  'required|date',
            'insercion'     =>  'nullable|min:4',
            'modificacion'  =>  'nullable|min:4',
        ];
    }
}

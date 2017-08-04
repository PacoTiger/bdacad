<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnosRequest extends FormRequest
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
            'apellidos'     =>  'required|min:4',
            'dni'           =>  'nullable|min:8|max:9',
            'fecha_nac'     =>  'nullable|date',
            'direccion'     =>  'nullable|min:5',
            'cp'            =>  'nullable|size:5',
            'poblacion'     =>  'nullable|min:4',
            'provincia'     =>  'nullable|min:4',
            'tfijo'         =>  'nullable|size:9',
            'tmovil'        =>  'nullable|size:9',
            'email'         =>  'nullable|email',
            'tutor'         =>  'nullable|min:3',
            'activo'        =>  'nullable|boolean',
            'domiciliacion' =>  'nullable|boolean',
            'ccc'           =>  'nullable|min:20|max:23',
            'especial'      =>  'nullable|boolean',
            'legal'         =>  'nullable|boolean',
            'comentario'    =>  'nullable|string',
            'fecha'         =>  'nullable|date',
            'insercion'     =>  'nullable|min:4',
            'modificacion'  =>  'nullable|min:4',
        ];
    }
}

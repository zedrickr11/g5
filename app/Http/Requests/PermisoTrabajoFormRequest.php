<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermisoTrabajoFormRequest extends FormRequest
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

            'num_permiso'=>'required|unique:permiso_trabajo,num_permiso',  
            'descripcion'=>'required|max:255',
            'idsolitud_trabajo'=>'required',
        ];
    }
    public function messages()
    {
        return [

        'num_permiso.required' => 'Ingrese el numero de permiso',
        'descripcion.required' => 'Ingrese una descripción',
        ];
    }
}

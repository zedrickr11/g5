<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FabricanteFormRequest extends FormRequest
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


            'direccion_fabricante'=>'max:256',
        	  'telefono_fabricante'=>'max:20',
            'fax_fabricante'=>'max:16',
            'correo_fabricante'=>'required|email|max:255',
            'contacto_fabricante'=>'required|max:255',
            'direccion_guatemala_fabricante'=>'required|max:256',
            'telefono_guatemala_fabricante'=>'max:8',
            'correo_guatemala_fabricante'=>'required|email|max:255',
        ];
    }
}

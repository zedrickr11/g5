<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccesorioFormRequest extends FormRequest
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
             'nombre_accesorio'=>'required|max:255',
             'numero_parte_accesorio'=>'required|numeric'
        ];
    }
}

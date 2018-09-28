<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoUnidadSaludFormRequest extends FormRequest
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
            //
              'nivel_atencion'=>'required|max:255',
                'categoria'=>'required|max:255',
                  'comp_res'=>'required|max:255',
                    'unidad_medica'=>'required|max:255',
        ];
    }
}

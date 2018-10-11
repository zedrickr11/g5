<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ingreso_repuestoFormRequest extends FormRequest
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
          'idproveedor_repuesto'=>'required',
          'tipo_comprobante'=>'required|max:20',
          'serie_comprobante'=>'max:7',
          'num_comprobante'=>'required|max:10',
          'idrepuesto'=>'required',
          'cantidad'=>'required',
        ];
    }
}

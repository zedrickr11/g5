<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeguimientoFormRequest extends FormRequest
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
          'fecha_seguimiento'=>'required',
          'responsable_seguimiento'=>'required|max:255',
          'solitud_trabajo_idsolitud_trabajo'=>'required',
        ];
    }
}

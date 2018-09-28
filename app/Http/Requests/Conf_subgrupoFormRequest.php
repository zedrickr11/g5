<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Conf_subgrupoFormRequest extends FormRequest
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
          'inicio'=>'required|numeric',
          'fin'=>'required|numeric',
          'actual'=>'required|numeric',
          'estado'=>'required|numeric',
          'idgrupo'=>'required|numeric',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoFormRequest extends FormRequest
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
          'idequipo' => 'required|max:20',
          'correlativo' => 'required|max:4',
          'nombre_equipo' => 'required|max:50',
          'marca' => 'required|max:45',
          'modelo' => 'required|max:45',
          'serie' => 'required|max:45',
          'cod_financiero' => 'max:45',
          'fecha_fabricacion' => 'date',
          'fecha_instalcion' => 'date',
          'precio' => 'max:50',
          'servicio' => 'required|max:45',
          'ambiente' => 'required|max:45',
          'descripcion' => 'max:100',
          'clase_tec_med' => 'max:45',
          'clase' => 'max:45',
          'nivel_riesgo' => 'max:45',
          'tipo_idgrupo' => 'numeric',
          'conexion_otro_eq' => 'max:45',
          'frec_uso_dia_semana' => 'required',
          'frec_uso_hora_dia' => 'required',
          'personal_cap' => 'required',

          'atencion_mantenimineto_equipo' => 'max:401',
          'fecha_compra' => 'date',
          'forma_adquisicion' => 'max:451',
          'fecha_expiracion_garantia' => 'date',

          'id_proveedor' => 'required',
          'idunidadsalud' => 'required',
          'idarea' => 'required',
          'idestado' => 'required',
          'idservicio_tecnico' => 'required',
          'idfabricante' => 'required',
          'idhospital' => 'required',
          'iddepartamento' => 'required',
          'idregion' => 'required',
          'idgrupo' => 'required',
          'idsubgrupo' => 'required',
          'idtipounidad' => 'required',
        ];
    }
}

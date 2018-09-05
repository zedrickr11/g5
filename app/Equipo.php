<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    protected $table='equipo';
    protected $primaryKey='idequipo';
    public $timestamps=false;

    protected $fillable =[
         'idequipo',
         'correlativo',
         'nombre_equipo',
         'marca',
         'modelo',
         'serie',
         'cod_financiero',
         'fecha_fabricacion',
         'fecha_instalcion',
         'precio',
         'servicio',
         'ambiente',
         'descripcion',
         'clase_tec_med',
         'clase',
         'nivel_riesgo',
         'tipo_idgrupo',
         'conexion_otro_eq',
         'frec_uso_dia_semana',
         'frec_uso_hora_dia',
         'personal_cap',
         'id_proveedor',
         'atencion_mantenimineto_equipo',
         'fecha_compra',
         'forma_adquisicion',
         'fecha_expiracion_garantia',
         'unidadsalud_idunidadsaludÍndice',
         'area_idarea',
         'estado_equipo_idestado',
         'servicio_tecnico_idservicio_tecnico',
         'fabricante_idfabricante'
    ];

    protected $guarded =[

    ];
}

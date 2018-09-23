<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detcaractec extends Model
{

    protected $table='detalle_caracteristica_tecnica';

  //  protected $primaryKey='idcaracteristica_tecnica';

    public $timestamps=false;


    protected $fillable =[
        'idcaracteristica_tecnica',
        'idequipo',
        'idvalor_ref_tec',
        'idsubgrupo_carac_tecnica',
        'estado_detalle_caracteristica_tecnica',
        'descripcion_detalle_caracteristica_tecnica',
        'valor_detalle_caracteristica_tecnica'
    ];

    protected $guarded =[

    ];
}

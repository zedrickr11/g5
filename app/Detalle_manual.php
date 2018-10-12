<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_manual extends Model
{
    protected $table='detalle_manual';
    protected $primaryKey='iddetalle_manual';
    public $timestamps=false;

    protected $fillable =[
        'iddetalle_manual',
        'idtipomanual',
        'idequipo',
        'link_detalle_manual',
        'observacion_detalle_manual'
   ];




    
}

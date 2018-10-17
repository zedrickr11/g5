<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnicoExterno extends Model
{
  protected $table='tecnico_externo';
  //protected $casts = ['idgrupo' => 'string'];
  protected $primaryKey='idtecnico_externo';

public $timestamps=false;


protected $fillable =[
  'nombre_tecnico_externo',
  'telefono_tecnico_externo',
  'idservicio_tecnico'


];

protected $guarded =[

];
}

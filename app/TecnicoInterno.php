<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnicoInterno extends Model
{
  protected $table='tecnico_interno';
  //protected $casts = ['idgrupo' => 'string'];
  protected $primaryKey='idtecnico';

public $timestamps=false;


protected $fillable =[
  'nombre_tecnico',
  'codigo_tecnico',



];

protected $guarded =[

];
}

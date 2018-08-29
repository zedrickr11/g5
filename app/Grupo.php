<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
  protected $table='grupo';

protected $primaryKey='idgrupo';

public $timestamps=false;


protected $fillable =[
  'idgrupo',
  'idarea',
  'grupo'
];

protected $guarded =[

];
}

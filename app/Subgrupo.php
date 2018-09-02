<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgrupo extends Model
{
  protected $table='subgrupo';
  //protected $casts = ['idgrupo' => 'string'];
  protected $primaryKey='idsubgrupo';

public $timestamps=false;


protected $fillable =[
  'codigosubgrupo',
  'subgrupo',
  'idgrupo'


];

protected $guarded =[

];
}

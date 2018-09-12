<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conf_subgrupo extends Model
{
  protected $table='conf_subgrupo';
  //protected $casts = ['idgrupo' => 'string'];
  protected $primaryKey='idconf_subgrupo';

public $timestamps=false;


protected $fillable =[
  'inicio',
  'fin',
  'actual',
  'estado',
  'idgrupo'


];

protected $guarded =[

];
}

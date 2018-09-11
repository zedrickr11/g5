<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conf_corr extends Model
{
  protected $table='conf_corr';
  //protected $casts = ['idgrupo' => 'string'];
  protected $primaryKey='idconf_corr';

public $timestamps=false;


protected $fillable =[
  'inicio',
  'fin',
  'actual',
  'estado',
  'idsubgrupo'


];

protected $guarded =[

];
}

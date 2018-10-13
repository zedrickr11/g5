<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
  protected $table='notificacion';
  protected $primaryKey='idnotificacion';
  public $timestamps=false;

  protected $fillable =[
       'descripcion_noti',
       'start',
       'end',
       'rutina_mantenimiento_idrutina_mantenimiento',
       'estado_notificacion',
       'backgroundColor',
       'textColor',
       'title',


  ];

  protected $guarded =[

  ];
}

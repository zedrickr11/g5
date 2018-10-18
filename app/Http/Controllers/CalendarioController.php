<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Notificacion;
use App\Rutina_mantenimiento;
use App\Equipo;

use DB;


class CalendarioController extends Controller
{
    function __construct()
      {
        $this->middleware(['auth','role:admin,jefe-mantto']);
      }
    
      public function llenarcalendarioCorrectivo()
    {
    
          $sql = "SELECT notificacion.idnotificacion,notificacion.descripcion_noti,notificacion.start,notificacion.end,notificacion.rutina_mantenimiento_idrutina_mantenimiento,notificacion.estado_notificacion,notificacion.backgroundColor,notificacion.textColor,notificacion.title 
          from notificacion,rutina_mantenimiento,tipo_rutina where rutina_mantenimiento.idrutina_mantenimiento = notificacion.rutina_mantenimiento_idrutina_mantenimiento and
          rutina_mantenimiento.idtipo_rutina = tipo_rutina.idtipo_rutina and rutina_mantenimiento.estado_rutina = 'PENDIENTE' and   tipo_rutina = 'CORRECTIVO'";
              $eventos= DB::select($sql,array(1,20));

          return response()->json($eventos);

    }

    public function llenarcalendarioPreventivo()
    {
    

      $sql = "SELECT notificacion.idnotificacion,notificacion.descripcion_noti,notificacion.start,notificacion.end,notificacion.rutina_mantenimiento_idrutina_mantenimiento,notificacion.estado_notificacion,notificacion.backgroundColor,notificacion.textColor,notificacion.title 
          from notificacion,rutina_mantenimiento,tipo_rutina where rutina_mantenimiento.idrutina_mantenimiento = notificacion.rutina_mantenimiento_idrutina_mantenimiento and
          rutina_mantenimiento.idtipo_rutina = tipo_rutina.idtipo_rutina and rutina_mantenimiento.estado_rutina = 'PENDIENTE' and   tipo_rutina = 'PREVENTIVO'";
              $eventos= DB::select($sql,array(1,20));

          return response()->json($eventos);

    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\Notificacion;
use App\Rutina_mantenimiento;
use App\Equipo;


use DB;


class CalendarioController extends Controller
{
    function __construct()
      {
        $this->middleware(['auth']);
      }
    
      public function llenarcalendarioCorrectivo()
    {
            $id = Auth::id();
            
          $a = auth()->user()->hasRole(['admin']);
          
          //  $sql1= 'select roles.name from users, role_user, roles
          //   where users.id = role_user.user_id
          //   and role_user.role_id = roles.id
          //   and users.id ='.$id ;

          // $e = DB::select($sql1);

           
          if ($a){

            $sql = "SELECT rutina_mantenimiento.estado_rutina,notificacion.idnotificacion,notificacion.descripcion_noti,notificacion.start,notificacion.end,notificacion.rutina_mantenimiento_idrutina_mantenimiento,notificacion.estado_notificacion,notificacion.backgroundColor,notificacion.textColor,notificacion.title,rutina_mantenimiento.tiempo_estimado_rutina_mantenimiento,
                        equipo.nombre_equipo,rutina_mantenimiento.idrutina_mantenimiento  
          from notificacion,rutina_mantenimiento,tipo_rutina,equipo 
          where rutina_mantenimiento.idrutina_mantenimiento = notificacion.rutina_mantenimiento_idrutina_mantenimiento 
          and rutina_mantenimiento.idtipo_rutina = tipo_rutina.idtipo_rutina 
          and equipo.idequipo = rutina_mantenimiento.idequipo
          and rutina_mantenimiento.estado_rutina != 'DESACTIVADO' 
          and tipo_rutina = 'CORRECTIVO'";
          
          $eventos= DB::select($sql,array(1,20));

          return response()->json($eventos);

          }else{

            $sql = "SELECT rutina_mantenimiento.estado_rutina,notificacion.idnotificacion,notificacion.descripcion_noti,notificacion.start,notificacion.end,notificacion.rutina_mantenimiento_idrutina_mantenimiento,notificacion.estado_notificacion,notificacion.backgroundColor,notificacion.textColor,notificacion.title,rutina_mantenimiento.tiempo_estimado_rutina_mantenimiento,
            equipo.nombre_equipo,rutina_mantenimiento.idrutina_mantenimiento  
            from notificacion,rutina_mantenimiento,tipo_rutina,equipo 
            where rutina_mantenimiento.idrutina_mantenimiento = notificacion.rutina_mantenimiento_idrutina_mantenimiento 
            and rutina_mantenimiento.idtipo_rutina = tipo_rutina.idtipo_rutina 
            and equipo.idequipo = rutina_mantenimiento.idequipo
            and rutina_mantenimiento.estado_rutina != 'DESACTIVADO' 
            and tipo_rutina = 'CORRECTIVO'
            and responsable_area_rutina_mantenimiento =".$id;

            $eventos= DB::select($sql,array(1,20));

            return response()->json($eventos);

          }



          

    }

    public function llenarcalendarioPreventivo()
    {
     
      $id = Auth::id();
            
          $a = auth()->user()->hasRole(['admin']);
          
          //  $sql1= 'select roles.name from users, role_user, roles
          //   where users.id = role_user.user_id
          //   and role_user.role_id = roles.id
          //   and users.id ='.$id ;

          // $e = DB::select($sql1);

           
          if ($a){

            $sql = "SELECT rutina_mantenimiento.estado_rutina,notificacion.idnotificacion,notificacion.descripcion_noti,notificacion.start,notificacion.end,notificacion.rutina_mantenimiento_idrutina_mantenimiento,notificacion.estado_notificacion,notificacion.backgroundColor,notificacion.textColor,notificacion.title,rutina_mantenimiento.tiempo_estimado_rutina_mantenimiento,
                        equipo.nombre_equipo,rutina_mantenimiento.idrutina_mantenimiento  
          from notificacion,rutina_mantenimiento,tipo_rutina,equipo 
          where rutina_mantenimiento.idrutina_mantenimiento = notificacion.rutina_mantenimiento_idrutina_mantenimiento 
          and rutina_mantenimiento.idtipo_rutina = tipo_rutina.idtipo_rutina 
          and equipo.idequipo = rutina_mantenimiento.idequipo
          and rutina_mantenimiento.estado_rutina != 'DESACTIVADO' 
          and tipo_rutina = 'PREVENTIVO'";
          
          $eventos= DB::select($sql,array(1,20));

          return response()->json($eventos);

          }else{

            $sql = "SELECT rutina_mantenimiento.estado_rutina,notificacion.idnotificacion,notificacion.descripcion_noti,notificacion.start,notificacion.end,notificacion.rutina_mantenimiento_idrutina_mantenimiento,notificacion.estado_notificacion,notificacion.backgroundColor,notificacion.textColor,notificacion.title,rutina_mantenimiento.tiempo_estimado_rutina_mantenimiento,
            equipo.nombre_equipo,rutina_mantenimiento.idrutina_mantenimiento  
            from notificacion,rutina_mantenimiento,tipo_rutina,equipo 
            where rutina_mantenimiento.idrutina_mantenimiento = notificacion.rutina_mantenimiento_idrutina_mantenimiento 
            and rutina_mantenimiento.idtipo_rutina = tipo_rutina.idtipo_rutina 
            and equipo.idequipo = rutina_mantenimiento.idequipo
            and rutina_mantenimiento.estado_rutina != 'DESACTIVADO' 
            and tipo_rutina = 'PREVENTIVO'
            and responsable_area_rutina_mantenimiento =".$id;

            $eventos= DB::select($sql,array(1,20));

            return response()->json($eventos);

            
           
          }

        


          

    }

    function index(){
     
        $noti = DB::table('notificacion')
        ->select(DB::raw('count(*) as noti, backgroundColor'))
        ->where('backgroundColor','green')
        ->groupBy('backgroundColor')
        ->first();

        $noti2 = DB::table('notificacion')
        ->select(DB::raw('count(*) as noti2, backgroundColor'))
        ->where('backgroundColor','#DF3A01')
        ->groupBy('backgroundColor')
        ->first();





        return view ('index',compact('noti','noti2'));
        
    }

  
    
}

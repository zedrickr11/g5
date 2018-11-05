<?php

namespace App\Http\Controllers;

use App\ruman;
use App\GuardarRutinaPrueba;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\rumanFormRequest;
use App\tiporu;
use App\Equipo;
use App\PermisoTrabajo;
use App\caracru;
use App\subru;
use App\valrefru;
use App\detcaracru;
use App\Notificacion;
use App\Subgrupo;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\User;
use App\TecnicoExterno;
use App\TecnicoInterno;
use App\DetalleTecnicoInterno;
use App\DetalleTecnicoExterno;
use App\DetalleInsumoRutina;
use App\DetalleRepuestoRutina;
use App\Detalle_ingreso_repuesto;
use App\Insumo;
use App\Repuesto;
use App\DetalleHerramienta;
use App\Herramienta;
use App\SolicitudTrabajo;
use App\subpru;
use App\valrefpru;
use App\pruru;
use App\DetalleRutinaPrueba;
use App\detrupru;



class rumanController extends Controller
{
  function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto,jefe-sub,tec-ing']);
    }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    if ($request)
    {
        $query=trim($request->get('searchText'));
          $query2=trim($request->get('searchTextfecha1'));
          $query3=trim($request->get('searchTextfecha2'));
            $query4=trim($request->get('searchRutina'));
          $query5=trim($request->get('searchEstado'));
              $aceptar=trim($request->get('fechaaceptar'));
              if($aceptar!='aceptar'){
        $ruman=DB::table('rutina_mantenimiento as f')
        ->join('tipo_rutina as d','f.idtipo_rutina','=','d.idtipo_rutina')
          ->join('notificacion as noti','f.idrutina_mantenimiento','=','noti.rutina_mantenimiento_idrutina_mantenimiento')
       ->join('equipo as e','f.idequipo','=','e.idequipo')



      ->select('noti.*','e.*','f.idrutina_mantenimiento','d.tipo_rutina as idtipo_rutina','f.estado_rutina')


       ->where('e.idequipo','LIKE','%'.$query.'%')
       ->where('f.idtipo_rutina','LIKE','%'.$query4.'%')
       ->where('f.estado_rutina','LIKE','%'.$query5.'%')
    //   ->where('noti.start','BETWEEN','>='.$query2.'%')
      ->where('noti.start','>=',$query2)
        //->where('noti.start','<=',$query3)}
    //    ->where('noti.start','BETWEEN',$query2,'and',$query3)
        ->orderBy('idrutina_mantenimiento','desc')
        ->paginate(10);}else{
          $ruman=DB::table('rutina_mantenimiento as f')
          ->join('tipo_rutina as d','f.idtipo_rutina','=','d.idtipo_rutina')
            ->join('notificacion as noti','f.idrutina_mantenimiento','=','noti.rutina_mantenimiento_idrutina_mantenimiento')
         ->join('equipo as e','f.idequipo','=','e.idequipo')



        ->select('noti.*','e.*','f.idrutina_mantenimiento','d.tipo_rutina as idtipo_rutina','f.estado_rutina')


         ->where('e.idequipo','LIKE','%'.$query.'%')
         ->where('f.idtipo_rutina','LIKE','%'.$query4.'%')
         ->where('f.estado_rutina','LIKE','%'.$query5.'%')
      //   ->where('noti.start','BETWEEN','>='.$query2.'%')
        ->where('noti.start','>=',$query2)
          ->where('noti.start','<=',$query3)
      //    ->where('noti.start','BETWEEN',$query2,'and',$query3)
          ->orderBy('idrutina_mantenimiento','desc')
          ->paginate(10);




        }
        return view('equipo.rutina.ruman.index',["ruman"=>$ruman,"searchText"=>$query,"searchTextfecha1"=>$query2,"searchTextfecha2"=>$query3,"searchRutina"=>$query4,"searchEstado"=>$query5,"fechaaceptar"=>$aceptar]);
    }

  //  $subcaractec=subcaractec::all();
  //  return view('equipo.caracteristica.subcaractec.index', compact('subcaractec'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create2($idequipo,$idsubgrupo)
  {

      $solicitudtrabajo=SolicitudTrabajo::all();

    $tecnicoexterno=TecnicoExterno::all();
    $tecnicointerno=TecnicoInterno::all();
    $users=User::all();
    $tiporu=tiporu::all();
    $equipo=Equipo::all();
    $caracru=caracru::all();
    $subru=subru::all();
      $valrefru=valrefru::all();
        $ruman=ruman::all();
        $subgrupo=Subgrupo::all();
        $permisotrabajo=PermisoTrabajo::all();

    return view("equipo.rutina.ruman.create",compact('solicitudtrabajo','tecnicoexterno','tecnicointerno','users','idsubgrupo','idequipo','subgrupo','tiporu','equipo','permisotrabajo','caracru','subru','valrefru','ruman'));


  //  return view("equipo.rutina.ruman.create",compact('tiporu','equipo'));

  }

  public function create3($idequipo,$idsubgrupo)
  {
    $solicitudtrabajo=SolicitudTrabajo::all();

  $tecnicoexterno=TecnicoExterno::all();
  $tecnicointerno=TecnicoInterno::all();
  $users=User::all();
  $tiporu=tiporu::all();
  $equipo=Equipo::all();
  $pruru=pruru::all();
  $subpru=subpru::all();
    $valrefpru=valrefpru::all();
      $ruman=ruman::all();
      $subgrupo=Subgrupo::all();
      $permisotrabajo=PermisoTrabajo::all();

  return view("equipo.rutina.ruman.createprueba",compact('solicitudtrabajo','tecnicoexterno','tecnicointerno','users','idsubgrupo','idequipo','subgrupo','tiporu','equipo','permisotrabajo','pruru','subpru','valrefpru','ruman'));



  }
  public function create($idequipo)
  {}

    public function tecnicos($id,$idequipo)
    {
      $notificacion=DB::table('notificacion as f')
     ->select('f.*')
      ->where('f.rutina_mantenimiento_idrutina_mantenimiento','LIKE',$id)
      ->first();
      $ruman=DB::table('rutina_mantenimiento as f')
     ->select('f.*')
      ->where('f.idrutina_mantenimiento','LIKE',$id)
      ->first();
         $users=User::all();
      $tecnicoexterno=TecnicoExterno::all();
      $tecnicointerno=TecnicoInterno::all();
      return view("equipo.rutina.ruman.asignartecnicos",compact('users','notificacion','ruman','tecnicoexterno','tecnicointerno','id','idequipo'));

    }


    public function guardartecnicos(rumanFormRequest $request)
    {



    }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(rumanFormRequest $request)
  {    $aceptar=$request->get('aceptar');
    $observaciones_rutina=$request->get('observaciones_rutina');
    $tiempo_estimado_rutina_mantenimiento=$request->get('tiempo_estimado_rutina_mantenimiento');
    $responsable_area_rutina_mantenimiento=$request->get('responsable_area_rutina_mantenimiento');
    $idsubgrupo=$request->get('idsubgrupo');
    $frecuencia_rutina=$request->get('frecuencia_rutina');
    $descripcion_noti=$request->get('descripcion_noti');
    $end=$request->get('end');
    $start=$request->get('start');
      $cont=$request->get('cont');
if($request->get('enviar')=='enviado'){
  try{

    for($num=0; $num<=$cont; $num++){
      if( $aceptar[$num]=='SI'){
        DB::beginTransaction();
        $ruman=new ruman();
        $ruman->idtipo_rutina=1;
        $ruman->idequipo=$request->get('idequipo');
        $mytime = Carbon::now('America/Guatemala');
        $ruman->fecha_realizacion_rutina=$mytime->toDateTimeString();
        $ruman->observaciones_rutina=$observaciones_rutina[$num];
        $ruman->tiempo_estimado_rutina_mantenimiento=$tiempo_estimado_rutina_mantenimiento[$num];
        $ruman->responsable_area_rutina_mantenimiento=$responsable_area_rutina_mantenimiento[$num];
        $ruman->idsubgrupo=$idsubgrupo[$num];
        $ruman->frecuencia_rutina=$frecuencia_rutina[$num];
        $ruman->estado_rutina='PENDIENTE';
        $ruman->save();

        $comentario_detalle_caracteristica_rutina = $request->get('comentario_detalle_caracteristica_rutina');
        $idcaracteristica_rutina = $request->get('idcaracteristica_rutina');
        $idsubgrupo_rutina= $request->get('idsubgrupo_rutina');
        $idvalor_ref_rutina = $request->get('idvalor_ref_rutina');

       $noti=new Notificacion;
       $noti->descripcion_noti=$descripcion_noti[$num];
       $noti->start=$start[$num];
       $noti->end=$end[$num];
       $noti->rutina_mantenimiento_idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
       $noti->estado_notificacion='0';
       $noti->backgroundColor='#DF3A01';
       $noti->textColor='White';
       $noti->title=$request->get('idequipo');
       $noti->save();

        $cont2 = 0;

        while($cont2 <count($idcaracteristica_rutina[$num])){

            $detalle = new detcaracru();
            $detalle->idcaracteristica_rutina=$idcaracteristica_rutina[$num][$cont2];
            $detalle->idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
            $detalle->idvalor_ref_rutina=$idvalor_ref_rutina[$num][$cont2];
            $detalle->idsubgrupo_rutina= $idsubgrupo_rutina[$num][$cont2];
            $detalle->comentario_detalle_caracteristica_rutina= $comentario_detalle_caracteristica_rutina[$num][$cont2];
            $detalle->save();
            $cont2=$cont2+1;

        }



        DB::commit();
}
}}catch(\Exception $e)
      {
          DB::rollback();

    }

}else{




  try{
        DB::beginTransaction();
        $ruman=new ruman;
        $ruman->idtipo_rutina=$request->get('idtipo_rutina');
        $ruman->idequipo=$request->get('idequipo');
        $mytime = Carbon::now('America/Guatemala');
      //  $ruman->fecha_realizacion_rutina=$mytime->toDateTimeString();
        $ruman->observaciones_rutina=$request->get('observaciones_rutina');
        $ruman->tiempo_estimado_rutina_mantenimiento=$request->get('tiempo_estimado_rutina_mantenimiento');
        $ruman->responsable_area_rutina_mantenimiento=$request->get('responsable_area_rutina_mantenimiento');
        $ruman->permiso_trabajo_idpermiso_trabajo=$request->get('permiso_trabajo_idpermiso_trabajo');
        $ruman->idsubgrupo=$request->get('idsubgrupo');
        $ruman->frecuencia_rutina=$request->get('frecuencia_rutina');
        $ruman->estado_rutina='PENDIENTE';
        $ruman->save();

        $comentario_detalle_caracteristica_rutina = $request->get('comentario_detalle_caracteristica_rutina');
        $idcaracteristica_rutina = $request->get('idcaracteristica_rutina');
        $idsubgrupo_rutina= $request->get('idsubgrupo_rutina');
        $idvalor_ref_rutina = $request->get('idvalor_ref_rutina');

       $noti=new Notificacion;
       $noti->descripcion_noti=$request->get('descripcion_noti');
       $noti->start=$request->get('start');
       $noti->end=$request->get('end');
       $noti->rutina_mantenimiento_idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
       $noti->estado_notificacion='0';
       $noti->backgroundColor='#DF3A01';
       $noti->textColor='white';
       $noti->title=$request->get('idequipo');
       $noti->save();



       //tecnico TecnicoInterno
/*  $tecnicointerno = $request->get('tecnicointerno');
       for($cont2 = 0; $cont2 <count($tecnicointerno); $cont2++){

       $det = new DetalleTecnicoInterno();
       $det->idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
       $det->idtecnico=$tecnicointerno[$cont2];
       $det->save();

       }

*/



       //fin tecnico interno

        $cont = 0;

        while($cont <count($idcaracteristica_rutina)){

            $detalle = new detcaracru();
            $detalle->idcaracteristica_rutina=$idcaracteristica_rutina[$cont];
            $detalle->idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
            $detalle->idvalor_ref_rutina=$idvalor_ref_rutina[$cont];
            $detalle->idsubgrupo_rutina= $idsubgrupo_rutina[$cont];
            $detalle->comentario_detalle_caracteristica_rutina= $comentario_detalle_caracteristica_rutina[$cont];
            $detalle->save();
            $cont=$cont+1;

        }



        DB::commit();

      }catch(\Exception $e)
      {
          DB::rollback();
      }
      try{
            DB::beginTransaction();

            $tecnicointerno = $request->get('tecnicointerno');
                  for($cont2 = 0; $cont2 <count($tecnicointerno); $cont2++){

                  $det = new DetalleTecnicoInterno();
                  $det->idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
                  $det->idtecnico=$tecnicointerno[$cont2];
                  $det->save();

                  }

            DB::commit();

          }catch(\Exception $e)
          {
              DB::rollback();
          }

          try{
                DB::beginTransaction();

                $tecnicoexterno = $request->get('tecnicoexterno');
                      for($cont3 = 0; $cont3 <count($tecnicoexterno); $cont3++){

                      $det2 = new DetalleTecnicoExterno();
                      $det2->idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
                      $det2->idtecnico_externo=$tecnicoexterno[$cont3];
                      $det2->save();

                      }

                DB::commit();

              }catch(\Exception $e)
              {
                  DB::rollback();
              }


    }
//  return view('actualizar',$request->get('idequipo'));
  return redirect()->route('actualizar', [$request->get('idequipo')]);
  }



  public function storetecnico(rumanFormRequest $request)
  { }


  public function asignar($id,$idequipo)
  {
    $equipo=equipo::all();
    $rutina=ruman::all();
      $tiporu=tiporu::all();
      $caracru=caracru::all();
      $subru=subru::all();
      $valrefru=valrefru::all();
        $rumen = detcaracru::all();
        $ruman=DB::table('rutina_mantenimiento as d')
          ->where('d.idsubgrupo','LIKE',$idequipo)
            ->select('d.*')
     ->orderBy('idrutina_mantenimiento','desc')
       ->paginate(10000);
        return view('equipo.rutina.ruman.asignarrutina', compact('id','equipo','ruman','rumen','idequipo','caracru','subru','valrefru','tiporu','rutina'));



  }

  public function asignar2($id,$idequipo)
  {
    $equipo=equipo::all();
    $rutina=ruman::all();
      $tiporu=tiporu::all();
      $caracru=caracru::all();
      $subru=subru::all();
      $valrefru=valrefru::all();
        $rumen = detcaracru::all();
        $ruman=DB::table('rutina_mantenimiento as d')
          ->select('d.*')
          ->where('d.idsubgrupo','LIKE',$id)
     ->orderBy('idrutina_mantenimiento','desc')
       ->paginate(10000);
        return view('equipo.rutina.ruman.asignarrutina2', compact('id','equipo','ruman','rumen','idequipo','caracru','subru','valrefru','tiporu','rutina'));



  }



  public function agregar(Request $request)
  {
  return view('equipo.equipo.index');


  }



  public function store2(rumanFormRequest $request)
  {


    try{
        DB::beginTransaction();
        $ruman=new ruman;
        $ruman->idtipo_rutina=$request->get('idtipo_rutina');
        $ruman->idequipo=$request->get('idequipo');
        $mytime = Carbon::now('America/Guatemala');
        //$ruman->fecha_realizacion_rutina=$mytime->toDateTimeString();
        $ruman->observaciones_rutina=$request->get('observaciones_rutina');
        $ruman->tiempo_estimado_rutina_mantenimiento=$request->get('tiempo_estimado_rutina_mantenimiento');
        $ruman->responsable_area_rutina_mantenimiento=$request->get('responsable_area_rutina_mantenimiento');
        $ruman->permiso_trabajo_idpermiso_trabajo=$request->get('permiso_trabajo_idpermiso_trabajo');
        $ruman->idsubgrupo=$request->get('idsubgrupo');
        $ruman->estado_rutina='PENDIENTE';
        $ruman->save();


        $noti=new Notificacion;
        $noti->descripcion_noti=$request->get('descripcion_noti');
        $noti->start=$request->get('start');
        $noti->end=$request->get('end');
        $noti->rutina_mantenimiento_idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
        $noti->estado_notificacion='0';
        $noti->backgroundColor='#FFBF00';
        $noti->textColor='white';
        $noti->title=$request->get('idequipo');
        $noti->save();

        $prueba_rutina = $request->get('prueba_rutina');
        $subgrupo_prueba= $request->get('subgrupo_prueba');
        $valor_ref_prueba = $request->get('valor_ref_prueba');
        $norma= $request->get('norma');
        $unidadmedida = $request->get('unidadmedida');


                $cont = 0;

                while($cont <count($prueba_rutina)){

                    $detalle = new DetalleRutinaPrueba();
                    $detalle->idprueba_rutina=$prueba_rutina[$cont];
                    $detalle->idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
                    $detalle->idvalor_ref_prueba=$valor_ref_prueba[$cont];
                    $detalle->idsubgrupo_prueba= $subgrupo_prueba[$cont];
                    $detalle->norma_detalle_rutina_prueba= $norma[$cont];
                    $detalle->unidad_medida_detalle_rutina_prueba= $unidadmedida[$cont];



                    $detalle->save();
                    $cont=$cont+1;

                }




                DB::commit();

              }catch(\Exception $e)
              {
                  DB::rollback();
              }

  return redirect()->route('actualizar', [$request->get('idequipo')]);

  }

  /**
   * Display the specified resource.
   *
   * @param  \App\ruman  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function show($id)

  {

    $herramienta=DB::table('herramienta as he')
    ->join('detalle_herramienta as de','de.idherramienta','=','he.idherramienta')
    ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','de.idrutina_mantenimiento')
    ->select('*')
    ->where('ru.idrutina_mantenimiento',$id)
    ->get();

    $insumo=DB::table('insumo as he')
    ->join('detalle_insumo_rutina as de','de.idinsumo','=','he.idinsumo')
    ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','de.idrutina_mantenimiento')
    ->select('*')
    ->where('ru.idrutina_mantenimiento',$id)
    ->get();
    $repuesto=DB::table('repuesto as he')
    ->join('detalle_repuesto_rutina as de','de.idrepuesto','=','he.idrepuesto')
    ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','de.idrutina_mantenimiento')
    ->select('*')
    ->where('ru.idrutina_mantenimiento',$id)
    ->get();
    $tecnicoexterno=DB::table('rutina_mantenimiento_tecnico_externo as rupru')
    ->join('tecnico_externo as va','va.idtecnico_externo','=','rupru.idtecnico_externo')
    ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','rupru.idrutina_mantenimiento')
    ->select('*','va.*')
    ->where('rupru.idrutina_mantenimiento',$id)
    ->get();
    $tecnicointerno=DB::table('rutina_mantenimiento_tecnico_interno as rupru')
    ->join('tecnico_interno as va','va.idtecnico','=','rupru.idtecnico')
    ->join('rutina_mantenimiento as ru','ru.idrutina_mantenimiento','=','rupru.idrutina_mantenimiento')
    ->select('*','va.*')
    ->where('rupru.idrutina_mantenimiento',$id)
    ->get();

    $subpru=subpru::all();
    $valrefpru=valrefpru::all();
    $pruru=pruru::all();
    $DetalleRutinaPrueba=DetalleRutinaPrueba::all();

     $users=User::all();
    $caracru=caracru::all();
    $subru=subru::all();
    $valrefru=valrefru::all();
    $detallerutina = detcaracru::all();
    $tiporu=tiporu::all();
    $equipo=Equipo::all();
    $ruman=ruman::findOrFail($id);
    $permisotrabajo=PermisoTrabajo::all();
    return view('equipo.rutina.ruman.show', compact('repuesto','insumo','herramienta','tecnicoexterno','tecnicointerno','DetalleRutinaPrueba','pruru','valrefpru','subpru','users','detallerutina','ruman','tiporu','equipo','permisotrabajo','caracru','subru','valrefru'));

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\ruman  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $herramienta=Herramienta::all();
    $repuesto=Repuesto::all();
       $insumo=Insumo::all();
     $users=User::all();
    $notificacion=Notificacion::all();
    $caracru=caracru::all();
    $subru=subru::all();
    $valrefru=valrefru::all();
      $detallerutina = detcaracru::all();
    $tiporu=tiporu::all();
    $equipo=Equipo::all();
  $ruman=ruman::findOrFail($id);
      $permisotrabajo=PermisoTrabajo::all();
    return view('equipo.rutina.ruman.edit', compact('herramienta','repuesto','insumo','users','notificacion','valrefru','subru','caracru','detallerutina','ruman','tiporu','equipo','permisotrabajo'));
  }


  public function edit2($id)
  {
    $herramienta=Herramienta::all();
    $repuesto=Repuesto::all();
       $insumo=Insumo::all();
     $users=User::all();
    $notificacion=Notificacion::all();
    $caracru=caracru::all();
    $subru=subru::all();
    $valrefru=valrefru::all();
      $detallerutina = detrupru::all();
    $tiporu=tiporu::all();
    $equipo=Equipo::all();
  $ruman=ruman::findOrFail($id);
      $permisotrabajo=PermisoTrabajo::all();
      $pruru=pruru::all();
      $subpru=subpru::all();
        $valrefpru=valrefpru::all();
    return view('equipo.rutina.ruman.edit2', compact('valrefpru','subpru','pruru','herramienta','repuesto','insumo','users','notificacion','valrefru','subru','caracru','detallerutina','ruman','tiporu','equipo','permisotrabajo'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\ruman  $subcaractec
   * @return \Illuminate\Http\Response
   */
  public function update(rumanFormRequest $request, $id)
  {














    $herramientaceptar=$request->get('herramientaceptar');
   $herramienta=$request->get('herramienta');
    $contherramienta = 0;
  if($herramientaceptar=="aceptar"){
    while($contherramienta <count($herramienta)){

        $detalleherramienta = new DetalleHerramienta();
        $detalleherramienta->idherramienta=$herramienta[$contherramienta];
        $detalleherramienta->idrutina_mantenimiento=$id;
        $detalleherramienta->save();
        $contherramienta=$contherramienta+1;

    }}




    $repuestoaceptar=$request->get('repuestoaceptar');
   $repuesto=$request->get('repuesto');
    $cantidadrepuesto = $request->get('cantidad2');
    $contrepuesto = 0;
if($repuestoaceptar=="aceptar"){
    while($contrepuesto <count($repuesto)){

        $detallerepuesto = new DetalleRepuestoRutina();
        $detallerepuesto->idrepuesto=$repuesto[$contrepuesto];
        $detallerepuesto->cantidad=$cantidadrepuesto[$contrepuesto];
        $detallerepuesto->idrutina_mantenimiento=$id;
        $detallerepuesto->save();
        $contrepuesto=$contrepuesto+1;

    }}

    $insumoaceptar=$request->get('insumoaceptar');
    $insumo=$request->get('insumo');
    $cantidadinsumo = $request->get('cantidad');
    $continsumo = 0;

if($insumoaceptar=="aceptar"){
    while($continsumo <count($insumo)){

        $detalleinsumo = new DetalleInsumoRutina();
        $detalleinsumo->idinsumo=$insumo[$continsumo];
        $detalleinsumo->cantidad=$cantidadinsumo[$continsumo];
        $detalleinsumo->idrutina_mantenimiento=$id;
        $detalleinsumo->save();
        $continsumo=$continsumo+1;

    }}


    ruman::findOrFail($id)->update($request->all());
    DB::table('notificacion')
                ->where('rutina_mantenimiento_idrutina_mantenimiento',$id)
                ->update(['backgroundColor' =>  $request->get('color')]);


    $cont = 0;
    $rutinatipo=$request->get('rutinatipo');
    $comentario_detalle_caracteristica_rutina = $request->get('comentario_detalle_caracteristica_rutina');
    $estado_detalle_caracteristica_rutina = $request->get('estado_detalle_caracteristica_rutina');
    $iddetalle_caracteristica_rutina = $request->get('iddetalle_caracteristica_rutina');
    $idequipo = $request->get('idequipo');

    while($cont <count($comentario_detalle_caracteristica_rutina)){
$mytime = Carbon::now('America/Guatemala');
  if( $estado_detalle_caracteristica_rutina[$cont]==1){
        DB::table('detalle_caracteristica_rutina')
                    ->where('iddetalle_caracteristica_rutina',$iddetalle_caracteristica_rutina[$cont])
                    ->update(['estado_detalle_caracteristica_rutina' =>  $estado_detalle_caracteristica_rutina[$cont],

                      'fecha_detalle_caracteristica_rutina' =>$mytime->toDateTimeString(),

                    'comentario_detalle_caracteristica_rutina'=>$comentario_detalle_caracteristica_rutina[$cont]]);
                      $cont=$cont+1;
                        }
  else{
    DB::table('detalle_caracteristica_rutina')
                ->where('iddetalle_caracteristica_rutina',$iddetalle_caracteristica_rutina[$cont])
                ->update(['estado_detalle_caracteristica_rutina' => $estado_detalle_caracteristica_rutina[$cont],
                'comentario_detalle_caracteristica_rutina'=>$comentario_detalle_caracteristica_rutina[$cont]]);
                  $cont=$cont+1;
  }

    }
    $estado_rutina=$request->get('estado_rutina');
if("$estado_rutina"=="REALIZADO" and $rutinatipo==1){
    try{
          DB::beginTransaction();
          $ruman=new ruman;
          $ruman->idtipo_rutina=$request->get('idtipo_rutina');
          $ruman->idequipo=$request->get('idequipo');
          $mytime = Carbon::now('America/Guatemala');
        //  $ruman->fecha_realizacion_rutina=$mytime->toDateTimeString();
          $ruman->observaciones_rutina=$request->get('observaciones_rutina');
          $ruman->tiempo_estimado_rutina_mantenimiento=$request->get('tiempo_estimado_rutina_mantenimiento');
          $ruman->responsable_area_rutina_mantenimiento=$request->get('responsable_area_rutina_mantenimiento');
          $ruman->permiso_trabajo_idpermiso_trabajo=$request->get('permiso_trabajo_idpermiso_trabajo');
          $ruman->idsubgrupo=$request->get('idsubgrupo');
          $ruman->frecuencia_rutina=$request->get('frecuencia_rutina');
          $ruman->estado_rutina='PENDIENTE';
          $ruman->save();

          $idcaracteristica_rutina2 = $request->get('idcaracteristica_rutina2');
          $idsubgrupo_rutina2= $request->get('idsubgrupo_rutina2');
          $idvalor_ref_rutina2 = $request->get('idvalor_ref_rutina2');

         $noti=new Notificacion;
         $noti->descripcion_noti=$request->get('descripcion_noti');
         $noti->start=$request->get('start22');
         $noti->end=$request->get('end22');
         $noti->rutina_mantenimiento_idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
         $noti->estado_notificacion='0';
         $noti->backgroundColor='#DF3A01';
         $noti->textColor='white';
         $noti->title=$request->get('idequipo');
         $noti->save();

          $cont = 0;

          while($cont <count($idcaracteristica_rutina2)){

              $detalle = new detcaracru();
              $detalle->idcaracteristica_rutina=$idcaracteristica_rutina2[$cont];
              $detalle->idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
              $detalle->idvalor_ref_rutina=$idvalor_ref_rutina2[$cont];
              $detalle->idsubgrupo_rutina= $idsubgrupo_rutina2[$cont];
              $detalle->save();
              $cont=$cont+1;

          }



          DB::commit();

        }catch(\Exception $e)
        {
            DB::rollback();
        }



}





    return redirect()->route('actualizar',$idequipo);

  }



  public function update2(rumanFormRequest $request, $id)
  {


}

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\ruman  $subcaractec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {ruman::findOrFail($id)->delete();
  return redirect()->route('ruman.index');
  }
}

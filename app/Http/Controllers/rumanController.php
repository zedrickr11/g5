<?php

namespace App\Http\Controllers;

use App\ruman;

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
class rumanController extends Controller
{
  function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto,jefe-sub']);
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
        $ruman=DB::table('rutina_mantenimiento as f')
        ->join('tipo_rutina as d','f.idtipo_rutina','=','d.idtipo_rutina')




      ->select('f.idrutina_mantenimiento','d.tipo_rutina as idtipo_rutina','f.estado_rutina')


      //  ->where('e.nombre_equipo','LIKE','%'.$query.'%')
        ->orderBy('idrutina_mantenimiento','desc')
        ->paginate(10);
        return view('equipo.rutina.ruman.index',["ruman"=>$ruman,"searchText"=>$query]);
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
    $tiporu=tiporu::all();
    $equipo=Equipo::all();
    $caracru=caracru::all();
    $subru=subru::all();
      $valrefru=valrefru::all();
        $ruman=ruman::all();
        $subgrupo=Subgrupo::all();
        $permisotrabajo=PermisoTrabajo::all();

    return view("equipo.rutina.ruman.create",compact('idsubgrupo','idequipo','subgrupo','tiporu','equipo','permisotrabajo','caracru','subru','valrefru','ruman'));


  //  return view("equipo.rutina.ruman.create",compact('tiporu','equipo'));

  }
  public function create($idequipo)
  {}
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(rumanFormRequest $request)
  {  //ruman::create($request->all());
  try{
        DB::beginTransaction();
        $ruman=new ruman;
        $ruman->idtipo_rutina=$request->get('idtipo_rutina');
        $ruman->idequipo=$request->get('idequipo');
        $mytime = Carbon::now('America/Guatemala');
        $ruman->fecha_realizacion_rutina=$mytime->toDateTimeString();
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
       $noti->backgroundColor='black';
       $noti->textColor='white';
       $noti->title=$request->get('idequipo');
       $noti->save();

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
//  return view('actualizar',$request->get('idequipo'));
  return redirect()->route('actualizar', [$request->get('idequipo')]);
  }



  public function asignar($id,$idequipo)
  {
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
       ->paginate(100);
        return view('equipo.rutina.ruman.asignarrutina', compact('ruman','rumen','idequipo','caracru','subru','valrefru','tiporu','rutina'));



  }
  public function agregar()
  {



  }

  /**
   * Display the specified resource.
   *
   * @param  \App\ruman  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function show($id)

  {

    $caracru=caracru::all();
    $subru=subru::all();
    $valrefru=valrefru::all();
    $detallerutina = detcaracru::all();
    $tiporu=tiporu::all();
    $equipo=Equipo::all();
    $ruman=ruman::findOrFail($id);
    $permisotrabajo=PermisoTrabajo::all();
    return view('equipo.rutina.ruman.show', compact('detallerutina','ruman','tiporu','equipo','permisotrabajo','caracru','subru','valrefru'));

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\ruman  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  { $notificacion=Notificacion::all();
    $caracru=caracru::all();
    $subru=subru::all();
    $valrefru=valrefru::all();
      $detallerutina = detcaracru::all();
    $tiporu=tiporu::all();
    $equipo=Equipo::all();
  $ruman=ruman::findOrFail($id);
      $permisotrabajo=PermisoTrabajo::all();
    return view('equipo.rutina.ruman.edit', compact('notificacion','valrefru','subru','caracru','detallerutina','ruman','tiporu','equipo','permisotrabajo'));
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
    ruman::findOrFail($id)->update($request->all());

    $cont = 0;
    $comentario_detalle_caracteristica_rutina = $request->get('comentario_detalle_caracteristica_rutina');
    $estado_detalle_caracteristica_rutina = $request->get('estado_detalle_caracteristica_rutina');
    $iddetalle_caracteristica_rutina = $request->get('iddetalle_caracteristica_rutina');
    $idequipo = $request->get('idequipo');

    while($cont <count($comentario_detalle_caracteristica_rutina)){

        DB::table('detalle_caracteristica_rutina')
                    ->where('iddetalle_caracteristica_rutina',$iddetalle_caracteristica_rutina[$cont])
                    ->update(['estado_detalle_caracteristica_rutina' =>  $estado_detalle_caracteristica_rutina[$cont],'comentario_detalle_caracteristica_rutina'=>$comentario_detalle_caracteristica_rutina[$cont]]);
                      $cont=$cont+1;
    }

    try{
          DB::beginTransaction();
          $ruman=new ruman;
          $ruman->idtipo_rutina=$request->get('idtipo_rutina');
          $ruman->idequipo=$request->get('idequipo');
          $mytime = Carbon::now('America/Guatemala');
          $ruman->fecha_realizacion_rutina=$mytime->toDateTimeString();
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
         $noti->backgroundColor='black';
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









    return redirect()->route('actualizar',$idequipo);

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

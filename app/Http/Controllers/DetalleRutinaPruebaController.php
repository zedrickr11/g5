<?php

namespace App\Http\Controllers;

use App\DetalleRutinaPrueba;
use Illuminate\Http\Request;
use App\Notificacion;
use App\ruman;
use DB;
use App\detrupru;
use Carbon\Carbon;
use App\DetalleHerramienta;
use App\DetalleRepuestoRutina;
use App\DetalleInsumoRutina;
class DetalleRutinaPruebaController extends Controller
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      try{
        DB::beginTransaction();
        $ruman=new ruman;
        $ruman->idtipo_rutina=3;
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



          $noti=new Notificacion;
          $noti->descripcion_noti=$request->get('descripcion_noti');
          $noti->start=$request->get('start');
          $noti->end=$request->get('end');
          $noti->rutina_mantenimiento_idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
          $noti->estado_notificacion='0';
          $noti->backgroundColor='yellow';
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
     * @param  \App\DetalleRutinaPrueba  $detalleRutinaPrueba
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleRutinaPrueba $detalleRutinaPrueba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleRutinaPrueba  $detalleRutinaPrueba
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleRutinaPrueba $detalleRutinaPrueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleRutinaPrueba  $detalleRutinaPrueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
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
                $comentario_detalle_rutina_prueba = $request->get('comentario_detalle_rutina_prueba');
                $estado_detalle_rutina_prueba = $request->get('estado_detalle_rutina_prueba');
                $iddetalle_rutina_prueba = $request->get('iddetalle_rutina_prueba');
                $idequipo = $request->get('idequipo');

                while($cont <count($comentario_detalle_rutina_prueba)){
            $mytime = Carbon::now('America/Guatemala');
              if( $estado_detalle_rutina_prueba[$cont]==1){
                    DB::table('detalle_rutina_prueba')
                                ->where('iddetalle_rutina_prueba',$iddetalle_rutina_prueba[$cont])
                                ->update(['estado_detalle_rutina_prueba' =>  $estado_detalle_rutina_prueba[$cont],

                                  'fecha_detalle_rutina_prueba' =>$mytime->toDateTimeString(),

                                'comentario_detalle_rutina_prueba'=>$comentario_detalle_rutina_prueba[$cont]]);
                                  $cont=$cont+1;
                                    }
              else{
                DB::table('detalle_rutina_prueba')
                            ->where('iddetalle_rutina_prueba',$iddetalle_rutina_prueba[$cont])
                            ->update(['estado_detalle_rutina_prueba' => $estado_detalle_rutina_prueba[$cont],
                            'comentario_detalle_rutina_prueba'=>$comentario_detalle_rutina_prueba[$cont]]);
                              $cont=$cont+1;
              }

                }
                $estado_rutina=$request->get('estado_rutina');
            if("$estado_rutina"=="REALIZADO" and $rutinatipo==3){
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

                      $idprueba_rutina2 = $request->get('idprueba_rutina2');
                      $idsubgrupo_prueba2= $request->get('idsubgrupo_prueba2');
                      $idvalor_ref_prueba2 = $request->get('idvalor_ref_prueba2');
                      $norma_detalle_rutina_prueba2= $request->get('norma_detalle_rutina_prueba2');
                      $unidad_medida_detalle_rutina_prueba2 = $request->get('unidad_medida_detalle_rutina_prueba2');

                     $noti=new Notificacion;
                     $noti->descripcion_noti=$request->get('descripcion_noti');
                     $noti->rutina_mantenimiento_idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
                     $noti->estado_notificacion='0';
                     $noti->backgroundColor='yellow';
                     $noti->textColor='white';
                     $noti->title=$request->get('idequipo');
                     $noti->save();

                      $cont = 0;

                      while($cont <count($idprueba_rutina2)){

                          $detalle = new detrupru();
                          $detalle->idprueba_rutina=$idprueba_rutina2[$cont];
                          $detalle->idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
                          $detalle->idvalor_ref_prueba=$idvalor_ref_prueba2[$cont];
                          $detalle->idsubgrupo_prueba= $idsubgrupo_prueba2[$cont];
                          $detalle->norma_detalle_rutina_prueba=$norma_detalle_rutina_prueba2[$cont];
                          $detalle->unidad_medida_detalle_rutina_prueba= $unidad_medida_detalle_rutina_prueba2[$cont];
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleRutinaPrueba  $detalleRutinaPrueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleRutinaPrueba $detalleRutinaPrueba)
    {
        //
    }
}

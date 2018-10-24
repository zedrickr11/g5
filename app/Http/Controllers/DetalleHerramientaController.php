<?php

namespace App\Http\Controllers;

use App\DetalleHerramienta;
use Illuminate\Http\Request;
use App\Equipo;
use DB;
use App\Imagen_equipo;
use App\Proveedor;
use App\UnidadSalud;
use App\Area;
use App\Estado;
use App\ServicioTecnico;
use App\Fabricante;
use App\Hospital;
use App\Departamento;
use App\Region;
use App\Grupo;
use App\Subgrupo;
use App\Conf_corr;
use App\TipoUnidadSalud;
use App\fichatecnica;
use App\detcaractec;
use App\TipoManual;
use App\Detalle_manual;
USE App\CaracTec;
USE App\subcaractec;
USE App\valorreftec;
USE App\ruman;
use App\tiporu;
use App\PermisoTrabajo;
use App\detcaracru;
use Carbon\Carbon;
USE App\caracru;
use App\subru;
use App\valrefru;
use App\User;
use App\TecnicoExterno;
use App\TecnicoInterno;
use App\DetalleTecnicoInterno;
use App\DetalleTecnicoExterno;
use App\subpru;
use App\valrefpru;
use App\pruru;
use App\DetalleRutinaPrueba;
use App\detrupru;
use App\Notificacion;


class DetalleHerramientaController extends Controller
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
      $aceptar=$request->get('aceptar');
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
          $ruman->idtipo_rutina=3;
          $ruman->idequipo=$request->get('idequipo');
          $mytime = Carbon::now('America/Guatemala');
        //  $ruman->fecha_realizacion_rutina=$mytime->toDateTimeString();
          $ruman->observaciones_rutina=$observaciones_rutina[$num];
          $ruman->tiempo_estimado_rutina_mantenimiento=$tiempo_estimado_rutina_mantenimiento[$num];
          $ruman->responsable_area_rutina_mantenimiento=$responsable_area_rutina_mantenimiento[$num];
          $ruman->idsubgrupo=$idsubgrupo[$num];
          $ruman->frecuencia_rutina=$frecuencia_rutina[$num];
          $ruman->estado_rutina='PENDIENTE';
          $ruman->save();

          $comentario_detalle_caracteristica_rutina = $request->get('comentario_detalle_caracteristica_rutina');
          $idprueba_rutina = $request->get('idprueba_rutina');
          $idsubgrupo_prueba= $request->get('idsubgrupo_prueba');
          $idvalor_ref_prueba = $request->get('idvalor_ref_prueba');
          $norma_detalle_rutina_prueba= $request->get('norma_detalle_rutina_prueba');
          $unidad_medida_detalle_rutina_prueba = $request->get('unidad_medida_detalle_rutina_prueba');


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

          while($cont2 <count($idprueba_rutina[$num])){

              $detalle = new DetalleRutinaPrueba();
              $detalle->idprueba_rutina=$idprueba_rutina[$num][$cont2];
              $detalle->idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
              $detalle->idvalor_ref_prueba=$idvalor_ref_prueba[$num][$cont2];
              $detalle->idsubgrupo_prueba= $idsubgrupo_prueba[$num][$cont2];
              $detalle->norma_detalle_rutina_prueba= $norma_detalle_rutina_prueba[$num][$cont2];
              $detalle->unidad_medida_detalle_rutina_prueba= $unidad_medida_detalle_rutina_prueba[$num][$cont2];
              $detalle->save();
              $cont2=$cont2+1;

          }



          DB::commit();
  }
  }}catch(\Exception $e)
        {
            DB::rollback();

      }
  return redirect()->route('actualizar', [$request->get('idequipo')]);
}else{

      $tecnicointerno=TecnicoInterno::all();
        $tecnicoexterno=TecnicoExterno::all();
        $users=User::all();
        $idequipo= $request->get('idequipo');
        $pidequipo= $request->get('pidequipo');
         $equipo=equipo::all();
          $rutina=ruman::all();
            $tiporu=tiporu::all();
            $pruru=pruru::all();
            $subpru=subpru::all();
            $valrefpru=valrefpru::all();
              $rumen = DetalleRutinaPrueba::all();
              $ruman=DB::table('rutina_mantenimiento as d')
              ->select('d.*')
            ->where('d.idequipo','LIKE',$pidequipo)
              ->where('d.estado_rutina','LIKE','PENDIENTE')
                  ->where('d.idtipo_rutina','LIKE','3')
             ->orderBy('idrutina_mantenimiento','desc')
             ->paginate(100);
              return view('equipo.rutina.ruman.asignarrutina02', compact('tecnicoexterno','tecnicointerno','users','equipo','ruman','rumen','idequipo','pruru','subpru','valrefpru','tiporu','rutina'));
}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleHerramienta  $detalleHerramienta
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleHerramienta $detalleHerramienta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleHerramienta  $detalleHerramienta
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleHerramienta $detalleHerramienta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleHerramienta  $detalleHerramienta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleHerramienta $detalleHerramienta)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleHerramienta  $detalleHerramienta
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleHerramienta $detalleHerramienta)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\AsignarRutina;
use Illuminate\Http\Request;
use App\Equipo;

use App\Http\Controllers\Controller;

//falta el form Request
use App\Http\Requests\EquipoFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
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

class AsignarRutinaController extends Controller
{
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
            $ruman->idtipo_rutina=$request->get('idtipo_rutina');
            $mytime = Carbon::now('America/Guatemala');
            $ruman->fecha_realizacion_rutina=$mytime->toDateTimeString();
            $ruman->observaciones_rutina=$request->get('observaciones_rutina');
            $ruman->tiempo_estimado_rutina_mantenimiento=$request->get('tiempo_estimado_rutina_mantenimiento');
            $ruman->responsable_area_rutina_mantenimiento=$request->get('responsable_area_rutina_mantenimiento');
            $ruman->permiso_trabajo_idpermiso_trabajo=$request->get('permiso_trabajo_idpermiso_trabajo');
            $ruman->idsubgrupo=$request->get('subgrupo');
            $ruman->frecuencia_rutina=$request->get('frecuencia_rutina');
            $ruman->estado_rutina='PENDIENTE';
            $ruman->save();

            $comentario_detalle_caracteristica_rutina = $request->get('comentario_detalle_caracteristica_rutina');
            $idcaracteristica_rutina = $request->get('idcaracteristica_rutina');
            $idsubgrupo_rutina= $request->get('idsubgrupo_rutina');
            $idvalor_ref_rutina = $request->get('idvalor_ref_rutina');

          //  $noti=new Notificacion;
          //  $noti->descripcion_noti=$request->get('descripcion_noti');
          //  $noti->start=$request->get('start');
          //  $noti->end=$request->get('end');
          //  $noti->rutina_mantenimiento_idrutina_mantenimiento=$ruman->idrutina_mantenimiento;
          //  $noti->estado_notificacion='0';
          //  $noti->backgroundColor='black';
          //  $noti->textColor='white';
          //  $noti->title='';
          //  $noti->save();

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

      return redirect()->route('actualizar', [$request->get('idequipo')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AsignarRutina  $asignarRutina
     * @return \Illuminate\Http\Response
     */
    public function show(AsignarRutina $asignarRutina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AsignarRutina  $asignarRutina
     * @return \Illuminate\Http\Response
     */
    public function edit(AsignarRutina $asignarRutina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AsignarRutina  $asignarRutina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignarRutina $asignarRutina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AsignarRutina  $asignarRutina
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsignarRutina $asignarRutina)
    {
        //
    }
}

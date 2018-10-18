<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\SolicitudTrabajoFormRequest;
use App\SolicitudTrabajo;
use App\DetalleTipoTrabajo;
use App\DetalleAreaMantenimiento;
use App\Http\Controllers\Controller;
use DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Collection;
use Carbon\Carbon;
class SolicitudTrabajoController extends Controller
{
    function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto']);
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
                  $solicitudes=DB::table('solitud_trabajo as t')
                  ->select('*')
                  ->where('numero','LIKE','%'.$query.'%')
                  ->orderBy('idsolitud_trabajo','desc')
                  ->paginate(10);
          return view('trabajo.solicitud.index', ["solicitudes"=>$solicitudes,"searchText"=>$query]);
              }
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {

           $areas = DB::table('area_mantenimiento')
                 ->select('idarea_mantenimiento','area_mantenimiento AS area')
                 ->get();
           $tipos = DB::table('tipo_trabajo')
                 ->select('idtipo_trabajo','nombre_tipo AS tipo')
                 ->get();
           $equipos = DB::table('equipo')
                       ->select('idequipo','nombre_equipo AS equipo')
                       ->get();
             return view("trabajo.solicitud.create",["tipos"=>$tipos,"areas"=>$areas,"equipos"=>$equipos]);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
      public function store (SolicitudTrabajoFormRequest $request)
      {
         try{
              DB::beginTransaction();
                $solicitudes=new SolicitudTrabajo;
                $solicitudes->numero=$request->get('numero');


                $mytime = Carbon::now('America/Guatemala');
                $solicitudes->fecha=$mytime->toDateString();

                $solicitudes->descripcion=$request->get('descripcion');
                $solicitudes->compra_material=$request->get('compra_material');
                $solicitudes->contratar_trabajo=$request->get('contratar_trabajo');
                $solicitudes->dirigido_solitud_trabajo=$request->get('dirigido_solitud_trabajo');
                $solicitudes->puesto_dirigido_solitud_trabajo=$request->get('puesto_dirigido_solitud_trabajo');
                $solicitudes->edificio_solitud_trabajo=$request->get('edificio_solitud_trabajo');
                $solicitudes->jefe_solitud_trabajo=$request->get('jefe_solitud_trabajo');
                $solicitudes->idequipo=$request->get('idequipo');
                $solicitudes->save();

                $idtipo_trabajo = $request->get('idtipo_trabajo');
                $descrpcion_detalle_tipo_trabajo = $request->get('descrpcion_detalle_tipo_trabajo');


                $cont = 0;

                while($cont <count($idtipo_trabajo)){
                    $detalle = new DetalleTipoTrabajo();
                    $detalle->idsolitud_trabajo = $solicitudes->idsolitud_trabajo;
                    $detalle->idtipo_trabajo= $idtipo_trabajo[$cont];
                    $detalle->descrpcion_detalle_tipo_trabajo= $descrpcion_detalle_tipo_trabajo[$cont];
                    $detalle->estado= 1;
                    $detalle->save();
                    $cont=$cont+1;
                }

                $idarea_mantenimiento = $request->get('idarea_mantenimiento');


                $conts = 0;

                while($conts <count($idarea_mantenimiento)){
                    $detalles = new DetalleAreaMantenimiento();
                    $detalles->idsolitud_trabajo = $solicitudes->idsolitud_trabajo;
                    $detalles->idarea_mantenimiento= $idarea_mantenimiento[$conts];
                    $detalles->estado_detalle_area_matenimiento = 1;
                    $detalles->save();
                    $conts=$conts+1;
                }

                DB::commit();

              }catch(\Exception $e)
              {
                  DB::rollback();
              }

                return back();
      }


    /**
     * Display the specified resource.
     *
     * @param  \App\SolicitudTrabajo  $solicitudTrabajo
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $solicitudes=DB::table('solitud_trabajo as s')
             ->join('equipo as di','s.idequipo','=','di.idequipo')
             ->select('s.idsolitud_trabajo','s.numero','s.fecha','s.descripcion','s.compra_material','s.contratar_trabajo','s.dirigido_solitud_trabajo','s.puesto_dirigido_solitud_trabajo','s.edificio_solitud_trabajo','s.jefe_solitud_trabajo','di.nombre_equipo as equipo')
             ->where('s.idsolitud_trabajo','=',$id)
             ->first();
        $detalles=DB::table('detalle_tipo_trabajo as d')
             ->join('tipo_trabajo as t','d.idtipo_trabajo','=','t.idtipo_trabajo')
             ->select('t.nombre_tipo as tipo','d.descrpcion_detalle_tipo_trabajo','d.estado')
             ->where('d.idsolitud_trabajo','=',$id)
             ->get();
      $detalless=DB::table('detalle_area_matenimiento as d')
             ->join('area_mantenimiento as t','d.idarea_mantenimiento','=','t.idarea_mantenimiento')
             ->select('t.area_mantenimiento as area')
             ->where('d.idsolitud_trabajo','=',$id)
             ->get();
return view("trabajo.solicitud.show",["solicitudes"=>$solicitudes,"detalles"=>$detalles,"detalless"=>$detalless]);

     }




     public function ficha($id)
     {
     $solicitudes=DB::table('solitud_trabajo')->where('idsolitud_trabajo', $id)->get();
     $detalles=DB::table('detalle_tipo_trabajo as d')
          ->join('tipo_trabajo as t','d.idtipo_trabajo','=','t.idtipo_trabajo')
          ->select('t.nombre_tipo as tipo','d.descrpcion_detalle_tipo_trabajo','d.estado')
          ->where('d.idsolitud_trabajo','=',$id)
          ->get();
     $detalless=DB::table('detalle_area_matenimiento as d')
            ->join('area_mantenimiento as t','d.idarea_mantenimiento','=','t.idarea_mantenimiento')
            ->select('t.area_mantenimiento as area')
            ->where('d.idsolitud_trabajo','=',$id)
            ->get();
     //$view= view("equipo.caracteristica.fichatecnica.show",compact('equipo'));

         $pdf = PDF::loadView("trabajo.solicitudpdf.show",["solicitudes"=>$solicitudes,"detalles"=>$detalles,"detalless"=>$detalless]);

         return $pdf->stream('SolicitudTrabajo.pdf');
         //return view("equipo.caracteristica.fichatecnica.show",compact('equipo'));
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SolicitudTrabajo  $solicitudTrabajo
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $solicitudes=SolicitudTrabajo::findOrFail($id);
       return view('trabajo.solicitud.edit', compact('solicitudes'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SolicitudTrabajo  $solicitudTrabajo
     * @return \Illuminate\Http\Response
     */
     public function update(SolicitudTrabajoFormRequest $request, $id)
     {
       SolicitudTrabajo::findOrFail($id)->update($request->all());
       return redirect()->route('solicitud.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SolicitudTrabajo  $solicitudTrabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}

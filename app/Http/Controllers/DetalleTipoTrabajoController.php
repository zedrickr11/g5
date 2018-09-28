<?php

namespace App\Http\Controllers;

use App\DetalleTipoTrabajo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SolicitudTrabajo;
use App\TipoTrabajo;
use App\Http\Requests\DetalleTipoTrabajoFormRequest;
use DB;
class DetalleTipoTrabajoController extends Controller
{
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
           $detalletipos=DB::table('detalle_tipo_trabajo as d')
           ->join('solitud_trabajo as s','d.solitud_trabajo_idsolitud_trabajo','=', 's.idsolitud_trabajo')
           ->join('tipo_trabajo as t','d.tipo_trabajo_idtipo_trabajo','=', 't.idtipo_trabajo')
           ->select('d.iddetalle_tipo_trabajo','s.numero as nu','t.nombre_tipo as no','d.descrpcion_detalle_tipo_trabajo','d.estado')
           ->where('t.nombre_tipo','LIKE','%'.$query.'%')
           ->orderBy('iddetalle_tipo_trabajo','desc')
           ->paginate(10);
            return view('detalles.detalletipo.index', ["detalletipos"=>$detalletipos,"searchText"=>$query]);
       }
       }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
     {
         $solicitudes=SolicitudTrabajo::all();
         $tipos=TipoTrabajo::all();
         return view("detalles.detalletipo.create",compact('solicitudes','tipos'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(DetalleTipoTrabajoFormRequest $request)
     {

       DetalleTipoTrabajo::create($request->all());
       return redirect()->route('detalletipo.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleTipoTrabajo  $detalleTipoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $solicitudes=SolicitudTrabajo::all();
       $tipos=TipoTrabajo::all();
       $detalletipos=DetalleTipoTrabajo::findOrFail($id);
       return view('detalles.detalletipo.show', compact('detalletipos'), compact('solicitudes','tipos'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleTipoTrabajo  $detalleTipoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $solicitudes=SolicitudTrabajo::all();
       $tipos=TipoTrabajo::all();
       $detalletipos=DetalleTipoTrabajo::findOrFail($id);
         return view('detalles.detalletipo.edit', compact('detalletipos'), compact('solicitudes','tipos'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleTipoTrabajo  $detalleTipoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function update(DetalleTipoTrabajoFormRequest $request, $id)
     {
      DetalleTipoTrabajo::findOrFail($id)->update($request->all());
       return redirect()->route('detalletipo.index');
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleTipoTrabajo  $detalleTipoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function destroy( $id)
     {
        DetalleTipoTrabajo::findOrFail($id)->delete();
       return redirect()->route('detalletipo.index');
     }
}

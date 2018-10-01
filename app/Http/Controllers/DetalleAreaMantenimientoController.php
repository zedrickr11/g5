<?php

namespace App\Http\Controllers;

use App\DetalleAreaMantenimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AreaMantenimiento;
use App\SolicitudTrabajo;
use App\Http\Requests\DetalleAreaMatenimientoFormRequest;
use DB;
class DetalleAreaMantenimientoController extends Controller
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
           $detareas=DB::table('detalle_area_matenimiento as d')
           ->join('area_mantenimiento as a','d.area_mantenimiento_idarea_mantenimiento','=', 'a.idarea_mantenimiento')
           ->join('solitud_trabajo as s','d.solitud_trabajo_idsolitud_trabajo','=', 's.idsolitud_trabajo')
           ->select('d.iddetalle_area_matenimiento','a.area_mantenimiento as area','s.numero as nu','d.estado_detalle_area_matenimiento')
           ->where('a.area_mantenimiento','LIKE','%'.$query.'%')
           ->orderBy('iddetalle_area_matenimiento','desc')
           ->paginate(10);
            return view('detalles.detallearea.index', ["detareas"=>$detareas,"searchText"=>$query]);
       }
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       $areas=AreaMantenimiento::all();
       $solicitudes=SolicitudTrabajo::all();
         return view("detalles.detallearea.create",compact('areas','solicitudes'));
     }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(DetalleAreaMatenimientoFormRequest $request)
     {

       DetalleAreaMantenimiento::create($request->all());
       return redirect()->route('detallearea.index');
     }
    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleAreaMantenimiento  $detalleAreaMantenimiento
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $areas=AreaMantenimiento::all();
       $solicitudes=SolicitudTrabajo::all();
       $detalleareas=DetalleAreaMantenimiento::findOrFail($id);
      return view('detalles.detallearea.show', compact('detalleareas'),compact('areas','solicitudes'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleAreaMantenimiento  $detalleAreaMantenimiento
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $areas=AreaMantenimiento::all();
       $solicitudes=SolicitudTrabajo::all();
       $detalleareas=DetalleAreaMantenimiento::findOrFail($id);
       return view('detalles.detallearea.edit', compact('detalleareas'),compact('areas','solicitudes'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleAreaMantenimiento  $detalleAreaMantenimiento
     * @return \Illuminate\Http\Response
     */
     public function update(DetalleAreaMatenimientoFormRequest $request, $id)
     {
    DetalleAreaMantenimiento::findOrFail($id)->update($request->all());
       return redirect()->route('detallearea.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleAreaMantenimiento  $detalleAreaMantenimiento
     * @return \Illuminate\Http\Response
     */
     public function destroy( $id)
     {
        DetalleAreaMantenimiento::findOrFail($id)->delete();
       return redirect()->route('detallearea.index');
     }
}

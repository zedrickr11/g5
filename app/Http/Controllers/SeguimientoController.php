<?php

namespace App\Http\Controllers;

use App\Seguimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SeguimientoFormRequest;
use App\SolicitudTrabajo;
use DB;
class SeguimientoController extends Controller
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
           $seguimientos= DB::table('seguimiento as s')
           ->join('solitud_trabajo as t', 's.solitud_trabajo_idsolitud_trabajo','=', 't.idsolitud_trabajo')
           ->select('s.idseguimiento','s.fecha_seguimiento','s.responsable_seguimiento','t.numero as num')
           ->where('responsable_seguimiento','LIKE','%'.$query.'%')
           ->orderBy('idseguimiento','desc')
           ->paginate(10);
           return view('trabajo.seguimiento.index',["seguimientos"=> $seguimientos,"searchText"=>$query]);
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
         return view("trabajo.seguimiento.create",compact('solicitudes'));
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(SeguimientoFormRequest $request)
     {
       Seguimiento::create($request->all());
       return redirect()->route('seguimiento.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $solicitudes=SolicitudTrabajo::all();
       $seguimientos=Seguimiento::findOrFail($id);
       return view('trabajo.seguimiento.show', compact('seguimientos'), compact('solicitudes'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $solicitudes=SolicitudTrabajo::all();
       $seguimientos=Seguimiento::findOrFail($id);
       return view('trabajo.seguimiento.edit', compact('seguimientos'),compact('solicitudes'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
     public function update(SeguimientoFormRequest $request, $id)
     {
       Seguimiento::findOrFail($id)->update($request->all());
       return redirect()->route('seguimiento.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         //
         Seguimiento::findOrFail($id)->delete();
         return redirect()->route('seguimiento.index');
     }
}

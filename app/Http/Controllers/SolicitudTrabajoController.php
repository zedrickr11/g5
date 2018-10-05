<?php

namespace App\Http\Controllers;

use App\SolicitudTrabajo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SolicitudTrabajoFormRequest;
use DB;
use Barryvdh\DomPDF\Facade as PDF;
class SolicitudTrabajoController extends Controller
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
           return view("trabajo.solicitud.create");
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
      public function store(SolicitudTrabajoFormRequest $request)
      {
        SolicitudTrabajo::create($request->all());
        return redirect()->route('solicitud.index');
      }


    /**
     * Display the specified resource.
     *
     * @param  \App\SolicitudTrabajo  $solicitudTrabajo
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $solicitud=SolicitudTrabajo::findOrFail($id);
       return view('trabajo.solicitud.show', compact('solicitud'));
     }




     public function ficha($id)
     {
     $solicitudes=DB::table('solitud_trabajo')->where('idsolitud_trabajo', $id)->get();
     //$view= view("equipo.caracteristica.fichatecnica.show",compact('equipo'));

         $pdf = PDF::loadView("trabajo.solicitudpdf.show",compact('solicitudes'));

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
    public function destroy(SolicitudTrabajo $solicitudTrabajo)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\detcaracesp;
use Illuminate\Http\Request;
use DB;
use App\caracespefun;
use App\valorrefesp;


class detcaracespController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $detcaracesp=DB::table('detalle_caracteristica_especial as a')
      ->join('caracteristica_especial_funcionamiento as d','a.idcaracteristica_especial','=','d.idcaracteristica_especial')
        ->join('valor_ref_esp as s','a.idvalor_ref_esp','=','s.idvalor_ref_esp')

          ->join('equipo as e','a.idequipo','=','e.idequipo')

      ->select('d.nombre_caracteristica_especial as idcaracteristica_especial','e.nombre_equipo as idequipo','s.nombre_valor_ref_esp as idvalor_ref_esp','a.estado_detalle_caracteristica_especial','descripcion_detalle_caracteristica_especial','valor_detalle_caracteristica_especial')
      ->get();



      return view('equipo.caracteristica.detcaracesp.index', compact('detcaracesp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $caracespefun=caracespefun::all();
      $valorrefesp=valorrefesp::all();

      return view("equipo.caracteristica.detcaracesp.create",compact('caracespefun','valorrefesp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function show(detcaracesp $detcaracesp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function edit(detcaracesp $detcaracesp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detcaracesp $detcaracesp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function destroy(detcaracesp $detcaracesp)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\DetalleInsumoRutina;
use Illuminate\Http\Request;

class DetalleInsumoRutinaController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleInsumoRutina  $detalleInsumoRutina
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleInsumoRutina $detalleInsumoRutina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleInsumoRutina  $detalleInsumoRutina
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleInsumoRutina $detalleInsumoRutina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleInsumoRutina  $detalleInsumoRutina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleInsumoRutina $detalleInsumoRutina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleInsumoRutina  $detalleInsumoRutina
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleInsumoRutina $detalleInsumoRutina)
    {
        //
    }
}

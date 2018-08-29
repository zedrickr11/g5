<?php

namespace App\Http\Controllers;

use App\UnidadSalud;
use App\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UnidadSaludController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*
    $unidades=DB::table('unidadsalud as u')
    ->join('hospital as h', 'h.idhospital','=', 'u.idhospital')
    ->select('u.idunidadsalud','u.unidad_salud','h.hospital');
    return view('hospital.unidad.index', compact('unidades'));
*/
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
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function show(UnidadSalud $unidadSalud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function edit(UnidadSalud $unidadSalud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadSalud $unidadSalud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnidadSalud  $unidadSalud
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnidadSalud $unidadSalud)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\DetalleTecnicoExterno;
use Illuminate\Http\Request;

class DetalleTecnicoExternoController extends Controller
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
     * @param  \App\DetalleTecnicoExterno  $detalleTecnicoExterno
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleTecnicoExterno $detalleTecnicoExterno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleTecnicoExterno  $detalleTecnicoExterno
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleTecnicoExterno $detalleTecnicoExterno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleTecnicoExterno  $detalleTecnicoExterno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleTecnicoExterno $detalleTecnicoExterno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleTecnicoExterno  $detalleTecnicoExterno
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleTecnicoExterno $detalleTecnicoExterno)
    {
        //
    }
}

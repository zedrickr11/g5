<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\TipoManual;

class TipoManualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipoManuals=TipoManual::all();
        return view('equipo.tipoManual.index', compact('tipoManuals'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("equipo.tipoManual.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TipoManual::create($request->all());
        return redirect()->route('tipoManual.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoManual  $tipoManual
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $tipoManuals=TipoManual::findOrFail($id);
        return view('equipo.tipoManual.show', compact('tipoManuals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoManual  $tipoManual
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $tipoManuals=TipoManual::findOrFail($id);
        return view('equipo.tipoManual.edit', compact('tipoManuals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoManual  $tipoManual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         TipoManual::findOrFail($id)->update($request->all());
      return redirect()->route('tipoManual.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoManual  $tipoManual
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
         TipoManual::findOrFail($id)->delete();
      return redirect()->route('tipoManual.index'); 
    }
}

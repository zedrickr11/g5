<?php

namespace App\Http\Controllers;

use App\Parte;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Equipo;
use App\Http\Requests\ParteFormRequest;


class ParteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipo= Equipo::all();
        return view("parte.create", compact('equipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Parte::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parte  $parte
     * @return \Illuminate\Http\Response
     */
    public function show(Parte $parte)
    {
        $parte=Parte::findOrFail($id);
        return view ('equipo.parte.show', compact('partes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parte  $parte
     * @return \Illuminate\Http\Response
     */
    public function edit(Parte $parte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parte  $parte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parte $parte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parte  $parte
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Parte::findOrFail($id)->delete();
        return back();
    }
}

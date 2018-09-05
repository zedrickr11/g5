<?php

namespace App\Http\Controllers;

use App\CaracTec;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CaracTecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $caract_tec=CaracTec::all();
      return view('equipo.caracteristica.caractec.index', compact('caract_tec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view("equipo.caracteristica.caractec.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  CaracTec::create($request->all());
      return redirect()->route('caractec.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaracTec  $caracTec
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  $caract_tec=CaracTec::findOrFail($id);
      return view('equipo.caracteristica.caractec.show', compact('caract_tec'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaracTec  $caracTec
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $caract_tec=CaracTec::findOrFail($id);
      return view('equipo.caracteristica.caractec.edit', compact('caract_tec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaracTec  $caracTec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      CaracTec::findOrFail($id)->update($request->all());
      return redirect()->route('caractec.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaracTec  $caracTec
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {CaracTec::findOrFail($id)->delete();
    return redirect()->route('caractec.index');
    }
}

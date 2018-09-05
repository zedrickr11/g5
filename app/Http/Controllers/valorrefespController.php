<?php

namespace App\Http\Controllers;

use App\valorrefesp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class valorrefespController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $valorrefesp=valorrefesp::all();
    return view('equipo.caracteristica.valorrefesp.index', compact('valorrefesp'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        return view("equipo.caracteristica.valorrefesp.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {  valorrefesp::create($request->all());
    return redirect()->route('valorrefesp.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\valorrefesp  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $valorrefesp=valorrefesp::findOrFail($id);
    return view('equipo.caracteristica.valorrefesp.show', compact('valorrefesp'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\valorrefesp  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  $valorrefesp=valorrefesp::findOrFail($id);
    return view('equipo.caracteristica.valorrefesp.edit', compact('valorrefesp'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\valorrefesp  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    valorrefesp::findOrFail($id)->update($request->all());
    return redirect()->route('valorrefesp.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\valorrefesp  $valorrefesp
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {valorrefesp::findOrFail($id)->delete();
  return redirect()->route('valorrefesp.index');
  }
}

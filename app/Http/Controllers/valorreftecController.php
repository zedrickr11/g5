<?php

namespace App\Http\Controllers;

use App\valorreftec;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class valorreftecController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $valorreftec=valorreftec::all();
    return view('equipo.caracteristica.valorreftec.index', compact('valorreftec'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        return view("equipo.caracteristica.valorreftec.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {  valorreftec::create($request->all());
    return redirect()->route('valorreftec.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\valorreftec  $valorreftec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $valorreftec=valorreftec::findOrFail($id);
    return view('equipo.caracteristica.valorreftec.show', compact('valorreftec'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\valorreftec  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  $valorreftec=valorreftec::findOrFail($id);
    return view('equipo.caracteristica.valorreftec.edit', compact('valorreftec'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\valorreftec  $valorreftec
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    valorreftec::findOrFail($id)->update($request->all());
    return redirect()->route('valorreftec.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\valorreftec  $valorreftec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {valorreftec::findOrFail($id)->delete();
  return redirect()->route('valorreftec.index');
  }
}

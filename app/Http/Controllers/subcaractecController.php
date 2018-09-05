<?php

namespace App\Http\Controllers;

use App\subcaractec;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class subcaractecController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $subcaractec=subcaractec::all();
    return view('equipo.caracteristica.subcaractec.index', compact('subcaractec'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        return view("equipo.caracteristica.subcaractec.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {  subcaractec::create($request->all());
    return redirect()->route('subcaractec.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\subcaractec  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $subcaractec=subcaractec::findOrFail($id);
    return view('equipo.caracteristica.subcaractec.show', compact('subcaractec'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\subcaractec  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  $subcaractec=subcaractec::findOrFail($id);
    return view('equipo.caracteristica.subcaractec.edit', compact('subcaractec'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\subcaractec  $subcaractec
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    subcaractec::findOrFail($id)->update($request->all());
    return redirect()->route('subcaractec.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\subcaractec  $subcaractec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {subcaractec::findOrFail($id)->delete();
  return redirect()->route('subcaractec.index');
  }
}

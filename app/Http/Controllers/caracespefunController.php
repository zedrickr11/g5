<?php

namespace App\Http\Controllers;

use App\caracespefun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class caracespefunController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $caracespefun=caracespefun::all();
    return view('equipo.caracteristica.caracespefun.index', compact('caracespefun'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        return view("equipo.caracteristica.caracespefun.create");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {  caracespefun::create($request->all());
    return redirect()->route('caracespefun.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\caracespefun  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {  $caracespefun=caracespefun::findOrFail($id);
    return view('equipo.caracteristica.caracespefun.show', compact('caracespefun'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\caracespefun  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
  $caracespefun=caracespefun::findOrFail($id);
    return view('equipo.caracteristica.caracespefun.edit', compact('caracespefun'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\caracespefun  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    caracespefun::findOrFail($id)->update($request->all());
    return redirect()->route('caracespefun.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\CaracTec  $caracTec
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {caracespefun::findOrFail($id)->delete();
  return redirect()->route('caracespefun.index');
  }
}

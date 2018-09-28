<?php

namespace App\Http\Controllers;

use App\valrefpru;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\valorrefpruFormRequest;


class valorrefpruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if ($request)
      {
          $query=trim($request->get('searchText'));
          $valorrefpru=DB::table('valor_ref_prueba as f')
          ->select('*')
          ->where('descripcion','LIKE','%'.$query.'%')
          ->orderBy('idvalor_ref_prueba','desc')
          ->paginate(10);
          return view('equipo.rutina.valorrefpru.index',["valorrefpru"=>$valorrefpru,"searchText"=>$query]);
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("equipo.rutina.valorrefpru.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(valorrefpruFormRequest $request)
    {
      valrefpru::create($request->all());
       return redirect()->route('valorrefpru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\valrefpru  $valrefpru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $valorrefpru=valrefpru::findOrFail($id);
       return view('equipo.rutina.valorrefpru.show', compact('valorrefpru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\valrefpru  $valrefpru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $valorrefpru=valrefpru::findOrFail($id);
        return view('equipo.rutina.valorrefpru.edit', compact('valorrefpru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\valrefpru  $valrefpru
     * @return \Illuminate\Http\Response
     */
    public function update(valorrefpruFormRequest $request, $id)
    {
      valrefpru::findOrFail($id)->update($request->all());
      return redirect()->route('valorrefpru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\valrefpru  $valrefpru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      valrefpru::findOrFail($id)->delete();
      return redirect()->route('valorrefpru.index');
    }
}

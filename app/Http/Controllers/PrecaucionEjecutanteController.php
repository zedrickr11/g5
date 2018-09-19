<?php

namespace App\Http\Controllers;

use App\PrecaucionEjecutante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrecaucionEjecutanteFormRequest;

use DB;
class PrecaucionEjecutanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
         //
         if ($request)
         {
             $query=trim($request->get('searchText'));
               $ejecutantes=DB::table('precaucion_ejecutante as p')
               ->select('*')
               ->where('precaucion_ejecutante','LIKE','%'.$query.'%')
               ->orderBy('idprecaucion_ejecutante','desc')
               ->paginate(10);
       return view('precaucion.ejecutante.index', ["ejecutantes"=>$ejecutantes,"searchText"=>$query]);
           }



     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view("precaucion.ejecutante.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrecaucionEjecutanteFormRequest $request)
    {
      PrecaucionEjecutante::create($request->all());
      return redirect()->route('ejecutante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PrecaucionEjecutante  $precaucionEjecutante
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $ejecutantes=PrecaucionEjecutante::findOrFail($id);
       return view('precaucion.ejecutante.show', compact('ejecutantes'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrecaucionEjecutante  $precaucionEjecutante
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $ejecutantes=PrecaucionEjecutante::findOrFail($id);
       return view('precaucion.ejecutante.edit', compact('ejecutantes'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrecaucionEjecutante  $precaucionEjecutante
     * @return \Illuminate\Http\Response
     */
     public function update(PrecaucionEjecutanteFormRequest $request, $id)
     {
       PrecaucionEjecutante::findOrFail($id)->update($request->all());
       return redirect()->route('ejecutante.index');
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrecaucionEjecutante  $precaucionEjecutante
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       PrecaucionEjecutante::findOrFail($id)->delete();
       return redirect()->route('ejecutante.index');
     }
}

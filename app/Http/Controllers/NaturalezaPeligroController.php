<?php

namespace App\Http\Controllers;

use App\NaturalezaPeligro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NaturalezaPeligroFormRequest;
use DB;
class NaturalezaPeligroController extends Controller
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
               $naturalezas=DB::table('naturaleza_peligro as n')
               ->select('*')
               ->where('naturaleza_peligro','LIKE','%'.$query.'%')
               ->orderBy('idnaturaleza_peligro','desc')
               ->paginate(10);
       return view('peligro.naturaleza.index', ["naturalezas"=>$naturalezas,"searchText"=>$query]);
           }



     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("peligro.naturaleza.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(NaturalezaPeligroFormRequest $request)
     {
       NaturalezaPeligro::create($request->all());
       return redirect()->route('naturaleza.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\NaturalezaPeligro  $naturalezaPeligro
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $naturalezas=NaturalezaPeligro::findOrFail($id);
       return view('peligro.naturaleza.show', compact('naturalezas'));
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NaturalezaPeligro  $naturalezaPeligro
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $naturalezas=NaturalezaPeligro::findOrFail($id);
       return view('peligro.naturaleza.edit', compact('naturalezas'));
     }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NaturalezaPeligro  $naturalezaPeligro
     * @return \Illuminate\Http\Response
     */
     public function update(NaturalezaPeligroFormRequest $request, $id)
     {
       NaturalezaPeligro::findOrFail($id)->update($request->all());
       return redirect()->route('naturaleza.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NaturalezaPeligro  $naturalezaPeligro
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       NaturalezaPeligro::findOrFail($id)->delete();
       return redirect()->route('naturaleza.index');
     }
}

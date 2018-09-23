<?php

namespace App\Http\Controllers;

use App\PrecaucionResponsable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrecaucionResponsableFormRequest;

use DB;
class PrecaucionResponsableController extends Controller
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
               $responsables=DB::table('precaucion_responsable as p')
               ->select('*')
               ->where('precaucion_responsable','LIKE','%'.$query.'%')
               ->orderBy('idprecaucion_responsable','desc')
               ->paginate(10);
       return view('precaucion.responsable.index', ["responsables"=>$responsables,"searchText"=>$query]);
           }



     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view("precaucion.responsable.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(PrecaucionResponsableFormRequest $request)
     {
       PrecaucionResponsable::create($request->all());
       return redirect()->route('responsable.index');
     }
    /**
     * Display the specified resource.
     *
     * @param  \App\PrecaucionResponsable  $precaucionResponsable
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $responsables=PrecaucionResponsable::findOrFail($id);
       return view('precaucion.responsable.show', compact('responsables'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrecaucionResponsable  $precaucionResponsable
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $responsables=PrecaucionResponsable::findOrFail($id);
       return view('precaucion.responsable.edit', compact('responsables'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrecaucionResponsable  $precaucionResponsable
     * @return \Illuminate\Http\Response
     */
     public function update(PrecaucionResponsableFormRequest $request, $id)
     {
       PrecaucionResponsable::findOrFail($id)->update($request->all());
       return redirect()->route('responsable.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrecaucionResponsable  $precaucionResponsable
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       PrecaucionResponsable::findOrFail($id)->delete();
       return redirect()->route('responsable.index');
     }
}

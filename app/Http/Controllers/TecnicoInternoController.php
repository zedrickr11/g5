<?php

namespace App\Http\Controllers;

use App\TecnicoInterno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\TecnicoInternoFormRequest;
class TecnicoInternoController extends Controller
{
  function __construct()
    {
      $this->middleware(['auth']);
    }
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
          $internos=DB::table('tecnico_interno as t')
          ->select('*')
          ->where('nombre_tecnico','LIKE','%'.$query.'%')
          ->orderBy('idtecnico','desc')
          ->paginate(10);
          return view('tecnicos.interno.index',["internos"=>$internos,"searchText"=>$query]);
      }


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view("tecnicos.interno.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TecnicoInternoFormRequest $request)
    {
      TecnicoInterno::create($request->all());
      return redirect()->route('interno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TecnicoInterno  $tecnicoInterno
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $internos=TecnicoInterno::findOrFail($id);
       return view('tecnicos.interno.show', compact('internos'));
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TecnicoInterno  $tecnicoInterno
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $internos=TecnicoInterno::findOrFail($id);
       return view('tecnicos.interno.edit', compact('internos'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TecnicoInterno  $tecnicoInterno
     * @return \Illuminate\Http\Response
     */
     public function update(TecnicoInternoFormRequest $request, $id)
     {
       TecnicoInterno::findOrFail($id)->update($request->all());
       return redirect()->route('interno.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TecnicoInterno  $tecnicoInterno
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       TecnicoInterno::findOrFail($id)->delete();
       return redirect()->route('interno.index');
     }
}

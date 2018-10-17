<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Http\Requests\GrupoFormRequest;
use DB;
use App\Grupo;
use App\Area;
use Carbon\Carbon;

class GrupoController extends Controller
{
  function __construct()
      {
        $this->middleware(['auth','role:admin,jefe-mantto']);
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
            $grupos=DB::table('grupo as g')
            ->join('area as a','a.idarea','=','g.idarea')
            ->select('g.idgrupo','g.grupo','a.nombre_area as area')
            ->where('g.grupo','LIKE','%'.$query.'%')
            ->orderBy('g.idgrupo','desc')
            ->paginate(10);
            //return response()->json($grupos);
            return view('equipo.grupo.index',["grupos"=>$grupos,"searchText"=>$query]);
        }

      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
            $areas=Area::all();
            return view("equipo.grupo.create",compact('areas'));
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(GrupoFormRequest $request)
      {
        Grupo::create($request->all());
        return redirect()->route('grupo.index');
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
        $grupos=DB::table('grupo as g')
          ->join('area as a','a.idarea','=','g.idarea')
          ->select('g.idgrupo','g.grupo','a.nombre_area as area')
          ->where('g.idgrupo','=',$id)
          ->first();
        return view('equipo.grupo.show', compact('grupos'));
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
        $grupos=Grupo::findOrFail($id);
        $areas=Area::all();
        return view('equipo.grupo.edit', compact('grupos','areas'));
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(GrupoFormRequest $request, $id)
      {
        Grupo::findOrFail($id)->update($request->all());
        return redirect()->route('grupo.index');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
        Grupo::findOrFail($id)->delete();
        return redirect()->route('grupo.index');
      }
}

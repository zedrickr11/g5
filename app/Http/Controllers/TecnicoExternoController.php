<?php

namespace App\Http\Controllers;
use DB;
use App\TecnicoExterno;
use App\ServicioTecnico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TecnicoExternoFormRequest;
class TecnicoExternoController extends Controller
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
        $externos= DB::table('tecnico_externo as t')
        ->join('servicio_tecnico as s', 't.idservicio_tecnico','=', 's.idservicio_tecnico')
        ->select('t.idtecnico_externo','t.nombre_tecnico_externo','t.telefono_tecnico_externo','s.nombre_empresa_sevicio_tecnico as empresa')
        ->where('nombre_tecnico_externo','LIKE','%'.$query.'%')
        ->orderBy('idtecnico_externo','desc')
          ->paginate(10);
    return view('tecnicos.externo.index', ["externos"=>$externos,"searchText"=>$query]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $servicios=ServicioTecnico::all();
        return view("tecnicos.externo.create",compact('servicios'));
  }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(TecnicoExternoFormRequest $request)
     {
         //
         TecnicoExterno::create($request->all());
         return redirect()->route('externo.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\TecnicoExterno  $tecnicoExterno
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $servicios=ServicioTecnico::all();
       $externos=TecnicoExterno::findOrFail($id);
       return view('tecnicos.externo.show', compact('externos'), compact('servicios'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TecnicoExterno  $tecnicoExterno
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
      $servicios=ServicioTecnico::all();
      $externos=TecnicoExterno::findOrFail($id);
       return view('tecnicos.externo.edit', compact('externos'),compact('servicios'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TecnicoExterno  $tecnicoExterno
     * @return \Illuminate\Http\Response
     */
     public function update(TecnicoExternoFormRequest $request, $id)
     {
         //
         TecnicoExterno::findOrFail($id)->update($request->all());
         return redirect()->route('externo.index');
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TecnicoExterno  $tecnicoExterno
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         //
         TecnicoExterno::findOrFail($id)->delete();
         return redirect()->route('externo.index');
     }
}

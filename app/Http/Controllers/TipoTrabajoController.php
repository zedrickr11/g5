<?php

namespace App\Http\Controllers;

use App\TipoTrabajo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TipoTrabajoFormRequest;
use DB;

class TipoTrabajoController extends Controller
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
                  $tipos=DB::table('tipo_trabajo as t')
                  ->select('*')
                  ->where('nombre_tipo','LIKE','%'.$query.'%')
                  ->orderBy('idtipo_trabajo','desc')
                  ->paginate(10);
          return view('trabajo.tipo.index', ["tipos"=>$tipos,"searchText"=>$query]);
              }
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view("trabajo.tipo.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(TipoTrabajoFormRequest $request)
     {
       TipoTrabajo::create($request->all());
       return redirect()->route('tipo.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoTrabajo  $tipoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $tipos=TipoTrabajo::findOrFail($id);
       return view('trabajo.tipo.show', compact('tipos'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoTrabajo  $tipoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $tipos=TipoTrabajo::findOrFail($id);
       return view('trabajo.tipo.edit', compact('tipos'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoTrabajo  $tipoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function update(TipoTrabajoFormRequest $request, $id)
     {
       TipoTrabajo::findOrFail($id)->update($request->all());
       return redirect()->route('tipo.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoTrabajo  $tipoTrabajo
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       TipoTrabajo::findOrFail($id)->delete();
       return redirect()->route('tipo.index');
     }
}

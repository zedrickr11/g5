<?php

namespace App\Http\Controllers;
use App\Http\Requests\ServicioTecnicoFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\ServicioTecnico;
class ServicioTecnicoController extends Controller
{
    function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto,jefe-sub']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$servicioTecnicos=ServicioTecnico::all();
        //return view('equipo.servicioTecnico.index', compact('servicioTecnicos'));
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $servicioTecnicos=DB::table('servicio_tecnico as f')
            ->select('*')
            ->where('nombre_empresa_sevicio_tecnico','LIKE','%'.$query.'%')
            ->orderBy('idservicio_tecnico','asc')
            ->paginate(10);
            return view('equipo.servicioTecnico.index',["servicioTecnicos"=>$servicioTecnicos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("equipo.servicioTecnico.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicioTecnicoFormRequest $request)
    {
        ServicioTecnico::create($request->all());
        return redirect()->route('servicioTecnico.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServicioTecnico  $servicioTecnico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicioTecnicos=ServicioTecnico::findOrFail($id);
        return view('equipo.servicioTecnico.show', compact('servicioTecnicos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServicioTecnico  $servicioTecnico
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $servicioTecnicos=ServicioTecnico::findOrFail($id);
        return view('equipo.servicioTecnico.edit', compact('servicioTecnicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServicioTecnico  $servicioTecnico
     * @return \Illuminate\Http\Response
     */
    public function update(ServicioTecnicoFormRequest $request,  $id)
    {
        ServicioTecnico::findOrFail($id)->update($request->all());
      return redirect()->route('servicioTecnico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServicioTecnico  $servicioTecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        ServicioTecnico::findOrFail($id)->delete();
      return redirect()->route('servicioTecnico.index');
    }
}

<?php

namespace App\Http\Controllers;
use DB;
use App\Herramienta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HerramientaController extends Controller
{
  function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto,jefe-sub,tec-ing']);
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
            $herramientas=DB::table('herramienta')
            ->select('*')
            ->where('herramienta','LIKE','%'.$query.'%')
            ->orderBy('idherramienta','desc')
            ->paginate(10);
            return view('almacen.herramienta.index',["herramientas"=>$herramientas,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("almacen.herramienta.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Herramienta::create($request->all());
        return redirect()->route('herramienta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $herramientas=Herramienta::findOrFail($id);
        return view('almacen.herramienta.show', compact('herramientas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $herramientas=Herramienta::findOrFail($id);
        return view('almacen.herramienta.edit', compact('herramientas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        Herramienta::findOrFail($id)->update($request->all());
      return redirect()->route('herramienta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Herramienta::findOrFail($id)->delete();
      return redirect()->route('herramienta.index');
    }
}

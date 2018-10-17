<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;



class ProveedorController extends Controller
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
        //
        if ($request)
        {
            $query=trim($request->get('searchText'));
              $proveedores=DB::table('proveedor as p')
              ->select('*')
              ->where('contacto_proveedor','LIKE','%'.$query.'%')
              ->orderBy('id_proveedor','asc')
              ->paginate(10);
      return view('equipo.proveedor.index', ["proveedores"=>$proveedores,"searchText"=>$query]);
          }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("equipo.proveedor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Proveedor::create($request->all());
      return redirect()->route('proveedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $proveedores=Proveedor::findOrFail($id);
      return view('equipo.proveedor.show', compact('proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $proveedores=Proveedor::findOrFail($id);
      return view('equipo.proveedor.edit', compact('proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      Proveedor::findOrFail($id)->update($request->all());
      return redirect()->route('proveedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Proveedor::findOrFail($id)->delete();
      return redirect()->route('proveedor.index');
    }
}

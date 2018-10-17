<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Proveedor_repuestoFormRequest;
use DB;
use App\Proveedor_repuesto;
use Carbon\Carbon;

class Proveedor_repuestoController extends Controller
{
    function __construct()
    {
      $this->middleware(['auth','role:admin,jefe-mantto,jefe-sub']);
    }
  public function index(Request $request)
  {
      if ($request)
      {
          $query=trim($request->get('searchText'));
          $prov_insumo=DB::table('Proveedor_repuesto')
          ->where('nombre','LIKE','%'.$query.'%')
          ->where ('estado','=','1')
          ->orderBy('idproveedor_repuesto','desc')
          ->paginate(7);
          return view('compras.repuesto.proveedor.index',["prov_insumo"=>$prov_insumo,"searchText"=>$query]);
      }
  }
  public function create()
  {
      return view("compras.repuesto.proveedor.create");
  }
  public function store (Proveedor_repuestoFormRequest $request)
  {
      Proveedor_repuesto::create($request->all());
      return redirect()->route('prov.index');


  }
  public function show($id)
  {
      return view("compras.repuesto.proveedor.show",["prov_insumo"=>Proveedor_repuesto::findOrFail($id)]);
  }
  public function edit($id)
  {
      return view("compras.repuesto.proveedor.edit",["prov_insumo"=>Proveedor_repuesto::findOrFail($id)]);
  }
  public function update(Proveedor_repuestoFormRequest $request,$id)
  {
      Proveedor_repuesto::findOrFail($id)->update($request->all());
      return redirect()->route('prov.index');
  }
  public function destroy($id)
  {
      $prov_insumo=Proveedor_repuesto::findOrFail($id);
      $prov_insumo->estado=0;
      $prov_insumo->update();
      return Redirect::to('compras/repuesto/proveedor');
  }

}

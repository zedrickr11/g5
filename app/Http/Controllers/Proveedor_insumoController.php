<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Proveedor_insumoFormRequest;
use DB;
use App\Proveedor_insumo;
use Carbon\Carbon;

class Proveedor_insumoController extends Controller
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
          $prov_insumo=DB::table('Proveedor_insumo')
          ->where('nombre','LIKE','%'.$query.'%')
          ->where ('estado','=','1')
          ->orderBy('idproveedor_insumo','desc')
          ->paginate(7);
          return view('compras.insumo.proveedor.index',["prov_insumo"=>$prov_insumo,"searchText"=>$query]);
      }
  }
  public function create()
  {
      return view("compras.insumo.proveedor.create");
  }
  public function store (Proveedor_insumoFormRequest $request)
  {
      Proveedor_insumo::create($request->all());
      return redirect()->route('prove.index');


  }
  public function show($id)
  {
      return view("compras.insumo.proveedor.show",["prov_insumo"=>Proveedor_insumo::findOrFail($id)]);
  }
  public function edit($id)
  {
      return view("compras.insumo.proveedor.edit",["prov_insumo"=>Proveedor_insumo::findOrFail($id)]);
  }
  public function update(Proveedor_insumoFormRequest $request,$id)
  {
      Proveedor_insumo::findOrFail($id)->update($request->all());
      return redirect()->route('prove.index');
  }
  public function destroy($id)
  {
      $prov_insumo=Proveedor_insumo::findOrFail($id);
      $prov_insumo->estado=0;
      $prov_insumo->update();
      return Redirect::to('compras/insumo/prove');
  }
}

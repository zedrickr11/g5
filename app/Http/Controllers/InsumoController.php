<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\InsumoFormRequest;
use App\Insumo;
use DB;

class InsumoController extends Controller
{
  public function index(Request $request)
  {
      if ($request)
      {
          $query=trim($request->get('searchText'));
          $insumos=DB::table('insumo as i')
          ->select('*')
          ->where('i.nombre','LIKE','%'.$query.'%')
          ->orwhere('i.codigo','LIKE','%'.$query.'%')
          ->orderBy('i.idinsumo','desc')
          ->paginate(7);
          return view('almacen.insumo.index',["insumos"=>$insumos,"searchText"=>$query]);
      }
  }
  public function create()
  {

      return view("almacen.insumo.create");
  }
  public function store (InsumoFormRequest $request)
  {
      $insumo=new Insumo;
      $insumo->codigo=$request->get('codigo');
      $insumo->nombre=$request->get('nombre');
      $insumo->stock=0;
      $insumo->descripcion=$request->get('descripcion');
      $insumo->estado='Activo';
      $insumo->save();
      return Redirect::to('almacen/insumo');

  }
  public function show($id)
  {
      return view("almacen.insumo.show",["insumo"=>Insumo::findOrFail($id)]);
  }
  public function edit($id)
  {
      $insumo=Insumo::findOrFail($id);

      return view("almacen.insumo.edit",["insumo"=>$insumo]);
  }


  public function update(InsumoFormRequest $request,$id)
  {
      $insumo=Insumo::findOrFail($id);

      $insumo->codigo=$request->get('codigo');
      $insumo->nombre=$request->get('nombre');
      $insumo->stock=$request->get('stock');
      $insumo->descripcion=$request->get('descripcion');
      $insumo->estado='Activo';
      $insumo->update();
      return Redirect::to('almacen/insumo');
  }
  public function destroy($id)
  {
      $insumo=Insumo::findOrFail($id);
      $insumo->estado='Inactivo';
      $insumo->update();
      return Redirect::to('almacen/insumo');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RepuestoFormRequest;
use App\Repuesto;
use App\Equipo;
use DB;

class RepuestoController extends Controller
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
          $repuestos=DB::table('repuesto as r')
          ->join('equipo as e','e.idequipo','=','r.idequipo')
          ->select('r.*','e.nombre_equipo as equipo')
          ->where('r.nombre','LIKE','%'.$query.'%')
          ->orwhere('e.nombre_equipo','LIKE','%'.$query.'%')
          ->orderBy('r.idrepuesto','desc')
          ->paginate(7);
          return view('almacen.repuesto.index',["repuestos"=>$repuestos,"searchText"=>$query]);
      }
  }
  public function create()
  {
      $equipo=Equipo::all();
      return view("almacen.repuesto.create", compact('equipo'));
  }
  public function store (RepuestoFormRequest $request)
  {
      $repuestos=new Repuesto;
      $repuestos->nombre=$request->get('nombre');
      $repuestos->codigo=$request->get('codigo');
      $repuestos->num_serie=$request->get('num_serie');
      $repuestos->modelo=$request->get('modelo');
      $repuestos->descripcion=$request->get('descripcion');
      $repuestos->stock=0;
      $repuestos->idequipo=$request->get('idequipo');
      $repuestos->estado='Activo';
      $repuestos->save();
      return Redirect::to('almacen/repuesto');

  }
  public function show($id)
  {
      $equipo=Equipo::all();
      return view("almacen.repuesto.show",["repuesto"=>Repuesto::findOrFail($id)]);
  }
  public function edit($id)
  {
      $repuestos=Repuesto::findOrFail($id);
      $equipo=Equipo::all();
      return view("almacen.repuesto.edit",compact('repuestos','equipo'));
  }


  public function update(RepuestoFormRequest $request,$id)
  {
      $repuestos=Repuesto::findOrFail($id);
      $repuestos->nombre=$request->get('nombre');
      $repuestos->codigo=$request->get('codigo');
      $repuestos->num_serie=$request->get('num_serie');
      $repuestos->modelo=$request->get('modelo');
      $repuestos->descripcion=$request->get('descripcion');
      $repuestos->stock=0;
      $repuestos->idequipo=$request->get('idequipo');
      $repuestos->estado='Activo';
      $repuestos->update();
      return Redirect::to('almacen/repuesto');
  }
  public function destroy($id)
  {
      $repuestos=Repuesto::findOrFail($id);
      $repuestos->estado='Inactivo';
      $repuestos->update();
      return Redirect::to('almacen/repuesto');
  }
}

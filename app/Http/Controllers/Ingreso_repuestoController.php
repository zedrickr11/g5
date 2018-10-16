<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Ingreso_repuestoFormRequest;
use App\Ingreso_repuesto;
use App\Detalle_ingreso_repuesto;
use DB;


use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class Ingreso_repuestoController extends Controller
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
         $ingresos=DB::table('ingreso_repuesto as i')
          ->join('proveedor_repuesto as p','i.idproveedor_repuesto','=','p.idproveedor_repuesto')
          ->join('detalle_ingreso_repuesto as di','i.idingreso_repuesto','=','di.idingreso_repuesto')
          ->select('i.idingreso_repuesto','i.fecha_hora','p.nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.estado')
          ->where('i.num_comprobante','LIKE','%'.$query.'%')
          ->orderBy('i.idingreso_repuesto','desc')
          ->groupBy('i.idingreso_repuesto','i.fecha_hora','p.nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.estado')
          ->paginate(7);
          return view('compras.repuesto.ingreso.index',["ingresos"=>$ingresos,"searchText"=>$query]);

      }
  }
  public function create()
  {
    $personas=DB::table('proveedor_repuesto')->where('estado','=','1')->get();
    $articulos = DB::table('repuesto as art')
          ->join('equipo as e','e.idequipo','=','art.idequipo')
          ->select(DB::raw('CONCAT(art.nombre, " - ",e.nombre_equipo) AS articulo'),'art.idrepuesto')
          ->where('art.estado','=','Activo')
          ->get();
      return view("compras.repuesto.ingreso.create",["personas"=>$personas,"articulos"=>$articulos]);
  }

   public function store (Ingreso_repuestoFormRequest $request)
  {
    try{
        DB::beginTransaction();
        $ingreso=new Ingreso_repuesto;
        $ingreso->idproveedor_repuesto=$request->get('idproveedor_repuesto');
        $ingreso->tipo_comprobante=$request->get('tipo_comprobante');
        $ingreso->serie_comprobante=$request->get('serie_comprobante');
        $ingreso->num_comprobante=$request->get('num_comprobante');

        $mytime = Carbon::now('America/Guatemala');
        $ingreso->fecha_hora=$mytime->toDateTimeString();
        $ingreso->estado='VIGENTE';
        $ingreso->save();

        $idrepuesto = $request->get('idrepuesto');
        $cantidad = $request->get('cantidad');


        $cont = 0;

        while($cont < count($idrepuesto)){
            $detalle = new Detalle_ingreso_repuesto();
            $detalle->idingreso_repuesto= $ingreso->idingreso_repuesto;
            $detalle->idrepuesto= $idrepuesto[$cont];
            $detalle->cantidad= $cantidad[$cont];
            $detalle->save();
            $cont=$cont+1;
        }

        DB::commit();

      }catch(\Exception $e)
      {
          DB::rollback();
      }

      return Redirect::to('compras/repuesto-ingreso');
  }

  public function show($id)
  {
    $ingreso=DB::table('ingreso_repuesto as i')
          ->join('proveedor_repuesto as p','i.idproveedor_repuesto','=','p.idproveedor_repuesto')
          ->join('detalle_ingreso_repuesto as di','i.idingreso_repuesto','=','di.idingreso_repuesto')
          ->select('i.idingreso_repuesto','i.fecha_hora','p.nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.estado')
          ->where('i.idingreso_repuesto','=',$id)
          ->first();

      $detalles=DB::table('detalle_ingreso_repuesto as d')
           ->join('repuesto as a','d.idrepuesto','=','a.idrepuesto')
           ->select('a.nombre as articulo','d.cantidad')
           ->where('d.idingreso_repuesto','=',$id)
           ->get();
      return view("compras.repuesto.ingreso.show",["ingreso"=>$ingreso,"detalles"=>$detalles]);
  }

  public function destroy($id)
  {
      $ingreso=Ingreso_insumo::findOrFail($id);
      $ingreso->Estado='ANULADO';
      $ingreso->update();
      return Redirect::to('compras/repuesto-ingreso');
  }

}

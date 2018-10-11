<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Ingreso_insumoFormRequest;
use App\Ingreso_insumo;
use App\Detalle_ingreso_insumo;
use DB;


use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class Ingreso_insumoController extends Controller
{
  public function index(Request $request)
  {
      if ($request)
      {
         $query=trim($request->get('searchText'));
         $ingresos=DB::table('ingreso_insumo as i')
          ->join('proveedor_insumo as p','i.idproveedor_insumo','=','p.idproveedor_insumo')
          ->join('detalle_ingreso_insumo as di','i.idingreso_insumo','=','di.idingreso_insumo')
          ->select('i.idingreso_insumo','i.fecha_hora','p.nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.estado')
          ->where('i.num_comprobante','LIKE','%'.$query.'%')
          ->orderBy('i.idingreso_insumo','desc')
          ->groupBy('i.idingreso_insumo','i.fecha_hora','p.nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.estado')
          ->paginate(7);
          return view('compras.insumo.ingreso.index',["ingresos"=>$ingresos,"searchText"=>$query]);

      }
  }
  public function create()
  {
    $personas=DB::table('proveedor_insumo')->where('estado','=','1')->get();
    $articulos = DB::table('insumo as art')
          ->select(DB::raw('CONCAT(art.nombre, " - ",art.unidad_medida) AS articulo'),'art.idinsumo')
          ->where('art.estado','=','Activo')
          ->get();
      return view("compras.insumo.ingreso.create",["personas"=>$personas,"articulos"=>$articulos]);
  }

   public function store (Ingreso_insumoFormRequest $request)
  {
    try{
        DB::beginTransaction();
        $ingreso=new Ingreso_insumo;
        $ingreso->idproveedor_insumo=$request->get('idproveedor_insumo');
        $ingreso->tipo_comprobante=$request->get('tipo_comprobante');
        $ingreso->serie_comprobante=$request->get('serie_comprobante');
        $ingreso->num_comprobante=$request->get('num_comprobante');

        $mytime = Carbon::now('America/Guatemala');
        $ingreso->fecha_hora=$mytime->toDateTimeString();
        $ingreso->estado='VIGENTE';
        $ingreso->save();

        $idinsumo = $request->get('idinsumo');
        $cantidad = $request->get('cantidad');


        $cont = 0;

        while($cont < count($idinsumo)){
            $detalle = new Detalle_ingreso_insumo();
            $detalle->idingreso_insumo= $ingreso->idingreso_insumo;
            $detalle->idinsumo= $idinsumo[$cont];
            $detalle->cantidad= $cantidad[$cont];
            $detalle->save();
            $cont=$cont+1;
        }

        DB::commit();

      }catch(\Exception $e)
      {
          DB::rollback();
      }

      return Redirect::to('compras/insumo-ingreso');
  }

  public function show($id)
  {
    $ingreso=DB::table('ingreso_insumo as i')
          ->join('proveedor_insumo as p','i.idproveedor_insumo','=','p.idproveedor_insumo')
          ->join('detalle_ingreso_insumo as di','i.idingreso_insumo','=','di.idingreso_insumo')
          ->select('i.idingreso_insumo','i.fecha_hora','p.nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.estado')
          ->where('i.idingreso_insumo','=',$id)
          ->first();

      $detalles=DB::table('detalle_ingreso_insumo as d')
           ->join('insumo as a','d.idinsumo','=','a.idinsumo')
           ->select('a.nombre as articulo','d.cantidad')
           ->where('d.idingreso_insumo','=',$id)
           ->get();
      return view("compras.insumo.ingreso.show",["ingreso"=>$ingreso,"detalles"=>$detalles]);
  }

  public function destroy($id)
  {
    $ingreso=Ingreso_insumo::findOrFail($id);
      $ingreso->Estado='ANULADO';
      $ingreso->update();
      return Redirect::to('compras/insumo-ingreso');
  }
}

<?php

namespace App\Http\Controllers;

use App\detcaracesp;
use Illuminate\Http\Request;
use DB;
use App\caracespefun;
use App\valorrefesp;
use App\Equipo;


class detcaracespController extends Controller
{
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
            $detcaracesp=DB::table('detalle_caracteristica_especial as a')
              ->join('caracteristica_especial_funcionamiento as d','a.idcaracteristica_especial','=','d.idcaracteristica_especial')
                ->join('valor_ref_esp as s','a.idvalor_ref_esp','=','s.idvalor_ref_esp')
                ->join('equipo as e','a.idequipo','=','e.idequipo')
              ->select('d.nombre_caracteristica_especial as idcaracteristica_especial','e.nombre_equipo as idequipo','s.nombre_valor_ref_esp as idvalor_ref_esp','a.estado_detalle_caracteristica_especial','descripcion_detalle_caracteristica_especial','valor_detalle_caracteristica_especial')

        //  ->select('*')
          ->where('d.nombre_caracteristica_especial','LIKE','%'.$query.'%')
          ->orderBy('d.idcaracteristica_especial','desc')
          ->paginate(10);

          return view('equipo.caracteristica.detcaracesp.index',["detcaracesp"=>$detcaracesp,"searchText"=>$query]);
      }

  //    $detcaracesp=DB::table('detalle_caracteristica_especial as a')
    //  ->join('caracteristica_especial_funcionamiento as d','a.idcaracteristica_especial','=','d.idcaracteristica_especial')
      //  ->join('valor_ref_esp as s','a.idvalor_ref_esp','=','s.idvalor_ref_esp')

        //  ->join('equipo as e','a.idequipo','=','e.idequipo')

  //    ->select('d.nombre_caracteristica_especial as idcaracteristica_especial','e.nombre_equipo as idequipo','s.nombre_valor_ref_esp as idvalor_ref_esp','a.estado_detalle_caracteristica_especial','descripcion_detalle_caracteristica_especial','valor_detalle_caracteristica_especial')
    //  ->get();



  //    return view('equipo.caracteristica.detcaracesp.index', compact('detcaracesp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $caracespefun=caracespefun::all();
      $valorrefesp=valorrefesp::all();
      $equipo=Equipo::all();

      return view("equipo.caracteristica.detcaracesp.create",compact('caracespefun','valorrefesp','equipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      detcaracesp::create($request->all());
       return redirect()->route('detcaracesp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function show(detcaracesp $detcaracesp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function edit(detcaracesp $detcaracesp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detcaracesp $detcaracesp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function destroy(detcaracesp $detcaracesp)
    {
        //
    }
}

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
  function __construct()
      {
        $this->middleware(['auth','role:admin,jefe-mantto']);
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list($id)
    {

          $nombre=DB::table('equipo')
          ->select('idequipo','nombre_equipo')
          ->where('idequipo',$id)
          ->first();

          $detcaracesp=DB::table('detalle_caracteristica_especial as a')
          ->join('caracteristica_especial_funcionamiento as d','a.idcaracteristica_especial','=','d.idcaracteristica_especial')
          ->join('valor_ref_esp as s','a.idvalor_ref_esp','=','s.idvalor_ref_esp')
          ->join('equipo as e','a.idequipo','=','e.idequipo')
          ->select('a.iddetalle_caracteristica_especial',
          'd.nombre_caracteristica_especial as idcaracteristica_especial',
          'e.nombre_equipo as idequipo',
          's.nombre_valor_ref_esp as idvalor_ref_esp',
          'a.estado_detalle_caracteristica_especial',
          'descripcion_detalle_caracteristica_especial',
          'valor_detalle_caracteristica_especial')
          ->where('e.idequipo',$id)
          ->orderBy('d.idcaracteristica_especial','desc')
          ->get();
          $detcaractec=DB::table('detalle_caracteristica_tecnica as d')
          ->join('valor_ref_tec as t','t.idvalor_ref_tec','=','d.idvalor_ref_tec')
          ->join('subgrupo_carac_tecnica as s','s.idsubgrupo_carac_tecnica','=','d.idsubgrupo_carac_tecnica')
          ->join('caracteristica_tecnica as c','c.idcaracteristica_tecnica','=','d.idcaracteristica_tecnica')
          ->join('equipo as e','e.idequipo','=','d.idequipo')
          ->select('d.*','t.*','s.*','c.*','e.*')
          ->where('e.idequipo',$id)
          ->orderBy('c.idcaracteristica_tecnica','desc')
          ->get();
          return view('equipo.caracteristica.detcaracesp.index',compact('detcaracesp','nombre','detcaractec'));


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
      try{
          DB::beginTransaction();

          $idcaracteristica_especial = $request->get('idcaracteristica_especial');
          $idequipo = $request->get('idequipo');
          $idvalor_ref_esp=$request->get('idvalor_ref_esp');
          $descripcion_detalle_caracteristica_especial=$request->get('descripcion_detalle_caracteristica_especial');
          $valor_detalle_caracteristica_especial=$request->get('valor_detalle_caracteristica_especial');



          $cont = 0;

          while($cont < count($idcaracteristica_especial)){
              $detalle = new detcaracesp();
              $detalle->idcaracteristica_especial= $idcaracteristica_especial[$cont];
              $detalle->idequipo= $idequipo[$cont];
              $detalle->idvalor_ref_esp=$idvalor_ref_esp[$cont];
              $detalle->estado_detalle_caracteristica_especial=1;
              $detalle->descripcion_detalle_caracteristica_especial=$descripcion_detalle_caracteristica_especial[$cont];
              $detalle->valor_detalle_caracteristica_especial=$valor_detalle_caracteristica_especial[$cont];
              $detalle->save();
              $cont=$cont+1;
          }

          DB::commit();

        }catch(\Exception $e)
        {
            DB::rollback();
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $detcaracesp=detcaracesp::findOrFail($id);
      $caracespefun=caracespefun::all();
      $valorrefesp=valorrefesp::all();
      $equipo=Equipo::all();

      return view("equipo.caracteristica.detcaracesp.show",compact('detcaracesp','caracespefun','valorrefesp','equipo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $detcaracesp=detcaracesp::findOrFail($id);
      $caracespefun=caracespefun::all();
      $valorrefesp=valorrefesp::all();
      $equipo=Equipo::all();

      return view("equipo.caracteristica.detcaracesp.edit",compact('detcaracesp','caracespefun','valorrefesp','equipo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        detcaracesp::findOrFail($id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detcaracesp  $detcaracesp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      detcaracesp::findOrFail($id)->delete();
      return back();
    }
}

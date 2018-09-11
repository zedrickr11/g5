<?php

namespace App\Http\Controllers;

use App\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\HospitalFormRequest;
class HospitalController extends Controller
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
          $hospitales=DB::table('hospital as h')
          ->select('*')
          ->where('hospital','LIKE','%'.$query.'%')
          ->orderBy('idhospital','desc')
          ->paginate(10);
  return view('hospital.hospitales.index', ["hospitales"=>$hospitales,"searchText"=>$query]);
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              return view("hospital.hospitales.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospitalFormRequest $request)
    {
      Hospital::create($request->all());
      return redirect()->route('hospitales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $hospitales=Hospital::findOrFail($id);
      return view('hospital.hospitales.show', compact('hospitales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $hospitales=Hospital::findOrFail($id);
      return view('hospital.hospitales.edit', compact('hospitales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(HospitalFormRequest $request,$id)
    {
      Hospital::findOrFail($id)->update($request->all());
      return redirect()->route('hospitales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Hospital::findOrFail($id)->delete();
      return redirect()->route('hospitales.index');
    }
}

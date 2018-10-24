<?php

Route::get('/calendario', function () {
    return view ('index') ;
})->middleware('auth');
Route::get('/', function () {
    return view ('auth.login') ;
});
//login
Route::get('loggin','Auth\LoginController@showLoginForm');
Route::post('loggin','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout');

//usuarios
Route::resource('usuarios','UsersController');
Route::post('role',['as'=>'usuarios.role','uses' => 'UsersController@role']);
Route::get('usuarios/listado/{id}',['as'=>'usuarios.list','uses' => 'UsersController@listRole']);

//equipo
Route::resource('equipo/fabricante','FabricanteController');
Route::resource('equipo/area','AreaController');
Route::resource('equipo/grupo','GrupoController');
Route::resource('equipo/estado','EstadoController');
Route::resource('equipo/servicioTecnico','servicioTecnicoController');
Route::resource('equipo/tipoManual','tipoManualController');
Route::resource('equipo/proveedor','ProveedorController');
Route::resource('equipo/subgrupo','SubgrupoController');
Route::resource('equipo/confsubgrupo','Conf_subgrupoController');
Route::resource('equipo/advertencia','AdvertenciaController');
Route::resource('equipo/confcorrelativo','Conf_corrController');
Route::resource('equipo/equipo','EquipoController');
Route::get('equipo/existente/{id}',['as'=>'existente','uses' => 'EquipoController@existente']);


Route::get('equipo/equipo/RutinaPdf/{id}',[
    'as' => 'equipo.RutinaPdf',
    'uses' => 'EquipoController@RutinaPdf'
]);

Route::get('equipo/equipo/ficha/{id}',[
    'as' => 'equipo.HistorialRutina',
    'uses' => 'EquipoController@HistorialRutina'
]);
Route::get('equipo/equipo/HistorialRutina/{id}',[
    'as' => 'equipo.ficha',
    'uses' => 'EquipoController@ficha'
]);

Route::get('equipo/rutina/ruman/agregar',[
    'as' => 'ruman.agregar',
    'uses' => 'rumanController@agregar'
]);
Route::get('equipo/rutina/ruman/store2',[
    'as' => 'ruman.store2',
    'uses' => 'rumanController@store2'
]);
Route::get('equipo/rutina/ruman/update2/',[
    'as' => 'ruman.update2',
    'uses' => 'rumanController@update2'
]);
Route::get('equipo/rutina/ruman/tecnicos/{id}/{idequipo}',[
    'as' => 'ruman.tecnicos',
    'uses' => 'rumanController@tecnicos'
]);

Route::get('equipo/rutina/ruman/create2/{idequipo}/{idsubgrupo}',[
    'as' => 'ruman.create2',
    'uses' => 'rumanController@create2'
]);
Route::get('equipo/rutina/ruman/create3/{idequipo}/{idsubgrupo}',[
    'as' => 'ruman.create3',
    'uses' => 'rumanController@create3'
]);

Route::get('equipo/rutina/ruman/Asignar/{idequipo}/{idsubgrupo}',[
    'as' => 'ruman.asignar',
    'uses' => 'rumanController@asignar'
]);
Route::get('equipo/rutina/ruman/edit2/{idrutina}',[
    'as' => 'ruman.edit2',
    'uses' => 'rumanController@edit2'
]);
Route::get('equipo/rutina/ruman/Asignar2/{idequipo}/{idsubgrupo}',[
    'as' => 'ruman.asignar2',
    'uses' => 'rumanController@asignar2'
]);



Route::resource('equipo/equipo/rutinamante','EquipoController');
Route::get('equipo/equipo/rutina/{id}',[
    'as' => 'equipo.rutina',
    'uses' => 'EquipoController@rutina'
]);
Route::get('equipo/vista/indexsolicitudes/{id}',[
    'as' => 'equipo.vista',
    'uses' => 'EquipoIndexController@solis'
]);

//index del Equipo
Route::get('equipo/principal/{id}',['as'=>'actualizar','uses' => 'EquipoIndexController@index']);
Route::resource('equipo/equipo/imagen','Imagen_equipoController');





//pdf SolicitudTrabajos
Route::resource('trabajo/solicitud/solicitud','SolicitudTrabajoController');
Route::get('trabajo/solicitud/ficha/{id}',[
    'as' => 'solicitud.ficha',
    'uses' => 'SolicitudTrabajoController@ficha'
]);

//pdf permiso de tipo_trabajo
Route::get('trabajo/permiso/ficha/{id}',[
    'as' => 'permiso.ficha',
    'uses' => 'PermisoTrabajoController@ficha'
]);

//hospital
Route::resource('hospital/region','RegionController');
Route::resource('hospital/hospitales','HospitalController');
Route::resource('hospital/unidad','UnidadSaludController');
Route::resource('hospital/tipounidad','TipoUnidadSaludController');
Route::resource('hospital/departamento','DepartamentoController');


//caracteristicas ficha técnica
Route::resource('equipo/caracteristica/caractec','CaracTecController');
Route::resource('equipo/caracteristica/caracespefun','caracespefunController');
Route::resource('equipo/caracteristica/valorrefesp','valorrefespController');
Route::resource('equipo/caracteristica/subcaractec','subcaractecController');
Route::resource('equipo/caracteristica/valorreftec','valorreftecController');
Route::resource('equipo/caracteristica/detcaractec','detcaractecController');
Route::resource('equipo/caracteristica/detcaracesp','detcaracespController');
Route::resource('equipo/caracteristica/fichatecnica','fichatecnicaController');
Route::get('equipo/caracteristica/{id}',['as'=>'carac','uses'=>'detcaracespController@list']);

//Caracteristicas de rutinas
Route::resource('equipo/rutina/valorrefpru','valorrefpruController');
Route::resource('equipo/rutina/subpru','subpruController');
Route::resource('equipo/rutina/pruru','pruruController');
Route::resource('equipo/rutina/tiporu','tiporuController');
Route::resource('equipo/rutina/caracru','caracruController');
Route::resource('equipo/rutina/valrefru','valrefruController');
Route::resource('equipo/rutina/subru','subruController');
Route::resource('equipo/rutina/ruman','rumanController');
Route::resource('equipo/rutina/detcaracru','detcaracruController');
Route::resource('equipo/rutina/detrupru','detrupruController');
Route::resource('equipo/rutina/AsignarRutina','AsignarRutinaController');
Route::resource('equipo/rutina/GuardarRutinaPrueba','GuardarRutinaPruebaController');
Route::resource('equipo/rutina/DetalleHerramienta','DetalleHerramientaController');

Route::resource('equipo/parte','ParteController');
Route::resource('equipo/accesorio','AccesorioController');
Route::resource('equipo/rutina/DetalleRutinaPrueba','DetalleRutinaPruebaController');
//solicitud de trabajo
Route::resource('precaucion/ejecutante','PrecaucionEjecutanteController');
Route::resource('precaucion/responsable','PrecaucionResponsableController');
Route::resource('peligro/naturaleza','NaturalezaPeligroController');
Route::resource('trabajo/tipo','TipoTrabajoController');
Route::resource('trabajo/solicitud','SolicitudTrabajoController');
Route::resource('trabajo/permiso','PermisoTrabajoController');
Route::resource('trabajo/seguimiento','SeguimientoController');
Route::get('trabajo/solicitud/solicitudpdf/{id}', 'SolicitudTrabajoController@ficha')->name('Solicitudes.ficha');//pdf


//Tecnicos
Route::resource('tecnicos/interno','TecnicoInternoController');
Route::resource('tecnicos/externo','TecnicoExternoController');

//rutinas de mantenimiento
Route::resource('mantenimiento/areamantenimiento','AreaMantenimientoController');

//selects dinamicos
Route::get('/json-confsubgrupo',['as'=>'conf.subgrupo','uses'=>'SubgrupoController@codigosubgrupo']);
Route::get('/json-grupo','EquipoController@grupo');
Route::get('/json-subgrupo','EquipoController@subgrupo');
Route::get('/json-correlativo','EquipoController@correlativo');
Route::get('/json-codigosubgrupo','EquipoController@codigosubgrupo');
Route::get('/json-depto','EquipoController@depto');
Route::get('/json-hospital','EquipoController@hospital');
Route::get('/json-unidad','EquipoController@unidadsalud');
Route::get('/json-tipounidad','EquipoController@tipounidad');






//Detalles
Route::resource('detalles/detallenaturaleza','DetalleNaturalezaPeligroController');
Route::resource('detalles/detalletipo','DetalleTipoTrabajoController');
Route::resource('detalles/detallearea','DetalleAreaMantenimientoController');
Route::resource('detalles/detalletipotrabajo','DetalleTipoTrabajoPermisoController');
Route::resource('detalles/detalleresponsable','DetallePrecaucionResponsableController');
Route::resource('detalles/detalleejecutante','DetallePrecaucionEjecutanteController');


//almacen de insumos
Route::resource('almacen/insumo', 'InsumoController');
Route::resource('compras/insumo/prove','Proveedor_insumoController');
Route::resource('compras/insumo-ingreso','Ingreso_insumoController');
//almacen de repuestos
Route::resource('compras/repuesto/prov','Proveedor_repuestoController');
Route::resource('almacen/repuesto','RepuestoController');
Route::resource('compras/repuesto-ingreso','Ingreso_repuestoController');
Route::resource('almacen/herramienta','HerramientaController');



//calendario
Route::get('/json-calendarioCorrectivo','CalendarioController@llenarcalendarioCorrectivo');
Route::get('/json-calendarioPreventivo','CalendarioController@llenarcalendarioPreventivo');


//manuales
Route::resource('equipo/principal/','EquipoIndexController');

//imprimirQR
use App\Equipo;
Route::get('equipo/qr/{id}', function ($id) {
    $equipo=DB::table('equipo')
    ->select('*')
    ->where('idequipo','=',$id)
    ->first();
    return view ('equipo.vista.img1',compact('equipo')) ;
})->middleware('auth');

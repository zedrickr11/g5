<?php

Route::get('/', function () {
    return view ('index') ;
});

//login
Route::resource('login','LoginController');


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


Route::get('equipo/equipo/ficha/{id}',[
    'as' => 'equipo.ficha',
    'uses' => 'EquipoController@ficha'
]);


Route::resource('equipo/equipo/rutinamante','EquipoController');
Route::get('equipo/equipo/rutina/{id}',[
    'as' => 'equipo.rutina',
    'uses' => 'EquipoController@rutina'
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


//solicitud de trabajo
Route::resource('precaucion/ejecutante','PrecaucionEjecutanteController');
Route::resource('precaucion/responsable','PrecaucionResponsableController');
Route::resource('peligro/naturaleza','NaturalezaPeligroController');
Route::resource('trabajo/tipo','TipoTrabajoController');
Route::resource('trabajo/solicitud','SolicitudTrabajoController');
Route::resource('trabajo/permiso','PermisoTrabajoController');
Route::resource('trabajo/seguimiento','SeguimientoController');
Route::get('trabajo/solicitud/solicitudpdf/{id}', 'SolicitudTrabajoController@ficha')->name('Solicitudes.ficha');//pdf


//rutinas de mantenimiento
Route::resource('mantenimiento/areamantenimiento','AreaMantenimientoController');

//selects dinamicos
Route::get('/json-confsubgrupo','SubgrupoController@codigosubgrupo');
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



//calendario
Route::get('/json-calendario','CalendarioController@llenarcalendario');


//manuales
Route::resource('equipo/principal/','EquipoIndexController');
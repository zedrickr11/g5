<?php

Route::get('/', function () {
    return view ('index') ;
});
Route::resource('login','LoginController');

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


Route::resource('hospital/region','RegionController');
Route::resource('hospital/hospitales','HospitalController');
Route::resource('hospital/unidad','UnidadSaludController');
Route::resource('hospital/tipounidad','TipoUnidadSaludController');


Route::resource('equipo/caracteristica/caractec','CaracTecController');
Route::resource('equipo/caracteristica/caracespefun','caracespefunController');
Route::resource('equipo/caracteristica/valorrefesp','valorrefespController');
Route::resource('equipo/caracteristica/subcaractec','subcaractecController');
Route::resource('equipo/caracteristica/valorreftec','valorreftecController');
Route::resource('equipo/caracteristica/detcaractec','detcaractecController');

Route::resource('hospital/departamento','DepartamentoController');



Route::get('/json-confsubgrupo','SubgrupoController@codigosubgrupo');
Route::resource('equipo/confcorrelativo','Conf_corrController');



Route::resource('equipo/caracteristica/detcaracesp','detcaracespController');



Route::get('/json-confsubgrupo','SubgrupoController@codigosubgrupo');
Route::resource('equipo/confcorrelativo','Conf_corrController');


Route::resource('equipo/equipo','EquipoController');

Route::resource('equipo/rutina/valorrefpru','valorrefpruController');
Route::resource('equipo/rutina/subpru','subpruController');
Route::resource('equipo/rutina/pruru','pruruController');
Route::resource('equipo/rutina/tiporu','tiporuController');
Route::resource('equipo/rutina/caracru','caracruController');

Route::resource('precaucion/ejecutante','PrecaucionEjecutanteController');
 
Route::resource('precaucion/responsable','PrecaucionResponsableController');

Route::resource('peligro/naturaleza','NaturalezaPeligroController');

Route::resource('mantenimiento/areamantenimiento','AreaMantenimientoController');

Route::resource('trabajo/tipo','TipoTrabajoController');
Route::resource('trabajo/solicitud','SolicitudTrabajoController');
Route::resource('trabajo/permiso','PermisoTrabajoController');
 
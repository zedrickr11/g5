<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Pagina de inicio prueba BONILLA';
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

<<<<<<< HEAD
Route::resource('equipo/caracteristica/detcaracesp','detcaracespController');


=======
>>>>>>> facec7b23a2faf9c0fe032df88b5dfee46326619
Route::get('/json-confsubgrupo','SubgrupoController@codigosubgrupo');
Route::resource('equipo/confcorrelativo','Conf_corrController');


Route::resource('equipo/equipo','EquipoController');

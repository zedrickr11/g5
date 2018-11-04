@extends ('layouts.admin')
@section ('contenido')
  <section class="content-header">
    <h1>
      Equipo
      <small>Equipo</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
      <li class="active"><a href="#">Equipo</a></li>

    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->


        <form role="form" method="POST" action="{{route('guardareq')}}" >
            {!! csrf_field() !!}
        <!-- Custom Tabs (Pulled to the right) -->

        <!-- nav-tabs-custom -->


      <div class="row">
        <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Partes</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive">
                    <table id="tabla" class="table table-bordered table-striped">
                      <thead>
                      <tr>

                        <th>Parte</th>
                        <th>No. Parte</th>
                        <th>Descripción</th>

                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($partes as $par)
                        <tr>

                          <td><input type="hidden" name="nombre_parte[]" value="{{ $par->nombre_parte}}">{{ $par->nombre_parte}}</td>
                          <td><input type="hidden" name="num_parte[]" value="{{ $par->num_parte}}">{{ $par->num_parte}}</td>
                          <td><input type="hidden" name="descripcion_parte[]" value="{{ $par->desc}}">{{ $par->desc}}</td>

                </tr>
                @endforeach
                      </tbody>
              </table>
                  </div>
                </div>


            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Accesorios</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive">
                    <table id="tabla" class="table table-bordered table-striped">
                      <thead>
                      <tr>

                        <th>Accesorio</th>
                        <th>No. Accesorio</th>
                        <th>Descripción</th>

                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($accesorios as $par)
                        <tr>

                          <td><input type="hidden" name="nombre_accesorio[]" value="{{ $par->nombre_accesorio}}">{{ $par->nombre_accesorio}}</td>
                          <td><input type="hidden" name="numero_parte_accesorio[]" value="{{ $par->numero_parte_accesorio}}">{{ $par->numero_parte_accesorio}}</td>
                          <td><input type="hidden" name="descripcion_accesorio[]" value="{{ $par->descripcion_accesorio}}">{{ $par->descripcion_accesorio}}</td>

                </tr>
                @endforeach
                      </tbody>
              </table>
                  </div>
                </div>


            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Características</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <h2>Características técnicas</h2>
            <div class="table-responsive">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Caracteristica </th>
                  <th>Subgrupo</th>
                  <th>Valor de referencia</th>
                   <th>Descripción</th>
                   <th>Valor</th>

                </tr>
                </thead>
                <tbody>
          @foreach ($detcaractec as $cat)
          <tr>

            <td><input type="hidden" name="idcaracteristica_tecnica[]" value="{{ $cat->idcaracteristica_tecnica}}">{{ $cat->nombre_caracteristica_tecnica}}</td>
            <td><input type="hidden" name="idsubgrupo_carac_tecnica[]" value="{{ $cat->idsubgrupo_carac_tecnica}}">{{ $cat->nombre_subgrupo_carac_tecnica }}</td>
            <td><input type="hidden" name="idvalor_ref_tec[]" value="{{ $cat->idvalor_ref_tec}}">{{ $cat->nombre_valor_ref_tec}}</td>
            <td><input type="hidden" name="descripcion_detalle_caracteristica_tecnica[]" value="{{ $cat->descripcion_detalle_caracteristica_tecnica}}">{{ $cat->descripcion_detalle_caracteristica_tecnica}}</td>
            <td><input type="hidden" name="valor_detalle_caracteristica_tecnica[]" value="{{ $cat->valor_detalle_caracteristica_tecnica}}">{{ $cat->valor_detalle_caracteristica_tecnica}}</td>

          </tr>

          @endforeach
                </tbody>
                <tfoot>

                </tfoot>
        </table>
            </div>
            <hr>
            <h2>Características especiales de funcionamiento</h2>
          <div class="table-responsive">
            <table  class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Caracteristica </th>

                <th>Valor de referencia</th>
                 <th>Descripción</th>
                 <th>Valor</th>

              </tr>
              </thead>
              <tbody>
        @foreach ($detcaracesp as $cat)
        <tr>
          <td><input type="hidden" name="idcaracteristica_especial[]" value="{{ $cat->idcaracteristica_especial}}">{{ $cat->nombre_caracteristica_especial}}</td>

          <td><input type="hidden" name="idvalor_ref_esp[]" value="{{ $cat->idvalor_ref_esp}}">{{ $cat->nombre_valor_ref_esp}}</td>
          <td><input type="hidden" name="descripcion_detalle_caracteristica_especial[]" value="{{ $cat->descripcion_detalle_caracteristica_especial}}">{{ $cat->descripcion_detalle_caracteristica_especial}}</td>
          <td><input type="hidden" name="valor_detalle_caracteristica_especial[]" value="{{ $cat->valor_detalle_caracteristica_especial}}">{{ $cat->valor_detalle_caracteristica_especial}}</td>

        </tr>

        @endforeach
              </tbody>
              <tfoot>

              </tfoot>
      </table>
          </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del equipo</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li ><a href="#tab_1-1" data-toggle="tab">Información adicional</a></li>
                  <li ><a href="#tab_7-7" data-toggle="tab">Servicio Técnico</a></li>
                  <li ><a href="#tab_2-2" data-toggle="tab">Distribuidor</a></li>
                  <li ><a href="#tab_3-3" data-toggle="tab">Fabricante</a></li>
                  <li ><a href="#tab_4-4" data-toggle="tab">Localización y frecuencia de uso</a></li>
                  <li><a href="#tab_5-5" data-toggle="tab">Identificación</a></li>
                  <li class="active"><a href="#tab_6-6" data-toggle="tab">ID</a></li>

                  <li class="pull-left header"><i class="fa fa-tv"></i>Nuevo Equipo</li>

                </ul>



                <div class="tab-content">
                  <div class="tab-pane" id="tab_1-1">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                    <p class="text-danger">(*) Campos requeridos</p>
                  </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                    <div class="form-group">
                      <label for="cod_financiero">Código financiero</label>
                      <input type="text" class="form-control" name="cod_financiero" value="{{$equipo->cod_financiero}}">
                    </div>
                  </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                    <div class="form-group">
                      <label for="forma_adquisicion">Forma de adquisición</label>
                      <input type="text" class="form-control" name="forma_adquisicion" value="{{$equipo->forma_adquisicion}}">
                    </div>
                  </div>

                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                    <div class="form-group">
                      <label for="atencion_mantenimineto_equipo">Atención mantenimiento equipo</label>
                      <textarea rows="3" class="form-control" name="atencion_mantenimineto_equipo" value="{{ $equipo->atencion_mantenimineto_equipo }}">
                        {{ $equipo->atencion_mantenimineto_equipo }}
                      </textarea>
                    </div>
                  </div>



                  </div>
                  <div class="tab-pane" id="tab_7-7">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                    <p class="text-danger">(*) Campos requeridos</p>
                  </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                    <div class="form-group">
                    <label for="idservicio_tecnico" class="est">Servicio técnico</label>
                    <select name="idservicio_tecnico" class="form-control" >
                      <option value="0" disabled selected>=== Selecciona un servicio técnico ===</option>
                    @foreach($servicio_tecnico as $st)
                      @if ($st->idservicio_tecnico==$equipo->idservicio_tecnico)

                      <option value="{{$st->idservicio_tecnico}}" selected>{{$st->nombre_empresa_sevicio_tecnico}}</option>
                    @else
                      <option value="{{$st->idservicio_tecnico}}" >{{$st->nombre_empresa_sevicio_tecnico}}</option>

                    @endif
                       @endforeach
                    </select>
                    </div>
                  </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                    <div class="form-group">
                        <label>Fecha instalación</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="fecha_instalcion"  name="fecha_instalcion" value="{{$equipo->fecha_instalcion}}">
                        </div>
                            <!-- /.input group -->
                    </div>
                  </div>



                  </div>
                  <div class="tab-pane" id="tab_2-2">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                    <p class="text-danger">(*) Campos requeridos</p>
                  </div>

                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                    <div class="form-group">
                    <label for="id_proveedor" class="est">Distribuidor</label>
                    <select name="id_proveedor" class="form-control" >
                      <option value="0" disabled selected>=== Selecciona un distribuidor ===</option>
                    @foreach($proveedor as $prov)
                      @if ($prov->id_proveedor==$equipo->id_proveedor)
                      <option value="{{$prov->id_proveedor}}" selected>{{$prov->contacto_proveedor}}</option>
                      @else
                        <option value="{{$prov->id_proveedor}}">{{$prov->contacto_proveedor}}</option>

                      @endif
                    @endforeach
                    </select>
                    </div>
                  </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                    <div class="form-group">
                            <label>Fecha compra</label>

                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input  type="text" id="fecha_compra" class="form-control pull-right" name="fecha_compra" value="{{$equipo->fecha_compra}}">
                            </div>
                            <!-- /.input group -->
                          </div>
                        </div>

                          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                          <div class="form-group">
                          <label>Fecha de expiración de grarantia</label>

                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" id="fecha_expiracion_garantia" class="form-control pull-right " name="fecha_expiracion_garantia" value="{{$equipo->fecha_expiracion_garantia}}" >
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                        <div class="form-group">
                          <label for="precio">Precio</label>
                          <input type="number" class="form-control" name="precio" value="{{$equipo->precio}}">
                        </div>
                      </div>


                  </div>
                  <div class="tab-pane" id="tab_3-3">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                    <p class="text-danger">(*) Campos requeridos</p>
                  </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                    <div class="form-group">
                    <label for="idfabricante" class="est">Fabricante</label>
                    <select name="idfabricante" class="form-control" >
                      <option value="0" disabled selected>=== Selecciona un fabricante ===</option>
                      @foreach ($fabricante as $fab)
                             @if ($fab->idfabricante==$equipo->idfabricante)
                             <option value="{{$fab->idfabricante}}" selected>{{$fab->contacto_fabricante}}</option>
                             @else
                             <option value="{{$fab->idfabricante}}">{{$fab->contacto_fabricante}}</option>
                             @endif
                      @endforeach

                    </select>
                    </div>
                  </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                    <div class="form-group">
                            <label>Fecha fabricación</label>

                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right"  id="fecha_fabricacion"  name="fecha_fabricacion" value="{{$equipo->fecha_fabricacion}}">
                            </div>
                            <!-- /.input group -->
                          </div>

                        </div>


                  </div>
                  <div class="tab-pane" id="tab_4-4">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                    <p class="text-danger">(*) Campos requeridos</p>
                  </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                    <div class="form-group">
                      <label for="ambiente">Area/Sala/Laboratorio</label>
                      <input type="text" class="form-control" name="ambiente" value="{{$equipo->ambiente}}">
                    </div>
                  </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                    <div class="form-group">
                      <label for="servicio">Departamento/Servicio</label>
                      <input type="text" class="form-control" name="servicio" value="{{$equipo->servicio}}">
                    </div>
                  </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">

                    <div class="form-group">
                      <label for="frec_uso_dia_semana">Frecuencia uso día/semana</label>
                      <select class="form-control" name="frec_uso_dia_semana">
                        <option value="0" disabled selected>=== Selecciona un día ===</option>
                        @for($i = 1; $i <= 7; $i++)
                          @if($equipo->frec_uso_dia_semana==$i)
                          <option value="{{ $i }}" selected>{{ $i }} días/semana</option>
                        @else
                          <option value="{{ $i }}" >{{ $i }} días/semana</option>
                        @endif
                        @endfor
                      </select>
                    </div>
                  </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">

                    <div class="form-group">
                      <label for="frec_uso_hora_dia">Frecuencia uso horas/día</label>
                      <select class="form-control" name="frec_uso_hora_dia">
                        <option value="0" disabled selected>=== Selecciona una hora ===</option>
                        @for($i = 1; $i <= 24; $i++)
                          @if($equipo->frec_uso_hora_dia==$i)
                          <option value="{{ $i }}" selected>{{ $i }} hrs/día</option>
                        @else
                          <option value="{{ $i }}" >{{ $i }} hrs/día</option>
                        @endif
                        @endfor

                      </select>
                    </div>
                  </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">

                    <div class="form-group">
                    <label for="idestado" >Estado</label>
                    <select name="idestado" class="form-control">
                      <option value="0" disabled selected>=== Selecciona un estado ===</option>
                    @foreach($estado as $e)
                      @if ($e->idestado==$equipo->idestado)
                      <option value="{{$e->idestado}}" selected>{{$e->estado}}</option>
                    @else
                      <option value="{{$e->idestado}}" >{{$e->estado}}</option>

                    @endif
                       @endforeach
                    </select>
                    </div>
                  </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">

                    <div class="form-group">
                      <label for="personal_cap">Personal capacitado (*) </label>
                      <select class="form-control" name="personal_cap">
                        @if($equipo->personal_cap==1)

                        <option value="1" selected>SI</option>
                        <option value="0">NO</option>
                      @else

                        <option value="1" >SI</option>
                        <option value="0" select >NO</option>
                      @endif
                      </select>
                    </div>
                  </div>


                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_5-5">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                    <p class="text-danger">(*) Campos requeridos</p>
                  </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                    <div class="form-group">
                      <label for="nombre_equipo">Nombre equipo (*)</label>
                      <input type="text" id="nombre_equipo" class="form-control" name="nombre_equipo" value="{{$equipo->nombre_equipo}}">
                    </div>
                  </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">

                    <div class="form-group">
                      <label for="marca">Marca (*)</label>
                      <input type="text" id="marca" class="form-control" name="marca" value="{{$equipo->marca}}">
                    </div>
                  </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">

                    <div class="form-group">
                      <label for="modelo">Modelo (*)</label>
                      <input type="text" id="modelo" class="form-control" name="modelo" value="{{$equipo->modelo}}">
                    </div>
                  </div>

                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">

                    <div class="form-group">
                      <label for="serie">Serie</label>
                      <input type="text" class="form-control" name="serie" value="{{$equipo->serie}}">
                    </div>
                  </div>

                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                    <div class="form-group">
                      <label for="descripcion">Descripción</label>
                      <textarea rows="3" class="form-control" name="descripcion" value="{{$equipo->descripcion}}">
                        {{$equipo->descripcion}}
                        </textarea>
                    </div>
                  </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">

                    <div class="form-group">
                      <label for="clase_tec_med">Clase tecnológica médica</label>
                      <input type="text" class="form-control" name="clase_tec_med" value="{{$equipo->clase_tec_med}}">
                    </div>
                  </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">

                    <div class="form-group">
                      <label for="clase">Clase </label>
                      <input type="text" class="form-control" name="clase" value="{{$equipo->clase}}">
                    </div>
                  </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">

                    <div class="form-group">
                      <label for="nivel_riesgo">Nivel de riesgo </label>
                      <input type="text" class="form-control" name="nivel_riesgo" value="{{$equipo->nivel_riesgo}}">
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                      <label for="conexion_otro_eq">Conexión otro equipo </label>
                      <input type="text" class="form-control" name="conexion_otro_eq" value="{{$equipo->conexion_otro_eq}}">
                    </div>
                  </div>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane active " id="tab_6-6">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <p class="text-danger">(*) Campos requeridos</p>

                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                          <div class="form-group">
                              <label for="idhospital">Hospital</label>
                              <input type="text" readonly name="idhospital" value="{{$equipo->hospi}}" class="form-control">

                              <input type="hidden"  name="idhospital" value="{{$equipo->idhospital}}" class="form-control">
                          </div>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
                          <div class="form-group">
                              <label for="idarea">Area</label>
                              <input id="area" type="text" readonly name="idarea" value="{{$equipo->idarea}}" class="form-control">
                          </div>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
                          <div class="form-group">
                              <label for="idgrupo">Grupo</label>
                              <input id="grupo" type="text" readonly name="idgrupo" value="{{$equipo->idgrupo}}" class="form-control">
                          </div>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
                          <div class="form-group">
                              <label for="idgrupo">Subgrupo</label>
                              <input id="codigosubgrupo" type="text" readonly value="{{$equipo->codigosubgrupo}}"  class="form-control">

                              <input id="subgrupo" type="hidden" readonly name="idsubgrupo" value="{{$equipo->idsubgrupo}}" class="form-control">
                          </div>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
                          <div class="form-group">
                              <label for="idregion">Región</label>
                              <input id="region" type="text" readonly name="idregion" value="{{$equipo->idregion}}" class="form-control">
                          </div>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
                          <div class="form-group">
                              <label for="iddepartamento">Depto</label>
                              <input id="depto" type="text" readonly name="iddepartamento" value="{{$equipo->iddepartamento}}" class="form-control">
                          </div>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
                          <div class="form-group">
                              <label for="idtipounidad">T. Uni</label>
                              <input id="tipou" type="text" readonly name="idtipounidad" value="{{$equipo->idtipounidad}}" class="form-control">
                          </div>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
                          <div class="form-group">
                              <label for="idunidadsalud">U. Salud</label>
                              <input id="unidad" type="text" readonly name="idunidadsalud" value="{{$equipo->idunidadsalud}}" class="form-control">
                          </div>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
                          <div class="form-group">
                            <label for="correlativo">Correlativo</label>
                            <input id="correlativo" readonly  type="text" class="form-control" name="correlativo" value="{{$equipo->actual}}">

                          </div>
                    </div>



                    <div class="col-lg-offset-3 col-lg-6 col-sm-6 col-md-6 col-xs-12">
                          <div class="form-group">
                            <label >Id Equipo</label>
                            <input  readonly type="text" class="form-control" name="prueba" value="{{$equipo->codigo}}">
                            <input  readonly type="hidden" class="form-control" name="idequipo" value="{{$equipo->codigo}}">

                          </div>
                    </div>

                    <input type="hidden" class="form-control" name="users_id" value="{{ Auth::user()->id }}">







                      @if (count($errors)>0)
                      <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                        </ul>
                      </div>
                      @endif





                  </div>
                  <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Multimedia</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive">
                    <table id="tabla" class="table table-bordered table-striped">
                      <thead>
                      <tr>

                        <th>Manual</th>
                        <th>Nombre</th>
                        <th>Observación</th>


                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($manuales as $par)
                        <tr>


                          <td><input type="hidden" name="idtipomanual[]" value="{{ $par->idtipomanual}}">{{ $par->nombre_tipo_manual}}</td>
                          <td><input type="hidden" name="link_detalle_manual[]" value="{{ $par->link_detalle_manual}}">{{ $par->link_detalle_manual}}</td>
                          <td><input type="hidden" name="observacion_detalle_manual[]" value="{{ $par->observacion_detalle_manual}}">{{ $par->observacion_detalle_manual}}</td>

                </tr>
                @endforeach
                      </tbody>
              </table>
                  </div>
                </div>


            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.box-body -->
      <div class="row">
        <div class="col-md-offset-5 col-lg-6 col-sm-6 col-md-6 col-xs-12">

        <a href="{{route('equipo.index')}}">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
        </a>
        <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
      </div>

      </div>
      <!-- /.box-footer-->
      </form>

    <!-- /.box -->

  </section>




  @push ('scripts')
    <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

    <script type="text/javascript">
    //botones para guardar



    //fechas
    $('#fecha_fabricacion').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"

    });
    $('#fecha_instalcion').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"

    });
    $('#fecha_compra').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"

    });
    $('#fecha_expiracion_garantia').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"

    });
    //select con busqueda
    $('#hospital').select2({
      theme: "classic"
    });



    </script>
  <script>
  $('#liEq').addClass("treeview active");
  $('#liEquipo').addClass("active");
  </script>
  @endpush




@endsection

@extends ('layouts.admin')
@section ('contenido')
  <section class="content-header">
    <h1>
      Vista General <a href="{{route('equipo.index')}}">
        <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
      </a>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Equipo</a></li>

      <li class="active">Index</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="../../dist/img/config1.png" alt="User profile picture">

            <h3 class="profile-username text-center">{{$equipo->nombre_equipo}}</h3>

            <p class="text-muted text-center">{{$equipo->idequipo}}</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Tipo de equipo</b> <a class="pull-right">{{ $equipo->idsubgrupo }}</a>
              </li>
              <li class="list-group-item">
                <b>Marca</b> <a class="pull-right">{{ $equipo->marca }}</a>
              </li>
              <li class="list-group-item">
                <b>Modelo</b> <a class="pull-right">{{ $equipo->modelo }}</a>
              </li>
            </ul>

            <a href="{{route('equipo.ficha',$equipo->idequipo)}}" target="_blank" class="btn btn-success btn-block"><b>Ficha técnica</b></a>
            <a href="{{route('equipo.rutina',$equipo->idequipo)}}" target="_blank" class="btn btn-primary btn-block"><b>Historial de la rutina</b></a>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Acerca de</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <strong><i class="fa fa-user margin-r-5"></i> Usuario responsable</strong>

            <p>Ing. Gabriel Cifuentes</p>
            <hr>
            <strong><i class="fa fa-book margin-r-5"></i> Manuales</strong>

            <p class="text-muted">
                @foreach ($Detalle_manual as $de)
            <a href="{{asset('equipo/manuales/'.$de->link_detalle_manual)}}" target="_blank">{{$de->link_detalle_manual}}</a>
                @endforeach

            </p>

            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Localización</strong>

            <p class="text-muted">{{$equipo->ambiente}}/{{$equipo->servicio}}</p>


            <hr>

            <strong><i class="fa  fa-qrcode margin-r-5"></i> Código QR</strong>
            <p></p>
            <img class="profile-user-img img-responsive " src="" alt="User profile picture">






          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Inicio</a></li>
            <li><a href="#timeline" data-toggle="tab">Rutinas</a></li>
            <li><a href="#settings" data-toggle="tab">Actualizar</a></li>
            <li><a href="#manuales" data-toggle="tab">Manuales</a></li>
            <li><a href="#imagen" data-toggle="tab">Imágenes</a></li>

          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <!-- Post -->
              <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                      <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                      </span>
                  <span class="description">Shared publicly - 7:30 PM today</span>
                </div>
                <!-- /.user-block -->
                <p>
                  Lorem ipsum represents a long-held tradition for designers,
                  typographers and the like. Some people hate it and argue for
                  its demise, but others ignore the hate as they create awesome
                  tools to help create filler text for everyone from bacon lovers
                  to Charlie Sheen fans.
                </p>
                <ul class="list-inline">
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                  <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                  </li>
                  <li class="pull-right">
                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                      (5)</a></li>
                </ul>

                <input class="form-control input-sm" type="text" placeholder="Type a comment">
              </div>
              <!-- /.post -->

              <!-- Post -->
              <div class="post clearfix">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                      <span class="username">
                        <a href="#">Sarah Ross</a>
                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                      </span>
                  <span class="description">Sent you a message - 3 days ago</span>
                </div>
                <!-- /.user-block -->
                <p>
                  Lorem ipsum represents a long-held tradition for designers,
                  typographers and the like. Some people hate it and argue for
                  its demise, but others ignore the hate as they create awesome
                  tools to help create filler text for everyone from bacon lovers
                  to Charlie Sheen fans.
                </p>

                <form class="form-horizontal">
                  <div class="form-group margin-bottom-none">
                    <div class="col-sm-9">
                      <input class="form-control input-sm" placeholder="Response">
                    </div>
                    <div class="col-sm-3">
                      <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.post -->

              <!-- Post -->
              <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/config1.png" alt="User Image">
                      <span class="username">
                        <a href="#">Imágenes del equipo</a>
                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                      </span>
                  <span class="description">{{ $equipo->nombre_equipo }}</span>
                </div>
                <!-- /.user-block -->
                <div class="row margin-bottom">

                  <!-- /.col -->
                  <div class="col-sm-12">


                        @foreach ($imagen_equipo as $img)
                            <div class="col-sm-3">
                          <img class="img-responsive" src="{{asset('img/equipo/'.$img->imagen)}}" alt="{{$img->descripcion_imagen}}">


                          </div>

                        @endforeach


                      <!-- /.col -->

                      <!-- /.col -->


                    <!-- /.row -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <ul class="list-inline">

                </ul>


              </div>
              <!-- /.post -->
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="timeline">
  <div class="box-body">
  <div class="row">


    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#rutina" data-toggle="tab">Mantenimiento</a></li>
        <li><a href="#prueba" data-toggle="tab">Prueba</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="rutina">
          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <h3 class="box-title"><a href="../rutina/ruman/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Agregar nueva rutina</button></a>
          </div>
              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <h3 class="box-title"><a href="ruman/create"><button class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span> Copiar rutinas</button></a>
         </div>
           <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          </div>


          @foreach($ruman as $st)
            @if ($st->idequipo==$equipo->idequipo)

  <div style=”padding:12px;background-color:#red;line-height:1.4;”>

          <div class="box-body col-md-6">
    <h3>Notificación</h3>

hsdfhbhsdabbds
btn-group



                              </div>
      <div class="box-body col-md-6">
<h3>Rutina</h3>
                              <div class="form-group">
                                <label for="select" class="">Tipo rutina</label>
                                <br>

                                @foreach($tiporu as $hosp)
                                         @if ($hosp->idtipo_rutina==$st->idtipo_rutina)
                                         <p>{{$hosp->tipo_rutina}}</p>


                                       @endif
                                        @endforeach
                              </div>



                              <div class="form-group">
                                  <label>Fecha que creo la rutina</label>
                                  <p>{{$st->fecha_realizacion_rutina}}</p>

                                      <!-- /.input group -->
                              </div>
                              <div class="form-group">

                                <label for="direccion_fab">Observaciones rutina</label>
                                <p>{{$st->observaciones_rutina}}</p>
                                </div>

      <div class="form-group">
              <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>
              <p>{{$st->tiempo_estimado_rutina_mantenimiento}}</p>

      </div>


            <div class="form-group">

              <label for="direccion_fab">Responsable de area de rutina</label>
              <p>{{$st->responsable_area_rutina_mantenimiento}}</p>
            </div>



            <div class="form-group">
              <label for="select" class="">Permiso de trabajo</label>
              <br>

              @foreach($permisotrabajo as $hosp)
                       @if ($hosp->idpermiso_trabajo==$st->idpermiso_trabajo)
                       <p>{{$hosp->num_permiso}}</p>


                     @endif
                      @endforeach

            </div>

            <div class="form-group">

              <label for="direccion_fab">Estado rutina</label>
              <p>ACTIVO</p>
            <!--  <p>{{$st->estado_rutina}}</p> -->

            </div>

      </div>
  </div>

      @endif
       @endforeach

      </div>





         <div class="tab-pane" id="prueba">



            </div>
          </div>        <!--se acabo la rutina mantenimiento -->
            </div>
          </div>
  </div>
          </div>

            <!-- /.tab-pane -->

            <div class="tab-pane" id="settings">



              <form role="form" method="POST" action="{{route('equipo.update',$equipo->idequipo)}}" >
                {!!method_field('PUT')!!}
                {!!csrf_field()!!}


              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs">
                <ul class="nav nav-tabs pull-right">





                  <li class="active"><a href="#tab_5-5" data-toggle="tab">Identificación</a></li>
                  <li ><a href="#tab_4-4" data-toggle="tab">Localización</a></li>
                  <li ><a href="#tab_3-3" data-toggle="tab">Fabricante</a></li>
                  <li ><a href="#tab_2-2" data-toggle="tab">Distribuidor</a></li>
                  <li ><a href="#tab_7-7" data-toggle="tab">Servicio Técnico</a></li>
                  <li ><a href="#tab_1-1" data-toggle="tab">Información adicional</a></li>
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
                  <div class="tab-pane active" id="tab_5-5">
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
                  <input type="hidden" name="idregion" value="{{$equipo->idregion}}">
                  <input type="hidden" name="iddepartamento" value="{{$equipo->iddepartamento}}">
                  <input type="hidden" name="idhospital" value="{{$equipo->idhospital}}">
                  <input type="hidden" name="idtipounidad" value="{{$equipo->idtipounidad}}">
                  <input type="hidden" name="idunidadsalud" value="{{$equipo->idunidadsalud}}">
                  <input type="hidden" name="idarea" value="{{$equipo->idarea}}">
                  <input type="hidden" name="idgrupo" value="{{$equipo->idgrupo}}">
                  <input type="hidden" name="idsubgrupo" value="{{$equipo->idsubgrupo}}">
                  <input type="hidden" name="correlativo" value="{{$equipo->correlativo}}">
                  <input type="hidden" name="idequipo" value="{{$equipo->idequipo}}">
                  </div>
                  <!-- /.tab-pane -->

                  <!-- /.tab-pane -->
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
                <!-- /.tab-content -->
              </div>
              <!-- nav-tabs-custom -->
              <div class="box-footer">

                <div class="col-lg-offset-5 col-lg-6 col-sm-6 col-md-6 col-xs-12">



                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-saved"></span> </button>
              </div>

              </div>
              <!-- /.box-footer-->
              </form>
            </div>

            <div class="tab-pane" id="manuales">

            <!-- ingresar manual -->

            <div class="row">
                <div class="form-group">
                  <form role="form" method="POST" action="{{route('store')}}" enctype="multipart/form-data" >
                              {!! csrf_field() !!}

                      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                        <div class="form-group">

                          Tipo de manual<br>

                          <select name="idtipomanual" class="form-control" >
                              <option value="0" disabled selected>=== Selecciona un tipo de manual ===</option>
                            @foreach($TipoManual as $ti)

                              <option value="{{$ti->idtipomanual}}">{{$ti->nombre_tipo_manual}}</option>

                               @endforeach
                            </select>

                          <input type="hidden" name="idequipo" class="form-control" value="{{$equipo->idequipo}}" >
                          Observacion<br>
                          <input type="text" name="observacion_detalle_manual" class="form-control">

                          Ingrese manual<br>
                          <input type="file" name="imagen" class="form-control">


                        </div>


                              <button class="btn btn-primary" type="submit">Guardar</button>
                              <button class="btn btn-danger" type="reset">Cancelar</button>

                      </div>
                  </form>
              </div>
            </div>



          </div>
            <!-- /.box-body -->
            <div class="tab-pane" id="imagen">

              {!! Form::open(array('route'=>'imagen.store','method'=>'POST', 'files'=>true)) !!}
                    {{Form::token()}}
                    <div class="row">


                              <input type="hidden" name="idequipo" value="{{ $equipo->idequipo }}" class="form-control" >

                      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="descripcion_imagen">Descripción de la imagen</label>
                              <input type="text" name="descripcion_imagen"  class="form-control" placeholder="Descripción...">
                            </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="imagen">Imagen</label>
                              <input type="file" name="imagen" class="form-control"  >
                            </div>
                      </div>
                      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">

                          <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
                          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>

                            </div>
                      </div>
                    </div>

              {!!Form::close()!!}

            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->

    <!-- /.row -->

  </section>
  <script src="{{asset('ajax/jquery.min.js')}}"></script>
  <script src="{{asset('ajax/bootstrap.min.js')}}"></script>
  <script src="{{asset('ajax/select2.min.js')}}"></script>
  <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>


  <script type="text/javascript">
  //botones para guardar

  //fechas
  $('#fecha_fabricacion').datepicker({
      autoclose: true,
      todayHighlight: true,
      format: "yyyy-mm-dd",
      orientation: "bottom auto",
      showOptions: { direction: "down" }

  });
  $('#fecha_instalcion').datepicker({
      autoclose: true,
      todayHighlight: true,
      format: "yyyy-mm-dd",
      orientation: "bottom auto",
      showOptions: { direction: "down" }

  });
  $('#fecha_compra').datepicker({
      autoclose: true,
      todayHighlight: true,
      format: "yyyy-mm-dd",
      orientation: "bottom auto",
      showOptions: { direction: "down" }

  });
  $('#fecha_expiracion_garantia').datepicker({
      autoclose: true,
      todayHighlight: true,
      orientation: "bottom auto",
      format: "yyyy-mm-dd"

  });

  $('#amodal').click(function(){

     $("#modal-success").modal();
  }


  </script>
@endsection

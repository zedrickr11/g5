@extends ('layouts.admin')
@section ('contenido')
  <section class="content-header">
    <h1>
      <a href="{{route('equipo.index')}}">
        <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
      </a>Vista General
    </h1>
    @if (session()->has('info'))
    <div class="row">
    <div id="alerta_eq" class="col-md-offset-3 col-md-6 col-xs-12 col-lg-6 alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('info') }}</strong>
    </div>
    </div>
    @endif
    @if (session()->has('manual'))
    <div class="row">
    <div id="alerta_eq" class="col-md-offset-3 col-md-6 col-xs-12 col-lg-6 alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('manual') }}</strong>
    </div>
    </div>
    @endif
    @if (session()->has('img'))
    <div class="row">
    <div id="alerta_eq" class="col-md-offset-3 col-md-6 col-xs-12 col-lg-6 alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('img') }}</strong>
    </div>
    </div>
    @endif
    @if (session()->has('caracesp'))
    <div class="row">
    <div id="alerta_eq" class="col-md-offset-3 col-md-6 col-xs-12 col-lg-6 alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('caracesp') }}</strong>
    </div>
    </div>
    @endif
    @if (session()->has('carac'))
    <div class="row">
    <div id="alerta_eq" class="col-md-offset-3 col-md-6 col-xs-12 col-lg-6 alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('carac') }}</strong>
    </div>
    </div>
    @endif
    @if (session()->has('solicituds'))
    <div class="row">
    <div id="alerta_eq" class="col-md-offset-3 col-md-6 col-xs-12 col-lg-6 alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('solicituds') }}</strong>
    </div>
    </div>
    @endif
    @if (session()->has('parte'))
    <div class="row">
    <div id="alerta_eq" class="col-md-offset-3 col-md-6 alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('parte') }}</strong>
    </div>
    </div>
    @endif
    @if (session()->has('accesorio'))
    <div class="row">
    <div id="alerta_eq" class="col-md-offset-3 col-md-6 alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ session('accesorio') }}</strong>
    </div>
    </div>
    @endif
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
            <img class="profile-user-img img-responsive img-circle" src="{{asset('dist/img/config1.png')}}" alt="User profile picture">

            <h3 class="profile-username text-center">{{$equipo->nombre_equipo}}</h3>

            <p class="text-muted text-center">{{$equipo->idequipo}}</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Tipo de equipo  </b> <br> <a class="pull">{{ $equipo->subgrupo }}</a>

              </li>
              <li class="list-group-item">
                <b>Marca</b>  <br><a class="pull">{{ $equipo->marca }}</a>
              </li>
              <li class="list-group-item">
                <b>Modelo</b> <br> <a class="pull">{{ $equipo->modelo }}</a>
              </li>
            </ul>

            <a href="{{route('equipo.ficha',$equipo->idequipo)}}" target="_blank" class="btn btn-success btn-block"><b>Ficha técnica</b></a>
          <a  href="{{route('equipo.vista',$equipo->idequipo)}}" target="_blank" class="btn btn-warning btn-block"><b>Solicitudes</b></a>
          <a  href="{{route('carac',$equipo->idequipo)}}"  class="btn btn-info btn-block"><b>Características</b></a>
          <a href="{{route('equipo.rutina',$equipo->idequipo)}}" target="_blank" class="btn btn-primary btn-block"><b>Historial técnico</b></a>
          <a href="{{route('equipo.HistorialRutina',$equipo->idequipo)}}" target="_blank" class="btn btn-danger btn-block"><b>Historial de mantenimientos</b></a>

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

            <p>{{ $responsable->nombre }}</p>
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

            <strong><i class="fa  fa-qrcode margin-r-5"></i> Código QR  </strong>
            <br>
            <br>
            <img  class="profile-user-img img-responsive " src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
                        ->size(500)
                        ->generate(Request::url())) !!} " alt="User profile picture" style="width:100%;max-width:300px">
            <p class="text-center"> <a  href="{{url('equipo/qr',$equipo->idequipo)}}" target="_blank"><span class="label label-success">Imprimir QR</span></a></p>




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
            <li><a href="#fichatecnica" data-toggle="tab">Ficha técnica</a></li>

            <li><a href="#solicitudes" data-toggle="tab">Solicitudes</a></li>
            <li><a href="#timeline" data-toggle="tab">Rutinas</a></li>

            <li><a href="#settings" data-toggle="tab">Datos del equipo</a></li>
            <li><a href="#multimedia" data-toggle="tab">Multimedia</a></li>



          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <!-- Post1 -->
              <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="{{asset('dist/img/config.png')}}" alt="user image">
                      <span class="username">
                        <a>Partes del equipo</a>
                        <a href="#" class="pull-right btn-box-tool"></a>
                      </span>
                  <span class="description">{{ $equipo->nombre_equipo }}</span>
                </div>
                <!-- /.user-block --><!-- /.Boniparte -->
                <div class="row">
                    <form role="form" method="POST" action="{{route('parte.store')}}" enctype="multipart/form-data" >
                          {!! csrf_field() !!}
                          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                              <label for="nombre_parte">Parte</label>
                              <input type="text" name="nombre_parte" class="form-control">
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                              <div class="form-group">
                              <label for="num_parte">No. de parte </label>
                              <input type="number" name="num_parte" class="form-control">
                            </div>
                          </div>
                              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                  <div class="form-group">
                              <label for="descripcion">Descripción </label>


                              <input type="text" name="descripcion" class="form-control">

                                <input  type="hidden" name="idequipo" readonly class="form-control" value="{{$equipo->idequipo}}">
                              </div>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                  <div class="form-group">
                              <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
                              <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
                            </div>
                          </div>

                  </form>
                </div>
                  <div class="row">
                  <div class="col-md-12">
                      <div class="table-responsive">
                        <table id="tabla" class="table table-bordered table-striped">
                          <thead>
                          <tr>

                            <th>Parte</th>
                            <th>No. Parte</th>
                            <th>Descripción</th>
                            <th>Opciones</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($partes as $par)
                            <tr>

                              <td>{{ $par->nombre_parte}}</td>
                              <td>{{ $par->num_parte}}</td>
                              <td>{{ $par->descripcion}}</td>
                      <td>
                          <form style="display: inline" method="POST" action="{{route('parte.destroy', $par->idparte_equipo)}}">
                          {!!method_field('DELETE')!!}
                          {!!csrf_field()!!}
                            <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                          </tbody>
                  </table>
                      </div>
                    </div>


                </div> <!-- /.Boniparte -->
              </div>
              <!-- /.post1 -->
              @if (count($errors)>0)
              <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
                </ul>
              </div>
              @endif
              <!-- Post -->
              <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{asset('dist/img/config.png')}}" alt="user image">
                        <span class="username">
                          <a>Accesorios del equipo </a>
                          <a href="#" class="pull-right btn-box-tool"></a>
                        </span>
                        <span class="description">{{ $equipo->nombre_equipo }}</span>

                  </div>

                  <!-- /.user-block --><!-- /.Boniparte -->
                  <div class="row">
                      <form role="form" method="POST" action="{{route('accesorio.store')}}" enctype="multipart/form-data" >
                            {!! csrf_field() !!}
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                              <div class="form-group">
                                <label for="nombre_accesorio">Accesorio</label>
                                <input type="text" name="nombre_accesorio" class="form-control">
                              </div>
                            </div>


                                  <input  type="hidden" name="idequipo" readonly class="form-control "  value="{{$equipo->idequipo}}">
                                  <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                      <div class="form-group">
                                      <label for="numero_parte_accesorio">No. Accesorio</label>
                                    <input type="number" name="numero_parte_accesorio" class="form-control">
                                  </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                    <label for="nombre_accesorio">Descripción</label>

                                    <input type="text" name="descripcion_accesorio" class="form-control">
                                  </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
                                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
                              </div>
                            </div>
                          </form>
                          </div>

                    <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                          <table id="tabla" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                              <th>Accesorio</th>
                              <th>No. Accesorio</th>
                              <th>Descripción</th>
                              <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach ($accesorios as $accs)
                              <tr>

                                <td>{{ $accs->nombre_accesorio}}</td>
                                <td>{{ $accs->numero_parte_accesorio}}</td>
                                <td>{{ $accs->descripcion_accesorio}}</td>

                        <td>
                            <form style="display: inline" method="POST" action="{{route('accesorio.destroy', $accs->idaccesorio)}}">
                            {!!method_field('DELETE')!!}
                            {!!csrf_field()!!}
                              <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                            </tbody>
                    </table>
                        </div>
                      </div>
                    </div>
                  </div> <!-- /.Boniparte -->





              <!-- /.post -->

              <!-- Post -->
              <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="{{asset('dist/img/config1.png')}}" alt="User Image">
                      <span class="username">
                        <a href="#">Imágenes del equipo</a>
                        <a href="#" class="pull-right btn-box-tool"></i></a>
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
            <div class="tab-pane" id="fichatecnica">
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                <div class="form-group">
                <h3>Características técnicas</h3>
              </div>
            </div>
                {!!Form::open(array('url'=>'equipo/caracteristica/detcaractec','method'=>'POST','autocomplete'=>'off'))!!}
                      {{Form::token()}}
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                <div class="form-group">
                <label for="idcaracteristica_tecnica" class="est">Característica técnica</label>
                <select id="carac" name="cidcaracteristica_tecnica" class="form-control" style="width:100%">
                  <option disabled selected>=== Selecciona una característica ===</option>
                @foreach($caract_tec as $tec)

                  <option value="{{$tec->idcaracteristica_tecnica}}">{{$tec->nombre_caracteristica_tecnica}}</option>

                @endforeach
                </select>
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

              <div class="form-group">
              <label for="idsubgrupo_carac_tecnica" class="est">Subgrupo técnico</label>
              <select id="sub_carac" name="cidsubgrupo_carac_tecnica" class="form-control" style="width:100%">
                <option disabled selected>=== Selecciona una subgrupo ===</option>
              @foreach($subcaractec as $tec)

                <option value="{{$tec->idsubgrupo_carac_tecnica}}">{{$tec->nombre_subgrupo_carac_tecnica}}</option>

              @endforeach
              </select>
              </div>
            </div>
              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

              <div class="form-group">
              <label for="idvalor_ref_tec" class="est">Valor de referencia</label>
              <select id="valor_ref" name="cidvalor_ref_tec" class="form-control" style="width:100%">
                <option disabled selected>=== Selecciona un valor de referencia===</option>
              @foreach($valorreftec as $tec)

                <option value="{{$tec->idvalor_ref_tec}}">{{$tec->nombre_valor_ref_tec}}</option>

              @endforeach
              </select>
              </div>
            </div>
                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                  <div class="form-group">
                    <label for="descripcion_detalle_caracteristica_tecnica">Descripción</label>
                    <textarea id="desc_carac" rows="3" class="form-control" name="cdescripcion_detalle_caracteristica_tecnica">

                    </textarea>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

                <div class="form-group">
                  <label for="valor_detalle_caracteristica_tecnica">Valor</label>
                  <input id="valor_tec" name="cvalor_detalle_caracteristica_tecnica" type="number" min="0" step="0.1" class="form-control">

                </div>
              </div>
              <input id="idequipo_carac" type="hidden" name="cidequipo" value="{{ $equipo->idequipo }}">

              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

              <div class="form-group">
                <label for=""></label>
                <button type="button" id="bt_add_carac" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>


              </div>
            </div>
            <div class="table-responsive col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <table id="detalles_carac" class="table table-striped table-bordered table-condensed table-hover">
                    <thead style="background-color:#2ab863">
                        <th>Opciones</th>
                        <th>Característica</th>
                        <th>Subgrupo</th>
                        <th>Valor de ref</th>
                        <th>Descripción</th>
                        <th>Valor</th>




                    </thead>
                    <tfoot>

                    </tfoot>
                    <tbody>

                    </tbody>
                </table>
             </div>
             <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar_carac">
               <div class="form-group">
                     <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>

                     <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
                     <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>

                   </div>
             </div>
                {!!Form::close()!!}

              </div>
              <hr>
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                <div class="form-group">
                <h3>Características especiales de funcionamiento</h3>
              </div>
            </div>
                {!!Form::open(array('url'=>'equipo/caracteristica/detcaracesp','method'=>'POST','autocomplete'=>'off'))!!}
                      {{Form::token()}}
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                <div class="form-group">
                <label for="idcaracteristica_tecnica" class="est">Característica especial</label>
                <select id="espe" name="cidcaracteristica_tecnica" class="form-control" style="width:100%">
                  <option disabled selected>=== Selecciona una característica ===</option>
                @foreach($caracespefun as $tec)

                  <option value="{{$tec->idcaracteristica_especial}}">{{$tec->nombre_caracteristica_especial}}</option>

                @endforeach
                </select>
                </div>
              </div>

              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

              <div class="form-group">
              <label for="idvalor_ref_tec" class="est">Valor de referencia</label>
              <select id="valor_esp" name="cidvalor_ref_tec" class="form-control" style="width:100%">
                <option disabled selected>=== Selecciona un valor de referencia===</option>
              @foreach($valorrefesp as $tec)

                <option value="{{$tec->idvalor_ref_esp}}">{{$tec->nombre_valor_ref_esp}}</option>

              @endforeach
              </select>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

            <div class="form-group">
              <label for="valor_detalle_caracteristica_tecnica">Valor</label>
              <input id="v_esp" name="cvalor_detalle_caracteristica_tecnica" type="number" min="0" step="0.1" class="form-control">

            </div>
          </div>
                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                  <div class="form-group">
                    <label for="descripcion_detalle_caracteristica_tecnica">Descripción</label>
                    <textarea id="desc_esp" rows="3" class="form-control" name="cdescripcion_detalle_caracteristica_tecnica">

                    </textarea>
                  </div>
                </div>

              <input id="idequipo_esp" type="hidden" name="cidequipo" value="{{ $equipo->idequipo }}">

              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

              <div class="form-group">
                <label for=""></label>
                <button type="button" id="bt_add_esp" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>


              </div>
            </div>
            <div class="table-responsive col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <table id="detalles_esp" class="table table-striped table-bordered table-condensed table-hover">
                    <thead style="background-color:#2ab863">
                        <th>Opciones</th>
                        <th>Característica</th>

                        <th>Valor de ref</th>
                        <th>Descripción</th>
                        <th>Valor</th>




                    </thead>
                    <tfoot>

                    </tfoot>
                    <tbody>

                    </tbody>
                </table>
             </div>
             <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar_esp">
               <div class="form-group">
                     <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>

                     <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
                     <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>

                   </div>
             </div>
                {!!Form::close()!!}

              </div>
            </div>


<!--SOLICITUDES-->
              <div class="tab-pane" id="solicitudes">
                <div class="box-body">
                <div class="row">
                  <form role="form" method="POST" action="{{route('solicitud.store')}}" >
                  {!! csrf_field() !!}
                  <div class="nav-tabs-custom">

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tabsol" data-toggle="tab">ID</a></li>
                      <li><a href="#tab-tipo" data-toggle="tab">Tipo de trabajo</a></li>
                      <li ><a href="#tab-area" data-toggle="tab">Área de mantenimiento</a></li>
                    </ul>

                    <div class="tab-content">

                    <div class="tab-pane active" id="tabsol">

                      <div class="box-body col-md-6">
                        <div class="form-group">
                        <label for="direccion_fab">No. de solicitud</label>
                        <input type="text" class="form-control" name="numero" value="{{old('numero')}}">
                        </div>
                      <div class="form-group">
                      <label for="estado">Compra de material</label>
                      <select class="form-control" name="compra_material">
                      <option value='1'>Si</option>
                      <option value='0'>No</option>
                      </select>
                      </div>
                      <div class="form-group">
                      <label for="direccion_fab">Solicitud dirigida</label>
                      <input type="text" class="form-control" name="dirigido_solitud_trabajo" value="{{old('dirigido_solitud_trabajo')}}">
                      </div>
                      <div class="form-group">
                      <label for="direccion_fab">Jefe</label>
                      <input type="text" class="form-control" name="jefe_solitud_trabajo" value="{{old('jefe_solitud_trabajo')}}">
                      </div>
                      </div>
                      <div class="box-body col-md-6">
                        <div class="form-group">
                        <label>Id equipo</label>
                        <input  type="text" name="idequipo" readonly class="form-control select2" id="idequipo" data-live-search="true" value="{{$equipo->idequipo}}">
                       <!--aqui va el for each de equipo-->

                        </div>

                      <div class="form-group">
                        <label for="solicitudes">Contratar trabajo</label>
                        <select class="form-control" name="contratar_trabajo"  >
                          <option value="1">Si</option>
                          <option value="0">No</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="direccion_fab">Puesto dirigido</label>
                      <input type="text" class="form-control" name="puesto_dirigido_solitud_trabajo" value="{{old('puesto_dirigido_solitud_trabajo')}}">
                      </div>
                      <div class="form-group">
                      <label for="direccion_fab">Edificio</label>
                      <input type="text" class="form-control" name="edificio_solitud_trabajo" value="{{old('edificio_solitud_trabajo')}}">
                      </div>
                      </div>



                      <div class="box-body col-md-12">


                          <div class="form-group">
                            <label>Descripción de solicitud</label>
                            <textarea type="text" rows="5" cols="92"  name="descripcion" value="{{old('descripcion')}}" class="form-control">
                           </textarea>
                          </div>


                      </div>
                      <div class="box-body col-md-12">
                         <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
                    <a onclick="mostar();" data-toggle="tab" aria-expanded="true">
                    <button type="button" name="adelante" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> </button>
                    </a>
                    </div>
                    </div>


                          <div class="tab-pane" id="tab-tipo">


                                <div class="form-group">
                                <label for="idarea" >Tipo de trabajo</label>
                                <select name="pidtipo" class="form-control " id="pidtipo" style="width:100%">
                                   <option value="0" disabled selected>=== Seleccione un tipo de trabajo===</option>
                                   @foreach($tipos as $tip)
                                                          <option value="{{$tip->idtipo_trabajo}}">{{$tip->tipo}}</option>
                                                          @endforeach
                                </select>
                                </div>

                            <div class="form-group">
                            <label for="direccion_fab">Descripción del tipo de trabajo</label>
                            <input type="text" class="form-control" name="descripcion" id="pdescripcion" value="">
                            </div>

                            <div class="form-group">
                            <button type="button" id="bt_add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
                            </div>


                            <table id="detalle" class="table table-striped table-bordered table-condensed table-hover">
                            <thead style="background-color:#2ab863">
                              <th>Opciones</th>
                              <th>Tipo de trabajo</th>
                              <th>Descripción tipo de trabajo</th>

                            </thead>
                              <tfoot>

                              </tfoot>
                              <tbody>

                              </tbody>
                            </table>
                              <br>
                              <br>
                            <div class="box-body col-md-12">
                              <a onclick="mostar3();">
                                <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
                              </a>
                        <a onclick="mostar2();" data-toggle="tab" aria-expanded="true">
                     <button type="button" name="adelante" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> </button>
                     </a>
                       </div>
                          </div>
                            <div class="tab-pane" id="tab-area">




                                    <div class="form-group">
                                    <label for="ipdarea" >Área de mantenimiento (*)</label>
                                    <select name="idarea" class="form-control "  id="pidarea" style="width:100%">
                                       <option value="0" disabled selected>=== Seleccione un área de mantenimiento ===</option>
                                       @foreach($areas as $are)
                                       <option value="{{$are->idarea_mantenimiento}}">{{$are->area}}</option>
                                       @endforeach
                                    </select>
                                    </div>


                              <div class="form-group">
                              <button type="button" id="bt_adds" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
                              </div>


                              <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                              <thead style="background-color:#2ab863">
                                <th>Opciones</th>
                                <th>Áreas de mantenimiento</th>

                              </thead>
                                <tfoot>

                                </tfoot>
                                <tbody>

                                </tbody>
                              </table>
                              <div class="box-body col-md-12">

                                <a onclick="mostar();">
                                  <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
                                </a>


                            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
                            </div>
                            </div>
</div>
                            </div>

                  </form>

                </div><!--ROW-->
              </div><!--box-body-->
              </div>

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

          <div class="box-body col-md-6">
            <table width="280" cellspacing="1" cellpadding="3" border="0" bgcolor="#1E679A">
            <tr>
              <td bgcolor="#ffffcc">


        <h3>Preventivo</h3>

          @if (auth()->user()->hasRole(['tec-ing']))
            @foreach($ruman as $st)
            @if ($st->idequipo==$equipo->idequipo)
            @if ($st->idtipo_rutina==1)
            @if($st->estado_rutina=='PENDIENTE')
            @if($st->responsable_area_rutina_mantenimiento==Auth::id())
            <i>Fecha a realizar próxima rutina:</i>
            @foreach($notificacion as $noti)
            @if ($st->idrutina_mantenimiento==$noti->rutina_mantenimiento_idrutina_mantenimiento)
            <p>{{date("Y-m-d",strtotime($noti->start))}}</p>
            @if(date("Y-m-d",strtotime($noti->start))<= date('Y-m-d'))


            @if (auth()->user()->hasRole(['tec-ing']))

            @else
            <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
              <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
            </a>
            @endif


              <a href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}">
              <i class="box-title"><i href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}"><button class="btn btn-danger"><span class="fa fa-th"></span>    @if ($st->frecuencia_rutina==1)
            <i>Mensual</i>     @endif
            @if ($st->frecuencia_rutina==2)
         <i>Bimestral</i>     @endif
            @if ($st->frecuencia_rutina==3)
         <i>Trimestral</i>     @endif
         @if ($st->frecuencia_rutina==6)
      <i>Semestral</i>     @endif
      @if ($st->frecuencia_rutina==12)
       <i>Anual</i>     @endif</button></i>
     </i></a>
      <br>
    @else
    @if (auth()->user()->hasRole(['tec-ing']))

    @else
    <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
      <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
    </a>

    @endif
            <a href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}">
    <i class="box-title"><i  href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}"><button style="height:100%" class="btn btn-warning"><span class="fa fa-th"></span>    @if ($st->frecuencia_rutina==1)
    <i>Mensual</i>     @endif
    @if ($st->frecuencia_rutina==2)
    <i>Bimestral</i>     @endif
    @if ($st->frecuencia_rutina==3)
    <i>Trimestral</i>     @endif
    @if ($st->frecuencia_rutina==6)
    <i>Semestral</i>     @endif
    @if ($st->frecuencia_rutina==12)
    <i>Anual</i>     @endif</button></a>
    </h3>
    <br>
     @endif
     @endif

    @endforeach
        @endif
              @endif
              @endif
              @endif
            @endforeach

          </td>
          </tr>
    </table>
      </div>
          @else

        <h3 class="box-title"><a href="{{route('ruman.create2',[$equipo->idequipo,$equipo->idsubgrupo])}}"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Crear nueva rutina</button></a></h3>


        <h3 class="box-title"><a href="{{route('ruman.asignar',[$equipo->idequipo,$equipo->idsubgrupo])}}"><button class="btn bg-aqua"><span class="glyphicon glyphicon-plus"></span> Copiar rutina de otro equipo</button></a></h3>


        @foreach($ruman as $st)
        @if ($st->idequipo==$equipo->idequipo)
        @if ($st->idtipo_rutina==1 )
        @if($st->estado_rutina=='PENDIENTE')
        <i>Fecha a realizar próxima rutina:</i>
        @foreach($notificacion as $noti)
        @if ($st->idrutina_mantenimiento==$noti->rutina_mantenimiento_idrutina_mantenimiento)
        <p>{{date("Y-m-d",strtotime($noti->start))}}</p>
        @if(date("Y-m-d",strtotime($noti->start))<= date('Y-m-d'))
        @if (auth()->user()->hasRole(['tec-ing']))

        @else
        <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
          <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
        </a>
        @endif

          <a href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}">
          <i class="box-title"><i href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}"><button class="btn btn-danger"><span class="fa fa-th"></span>    @if ($st->frecuencia_rutina==1)
        <i>Mensual</i>     @endif
        @if ($st->frecuencia_rutina==2)
     <i>Bimestral</i>     @endif
        @if ($st->frecuencia_rutina==3)
     <i>Trimestral</i>     @endif
     @if ($st->frecuencia_rutina==6)
  <i>Semestral</i>     @endif
  @if ($st->frecuencia_rutina==12)
   <i>Anual</i>     @endif</button></i>
 </i></a>
  <br>
@else
@if (auth()->user()->hasRole(['tec-ing']))

@else
<a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
  <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
</a>
@endif

        <a href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}">
<i class="box-title"><i  href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}"><button class="btn btn-warning"><span class="fa fa-th"></span>    @if ($st->frecuencia_rutina==1)
<i>Mensual</i>     @endif
@if ($st->frecuencia_rutina==2)
<i>Bimestral</i>     @endif
@if ($st->frecuencia_rutina==3)
<i>Trimestral</i>     @endif
@if ($st->frecuencia_rutina==6)
<i>Semestral</i>     @endif
@if ($st->frecuencia_rutina==12)
<i>Anual</i>     @endif</button></a>
</h3>
<br>
 @endif
 @endif

@endforeach
    @endif
          @endif
          @endif
        @endforeach

      </td>
      </tr>
</table>

                              </div>
@endif
                                <div class="box-body col-md-6">
                                  <table width="280" cellspacing="1" cellpadding="3" border="0" bgcolor="#1E679A">
                                  <tr>
                                    <td bgcolor="#9AF0F7">
                            <h3>Correctivo</h3>
                            @if (auth()->user()->hasRole(['tec-ing']))
                              @foreach($ruman as $st)
                              @if ($st->idequipo==$equipo->idequipo)
                              @if ($st->idtipo_rutina==2)
                              @if($st->estado_rutina=='PENDIENTE')
                                @if($st->responsable_area_rutina_mantenimiento==Auth::id())
                              <br>
                              <i>Fecha a realizar próxima rutina:</i>
                              @foreach($notificacion as $noti)
                              @if ($st->idrutina_mantenimiento==$noti->rutina_mantenimiento_idrutina_mantenimiento)
                              <p>{{date("Y-m-d",strtotime($noti->start))}}</p>
                              @if(date("Y-m-d",strtotime($noti->start))<= date('Y-m-d'))
                              @if (auth()->user()->hasRole(['tec-ing']))

                              @else
                              <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
                                <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
                              </a>
                              @endif
                              <i class="box-title"><a href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}"><button class="btn btn-danger"><span class="fa fa-th"></span> CORRECTIVO</button></a>
                              </i>
                              @else
                              @if (auth()->user()->hasRole(['tec-ing']))

                              @else
                              <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
                                <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
                              </a>
                              @endif
                              <i class="box-title"><a  href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}"><button class="btn btn-warning"><span class="fa fa-th"></span> CORRECTIVO</button></a>
                              </i>


                              @endif
                              @endif
                              @endforeach
                              @endif
                                @endif
                                @endif
                                @endif
                              @endforeach


                            </td>
                            </tr>
                            </table>
                            @else

                            <h3 class="box-title"><a href="{{route('ruman.create2',[$equipo->idequipo,'CORRECTIVO'])}}"><button class="btn bg-light-blue"><span class="glyphicon glyphicon-plus"></span> Crear rutina correctiva</button></a></h3>

                            @foreach($ruman as $st)
                            @if ($st->idequipo==$equipo->idequipo)
                            @if ($st->idtipo_rutina==2)
                            @if($st->estado_rutina=='PENDIENTE')
                            <br>
                            <i>Fecha a realizar próxima rutina:</i>
                            @foreach($notificacion as $noti)
                            @if ($st->idrutina_mantenimiento==$noti->rutina_mantenimiento_idrutina_mantenimiento)
                            <p>{{date("Y-m-d",strtotime($noti->start))}}</p>
                            @if(date("Y-m-d",strtotime($noti->start))<= date('Y-m-d'))
                            <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
                              <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
                            </a>
                            <i class="box-title"><a href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}"><button class="btn btn-danger"><span class="fa fa-th"></span> CORRECTIVO</button></a>
                            </i>
                            @else
                            <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
                              <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
                            </a>
                            <i class="box-title"><a  href="{{route('ruman.edit',$st->idrutina_mantenimiento)}}"><button class="btn btn-warning"><span class="fa fa-th"></span> CORRECTIVO</button></a>
                            </i>


                            @endif
                            @endif
                            @endforeach
                            @endif
                              @endif
                              @endif
                            @endforeach


                          </td>
                          </tr>
                          </table>
                          @endif
                          </div>
      </div>

         <div class="tab-pane" id="prueba">
               <div class="box-body col-md-6">
           <table width="280" cellspacing="1" cellpadding="3" border="0" bgcolor="#1E679A">
           <tr>
             <td bgcolor="#9AF0F7">
         <h3>Pruebas</h3>
         @if (auth()->user()->hasRole(['tec-ing']))

                    @foreach($ruman as $st)
                    @if ($st->idequipo==$equipo->idequipo)
                    @if ($st->idtipo_rutina==3)
                    @if($st->estado_rutina=='PENDIENTE')
                      @if($st->responsable_area_rutina_mantenimiento==Auth::id())
                    <br>

                    @foreach($notificacion as $noti)
                    @if ($st->idrutina_mantenimiento==$noti->rutina_mantenimiento_idrutina_mantenimiento)
                     <i>Fecha a realizar próxima rutina:</i>

                    <p>{{date("Y-m-d",strtotime($noti->start))}}</p>
                    @if(date("Y-m-d",strtotime($noti->start))<= date('Y-m-d'))
                    <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
                      <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
                    </a>
                    <i class="box-title"><a href="{{route('ruman.edit2',$st->idrutina_mantenimiento)}}"><button class="btn btn-danger"><span class="fa fa-th"></span> PRUEBA</button></a>
                    </i>
                    @else
                    <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
                      <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
                    </a>
                    <i class="box-title"><a  href="{{route('ruman.edit2',$st->idrutina_mantenimiento)}}"><button class="btn btn-warning"><span class="fa fa-th"></span> PRUEBA</button></a>
                    </i>


                    @endif
                    @endif
                    @endforeach
                    @endif
                      @endif
                      @endif
                      @endif
                    @endforeach




                  </td>
                  </tr>
                  </table>
         @else

         <h3 class="box-title"><a href="{{route('ruman.create3',[$equipo->idequipo,$equipo->idsubgrupo])}}"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Crear nueva rutina de prueba</button></a></h3>
         <h3 class="box-title"><a href="{{route('ruman.asignar2',[$equipo->idequipo,$equipo->idsubgrupo])}}"><button class="btn bg-aqua"><span class="glyphicon glyphicon-plus"></span> Copiar rutina de prrueba de otro equipo</button></a></h3>



         @foreach($ruman as $st)
         @if ($st->idequipo==$equipo->idequipo)
         @if ($st->idtipo_rutina==3)
         @if($st->estado_rutina=='PENDIENTE')
         <br>

         @foreach($notificacion as $noti)
         @if ($st->idrutina_mantenimiento==$noti->rutina_mantenimiento_idrutina_mantenimiento)
          <i>Fecha a realizar próxima rutina:</i>

         <p>{{date("Y-m-d",strtotime($noti->start))}}</p>
         @if(date("Y-m-d",strtotime($noti->start))<= date('Y-m-d'))
         <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
           <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
         </a>
         <i class="box-title"><a href="{{route('ruman.edit2',$st->idrutina_mantenimiento)}}"><button class="btn btn-danger"><span class="fa fa-th"></span> PRUEBA</button></a>
         </i>
         @else
         <a href="{{route('ruman.tecnicos',[$st->idrutina_mantenimiento,$equipo->idequipo])}}">
           <button type="button" class="btn  btn-vk" name="button"><span class="glyphicon glyphicon-wrench"></button></span>
         </a>
         <i class="box-title"><a  href="{{route('ruman.edit2',$st->idrutina_mantenimiento)}}"><button class="btn btn-warning"><span class="fa fa-th"></span> PRUEBA</button></a>
         </i>


         @endif
         @endif
         @endforeach
         @endif
           @endif
           @endif
         @endforeach




       </td>
       </tr>
       </table>
       @endif
       </div>

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
                          <label>Fecha de expiración de garantía</label>

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
                  <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">

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



                <button id="g" class="btn btn-success" type="submit"><span class="glyphicon glyphicon-saved"></span> </button>
              </div>

              </div>
              <!-- /.box-footer-->
              </form>
            </div>

            <div class="tab-pane" id="multimedia">

            <!-- ingresar manual -->

            <div class="row">

                  <form role="form" method="POST" action="{{route('store')}}" enctype="multipart/form-data" >
                              {!! csrf_field() !!}
                              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                                <h3>Agregar manual al equipo
                                </h3>
                              </div>
                      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                        <div class="form-group">

                           <label for="idtipomanual">Tipo de manual</label>

                          <select name="idtipomanual" class="form-control" >
                              <option value="0" disabled selected>=== Selecciona un tipo de manual ===</option>
                            @foreach($TipoManual as $ti)

                              <option value="{{$ti->idtipomanual}}">{{$ti->nombre_tipo_manual}}</option>

                               @endforeach
                            </select>


                            </div>

                            </div>
                          <input type="hidden" name="idequipo" class="form-control" value="{{$equipo->idequipo}}" >
                          <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                            <div class="form-group">
                           <label for="observacion_detalle_manual">Observación</label>
                          <input type="text" name="observacion_detalle_manual" class="form-control" placeholder="Observación...">
                        </div>

                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                          <div class="form-group">
                           <label for="imagen">Ingrese manual</label>
                          <input type="file" name="imagen" class="form-control">
                        </div>

                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                          <div class="form-group">

                        <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-plus"></span> </button>
                      </div>

                      </div>



                  </form>
                  </div>
                  <hr>

            {!! Form::open(array('route'=>'imagen.store','method'=>'POST', 'files'=>true)) !!}
                  {{Form::token()}}
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                      <h3>Agregar imagen al equipo </h3>
                    </div>

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

                    <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-plus"></span> </button>
                  </div>

                  </div>

                  </div>

            {!!Form::close()!!}



          </div>
            <!-- /.box-body -->

            <!-- /.tab-pane -->

            <!-- /.box-body -->









          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->

    <!-- /.row -->

  </section>


  @push ('scripts')
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




    </script>

  <script>
  $('#pidtipo').select2({
    theme: "classic"
  });




  $(document).ready(function(){
    $('#bt_add').click(function(){
      agregar();
    });
  });
  var cont=0;
  total=0;
  subtotal=[];
  $("#guardar").hide();

  function agregar()
  {
    idtipo=$("#pidtipo").val();
    tipo=$("#pidtipo option:selected").text();
    descripcion=$("#pdescripcion").val();
    idestado=$("#pestado").val();
    estado=$("#pestado option:selected").text();
    if (idtipo!="" )
    {
   var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idtipo_trabajo[]" value="'+idtipo+'">'+tipo+'</td><td><input type="text" name="descrpcion_detalle_tipo_trabajo[]" value="'+descripcion+'" ></td></tr>';
   cont++;
   limpiar();
   evaluar();
   $('#detalle').append(fila);
    }
    else
    {
        alert("Error al ingresar el detalle del tipo, revise los datos del tipo");
    }
  }
  function limpiar(){
    $("#pdescripcion").val("");

  }

  function evaluar()
  {
    if (idtipo!="")
    {
      $("#guardar").show();
    }
    else
    {
      $("#guardar").hide();
    }
   }

   function eliminar(index){

    $("#fila" + index).remove();
    evaluar();

  }

  //parte del area de mantenimiento
  $('#pidarea').select2({
    theme: "classic"
  });
  $(document).ready(function(){
    $('#bt_adds').click(function(){
      agregar1();
    });
  });
  var conts=0;
  total=0;
  subtotal=[];
  $("#guardars").hide();
  function agregar1()
  {
    idarea=$("#pidarea").val();
    area=$("#pidarea option:selected").text();


    if (idarea!="" )
    {
   var fila='<tr class="selected" id="fila'+conts+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+conts+');">X</button></td><td><input type="hidden" name="idarea_mantenimiento[]" value="'+idarea+'">'+area+'</td></tr>';
   conts++;
   limpiar();
   evaluar2();
   $('#detalles').append(fila);
    }
    else
    {
        alert("Error al ingresar el detalle del area, revise los datos del area");
    }
  }
  function limpiar(){
    $("#pcantidad").val("");

  }

  function evaluar2()
  {
    if (idarea!="")
    {
      $("#guardars").show();
    }
    else
    {
      $("#guardars").hide();
    }
   }

   function eliminar(index){

    $("#fila" + index).remove();
    evaluar();

  }
  </script>

  <script>

    $('#carac').select2({
      theme: "classic"
    });
    $('#sub_carac').select2({
      theme: "classic"
    });

    $('#valor_ref').select2({
      theme: "classic"
    });
    $(document).ready(function(){
      $('#bt_add_carac').click(function(){
        agregar5();
      });
    });

    var cont5=0;

    $("#guardar_carac").hide();


    function agregar5()
    {
      idcaracteristica1=$("#carac").val();
      carac1=$("#carac option:selected").text();
      idequipo1=$("#idequipo_carac").val();
      idvalor_ref1=$("#valor_ref").val();
      valor_ref1=$("#valor_ref option:selected").text();
      idsubgrupo1=$("#sub_carac").val();
      sub1=$("#sub_carac option:selected").text();
      desc1=$("#desc_carac").val();
      valor1=$("#valor_tec").val();


      if (idcaracteristica1!="" && idequipo1!="" && valor1!="")
      {
          var fila5='<tr class="selected" id="fila5'+cont5+'"><td><button type="button" class="btn btn-warning" onclick="eliminar5('+cont5+');">X</button></td><td><input type="hidden" name="idcaracteristica_tecnica[]" value="'+idcaracteristica1+'">'+carac1+'</td><td><input type="hidden" name="idsubgrupo_carac_tecnica[]" value="'+idsubgrupo1+'">'+sub1+'</td><td><input type="hidden" name="idvalor_ref_tec[]" value="'+idvalor_ref1+'">'+valor_ref1+'</td><td><input type="text" name="descripcion_detalle_caracteristica_tecnica[]" value="'+desc1+'"></td><td><input type="number" name="valor_detalle_caracteristica_tecnica[]" value="'+valor1+'"></td><td><input type="hidden" name="idequipo[]" value="'+idequipo1+'"><td></tr>';
          cont5++;
          limpiar5();
          evaluar5();
          $('#detalles_carac').append(fila5);
      }
      else
      {
          alert("Error al ingresar el detalle, revise los datos ");
      }
    }
    function limpiar5(){
      $("#desc_carac").val("");
      $("#valor_tec").val("");

    }

    function evaluar5()
    {
      if (idcaracteristica1!="")
      {
        $("#guardar_carac").show();
      }
      else
      {
        $("#guardar_carac").hide();
      }
     }

     function eliminar5(index){

      $("#fila5" + index).remove();
      evaluar5();

    }

  </script>
  <script>

    $('#espe').select2({
      theme: "classic"
    });
    $('#valor_esp').select2({
      theme: "classic"
    });


    $(document).ready(function(){
      $('#bt_add_esp').click(function(){
        agregar6();
      });
    });

    var cont6=0;

    $("#guardar_esp").hide();


    function agregar6()
    {
      idcaracteristica=$("#espe").val();
      carac=$("#espe option:selected").text();
      idequipo=$("#idequipo_esp").val();
      idvalor_ref=$("#valor_esp").val();
      valor_ref=$("#valor_esp option:selected").text();

      desc=$("#desc_esp").val();
      valor=$("#v_esp").val();


      if (idcaracteristica!="" && idequipo!="" && valor!="")
      {
          var fila6='<tr class="selected" id="fila6'+cont6+'"><td><button type="button" class="btn btn-warning" onclick="eliminar6('+cont6+');">X</button></td><td><input type="hidden" name="idcaracteristica_especial[]" value="'+idcaracteristica+'">'+carac+'</td><td><input type="hidden" name="idvalor_ref_esp[]" value="'+idvalor_ref+'">'+valor_ref+'</td><td><input type="text" name="descripcion_detalle_caracteristica_especial[]" value="'+desc+'"></td><td><input type="number" name="valor_detalle_caracteristica_especial[]" value="'+valor+'"></td><td><input type="hidden" name="idequipo[]" value="'+idequipo+'"><td></tr>';
          cont6++;
          limpiar6();
          evaluar6();
          $('#detalles_esp').append(fila6);
      }
      else
      {
          alert("Error al ingresar el detalle, revise los datos");
      }
    }
    function limpiar6(){
      $("#desc_esp").val("");
      $("#v_esp").val("");

    }

    function evaluar6()
    {
      if (idcaracteristica!="")
      {
        $("#guardar_esp").show();
      }
      else
      {
        $("#guardar_esp").hide();
      }
     }

     function eliminar6(index){

      $("#fila6" + index).remove();
      evaluar6();

    }

  </script>

  <script>
  function mostar(){

    $('.nav-tabs a[href="#tab-tipo"]').tab('show');
  }
  function mostar2(){

    $('.nav-tabs a[href="#tab-area"]').tab('show');
  }
  function mostar3(){

    $('.nav-tabs a[href="#tabsol"]').tab('show');
  }
  $('#liEq').addClass("treeview active");
  $('#liEquipo').addClass("active");
  </script>



  </script>


  @endpush



@endsection

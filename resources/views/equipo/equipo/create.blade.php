@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Equipo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Equipo</li>
      </ol>
</section>
	<section class="content">

<div class="row">


  <div class="col-md-12">
    <form role="form" method="POST" action="{{route('equipo.store')}}" >
        {!! csrf_field() !!}
    <!-- Custom Tabs (Pulled to the right) -->
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
          <p class="text-danger">(*) Campos requeridos</p>
          <div class="form-group">
            <label for="cod_financiero">Codigo financiero</label>
            <input type="text" class="form-control" name="cod_financiero" value="{{old('cod_financiero')}}">
          </div>

          <div class="form-group">
            <label for="forma_adquisicion">Forma de adquisicion</label>
            <input type="text" class="form-control" name="forma_adquisicion" value="{{old('forma_adquisicion')}}">
          </div>
          <div class="form-group">
            <label for="atencion_mantenimiento_equipo">Atencion mantenimiento equipo</label>
            <textarea rows="3" class="form-control" name="atencion_mantenimiento_equipo" value="{{old('atencion_mantenimiento_equipo')}}">
            </textarea>
          </div>



        </div>
        <div class="tab-pane" id="tab_7-7">
          <p class="text-danger">(*) Campos requeridos</p>
          <div class="form-group">
          <label for="idservicio_tecnico" class="est">Servicio técnico (*)</label>
          <select name="idservicio_tecnico" class="form-control" id="select">
          @foreach($servicio_tecnico as $st)
            <option value="{{$st->idservicio_tecnico}}">{{$st->nombre_empresa_sevicio_tecnico}}</option>
             @endforeach
          </select>
          </div>

          <div class="form-group">
              <label>Fecha instalacion</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="date" class="form-control pull-right" id="datepicker" name="fecha_instalcion" value="{{old('fecha_instalcion')}}">
              </div>
                  <!-- /.input group -->
          </div>



        </div>
        <div class="tab-pane" id="tab_2-2">
          <p class="text-danger">(*) Campos requeridos</p>
          <div class="form-group">
          <label for="id_proveedor" class="est">Distribuidor (*)</label>
          <select name="id_proveedor" class="form-control" id="select">
          @foreach($proveedor as $prov)
            <option value="{{$prov->id_proveedor}}">{{$prov->contacto_proveedor}}</option>
             @endforeach
          </select>
          </div>
          <div class="form-group">
                  <label>Fecha compra</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" name="fecha_compra" value="{{old('fecha_compra')}}" id="datepicker">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                <label>Fecha de expiracion de grarantia</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="fecha_expiracion_garantia" value="{{old('fecha_expiracion_garantia')}}" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" name="precio" value="{{old('precio')}}">
              </div>


        </div>
        <div class="tab-pane" id="tab_3-3">
          <p class="text-danger">(*) Campos requeridos</p>
          <div class="form-group">
          <label for="idfabricante" class="est">Fabricante (*)</label>
          <select name="idfabricante" class="form-control" >
          @foreach($fabricante as $fab)
                <option value="{{$fab->idfabricante}}">{{$fab->contacto_fabricante}}</option>
          @endforeach
          </select>
          </div>
          <div class="form-group">
                  <label>Fecha fabricacion</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right"  id="datepicker"  name="fecha_fabricacion" value="{{old('fecha_fabricacion')}}">
                  </div>
                  <!-- /.input group -->
                </div>



        </div>
        <div class="tab-pane" id="tab_4-4">
          <p class="text-danger">(*) Campos requeridos</p>
          <div class="form-group">
            <label for="ambiente">Area/Sala/Laboratorio (*)</label>
            <input type="text" class="form-control" name="ambiente" value="{{old('ambiente')}}">
          </div>
          <div class="form-group">
            <label for="servicio">Departamento/Servicio (*)</label>
            <input type="text" class="form-control" name="servicio" value="{{old('servicio')}}">
          </div>
          <div class="form-group">
            <label for="frec_uso_dia_semana">Frecuencia uso día/semana (*) </label>
            <select class="form-control" name="frec_uso_dia_semana">
              <option value="1">1 días/semana</option>
              <option value="2">2 días/semana</option>
              <option value="3">3 días/semana</option>
              <option value="4">4 días/semana</option>
              <option value="5">5 días/semana</option>
              <option value="6">6 días/semana</option>
              <option value="7">7 días/semana</option>
            </select>
          </div>
          <div class="form-group">
            <label for="frec_uso_hora_dia">Frecuencia uso horas/día (*) </label>
            <select class="form-control" name="frec_uso_hora_dia">
              <option value="1">1 hrs/día</option>
              <option value="2">2 hrs/día</option>
              <option value="3">3 hrs/día</option>
              <option value="4">4 hrs/día</option>
              <option value="5">5 hrs/día</option>
              <option value="6">6 hrs/día</option>
              <option value="7">7 hrs/día</option>
              <option value="8">8 hrs/día</option>
              <option value="9">9 hrs/día</option>
              <option value="10">10 hrs/día</option>
              <option value="11">11 hrs/día</option>
              <option value="12">12 hrs/día</option>
              <option value="13">13 hrs/día</option>
              <option value="14">14 hrs/día</option>
              <option value="15">15 hrs/día</option>
              <option value="16">16 hrs/día</option>
              <option value="17">17 hrs/día</option>
              <option value="18">18 hrs/día</option>
              <option value="19">19 hrs/día</option>
              <option value="20">20 hrs/día</option>
              <option value="21">21 hrs/día</option>
              <option value="22">22 hrs/día</option>
              <option value="23">23 hrs/día</option>
              <option value="24">24 hrs/día</option>
            </select>
          </div>
          <div class="form-group">
          <label for="idestado" >Estado (*)</label>
          <select name="idestado" class="form-control">
          @foreach($estado as $e)
            <option value="{{$e->idestado}}">{{$e->estado}}</option>
             @endforeach
          </select>
          </div>
          <div class="form-group">
            <label for="personal_cap">Personal capacitado (*) </label>
            <select class="form-control" name="personal_cap">
              <option value="1">SI</option>
              <option value="0">NO</option>
            </select>
          </div>


        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_5-5">
          <p class="text-danger">(*) Campos requeridos</p>
          <div class="form-group">
            <label for="nombre_equipo">Nombre equipo (*)</label>
            <input type="text" class="form-control" name="nombre_equipo" value="{{old('nombre_equipo')}}">
          </div>
          <div class="form-group">
            <label for="marca">Marca (*)</label>
            <input type="text" class="form-control" name="marca" value="{{old('marca')}}">
          </div>
          <div class="form-group">
            <label for="modelo">Modelo (*)</label>
            <input type="text" class="form-control" name="modelo" value="{{old('modelo')}}">
          </div>


          <div class="form-group">
            <label for="serie">Serie (*)</label>
            <input type="text" class="form-control" name="serie" value="{{old('serie')}}">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea rows="3" class="form-control" name="descripcion" value="{{old('descripcion')}}">
              </textarea>
          </div>
          <div class="form-group">
            <label for="clase_tec_med">Clase tecnológica médica</label>
            <input type="text" class="form-control" name="clase_tec_med" value="{{old('clase_tec_med')}}">
          </div>
          <div class="form-group">
            <label for="clase">Clase </label>
            <input type="text" class="form-control" name="clase" value="{{old('clase')}}">
          </div>
          <div class="form-group">
            <label for="nivel_riesgo">Nivel de riesgo </label>
            <input type="text" class="form-control" name="nivel_riesgo" value="{{old('nivel_riesgo')}}">
          </div>
          <div class="form-group">
            <label for="conexion_otro_eq">Conexión otro equipo </label>
            <input type="text" class="form-control" name="conexion_otro_eq" value="{{old('conexion_otro_eq')}}">
          </div>

        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane active " id="tab_6-6">
          <p class="text-danger">(*) Campos requeridos</p>
          <div class="form-group">
          <label for="idhospital" >Hospital (*)</label>
          <select name="idhospital" class="form-control" >
          @foreach($hospital as $h)
            <option value="{{$h->idhospital}}">{{$h->hospital}}</option>
          @endforeach
          </select>
          </div>
            <div class="form-group">
            <label for="idarea" >Área (*)</label>
            <select name="idarea" class="form-control" >
            @foreach($area as $a)
              <option value="{{$a->idarea}}">{{$a->nombre_area}}</option>
            @endforeach
            </select>
            </div>
            <div class="form-group">
            <label for="idgrupo" >Grupo (*)</label>
            <select name="idgrupo" class="form-control" >
              @foreach($grupo as $g)
                <option value="{{$g->idgrupo}}">{{$g->grupo}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="idsubgrupo" >Subgrupo (*)</label>
            <select name="idsubgrupo" class="form-control">
              @foreach($subgrupo as $sub)
                <option value="{{$sub->idsubgrupo}}">{{$sub->subgrupo}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="idregion" >Región (*)</label>
            <select name="idregion" class="form-control">
              @foreach($region as $reg)
                <option value="{{$reg->idregion}}">{{$reg->region}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="iddepartamento">Departamento (*)</label>
            <select name="iddepartamento" class="form-control" >
              @foreach($departamento as $depto)
                <option value="{{$depto->iddepartamento}}">{{$depto->depto}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="idtipounidad" >Tipo unidad de salud (*)</label>
            <select name="idtipounidad" class="form-control">
              @foreach($tipounidadsalud as $tipo)
                <option value="{{$tipo->idtipounidad}}">{{$tipo->unidad_medica}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="idunidadsalud" >Unidad de salud (*)</label>
            <select name="idunidadsalud" class="form-control">
            @foreach($unidad_salud as $u)
              <option value="{{$u->idunidadsalud}}">{{$u->unidad_salud}}</option>
               @endforeach
            </select>
            </div>

            <div class="form-group">
  						<label for="correlativo">Correlativo (*)</label>
  						<input type="number" class="form-control" name="correlativo" value="{{old('correlativo')}}">
  					</div>
            <div class="form-group">
  						<label for="idequipo">Código del equipo (*)</label>
  						<input type="text" class="form-control" name="idequipo" value="{{old('idequipo')}}">
  					</div>







        </div>
        <!-- /.tab-pane -->
        <div class="box-footer">
          @if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
            </ul>
          </div>
          @endif

          <a href="{{route('equipo.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
				</div>
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->
    </form>
  </div>
  <!-- /.col -->
</div>
</section>
@endsection

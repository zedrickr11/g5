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

          <div class="form-group">
            <label for="est">Codigo financiero</label>
            <input type="text" class="form-control" name="cod_financiero" value="{{old('cod_financiero')}}">
          </div>

          <div class="form-group">
            <label for="est">Forma de adquisicion</label>
            <input type="text" class="form-control" name="forma_adquisicion" value="{{old('forma_adquisicion')}}">
          </div>
          <div class="form-group">
            <label for="est">Atencion mantenimiento equipo</label>
            <input type="textarea" class="form-control" name="atencion_mantenimiento_equipo" value="{{old('atencion_mantenimiento_equipo')}}">
          </div>



        </div>
        <div class="tab-pane" id="tab_7-7">

          <div class="form-group">
          <label for="select" class="est">Servicio técnico</label>
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
          <div class="form-group">
          <label for="select" class="est">Distribuidor</label>
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
                <label for="est">Precio</label>
                <input type="text" class="form-control" name="precio" value="{{old('precio')}}">
              </div>


        </div>
        <div class="tab-pane" id="tab_3-3">
          <div class="form-group">
          <label for="select" class="est">Fabricante</label>
          <select name="idfabricante" class="form-control" id="select">
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

          <div class="form-group">
            <label for="est">Area/Sala/Laboratorio</label>
            <input type="text" class="form-control" name="ambiente" value="{{old('ambiente')}}">
          </div>
          <div class="form-group">
            <label for="est">Departamento/Servicio</label>
            <input type="text" class="form-control" name="servicio" value="{{old('servicio')}}">
          </div>
          <div class="form-group">
            <label for="est">Frecuencia uso día/semana </label>
            <input type="text" class="form-control" name="frecuencia_uso_dia_semana" value="{{old('frecuencia_uso_dia_semana')}}">
          </div>
          <div class="form-group">
            <label for="est">Frecuencia uso horas/día </label>
            <input type="text" class="form-control" name="frecuencia_uso_hora_dia" value="{{old('frecuencia_uso_hora_dia')}}">
          </div>
          <div class="form-group">
            <label for="est">Personal capacitado </label>
            <input type="text" class="form-control" name="personal_cap" value="{{old('personal_cap')}}">
          </div>


        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_5-5">

          <div class="form-group">
            <label for="est">Nombre equipo</label>
            <input type="text" class="form-control" name="nombre_equipo" value="{{old('nombre_equipo')}}">
          </div>
          <div class="form-group">
            <label for="est">Marca</label>
            <input type="text" class="form-control" name="marca" value="{{old('marca')}}">
          </div>
          <div class="form-group">
            <label for="est">Modelo</label>
            <input type="text" class="form-control" name="modelo" value="{{old('modelo')}}">
          </div>
          <div class="form-group">
            <label for="est">Descripción</label>
            <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
          </div>

          <div class="form-group">
            <label for="est">Serie</label>
            <input type="text" class="form-control" name="serie" value="{{old('serie')}}">
          </div>
          <div class="form-group">
            <label for="est">Clase tecnológica médica</label>
            <input type="text" class="form-control" name="clase_tec_med" value="{{old('clase_tec_med')}}">
          </div>
          <div class="form-group">
            <label for="est">Clase </label>
            <input type="text" class="form-control" name="clase" value="{{old('clase')}}">
          </div>
          <div class="form-group">
            <label for="est">Nivel de riesgo </label>
            <input type="text" class="form-control" name="nivel_riesgo" value="{{old('nivel_riesgo')}}">
          </div>
          <div class="form-group">
            <label for="est">Conexión otro equipo </label>
            <input type="text" class="form-control" name="conexion_otro_eq" value="{{old('conexion_otro_eq')}}">
          </div>

        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane active " id="tab_6-6">

            <div class="form-group">
            <label for="idarea" class="est">Área</label>
            <select name="idarea" class="form-control" id="aarea">
            @foreach($area as $a)
              <option value="{{$a->idarea}}">{{$a->nombre_area}}</option>
            @endforeach
            </select>
            </div>
            <div class="form-group">
            <label for="idgrupo" class="est">Grupo</label>
            <select name="idgrupo" class="form-control" id="ggrupo">
              @foreach($grupo as $g)
                <option value="{{$g->idgrupo}}">{{$g->grupo}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="idsubgrupo" class="est">Subgrupo</label>
            <select name="idsubgrupo" class="form-control" id="ggrupo">
              @foreach($subgrupo as $sub)
                <option value="{{$sub->idsubgrupo}}">{{$sub->subgrupo}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="idregion" class="est">Región</label>
            <select name="idregion" class="form-control" id="ggrupo">
              @foreach($region as $reg)
                <option value="{{$reg->idregion}}">{{$reg->region}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="iddepartamento" class="est">Departamento</label>
            <select name="iddepartamento" class="form-control" id="ggrupo">
              @foreach($departamento as $depto)
                <option value="{{$depto->iddepartamento}}">{{$depto->depto}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="idtipounidad" class="est">Tipo unidad de salud</label>
            <select name="idtipounidad" class="form-control" id="ggrupo">
              @foreach($tipounidadsalud as $tipo)
                <option value="{{$tipo->idtipounidad}}">{{$tipo->unidad_medica}}</option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label for="select" class="est">Unidad de salud</label>
            <select name="idunidadsalud" class="form-control" id="select">
            @foreach($unidad_salud as $u)
              <option value="{{$u->idunidadsalud}}">{{$u->unidad_salud}}</option>
               @endforeach
            </select>
            </div>

            <div class="form-group">
  						<label for="est">Correlativo</label>
  						<input type="text" class="form-control" name="correlativo" value="{{old('correlativo')}}">
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

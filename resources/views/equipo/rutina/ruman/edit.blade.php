@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Rutinas
        <small>Rutina mantenimiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Rutinas</a></li>
        <li class="active">Rutina mantenimiento</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar prueba rutina</h3>
			</div>
      @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        </ul>
      </div>
      @endif
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('ruman.update',$ruman->idrutina_mantenimiento)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}


        <div class="box-body col-md-6">



                    <div class="form-group">
                      <label for="select" class="">Tipo rutina</label>
                      <select name="idtipo_rutina"  class="form-control" value="{{$ruman->idtipo_rutina}}">
                  @foreach($tiporu as $hosp)
                        @if ($hosp->idtipo_rutina==$ruman->idtipo_rutina)
                      <option value="{{$hosp->idtipo_rutina}}" selected>{{$hosp->tipo_rutina}}</option>
                      @else
                      <option value="{{$hosp->idtipo_rutina}}">{{$hosp->tipo_rutina}}</option>
                      @endif
                       @endforeach
                  </select>
                    </div>

                    <div class="form-group">
                      <label for="select" class="">Equipo</label>
                      <select name="idequipo"  class="form-control" value="{{$ruman->idequipo}}">
                  @foreach($equipo as $hosp)
                        @if ($hosp->idequipo==$ruman->idequipo)
                      <option value="{{$hosp->idequipo}}" selected>{{$hosp->nombre_equipo}}</option>
                      @else
                      <option value="{{$hosp->idequipo}}">{{$hosp->nombre_equipo}}</option>
                      @endif
                       @endforeach
                  </select>

                    </div>

                    <div class="form-group">
                        <label>Fecha realizacion rutina</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="date" class="form-control pull-right" id="datepicker" name="fecha_realizacion_rutina" value="{{$ruman->fecha_realizacion_rutina}}">
                        </div>
                            <!-- /.input group -->
                    </div>
                    <div class="form-group">

                      <label for="direccion_fab">Observaciones rutina</label>
                      <input type="text" class="form-control" name="observaciones_rutina" value="{{$ruman->observaciones_rutina}}">
                    </div>




                            </div>
    <div class="box-body col-md-6">
    <div class="form-group">
            <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>
    <input type="text" class="form-control" name="tiempo_estimado_rutina_mantenimiento" value="{{$ruman->tiempo_estimado_rutina_mantenimiento}}" onkeypress="return valida(event)">
    </div>
          <script>
          function valida(e){
              tecla = (document.all) ? e.keyCode : e.which;

              //Tecla de retroceso para borrar, siempre la permite
              if (tecla==8){
                  return true;
              }

              // Patron de entrada, en este caso solo acepta numeros
              patron =/[0-9]/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
          </script>

          <div class="form-group">

            <label for="direccion_fab">Responsable de area de rutina</label>
            <input type="text" class="form-control" name="responsable_area_rutina_mantenimiento" value="{{$ruman->responsable_area_rutina_mantenimiento}}">
          </div>



          <div class="form-group">
            <label for="select" class="">Permiso de trabajo</label>
            <select name="idpermiso_trabajo"  class="form-control" value="{{$ruman->idpermiso_trabajo}}">
        @foreach($permisotrabajo as $hosp)
              @if ($hosp->idpermiso_trabajo==$ruman->idpermiso_trabajo)
            <option value="{{$hosp->idpermiso_trabajo}}" selected>{{$hosp->num_permiso}}</option>
            @else
            <option value="{{$hosp->idpermiso_trabajo}}">{{$hosp->num_permiso}}</option>
            @endif
             @endforeach
        </select>
          </div>

          <div class="form-group">

            <label for="direccion_fab">Estado rutina</label>
            <input type="text" class="form-control" name="estado_rutina" value="{{$ruman->estado_rutina}}">
          </div>

    </div>

				<!-- /.box-body -->

        <div class="box-footer">

          <a href="{{route('ruman.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
        </div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

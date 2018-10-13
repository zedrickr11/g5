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
				<h3 class="box-title">Nueva prueba rutina</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


      <div class="box-body col-md-6">



                  <div class="form-group">
                    <label for="select" class="">Tipo rutina</label>
                    <br>

                    @foreach($tiporu as $hosp)
                             @if ($hosp->idtipo_rutina==$ruman->idtipo_rutina)
                             <p>{{$hosp->tipo_rutina}}</p>


                           @endif
                            @endforeach

                  </div>

                  <div class="form-group">
                    <label for="select" class="">Equipo</label>
                    <br>

                    @foreach($equipo as $hosp)
                             @if ($hosp->idequipo==$ruman->idequipo)
                             <p>{{$hosp->nombre_equipo}}</p>


                           @endif
                            @endforeach


                  </div>

                  <div class="form-group">
                      <label>Fecha realizacion rutina</label>
                      <p>{{$ruman->fecha_realizacion_rutina}}</p>

                          <!-- /.input group -->
                  </div>
                  <div class="form-group">

                    <label for="direccion_fab">Observaciones rutina</label>
                    <p>{{$ruman->observaciones_rutina}}</p>
                    </div>




                          </div>
  <div class="box-body col-md-6">
  <div class="form-group">
          <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>
          <p>{{$ruman->tiempo_estimado_rutina_mantenimiento}}</p>

  </div>


        <div class="form-group">

          <label for="direccion_fab">Responsable de area de rutina</label>
          <p>{{$ruman->responsable_area_rutina_mantenimiento}}</p>
        </div>



        <div class="form-group">
          <label for="select" class="">Permiso de trabajo</label>
          <br>

          @foreach($permisotrabajo as $hosp)
                   @if ($hosp->idpermiso_trabajo==$ruman->idpermiso_trabajo)
                   <p>{{$hosp->num_permiso}}</p>


                 @endif
                  @endforeach

        </div>

        <div class="form-group">

          <label for="direccion_fab">Estado rutina</label>
          <p>{{$ruman->estado_rutina}}</p>

        </div>

  </div>


				<!-- /.box-body -->


        <div class="box-footer">
<a href="{{route('ruman.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
        </div>





		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

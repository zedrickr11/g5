@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Rutinas
        <small>Detalle rutina prueba</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Rutinas</a></li>
        <li class="active">Detalle rutina prueba</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo detalle caracteristica prueba</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


      <div class="box-body col-md-6">




        <div class="form-group">
          <label for="select" class="">Rutina de mantenimiento</label>
          <br>

          @foreach($ruman as $hosp)
                   @if ($hosp->idrutina_mantenimiento==$detrupru->idrutina_mantenimiento)
                   <p>{{$hosp->idrutina_mantenimiento}}</p>


                 @endif
                  @endforeach

        </div>

                  <div class="form-group">
                    <label for="select" class="">Prueba rutina</label>
                    <br>

                    @foreach($pruru as $hosp)
                             @if ($hosp->idprueba_rutina==$detrupru->idprueba_rutina)
                             <p>{{$hosp->prueba_rutina}}</p>


                           @endif
                            @endforeach
                  </div>
                  <div class="form-group">
                    <label for="select" class="">Valor referencia prueba</label>
                    <br>
                    @foreach($valorrefpru as $hosp)
                             @if ($hosp->idvalor_ref_prueba==$detrupru->idvalor_ref_prueba)
                             <p>{{$hosp->descripcion}}</p>
                           @endif
                            @endforeach

                  </div>
                  <div class="form-group">
                    <label for="select" class="">Subgrupo rutina</label>
                    <br>
                    @foreach($subpru as $hosp)
                             @if ($hosp->idsubgrupo_prueba==$detrupru->idsubgrupo_prueba)
                             <p>{{$hosp->subgrupo_prueba}}</p>
                           @endif
                            @endforeach

                  </div>

                  <div class="form-group">

                    <label for="direccion_fab">Norma detalle caracteristica rutina</label>
                    <p>{{$detrupru->norma_detalle_rutina_prueba}}</p>
                    </div>



                          </div>
  <div class="box-body col-md-6">



        <div class="form-group">
          <label for="direccion_fab">Unidad medida detalle rutina prueba</label>
          <p>{{$detrupru->unidad_medida_detalle_rutina_prueba}}</p>
              </div>

        <div class="form-group">
          <label for="direccion_fab">Estado detalle rutina prueba</label>
          <p>{{$detrupru->estado_detalle_rutina_prueba}}</p>
        </div>
        <div class="form-group">
          <label for="direccion_fab">Fecha detalle rutina prueba</label>
          <p>{{$detrupru->fecha_detalle_rutina_prueba}}</p>
          </div>
        <div class="form-group">
          <label for="direccion_fab">Comentario detalle rutina prueba</label>
          <p>{{$detrupru->comentario_detalle_rutina_prueba}}</p>
        </div>


  </div>

				<!-- /.box-body -->

        <div class="box-footer">

          <a href="{{route('detrupru.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
        </div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

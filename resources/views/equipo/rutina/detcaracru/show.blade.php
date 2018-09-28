@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Rutinas
        <small>Detalle caracteristica rutina</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Rutinas</a></li>
        <li class="active">Detalle caracteristica rutina</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo detalle caracteristica rutina</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
      <div class="box-body col-md-6">


                  <div class="form-group">
                    <label for="select" class="">Caracteristica rutina</label>
                    <br>

                    @foreach($caracru as $hosp)
                             @if ($hosp->idcaracteristica_rutina==$detcaracru->idcaracteristica_rutina)
                             <p>{{$hosp->caracteristica_rutina}}</p>


                           @endif
                            @endforeach

                  </div>

                  <div class="form-group">
                    <label for="select" class="">Rutina de mantenimiento</label>
                    <br>

                    @foreach($ruman as $hosp)
                             @if ($hosp->idrutina_mantenimiento==$detcaracru->idrutina_mantenimiento)
                             <p>{{$hosp->idrutina_mantenimiento}}</p>


                           @endif
                            @endforeach

                  </div>
                  <div class="form-group">
                    <label for="select" class="">Valor referencia rutina</label>
                    <br>

                    @foreach($valrefru as $hosp)
                             @if ($hosp->idvalor_ref_rutina==$detcaracru->idvalor_ref_rutina)
                             <p>{{$hosp->descripcion}}</p>


                           @endif
                            @endforeach

                  </div>

                  <div class="form-group">
                    <label for="select" class="">Subgrupo rutina</label>
                    <br>

                    @foreach($subru as $hosp)
                             @if ($hosp->idsubgrupo_rutina==$detcaracru->idsubgrupo_rutina)
                             <p>{{$hosp->subgrupo_rutina}}</p>


                           @endif
                            @endforeach
                  </div>




                          </div>
  <div class="box-body col-md-6">
        <div class="form-group">

          <label for="direccion_fab">Estado detalle caracteristica rutinal</label>
            <p>{{$detcaracru->estado_detalle_caracteristica_rutina}}</p>
              </div>


        <div class="form-group">
          <label for="direccion_fab">Fecha detalle caracteristica rutina</label>
          <p>{{$detcaracru->fecha_detalle_caracteristica_rutina}}</p>
        </div>

        <div class="form-group">
          <label for="direccion_fab">Comentario detalle caracteristica rutina</label>
          <p>{{$detcaracru->comentario_detalle_caracteristica_rutina}}</p>
        </div>


  </div>



				<!-- /.box-body -->

        <div class="box-footer">

          <a href="{{route('detcaracru.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
        </div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

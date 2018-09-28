@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Ficha Técnica
      <small>Detalle caracteristica especial</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i>   Ficha Técnica</a></li>
      <li class="active">Detalle caracteristica especial</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo valor referencia especial</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


      <div class="box-body col-md-6">
        <div class="form-group">
          <label for="direccion_fab">Caracteristica especial</label>
          <br>

          @foreach($caracespefun as $hosp)
                   @if ($hosp->idcaracteristica_especial==$detcaracesp->idcaracteristica_especial)
                   <p>{{$hosp->nombre_caracteristica_especial}}</p>


                 @endif
                  @endforeach



        </div>
        <div class="form-group">
          <label for="direccion_fab">Equipo</label>
          @foreach($equipo as $hosp)
                   @if ($hosp->idequipo==$detcaracesp->idequipo)
                   <p>{{$hosp->nombre_equipo}}</p>


                 @endif
                  @endforeach

        </div>

        <div class="form-group">
          <label for="direccion_fab">Valor referencia especial</label>

          @foreach($valorrefesp as $hosp)
                   @if ($hosp->idvalor_ref_esp==$detcaracesp->idvalor_ref_esp)
                   <p>{{$hosp->nombre_valor_ref_esp}}</p>


                 @endif
                  @endforeach
        </div>




      </div>
<div class="box-body col-md-6">
<div class="form-group">
  <label for="direccion_fab">Estado detalle caracteristica especial</label>
  <p>{{$detcaracesp->estado_detalle_caracteristica_especial}}</p>
</div>
<div class="form-group">
  <label for="direccion_fab">Descripcion detalle caracteristica especial</label>
  <p>{{$detcaracesp->descripcion_detalle_caracteristica_especial}}</p>
</div>

<div class="form-group">
  <label for="direccion_fab">Valor detalle caracteristica especial</label>
  <p>{{$detcaracesp->valor_detalle_caracteristica_especial}}</p>
</div>



</div>

				<!-- /.box-body -->

        <div class="box-footer">


                  <a href="{{route('detcaracesp.index')}}">
                    <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
                  </a>
        </div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

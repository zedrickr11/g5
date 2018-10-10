@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Ficha Técnica
      <small>Detalle caracteristica técnica</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i>   Ficha Técnica</a></li>
      <li class="active">Detalle caracteristica técnica</li>
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
						<label for="direccion_fab">Caracteristica tecnica</label>
            <br>

            @foreach($caract_tec as $hosp)
                     @if ($hosp->idcaracteristica_tecnica==$detcaractec->idcaracteristica_tecnica)
                     <p>{{$hosp->nombre_caracteristica_tecnica}}</p>


                   @endif
                    @endforeach



					</div>
          <div class="form-group">
						<label for="direccion_fab">Equipo</label>
            @foreach($equipo as $hosp)
                     @if ($hosp->idequipo==$detcaractec->idequipo)
                     <p>{{$hosp->nombre_equipo}}</p>


                   @endif
                    @endforeach

					</div>

          <div class="form-group">
            <label for="direccion_fab">Valor referencia tecnica</label>

            @foreach($valorreftec as $hosp)
                     @if ($hosp->idvalor_ref_tec==$detcaractec->idvalor_ref_tec)
                     <p>{{$hosp->nombre_valor_ref_tec}}</p>


                   @endif
                    @endforeach
          </div>
          <div class="form-group">
            <label for="direccion_fab">Subgrupo caracteristica tecnica</label>

                        @foreach($subcaractec as $hosp)
                                 @if ($hosp->idsubgrupo_carac_tecnica==$detcaractec->idsubgrupo_carac_tecnica)
                                 <p>{{$hosp->nombre_subgrupo_carac_tecnica}}</p>


                               @endif
                                @endforeach
          </div>



				</div>
<div class="box-body col-md-6">
  <div class="form-group">
    <label for="direccion_fab">Estado detalle caracteristica tecnica</label>
    <p>{{$detcaractec->estado_detalle_caracteristica_tecnica}}</p>
  </div>
  <div class="form-group">
    <label for="direccion_fab">Descripcion detalle caracteristica tecnica</label>
    <p>{{$detcaractec->descripcion_detalle_caracteristica_tecnica}}</p>
  </div>

  <div class="form-group">
    <label for="direccion_fab">Valor detalle caracteristica tecnica</label>
    <p>{{$detcaractec->valor_detalle_caracteristica_tecnica}}</p>
  </div>

<br>

          <a href="{{route('detcaractec.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>

</div>
				<!-- /.box-body -->

        <div class="box-footer">


        </div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

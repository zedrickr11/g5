@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Valor referencia especial</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Valor referencia especial</li>
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
						<label for="direccion_fab">Nombre valor referencia especial</label>
            <p>{{$valorrefesp->nombre_valor_ref_esp}}</p>
					</div>



				</div>

				<!-- /.box-body -->

				<div class="box-footer">

					<a href="{{route('valorrefesp.index')}}">
            <button type="button" name="atras" class="btn btn-warning">Atrás</button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

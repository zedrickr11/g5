@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Valor referencia tecnica</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Valor referencia tecnica</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Valor referencia tecnica</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('valorreftec.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="direccion_fab">Nombre de valor referencia tecnica</label>
						<input type="text" class="form-control" name="nombre_valor_ref_tec" value="{{old('nombre_valor_ref_tec')}}">
					</div>




				</div>
				<div class="box-body col-md-6">





				</div>
				<!-- /.box-body -->

				<div class="box-footer">

					<input class="btn btn-primary" type="submit" name="" value="Guardar">
				</div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

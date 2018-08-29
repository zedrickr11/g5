@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Tipo de Manual</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Tipo de Manual</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar Tipo de Manual</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('tipoManual.update',$tipoManuals->idtipomanual)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="est">Estado del Equipo</label>
						<input type="text" class="form-control" name="nombre_tipo_manual" value="{{$tipoManuals->nombre_tipo_manual}}">
					</div>
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

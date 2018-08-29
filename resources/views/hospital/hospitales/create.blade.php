@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Hospitales</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Hospital</a></li>
        <li class="active">Ingreso de Datos</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Hospital</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('hospitales.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="direccion_fab">Nombre Hospital</label>
						<input type="text" class="form-control" name="hospital" value="{{old('hospital')}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab">Clave</label>
						<input type="text" class="form-control" name="clave_admin" value="{{old('clave_admin')}}">
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

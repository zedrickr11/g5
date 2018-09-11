@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Fabricante</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Fabricante</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar Fabricante</h3>
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
			<form role="form" method="POST" action="{{route('fabricante.update',$fabricantes->idfabricante)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="direccion_fab">Dirección del fabricante</label>
						<input type="text" class="form-control" name="direccion_fabricante" value="{{$fabricantes->direccion_fabricante}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab">Teléfono del fabricante</label>
						<input type="text" class="form-control" name="telefono_fabricante" value="{{$fabricantes->telefono_fabricante}}">
					</div>
					<div class="form-group">
						<label for="fax_fab">Fax del fabricante</label>
						<input type="text" class="form-control" name="fax_fabricante" value="{{$fabricantes->fax_fabricante}}">
					</div>
					<div class="form-group">
						<label for="correo_fab">Correo del fabricante</label>
						<input type="email" class="form-control" name="correo_fabricante" value="{{$fabricantes->correo_fabricante}}">
					</div>


				</div>
				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="direccion_fab_gt">Dirección del fabricante en Guatemala</label>
						<input type="text" class="form-control" name="direccion_guatemala_fabricante" value="{{$fabricantes->direccion_guatemala_fabricante}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab_gt">Teléfono del fabricante en Guatemala</label>
						<input type="text" class="form-control" name="telefono_guatemala_fabricante" value="{{$fabricantes->telefono_guatemala_fabricante}}">
					</div>

					<div class="form-group">
						<label for="correo_fab_gt">Correo del fabricante en Guatemala</label>
						<input type="email" class="form-control" name="correo_guatemala_fabricante" value="{{$fabricantes->correo_guatemala_fabricante}}">
					</div>
					<div class="form-group">
						<label for="contacto">Nombre del contacto</label>
						<input type="text" class="form-control" name="contacto_fabricante" value="{{$fabricantes->contacto_fabricante}}">
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

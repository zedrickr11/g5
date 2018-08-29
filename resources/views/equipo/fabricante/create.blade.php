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
				<h3 class="box-title">Nuevo Fabricante</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('fabricante.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="direccion_fab">Dirección del fabricante</label>
						<input type="text" class="form-control" name="direccion_fabricante" value="{{old('nombre')}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab">Teléfono del fabricante</label>
						<input type="text" class="form-control" name="telefono_fabricante" value="{{old('telefono_fabricante')}}">
					</div>
					<div class="form-group">
						<label for="fax_fab">Fax del fabricante</label>
						<input type="text" class="form-control" name="fax_fabricante" value="{{old('fax_fabricante')}}">
					</div>
					<div class="form-group">
						<label for="correo_fab">Correo del fabricante</label>
						<input type="email" class="form-control" name="correo_fabricante" value="{{old('correo_fabricante')}}">
					</div>


				</div>
				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="direccion_fab_gt">Dirección del fabricante en Guatemala</label>
						<input type="text" class="form-control" name="direccion_guatemala_fabricante" value="{{old('direccion_guatemala_fabricante')}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab_gt">Teléfono del fabricante en Guatemala</label>
						<input type="text" class="form-control" name="telefono_guatemala_fabricante" value="{{old('telefono_guatemala_fabricante')}}">
					</div>

					<div class="form-group">
						<label for="correo_fab_gt">Correo del fabricante en Guatemala</label>
						<input type="email" class="form-control" name="correo_guatemala_fabricante" value="{{old('correo_guatemala_fabricante')}}">
					</div>
					<div class="form-group">
						<label for="contacto">Nombre del contacto</label>
						<input type="text" class="form-control" name="contacto_fabricante" value="{{old('contacto_fabricante')}}">
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

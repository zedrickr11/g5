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


				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="direccion_fab">Dirección del fabricante</label>
            <p>{{$fabricantes->direccion_fabricante}}</p>
					</div>
					<div class="form-group">
						<label for="telefono_fab">Teléfono del fabricante</label>
            <p>{{$fabricantes->telefono_fabricante}}</p>
					</div>
					<div class="form-group">
						<label for="fax_fab">Fax del fabricante</label>
            <p>{{$fabricantes->fax_fabricante}}</p>
					</div>
					<div class="form-group">
						<label for="correo_fab">Correo del fabricante</label>
            <p>{{$fabricantes->correo_fabricante}}</p>
					</div>


				</div>
				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="direccion_fab_gt">Dirección del fabricante en Guatemala</label>
            <p>{{$fabricantes->direccion_guatemala_fabricante}}</p>
					</div>
					<div class="form-group">
						<label for="telefono_fab_gt">Teléfono del fabricante en Guatemala</label>
            <p>{{$fabricantes->telefono_guatemala_fabricante}}</p>
					</div>

					<div class="form-group">
						<label for="correo_fab_gt">Correo del fabricante en Guatemala</label>
            <p>{{$fabricantes->correo_guatemala_fabricante}}</p>
					</div>
					<div class="form-group">
						<label for="contacto">Nombre del contacto</label>
            <p>{{$fabricantes->contacto_fabricante}}</p>
					</div>




				</div>
				<!-- /.box-body -->

				<div class="box-footer">

					<a href="{{route('fabricante.index')}}">
            <button type="button" name="atras" class="btn btn-warning">Atrás</button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

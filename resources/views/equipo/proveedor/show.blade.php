@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Fabricante</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Proveedor</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Ver Proveedor</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Dirección del Proveedor</label>
            <p>{{$proveedores->direccion_proveedor}}</p>
					</div>
					<div class="form-group">
						<label for="telefono_fab">Teléfono del Proveedor</label>
            <p>{{$proveedores->telefono_proveedor}}</p>
					</div>
					<div class="form-group">
						<label for="fax_fab">Fax del Proveedor</label>
            <p>{{$proveedores->fax_proveedor}}</p>
					</div>
					<div class="form-group">
						<label for="correo_fab">Correo del Proveedor</label>
            <p>{{$proveedores->correo_proveedor}}</p>
					</div>
          <div class="form-group">
            <label for="correo_fab">Contacto del Proveedor</label>
            <p>{{$proveedores->contacto_proveedor}}</p>
          </div>

				</div>

				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('proveedor.index')}}">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@push ('scripts')
<script>
$('#liEq').addClass("treeview active");

$('#liProveedores').addClass("active");

</script>
@endpush
@endsection

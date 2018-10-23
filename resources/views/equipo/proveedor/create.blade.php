@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Proveedores</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Listado Proveedor</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Proveedor</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('proveedor.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Dirección Proveedor</label>
						<input type="text" class="form-control" name="direccion_proveedor" value="{{old('direccion_proveedor')}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab">Teléfono del Proveedor</label>
						<input type="text" class="form-control" name="telefono_proveedor" value="{{old('telefono_proveedor')}}">
					</div>
					<div class="form-group">
						<label for="fax_fab">Fax del Proveedor</label>
						<input type="text" class="form-control" name="fax_proveedor" value="{{old('fax_proveedor')}}">
					</div>
					<div class="form-group">
						<label for="correo_fab">Correo del Proveedor</label>
						<input type="email" class="form-control" name="correo_proveedor" value="{{old('correo_proveedor')}}">
					</div>
          <div class="form-group">
						<label for="correo_fab">Contacto del Proveedor</label>
						<input type="text" class="form-control" name="contacto_proveedor" value="{{old('contacto_proveedor')}}">
					</div>


				</div>

				<!-- /.box-body -->


        <div class="box-footer">
          <a href="{{route('proveedor.index')}}">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
        </div>
			</form>
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

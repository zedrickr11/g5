@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Servicio Tecnico</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Servicio Tecnico</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Servicio</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('servicioTecnico.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="ser">Direccion del servicio tenico </label>
						<input type="text" class="form-control" name="direccion_servicio_tecnico" value="{{old('direccion_servicio_tecnico')}}">
					</div>
					<div class="form-group">
						<label for="ser">Telefono</label>
						<input type="text" class="form-control" name="telefono_servicio_tecnico" value="{{old('telefono_servicio_tecnico')}}">
					</div>
					<div class="form-group">
						<label for="ser">Fax</label>
						<input type="text" class="form-control" name="fax_servicio_tecnico" value="{{old('fax_servicio_tecnico')}}">
					</div>
					<div class="form-group">
						<label for="ser">Correo Electronico</label>
						<input type="text" class="form-control" name="correo_servicio_mantenimiento" value="{{old('correo_servicio_mantenimiento')}}">
					</div>
					<div class="form-group">
						<label for="ser">Nombre de contacto</label>
						<input type="text" class="form-control" name="nombre_contacto_servicio_tecnico" value="{{old('nombre_contacto_servicio_tecnico')}}">
					</div>
					<div class="form-group">
						<label for="ser">Nombre de empresa</label>
						<input type="text" class="form-control" name="nombre_empresa_sevicio_tecnico" value="{{old('nombre_empresa_sevicio_tecnico')}}">
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<a href="{{route('servicioTecnico.index')}}">
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

$('#liServTec').addClass("active");

</script>
@endpush
@endsection

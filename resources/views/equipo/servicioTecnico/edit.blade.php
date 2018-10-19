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
				<h3 class="box-title">Editar Servicio Tecnico</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('servicioTecnico.update',$servicioTecnicos->idservicio_tecnico)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="ser">Direccion</label>
						<input type="text" class="form-control" name="direccion_servicio_tecnico" value="{{$servicioTecnicos->direccion_servicio_tecnico}}">
					</div>
					<div class="form-group">
						<label for="ser">Telefono</label>
						<input type="text" class="form-control" name="telefono_servicio_tecnico" value="{{$servicioTecnicos->telefono_servicio_tecnico}}">
					</div>

					<div class="form-group">
						<label for="ser">Fax</label>
						<input type="text" class="form-control" name="fax_servicio_tecnico" value="{{$servicioTecnicos->fax_servicio_tecnico}}">
					</div>

					<div class="form-group">
						<label for="ser">Correo Electronico</label>
						<input type="text" class="form-control" name="correo_servicio_mantenimiento" value="{{$servicioTecnicos->correo_servicio_mantenimiento}}">
					</div>

					<div class="form-group">
						<label for="ser">Nombre de contacto</label>
						<input type="text" class="form-control" name="nombre_contacto_servicio_tecnico" value="{{$servicioTecnicos->nombre_contacto_servicio_tecnico}}">
					</div>

					<div class="form-group">
						<label for="ser">Nombre de la Empresa</label>
						<input type="text" class="form-control" name="nombre_empresa_sevicio_tecnico" value="{{$servicioTecnicos->nombre_empresa_sevicio_tecnico}}">
					</div>

				</div>
				<!-- /.box-body --><br><br><br><br><br><br><br><br><br>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<div class="box-footer">
					<a href="{{route('servicioTecnico.index')}}">
		            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
		          	</a>
		          	<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
				</div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

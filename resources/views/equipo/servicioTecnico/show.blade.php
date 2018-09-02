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
				<h3 class="box-title">Detalles de Servicio Tecnico</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->

				<div class="box-body col-md-6">
					<div class="form-group">
						<label for="ser">Direccion</label>
            			<p>{{$servicioTecnicos->direccion_servicio_tecnico}}</p>
					</div>
					<div class="form-group">
						<label for="ser">Telefono</label>
            			<p>{{$servicioTecnicos->telefono_servicio_tecnico}}</p>
					</div>
					<div class="form-group">
						<label for="ser">Fax</label>
            			<p>{{$servicioTecnicos->fax_servicio_tecnico}}</p>
					</div>
					<div class="form-group">
						<label for="ser">Correo Electronico</label>
            			<p>{{$servicioTecnicos->correo_servicio_mantenimiento}}</p>
					</div>
					<div class="form-group">
						<label for="ser">Nombre de Contacto</label>
            			<p>{{$servicioTecnicos->nombre_contacto_servicio_tecnico}}</p>
					</div>
					<div class="form-group">
						<label for="ser">Nombre de la Empresa</label>
            			<p>{{$servicioTecnicos->nombre_empresa_sevicio_tecnico}}</p>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">

					<a href="{{route('servicioTecnico.index')}}">
            <button type="button" name="atras" class="btn btn-warning">Atrás</button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

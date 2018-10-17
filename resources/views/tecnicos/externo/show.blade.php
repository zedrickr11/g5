@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Tecnicos
        <small>Tecnico Externo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-circle"></i> Tecnico Externo</a></li>
        <li class="active">Detalles</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Detalles</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Nombre del Tecnico</label>
            <p>{{$externos->nombre_tecnico_externo}}</p>
					</div>
					<div class="form-group">
						<label for="telefono_fab">No Telefono del Tecnico</label>
            <p>{{$externos->telefono_tecnico_externo}}</p>
					</div>
          <div class="form-group">
            <label for="direccion_fab">Hospital</label>
            <br>
            @foreach($servicios as $s)
              @if ($s->idservicio_tecnico==$externos->idservicio_tecnico)
              <p>{{$s->nombre_empresa_sevicio_tecnico}}</p>
            @endif
             @endforeach

          </div>



				</div>

				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('externo.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

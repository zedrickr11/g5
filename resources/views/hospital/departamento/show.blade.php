@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Departamentos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-map-signs"></i> Departamento</a></li>
        <li class="active">Detalle</li>
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
						<label for="codigo">Código de departamento</label>
            <p>{{$departamentos->iddepartamento}}</p>
					</div>
					<div class="form-group">
						<label for="unidad">Departamento</label>
            <p>{{$departamentos->depto}}</p>
					</div>

          <div class="form-group">
            <label for="direccion_fab">Hospital</label>
            <br>
     @foreach($hospitals as $hosp)
              @if ($hosp->idhospital==$departamentos->idhospital)
              <p>{{$hosp->hospital}}</p>
            @endif
             @endforeach
          </div>

          <div class="form-group">
            <label for="direccion_fab">Región</label>
            <br>
     @foreach($regions as $reg)
              @if ($reg->idregion==$departamentos->idregion)
              <p>{{$reg->region}}</p>
            @endif
             @endforeach
          </div>



				</div>

				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('departamento.index')}}">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
				</div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Unidad de Salud</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i>Unidad de Salud</a></li>
        <li class="active">Ingreso</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nueva Unidad</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('unidad.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Codigo de Unidad de Salud</label>
						<input type="text" class="form-control" name="idunidadsalud" value="{{old('idunidadsalud')}}">
					</div>
					<div class="form-group">
						<label for="telefono_fab">Nombre de la Unidad de Salud</label>
						<input type="text" class="form-control" name="unidad_salud" value="{{old('unidad_salud')}}">
					</div>
          <div class="form-group">
    <label for="select" class="col-lg-2 control-label">Hospital</label>

      <select name="idhospital" class="form-control" id="select">
     @foreach($hospitals as $hosp)
            <option value="{{$hosp->idhospital}}">{{$hosp->hospital}}</option>
             @endforeach
      </select>



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
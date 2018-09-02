@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Departamento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Departamento</a></li>
        <li class="active">Modificar</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar Departamento</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('departamento.update',$departamentos->iddepartamento)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Departamento</label>
						<input type="text" class="form-control" name="depto" value="{{$departamentos->depto}}">
					</div>

          <div class="form-group">
            <label for="direccion_fab">Hospital</label>
            <br>
            <select name="idhospital"  name="idhospital" value="{{$departamentos->idhospital}}">
     @foreach($hospitals as $hosp)
              @if ($hosp->idhospital==$departamentos->idhospital)
            <option value="{{$hosp->idhospital}}" selected>{{$hosp->hospital}}</option>
            @else
            <option value="{{$hosp->idhospital}}">{{$hosp->hospital}}</option>
            @endif
             @endforeach
      </select>
          </div>
          <div class="form-group">
            <label for="direccion_fab">Region</label>
            <br>
            <select name="idregion"  name="idregion" value="{{$departamentos->idregion}}">
     @foreach($regions as $reg)
              @if ($reg->idregion==$departamentos->idregion)
            <option value="{{$reg->idregion}}" selected>{{$reg->region}}</option>
            @else
            <option value="{{$reg->idregion}}">{{$reg->region}}</option>
            @endif
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

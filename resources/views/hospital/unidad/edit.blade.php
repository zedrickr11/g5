@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Hospital
        <small>Unidad de Salud</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Unidad de Salud</a></li>
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
				<h3 class="box-title">Editar Unidad de Salud</h3>
			</div>
      @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        </ul>
      </div>
      @endif
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('unidad.update',$unidades->idunidadsalud)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Unidad de Salud</label>
						<input type="text" class="form-control" name="unidad_salud" value="{{$unidades->unidad_salud}}">
					</div>

          <div class="form-group">
            <label >Hospital</label>
            <br>
            <select name="idhospital"  class="form-control">
     @foreach($hospitals as $hosp)
              @if ($hosp->idhospital==$unidades->idhospital)
            <option value="{{$hosp->idhospital}}" selected>{{$hosp->hospital}}</option>
            @else
            <option value="{{$hosp->idhospital}}">{{$hosp->hospital}}</option>
            @endif
             @endforeach
      </select>
          </div>
				</div>

				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('unidad.index')}}">
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

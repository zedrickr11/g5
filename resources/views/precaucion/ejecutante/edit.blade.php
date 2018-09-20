@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
    Precaucion
    <small>Precaucion Ejecutante</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-exclamation-triangle"></i> Precaucion</a></li>
    <li class="active">Ejecutante</li>
  </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar Precaucion</h3>
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
			<form role="form" method="POST" action="{{route('ejecutante.update',$ejecutantes->idprecaucion_ejecutante)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Nombre de la Precaucion</label>
						<input type="text" class="form-control" name="precaucion_ejecutante" value="{{$ejecutantes->precaucion_ejecutante}}">
					</div>
				</div>

				<!-- /.box-body -->

				<div class="box-footer">
          <a href="{{route('ejecutante.index')}}">
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

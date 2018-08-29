@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Área</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Área</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar Área</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('area.update',$areas->idarea)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-12">

  					<div class="form-group">
  						<label for="idarea">Formato</label>
  						<input style="text-transform: uppercase;" type="text" class="form-control" name="idarea" value="{{$areas->idarea}}">
  					</div>
  					<div class="form-group">
  						<label for="nombre_area">Nombre del área</label>
  						<input type="text" class="form-control" name="nombre_area" value="{{$areas->nombre_area}}">
  					</div>


				</div>


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

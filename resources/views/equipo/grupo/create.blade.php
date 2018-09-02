@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Grupo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Grupo</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Grupo</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('grupo.store')}}" >
					{!! csrf_field() !!}

				<div class="box-body col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div class="form-group">
						<label for="idgrupo">Código</label>
						<input type="text" class="form-control" name="idgrupo" value="{{old('idgrupo')}}">
					</div>
					<div class="form-group">
						<label for="grupo">Grupo</label>
						<input type="text" class="form-control" name="grupo" value="{{old('grupo')}}">
					</div>

      		<div class="form-group">
      			<label>Área</label>
      			<select name="idarea" class="form-control">
              @foreach ($areas as $area)
                <option value="{{ $area->idarea }}">{{ $area->nombre_area }}</option>
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

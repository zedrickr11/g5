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
				<h3 class="box-title">Editar Grupo</h3>
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
			<form role="form" method="POST" action="{{route('grupo.update',$grupos->idgrupo)}}" >
        {!!method_field('PUT')!!}
        {!!csrf_field()!!}

				<div class="box-body col-lg-12 col-sm-12 col-md-12 col-xs-12">
          <div class="form-group">
						<label for="idgrupo">Código</label>
						<input type="number" class="form-control" name="idgrupo" value="{{$grupos->idgrupo}}" readonly>
					</div>
					<div class="form-group">
						<label for="grupo">Grupo</label>
						<input type="text" class="form-control" name="grupo" value="{{$grupos->grupo}}">
					</div>

      		<div class="form-group">
      			<label>Área</label>
      			<select name="idarea" class="form-control">
              @foreach ($areas as $area)
                     @if ($area->idarea==$grupos->idarea)
                     <option value="{{$area->idarea}}" selected>{{$area->nombre_area}}</option>
                     @else
                     <option value="{{$area->idarea}}">{{$area->nombre_area}}</option>
                     @endif
              @endforeach
      			</select>
      		</div>
    	</div>





				<!-- /.box-body -->

				<div class="box-footer">

          <a href="{{route('grupo.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
				</div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

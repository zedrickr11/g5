@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Configuración de los correlativos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Configuración de los correlativos</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar configuración de los correlativos</h3>
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
			<form role="form" method="POST" action="{{route('confcorrelativo.update',$confcorrelativo->idconf_corr)}}" >
        {!!method_field('PUT')!!}
        {!!csrf_field()!!}

				<div class="box-body col-lg-12 col-sm-12 col-md-12 col-xs-12">

					<div class="form-group">
						<label for="inicio">Inicio</label>
						<input type="number" class="form-control" name="inicio" value="{{$confcorrelativo->inicio}}">
					</div>
          <div class="form-group">
						<label for="fin">Fin</label>
						<input type="number" class="form-control" name="fin" value="{{$confcorrelativo->fin}}">
					</div>
          <div class="form-group">
						<label for="actual">Actual</label>
						<input type="number" class="form-control" name="actual" value="{{$confcorrelativo->actual}}">
					</div>


      		<div class="form-group">
      			<label>Grupo</label>
      			<select name="idsubgrupo" class="form-control">
              @foreach ($grupos as $grupo)
                     @if ($grupo->idsubgrupo==$confcorrelativo->idsubgrupo)
                     <option value="{{$grupo->idsubgrupo}}" selected>{{$grupo->subgrupo}}</option>
                     @else
                     <option value="{{$grupo->idsubgrupo}}">{{$grupo->subgrupo}}</option>
                     @endif
              @endforeach
      			</select>
      		</div>
          <div class="form-group">
						<label for="estado">Estado</label>
            <select class="form-control" name="estado">
  						@if ($confcorrelativo->estado==1)
                <option value="1" selected>ACTIVO</option>
                <option value="0" >INACTIVO</option>
              @else
                <option value="1" >ACTIVO</option>
                <option value="0" selected>INACTIVO</option>
              @endif
            </select>
					</div>
    	</div>





				<!-- /.box-body -->

				<div class="box-footer">
          <a href="{{route('confcorrelativo.index')}}">
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
@push ('scripts')
<script>
$('#liAreas').addClass("treeview active");
$('#liConfcorr').addClass("active");
</script>

@endpush
@endsection

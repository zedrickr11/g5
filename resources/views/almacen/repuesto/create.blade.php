@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Almacén
        <small>Repuestos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Almacén</a></li>
        <li class="active">Repuestos</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo Repuesto</h3>
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
			{!!Form::open(array('url'=>'almacen/repuesto','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
    <div class="box-body">
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
            </div>
    	</div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">Serie</label>
            	<input type="text" name="num_serie" required value="{{old('num_serie')}}" class="form-control" placeholder="Serie...">
            </div>
    	</div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">Modelo</label>
            	<input type="text" name="modelo" required value="{{old('modelo')}}" class="form-control" placeholder="Modelo...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="codigo">Código</label>
            	<input type="text" name="codigo"  value="{{old('codigo')}}" class="form-control" placeholder="Código del repuesto...">

            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="descripcion">Descripción</label>
            	<input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control" placeholder="Descripción del repuesto...">
            </div>
    	</div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="select" class="">Equipo</label>
          <select name="idequipo" class="form-control" id="equipo">}
              <option value="0" disabled selected>=== Selecciona un equipo ===</option>
            @foreach($equipo as $carac)
            <option value="{{$carac->idequipo}}">{{$carac->nombre_equipo}}</option>
            @endforeach
        </select>
        </div>
    	</div>

    	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    		<div class="form-group">
					<a href="{{route('repuesto.index')}}">
						<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
					</a>
					<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
					<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>

            </div>
    	</div>
    </div>




			{!!Form::close()!!}

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>
<script >
$('#equipo').select2({
  theme: "classic"
});
</script>
@endsection

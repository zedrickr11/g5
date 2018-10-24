@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Almacén
        <small>Insumos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Almacén</a></li>
        <li class="active">Insumos</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar Repuesto: {{ $repuestos->nombre}}</h3>
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
			{!!Form::model($repuestos,['method'=>'PATCH','route'=>['repuesto.update',$repuestos->idrepuesto]])!!}
						 {{Form::token()}}
		 <div class="box-body">
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" required value="{{$repuestos->nombre}}" class="form-control">
						 </div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
							<label for="codigo">Código</label>
							<input type="text" name="codigo" id="codigobar"  value="{{$repuestos->codigo}}" class="form-control">


						 </div>
			</div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
              <label for="nombre">Serie</label>
              <input type="text" name="num_serie" required value="{{$repuestos->num_serie}}" class="form-control" >
            </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
              <label for="nombre">Modelo</label>
              <input type="text" name="modelo" required value="{{$repuestos->modelo}}" class="form-control" >
            </div>
      </div>
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
							<label for="stock">Stock</label>
							<input type="text" name="stock" readonly required value="{{$repuestos->stock}}" class="form-control">
						 </div>
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" name="descripcion" value="{{$repuestos->descripcion}}" class="form-control" placeholder="Descripción del artículo...">
						 </div>
			</div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label>Equipo</label>
          <select name="idequipo" class="form-control" id="equipo">
            <option value="0" disabled selected>=== Selecciona un equipo ===</option>
            @foreach ($equipo as $equipos)
                   @if ($equipos->idequipo==$repuestos->idequipo)
                   <option value="{{$equipos->idequipo}}" selected>{{$equipos->nombre}}</option>
                   @else
                   <option value="{{$equipos->idequipo}}">{{$equipos->nombre}}</option>
                   @endif
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
@push ('scripts')
<script>
$('#liAlmacen').addClass("treeview active");


$('#liRepuestos').addClass("active");

</script>
<script >
$('#equipo').select2({
  theme: "classic"
});
</script>
@endpush
@endsection

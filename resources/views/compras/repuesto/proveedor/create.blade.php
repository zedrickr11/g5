@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Compras
        <small>Repuestos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Compras</a></li>
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
				<h3 class="box-title">Nuevo Proveedor de Repuestos</h3>
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
			{!!Form::open(array('url'=>'compras/repuesto/prov','method'=>'POST','autocomplete'=>'off'))!!}
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
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Dirección...">
            </div>
        </div>

    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input type="text" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="Teléfono...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="descripcion">Email</label>
            	<input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email...">
            </div>
    	</div>
			<input type="hidden" name="estado" value="1" >


    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
					<a href="{{route('prov.index')}}">
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
$('#liCompras').addClass("treeview active");
$('#liProveedoresR').addClass("active");
</script>
@endpush
@endsection

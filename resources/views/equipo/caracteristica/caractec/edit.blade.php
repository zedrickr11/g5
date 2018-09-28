@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Ficha Técnica
        <small>Caracteristica técnica</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-edit"></i> Ficha Técnica</a></li>
        <li class="active">Caracteristica técnica</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar caracteristica técnica</h3>
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
			<form role="form" method="POST" action="{{route('caractec.update',$caract_tec->idcaracteristica_tecnica)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}
				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Nombre caracteristica técnica</label>
						<input type="text" class="form-control" name="nombre_caracteristica_tecnica" value="{{$caract_tec->nombre_caracteristica_tecnica}}">
					</div>



				</div>

				<!-- /.box-body -->

        <div class="box-footer">


          <a href="{{route('caractec.index')}}">
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

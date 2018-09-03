@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Configuración de los subgrupos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Configuración de los subgrupos</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Editar configuración de los subgrupos</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('confsubgrupo.update',$confsubgrupos->idconf_subgrupo)}}" >
        {!!method_field('PUT')!!}
        {!!csrf_field()!!}

				<div class="box-body col-lg-12 col-sm-12 col-md-12 col-xs-12">

					<div class="form-group">
						<label for="inicio">Inicio</label>
						<input type="number" class="form-control" name="inicio" value="{{$confsubgrupos->inicio}}">
					</div>
          <div class="form-group">
						<label for="fin">Fin</label>
						<input type="number" class="form-control" name="fin" value="{{$confsubgrupos->fin}}">
					</div>
          <div class="form-group">
						<label for="actual">Actual</label>
						<input type="number" class="form-control" name="actual" value="{{$confsubgrupos->actual}}">
					</div>


      		<div class="form-group">
      			<label>Grupo</label>
      			<select name="idarea" class="form-control">
              @foreach ($grupos as $grupo)
                     @if ($grupo->idgrupo==$confsubgrupos->idgrupo)
                     <option value="{{$grupo->idgrupo}}" selected>{{$grupo->grupo}}</option>
                     @else
                     <option value="{{$grupo->idgrupo}}">{{$grupo->grupo}}</option>
                     @endif
              @endforeach
      			</select>
      		</div>
          <div class="form-group">
						<label for="estado">Estado</label>
						<input type="number" class="form-control" name="estado" value="{{$confsubgrupos->estado}}">
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

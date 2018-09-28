@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Rutinas
        <small>Subgrupo rutina</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Rutinas</a></li>
        <li class="active">Subgrupo rutina</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo subgrupo rutina</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Nombre subgrupo rutina</label>
            <p>{{$subru->subgrupo_rutina}}</p>
					</div>



				</div>

				<!-- /.box-body -->

        <div class="box-footer">

          <a href="{{route('subru.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
        </div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Rutinas
        <small>Detalle caracteristica rutina</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Rutinas</a></li>
        <li class="active">Detalle caracteristica rutina</li>

      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo detalle caracteristica rutina</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('detcaracru.store')}}">
					{!! csrf_field() !!}



				<div class="box-body col-md-6">


                    <div class="form-group">
                      <label for="select" class="">Caracteristica rutina</label>
                      <select name="idcaracteristica_rutina" class="form-control select2" id="select">
                        @foreach($caracru as $carac1)
                        <option value="{{$carac1->idcaracteristica_rutina}}">{{$carac1->caracteristica_rutina}}</option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="select" class="">Rutina de mantenimiento</label>
                      <select name="idrutina_mantenimiento" class="form-control" id="select">
                        @foreach($ruman as $carac2)
                        <option value="{{$carac2->idrutina_mantenimiento}}">{{$carac2->idrutina_mantenimiento}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="select" class="">Valor referencia rutina</label>
                      <select name="idvalor_ref_rutina" class="form-control" id="select">
                        @foreach($valrefru as $carac)
                        <option value="{{$carac->idvalor_ref_rutina}}">{{$carac->descripcion}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="select" class="">Subgrupo rutina</label>
                      <select name="idsubgrupo_rutina" class="form-control" id="select">
                        @foreach($subru as $carac)
                        <option value="{{$carac->idsubgrupo_rutina}}">{{$carac->subgrupo_rutina}}</option>
                    @endforeach
                    </select>
                    </div>




                    				</div>
	<div class="box-body col-md-6">
					<div class="form-group">

            <label for="direccion_fab">Estado detalle caracteristica rutinal</label>
						<input type="text" class="form-control" name="estado_detalle_caracteristica_rutina" value="{{old('estado_detalle_caracteristica_rutina')}}">
					</div>


          <div class="form-group">
            <label for="direccion_fab">Fecha detalle caracteristica rutina</label>
            <input type="date" class="form-control" name="fecha_detalle_caracteristica_rutina" value="{{old('fecha_detalle_caracteristica_rutina')}}">
          </div>

          <div class="form-group">
            <label for="direccion_fab">Comentario detalle caracteristica rutina</label>
            <input type="text" class="form-control" name="comentario_detalle_caracteristica_rutina" value="{{old('comentario_detalle_caracteristica_rutina')}}">
          </div>
<br>
          <a href="{{route('detcaracru.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>



</div>



				<!-- /.box-body -->

        <div class="box-footer">


      </div>
			</form>
		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

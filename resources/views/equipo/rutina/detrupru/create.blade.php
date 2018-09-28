@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Rutinas
        <small>Detalle rutina prueba</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Rutinas</a></li>
        <li class="active">Detalle rutina prueba</li>

      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nuevo detalle rutina prueba</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('detrupru.store')}}">
					{!! csrf_field() !!}



				<div class="box-body col-md-6">




          <div class="form-group">
            <label for="select" class="">Rutina de mantenimiento</label>
            <select name="idrutina_mantenimiento" class="form-control" id="select">
              @foreach($ruman as $carac2)
              <option value="{{$carac2->idrutina_mantenimiento}}">{{$carac2->idrutina_mantenimiento}}</option>
          @endforeach
          </select>
          </div>

                    <div class="form-group">
                      <label for="select" class="">Prueba rutina</label>
                      <select name="idprueba_rutina" class="form-control" id="select">
                        @foreach($pruru as $carac2)
                        <option value="{{$carac2->idprueba_rutina}}">{{$carac2->prueba_rutina}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="select" class="">Valor referencia prueba</label>
                      <select name="idvalor_ref_prueba" class="form-control" id="select">
                        @foreach($valorrefpru as $carac)
                        <option value="{{$carac->idvalor_ref_prueba}}">{{$carac->descripcion}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="select" class="">Subgrupo rutina</label>
                      <select name="idsubgrupo_prueba" class="form-control" id="select">
                        @foreach($subpru as $carac)
                        <option value="{{$carac->idsubgrupo_prueba}}">{{$carac->subgrupo_prueba}}</option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group">

                      <label for="direccion_fab">Norma detalle caracteristica rutina</label>
          						<input type="text" class="form-control" name="norma_detalle_rutina_prueba" value="{{old('norma_detalle_rutina_prueba')}}">
          					</div>





                    				</div>
	<div class="box-body col-md-6">



          <div class="form-group">
            <label for="direccion_fab">Unidad medida detalle rutina prueba</label>
            <input type="text" class="form-control" name="unidad_medida_detalle_rutina_prueba" value="{{old('unidad_medida_detalle_rutina_prueba')}}">
          </div>

          <div class="form-group">
            <label for="direccion_fab">Estado detalle rutina prueba</label>
            <input type="text" class="form-control" name="estado_detalle_rutina_prueba" value="{{old('estado_detalle_rutina_prueba')}}">
          </div>
          <div class="form-group">
            <label for="direccion_fab">Fecha detalle rutina prueba</label>
            <input type="date" class="form-control" name="fecha_detalle_rutina_prueba" value="{{old('fecha_detalle_rutina_prueba')}}">
          </div>
          <div class="form-group">
            <label for="direccion_fab">Comentario detalle rutina prueba</label>
            <input type="text" class="form-control" name="comentario_detalle_rutina_prueba" value="{{old('comentario_detalle_rutina_prueba')}}">
          </div>
<br>

                    <a href="{{route('detrupru.index')}}">
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

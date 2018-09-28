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
				<h3 class="box-title">Editar detalle caracteristica prueba</h3>
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
			<form role="form" method="POST" action="{{route('detrupru.update',$detrupru->iddetalle_rutina_prueba)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}



        				<div class="box-body col-md-6">


                  <div class="form-group">
                    <label for="select" class="">Rutina de mantenimiento</label>
                    <br>
                    <select name="idrutina_mantenimiento"  class="form-control" value="{{$detrupru->idrutina_mantenimiento}}">
                @foreach($ruman as $hosp)
                      @if ($hosp->idrutina_mantenimiento==$detrupru->idrutina_mantenimiento)
                    <option value="{{$hosp->idrutina_mantenimiento}}" selected>{{$hosp->idrutina_mantenimiento}}</option>
                    @else
                    <option value="{{$hosp->idrutina_mantenimiento}}">{{$hosp->idrutina_mantenimiento}}</option>
                    @endif
                     @endforeach
                </select>
                  </div>

                            <div class="form-group">
                              <label for="select" class="">Prueba rutina</label>
                              <br>
                              <select name="idprueba_rutina"  class="form-control" value="{{$detrupru->idprueba_rutina}}">
                          @foreach($pruru as $hosp)
                                @if ($hosp->idprueba_rutina==$detrupru->idprueba_rutina)
                              <option value="{{$hosp->idprueba_rutina}}" selected>{{$hosp->prueba_rutina}}</option>
                              @else
                              <option value="{{$hosp->idprueba_rutina}}">{{$hosp->prueba_rutina}}</option>
                              @endif
                               @endforeach
                          </select>
                            </div>

                            <div class="form-group">
                              <label for="select" class="">Valor referencia prueba</label>
                              <br>
                              <select name="idvalor_ref_prueba"  class="form-control" value="{{$detrupru->idvalor_ref_prueba}}">
                          @foreach($valorrefpru as $hosp)
                                @if ($hosp->idvalor_ref_prueba==$detrupru->idvalor_ref_prueba)
                              <option value="{{$hosp->idvalor_ref_prueba}}" selected>{{$hosp->descripcion}}</option>
                              @else
                              <option value="{{$hosp->idvalor_ref_prueba}}">{{$hosp->descripcion}}</option>
                              @endif
                               @endforeach
                          </select>
                            </div>

                            <div class="form-group">
                              <label for="select" class="">Subgrupo rutina</label>
                              <br>
                              <select name="idsubgrupo_prueba"  class="form-control" value="{{$detrupru->idsubgrupo_prueba}}">
                          @foreach($subpru as $hosp)
                                @if ($hosp->idsubgrupo_prueba==$detrupru->idsubgrupo_prueba)
                              <option value="{{$hosp->idsubgrupo_prueba}}" selected>{{$hosp->subgrupo_prueba}}</option>
                              @else
                              <option value="{{$hosp->idsubgrupo_prueba}}">{{$hosp->subgrupo_prueba}}</option>
                              @endif
                               @endforeach
                          </select>
                            </div>

                            <div class="form-group">

                              <label for="direccion_fab">Norma detalle caracteristica rutina</label>
                  						<input type="text" class="form-control" name="norma_detalle_rutina_prueba" value="{{$detrupru->norma_detalle_rutina_prueba}}">
                  					</div>





                            				</div>
        	<div class="box-body col-md-6">



                  <div class="form-group">
                    <label for="direccion_fab">Unidad medida detalle rutina prueba</label>
                    <input type="text" class="form-control" name="unidad_medida_detalle_rutina_prueba" value="{{$detrupru->unidad_medida_detalle_rutina_prueba}}">
                  </div>

                  <div class="form-group">
                    <label for="direccion_fab">Estado detalle rutina prueba</label>
                    <input type="text" class="form-control" name="estado_detalle_rutina_prueba" value="{{$detrupru->estado_detalle_rutina_prueba}}">
                  </div>
                  <div class="form-group">
                    <label for="direccion_fab">Fecha detalle rutina prueba</label>
                    <input type="date" class="form-control" name="fecha_detalle_rutina_prueba" value="{{$detrupru->fecha_detalle_rutina_prueba}}">
                  </div>
                  <div class="form-group">
                    <label for="direccion_fab">Comentario detalle rutina prueba</label>
                    <input type="text" class="form-control" name="comentario_detalle_rutina_prueba" value="{{$detrupru->comentario_detalle_rutina_prueba}}">
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

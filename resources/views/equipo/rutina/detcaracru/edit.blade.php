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
				<h3 class="box-title">Editar detalle caracteristica rutina</h3>
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
			<form role="form" method="POST" action="{{route('detcaracru.update',$detcaracru->iddetalle_caracteristica_rutina)}}" >
				{!!method_field('PUT')!!}
				{!!csrf_field()!!}

        <div class="box-body col-md-6">


                    <div class="form-group">
                      <label for="select" class="">Caracteristica rutina</label>
                      <br>
                      <select name="idcaracteristica_rutina"  class="form-control" value="{{$detcaracru->idcaracteristica_rutina}}">
                  @foreach($caracru as $hosp)
                        @if ($hosp->idcaracteristica_rutina==$detcaracru->idcaracteristica_rutina)
                      <option value="{{$hosp->idcaracteristica_rutina}}" selected>{{$hosp->caracteristica_rutina}}</option>
                      @else
                      <option value="{{$hosp->idcaracteristica_rutina}}">{{$hosp->caracteristica_rutina}}</option>
                      @endif
                       @endforeach
                  </select>
                    </div>

                    <div class="form-group">
                      <label for="select" class="">Rutina de mantenimiento</label>
                      <br>
                      <select name="idrutina_mantenimiento"  class="form-control" value="{{$detcaracru->idrutina_mantenimiento}}">
                  @foreach($ruman as $hosp)
                        @if ($hosp->idrutina_mantenimiento==$detcaracru->idrutina_mantenimiento)
                      <option value="{{$hosp->idrutina_mantenimiento}}" selected>{{$hosp->idrutina_mantenimiento}}</option>
                      @else
                      <option value="{{$hosp->idrutina_mantenimiento}}">{{$hosp->idrutina_mantenimiento}}</option>
                      @endif
                       @endforeach
                  </select>
                    </div>
                    <div class="form-group">
                      <label for="select" class="">Valor referencia rutina</label>
                      <br>
                      <select name="idvalor_ref_rutina"  class="form-control" value="{{$detcaracru->idvalor_ref_rutina}}">
                  @foreach($valrefru as $hosp)
                        @if ($hosp->idvalor_ref_rutina==$detcaracru->idvalor_ref_rutina)
                      <option value="{{$hosp->idrutina_mantenimiento}}" selected>{{$hosp->descripcion}}</option>
                      @else
                      <option value="{{$hosp->idrutina_mantenimiento}}">{{$hosp->descripcion}}</option>
                      @endif
                       @endforeach
                  </select>
                    </div>

                    <div class="form-group">
                      <label for="select" class="">Subgrupo rutina</label>
                      <br>
                      <select name="idsubgrupo_rutina"  class="form-control" value="{{$detcaracru->idsubgrupo_rutina}}">
                  @foreach($subru as $hosp)
                        @if ($hosp->idsubgrupo_rutina==$detcaracru->idsubgrupo_rutina)
                      <option value="{{$hosp->idsubgrupo_rutina}}" selected>{{$hosp->subgrupo_rutina}}</option>
                      @else
                      <option value="{{$hosp->idsubgrupo_rutina}}">{{$hosp->subgrupo_rutina}}</option>
                      @endif
                       @endforeach
                  </select>
                    </div>




                            </div>
    <div class="box-body col-md-6">
          <div class="form-group">

            <label for="direccion_fab">Estado detalle caracteristica rutinal</label>
            <input type="text" class="form-control" name="estado_detalle_caracteristica_rutina" value="{{$detcaracru->estado_detalle_caracteristica_rutina}}">
          </div>


          <div class="form-group">
            <label for="direccion_fab">Fecha detalle caracteristica rutina</label>
            <input type="date" class="form-control" name="fecha_detalle_caracteristica_rutina" value="{{$detcaracru->fecha_detalle_caracteristica_rutina}}">
          </div>

          <div class="form-group">
            <label for="direccion_fab">Comentario detalle caracteristica rutina</label>
            <input type="text" class="form-control" name="comentario_detalle_caracteristica_rutina" value="{{$detcaracru->comentario_detalle_caracteristica_rutina}}">
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

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Rutinas
        <small>Rutina mantenimiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Rutinas</a></li>
        <li class="active">Rutina mantenimiento</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nueva prueba rutina</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
      @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        </ul>
      </div>
      @endif

      <form role="form" method="POST" action="{{route('ruman.update',$ruman->idrutina_mantenimiento)}}" >
        {!!method_field('PUT')!!}
        {!!csrf_field()!!}
      <div class="box-body col-md-6">
<input type="hidden" name="idequipo" value="{{$ruman->idequipo}}">
<input type="hidden" name="idtipo_rutina" value="{{$ruman->idtipo_rutina}}">
<input type="hidden" name="observaciones_rutina" value="{{$ruman->observaciones_rutina}}">
<input type="hidden" name="tiempo_estimado_rutina_mantenimiento" value="{{$ruman->tiempo_estimado_rutina_mantenimiento}}">
<input type="hidden" name="responsable_area_rutina_mantenimiento" value="{{$ruman->responsable_area_rutina_mantenimiento}}">
<input type="hidden" name="idsubgrupo" value="{{$ruman->idsubgrupo}}">
<input type="hidden" name="frecuencia_rutina" value="{{$ruman->frecuencia_rutina}}">

                    @foreach($notificacion as $hosp)
                             @if ($hosp->rutina_mantenimiento_idrutina_mantenimiento==$ruman->idrutina_mantenimiento)

                               @if($ruman->frecuencia_rutina==1)

                               {{date("d-m-Y",strtotime($hosp->start."+ 1 month"))}}
                               {{date("d-m-Y",strtotime($hosp->end."+ 1 month"))}}

                             <input type="hidden" name="start22" value="{{date("Y-m-d",strtotime($hosp->start."+ 1 month"))}}">
                             <input type="hidden" name="end22" value="{{date("Y-m-d",strtotime($hosp->end."+ 1 month"))}}">
                             @endif

                           @endif
                            @endforeach

                  <div class="form-group">
                    <label for="select" class="">Tipo rutina</label>
                    <br>


                    @foreach($tiporu as $hosp)
                             @if ($hosp->idtipo_rutina==$ruman->idtipo_rutina)
                             <p>{{$hosp->tipo_rutina}}</p>


                           @endif
                            @endforeach

                  </div>

                  <div class="form-group">
                    <label for="select" class="">Equipo</label>
                    <br>

                    @foreach($equipo as $hosp)
                             @if ($hosp->idequipo==$ruman->idequipo)
                             <p>{{$hosp->nombre_equipo}}</p>


                           @endif
                            @endforeach


                  </div>


                  <div class="form-group">

                    <label for="direccion_fab">Observaciones rutina</label>
                    <p>{{$ruman->observaciones_rutina}}</p>
                    </div>


<input type="hidden" name="estado_rutina" value="REALIZADO">

                          </div>
  <div class="box-body col-md-6">
  <div class="form-group">
          <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>
          <p>{{$ruman->tiempo_estimado_rutina_mantenimiento}}</p>

  </div>


        <div class="form-group">

          <label for="direccion_fab">Responsable de area de rutina</label>
          <p>{{$ruman->responsable_area_rutina_mantenimiento}}</p>
        </div>



        <div class="form-group">
          <label for="select" class="">Permiso de trabajo</label>
          <br>

          @foreach($permisotrabajo as $hosp)
                   @if ($hosp->idpermiso_trabajo==$ruman->idpermiso_trabajo)
                   <p>{{$hosp->num_permiso}}</p>


                 @endif
                  @endforeach

        </div>

        <div class="form-group">

          <label for="direccion_fab">Estado rutina</label>
          <p>{{$ruman->estado_rutina}}</p>

        </div>

  </div>


  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
          <thead style="background-color:#2ab863">

              <th>Rutina</th>
              <th>Subgrupo</th>
              <th>Valor</th>
              <th>Comentario</th>
              <th>Verificación</th>


          </thead>
          <tfoot>

   {{$cont = 0}}
          </tfoot>
          <tbody>
              @foreach($detallerutina as $det)
                 @if ($det->idrutina_mantenimiento==$ruman->idrutina_mantenimiento)
              <tr>
                @foreach($caracru as $dets)
                @if ($dets->idcaracteristica_rutina==$det->idcaracteristica_rutina)
      <td>{{$dets->caracteristica_rutina}}</td>  @endif @endforeach
      @foreach($subru as $dets)
      @if ($dets->idsubgrupo_rutina==$det->idsubgrupo_rutina)
      <td>{{$dets->subgrupo_rutina}}</td>@endif @endforeach
      @foreach($valrefru as $dets)
      @if ($dets->idvalor_ref_rutina==$det->idvalor_ref_rutina)
      <td>{{$dets->descripcion}}</td>@endif @endforeach
        <input type="hidden" name="idcaracteristica_rutina2[]" value="{{$det->idcaracteristica_rutina}}">
        <input type="hidden" name="idvalor_ref_rutina2[]" value="{{$det->idvalor_ref_rutina}}">
    <input type="hidden" name="idsubgrupo_rutina2[]" value="{{$det->idsubgrupo_rutina}}">
      <input type="hidden" name="iddetalle_caracteristica_rutina[]" value="{{$det->iddetalle_caracteristica_rutina}}">
                    <td><input type="text" name="comentario_detalle_caracteristica_rutina[]" value=""></td>
                    <input type="hidden" name="estado_detalle_caracteristica_rutina[{{$cont}}]" value="0">
                  <td><input type="checkbox" name="estado_detalle_caracteristica_rutina[{{$cont}}]" value="1"></td>
@php($cont=$cont+1)
              </tr>
              @endif
              @endforeach
          </tbody>
      </table>
   </div>


				<!-- /.box-body -->


        <div class="box-footer">
          @foreach($equipo as $hosp)
                   @if ($hosp->idequipo==$ruman->idequipo)




           <a href="{{route('actualizar',$hosp->idequipo)}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
          @endif
           @endforeach

           <button class="btn btn-primary" type="submit">Terminar rutina</button>
        </div>





		</div>
		<!-- /.box -->
</form>

	</div>

</div>
</section>
@endsection

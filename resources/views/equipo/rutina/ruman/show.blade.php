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
				<h3 class="box-title">Detalle rutina mantenimiento</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


      <div class="box-body col-md-6">
        <div class="form-group">

          <label for="direccion_fab">Frecuencia</label>
             @if ($ruman->idtipo_rutina==1)
          <p>Mensual</p>     @endif
          @if ($ruman->idtipo_rutina==3)
       <p>Trimestral</p>     @endif
       @if ($ruman->idtipo_rutina==6)
    <p>Semestral</p>     @endif
    @if ($ruman->idtipo_rutina==12)
 <p>Anual</p>     @endif
          </div>


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

          <label for="direccion_fab">ID Equipo</label>
          <p>{{$ruman->idequipo}}</p>
          </div>
          <div class="form-group">

            <label for="direccion_fab">Nombre de equipo</label>

                                                      @foreach($equipo as $dets)
                                                        @if ($dets->idequipo==$ruman->idequipo)
                                              <p>{{$dets->nombre_equipo}}</p>  @endif @endforeach
            </div>

                  <div class="form-group">

                    <label for="direccion_fab">Observaciones rutina</label>
                    <p>{{$ruman->observaciones_rutina}}</p>
                    </div>




                          </div>
  <div class="box-body col-md-6">
  <div class="form-group">
          <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>
          <p>{{$ruman->tiempo_estimado_rutina_mantenimiento}}</p>

  </div>


        <div class="form-group">

          <label for="direccion_fab">Responsable de area de rutina</label>
          @foreach($users as $us)
          @if($us->id==$ruman->responsable_area_rutina_mantenimiento)
          <p>{{$us->name}}</p>
@endif
          @endforeach
        </div>





        <div class="form-group">

          <label for="direccion_fab">Estado rutina</label>
          <p>{{$ruman->estado_rutina}}</p>

        </div>
        <div class="form-group">
          <label for="select" class="">Permiso de trabajo</label>
          <br>

          @foreach($permisotrabajo as $hosp)
                   @if ($hosp->idpermiso_trabajo==$ruman->permiso_trabajo_idpermiso_trabajo)
                   <p>{{$hosp->num_permiso}}</p>


                 @endif
                  @endforeach

        </div>
        <a href="{{route('ruman.index')}}">
              <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
            </a>

  </div>


  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
          <thead style="background-color:#2ab863">

              <th>Caracteristica</th>
              <th>Subgrupo</th>
              <th>Valor</th>
                <th>Estado</th>




          </thead>
          <tfoot>


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
                                    <td>{{$det->estado_detalle_caracteristica_rutina}}</td>

                </tr>
              @endif
              @endforeach
          </tbody>
      </table>
   </div>


				<!-- /.box-body -->


        <div class="box-footer">

        </div>





		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@push ('scripts')
<script>
$('#liRutinas').addClass("treeview active");

$('#liRuman').addClass("active");

</script>
@endpush
@endsection

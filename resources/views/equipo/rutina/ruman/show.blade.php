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


      <div class="box-body col-md-6">



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
          <p>{{$ruman->responsable_area_rutina_mantenimiento}}</p>
        </div>





        <div class="form-group">

          <label for="direccion_fab">Estado rutina</label>
          <p>{{$ruman->estado_rutina}}</p>

        </div>

  </div>


  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
          <thead style="background-color:#2ab863">

              <th>Caracteristica</th>
              <th>Subgrupo</th>
              <th>Valor</th>




          </thead>
          <tfoot>


          </tfoot>
          <tbody>
              @foreach($detallerutina as $det)
                 @if ($det->idrutina_mantenimiento==$ruman->idrutina_mantenimiento)
              <tr>
                  <td>{{$det->idcaracteristica_rutina}}</td>
                  <td>{{$det->idsubgrupo_rutina}}</td>
                  <td>{{$det->idvalor_ref_rutina}}</td>

                </tr>
              @endif
              @endforeach
          </tbody>
      </table>
   </div>


				<!-- /.box-body -->


        <div class="box-footer">
      <a href="{{route('ruman.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
        </div>





		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@endsection

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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="{{route('actualizar',$idequipo)}}">
       <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button></a>
<br>
       {!! $ruman->links() !!}
  @foreach($ruman as $ru)
	<section class="content">


    <div class="row">


              <div class="box">
                  <div class="box-body">
  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
<h3>Asignar fecha</h3>

<div class="form-group">
  <label for="frec_uso_dia_semana">Frecuencia</label>
  <select class="form-control" name="frec_uso_dia_semana">
    <option value="1">Mensual</option>
    <option value="3">Trimestral</option>
    <option value="6">Semestral</option>
    <option value="12">Anual</option>

  </select>
</div>

  <div class="form-group">
    <label for="direccion_fab">Fecha inicio</label>
    <br>
    <input type="date" name="idcaracteristica_rutina[]" style="width: 100%" min="{{date("Y-m-d")}}" value="{{date("Y-m-d")}}" required>
  </div>
  <div class="form-group">
    <label for="direccion_fab">Fecha finalización</label>
    <br>
    <input type="date" name="idcaracteristica_rutina[]" style="width: 100%" min="{{date("Y-m-d")}}" value="{{date("Y-m-d")}}" required>
  </div>

  <div class="form-group">
    <label for="direccion_fab" >descripcion</label>
    <br>
    <input type="text" name="idcaracteristica_rutina[]" style="width: 100%" value="{{old('observaciones_rutina')}}">
  </div>


</div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <h3>Datos rutina</h3>

    <div class="form-group">
      <label for="select" class="">Tipo rutina</label>
      <br>

      @foreach($tiporu as $hosp)
               @if ($hosp->idtipo_rutina==$ru->idtipo_rutina)
               <p>{{$hosp->tipo_rutina}}</p>
             @endif
              @endforeach

    </div>

    <div class="form-group">
            <label for="direccion_fab">ID Equipo</label>
            <p>{{$idequipo}}</p>

    </div>
  <div class="form-group">
          <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>
          <p>{{$ru->tiempo_estimado_rutina_mantenimiento}}</p>

  </div>


        <div class="form-group">

          <label for="direccion_fab">Responsable de area de rutina</label>
          <p>{{$ru->responsable_area_rutina_mantenimiento}}</p>
        </div>





        <div class="form-group">

          <label for="direccion_fab">Estado rutina</label>

          <p>{{$ru->estado_rutina}}</p>

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

              @foreach($rumen as $det)
                @if ($det->idrutina_mantenimiento==$ru->idrutina_mantenimiento)
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

                </tr>
                @endif

              @endforeach
          </tbody>
      </table>
   </div>



  </div>
  </div>
@endforeach





            <!-- /.box-body -->

          <!-- /.box -->


          <!-- /.box -->

        <!-- /.col -->
      </div>
    </div>


</section>
@endsection

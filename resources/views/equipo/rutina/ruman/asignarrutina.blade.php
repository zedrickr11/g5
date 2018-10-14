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
<div class="box-body col-md-6">



</div>
  <div class="box-body col-md-6">
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
                  <td>{{$det->idcaracteristica_rutina}}</td>
                  <td>{{$det->idsubgrupo_rutina}}</td>
                  <td>{{$det->idvalor_ref_rutina}}</td>

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

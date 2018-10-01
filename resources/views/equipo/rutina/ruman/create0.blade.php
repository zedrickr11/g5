@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Equipo
        <small>Rutina mantenimiento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Rutina mantenimiento</li>
      </ol>
</section>
	<section class="content">

<div class="row">

	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->




			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="POST" action="{{route('ruman.store')}}">
					{!! csrf_field() !!}

       <div class="nav-tabs-custom">
         <ul class="nav nav-tabs pull-left">
           <li class="active"><a data-toggle="tab" href="#tab_1-1" >Mantenimiento rutina</a></li>
           <li><a href="#tab_2-2" data-toggle="tab">Notificación</a></li>



         </ul>
<br>
<br>
<br>

<div class="tab-content">

      <div class="tab-pane active " id="tab_1-1">
				<div class="box-body col-md-6">


          <div class="form-group">
            <label for="select" class="">Tipo rutina</label>
            <select name="idtipo_rutina" class="form-control" id="select">
              @foreach($tiporu as $carac)
              <option value="{{$carac->idtipo_rutina}}">{{$carac->tipo_rutina}}</option>
          @endforeach
          </select>
          </div>

          <div class="form-group">
            <label for="select" class="">Equipo</label>
            <select name="idequipo" class="form-control" id="select">
              @foreach($equipo as $carac)
              <option value="{{$carac->idequipo}}">{{$carac->nombre_equipo}}</option>
          @endforeach
          </select>
          </div>

          <div class="form-group">
              <label>Fecha realizacion rutina</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="date" class="form-control pull-right" id="datepicker" name="fecha_realizacion_rutina" value="{{old('fecha_realizacion_rutina')}}">
              </div>
                  <!-- /.input group -->
          </div>
          <div class="form-group">

            <label for="direccion_fab">Observaciones rutina</label>
            <input type="text" class="form-control" name="observaciones_rutina" value="{{old('observaciones_rutina')}}">
          </div>





                    				</div>
	<div class="box-body col-md-6">


    <div class="form-group">
            <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>
<input type="text" class="form-control" name="estado_detalle_caracteristica_tecnica" value="{{old('estado_detalle_caracteristica_tecnica')}}" onkeypress="return valida(event)">
</div>
          <script>
          function valida(e){
              tecla = (document.all) ? e.keyCode : e.which;

              //Tecla de retroceso para borrar, siempre la permite
              if (tecla==8){
                  return true;
              }

              // Patron de entrada, en este caso solo acepta numeros
              patron =/[0-9]/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
          </script>

          <div class="form-group">

            <label for="direccion_fab">Responsable de area de rutina</label>
            <input type="text" class="form-control" name="responsable_area_rutina_mantenimiento" value="{{old('responsable_area_rutina_mantenimiento')}}">
          </div>



          <div class="form-group">
            <label for="select" class="">Permiso de trabajo</label>
            <select name="permisotrabajo_idpermiso_trabajo" class="form-control" id="select">
              @foreach($permisotrabajo as $carac)
              <option value="{{$carac->dpermiso_trabajo}}">{{$carac->num_permiso}}</option>
          @endforeach
          </select>
          </div>

          <div class="form-group">

            <label for="direccion_fab">Estado rutina</label>
            <input type="text" class="form-control" name="estado_rutina" value="{{old('estado_rutina')}}">
          </div>



</div>

<a href="{{route('ruman.index')}}">
  <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
<a onclick="mostar();" data-toggle="tab" aria-expanded="true">
<button type="button" name="adelante" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> </button>
</a>

				<!-- /.box-body -->



<script>
function mostar(){
  $('.nav-tabs a[href="#tab_2-2"]').tab('show');
}
function mostar2(){
  $('.nav-tabs a[href="#tab_1-1"]').tab('show');
}
</script>

</div>




      <div class="tab-pane" id="tab_2-2">

        <div class="form-group">
          <label for="direccion_fab">Descripcion notificacíon</label>
          <input type="text" class="form-control" name="descripcion_detalle_caracteristica_tecnica" value="{{old('descripcion_detalle_caracteristica_tecnica')}}">
        </div>

        <div class="form-group">
          <label for="direccion_fab">Fecha creación</label>
          <input type="date" class="form-control" name="fecha_creacion_noti" value="{{old('fecha_creacion_noti')}}">
        </div>
        <div class="form-group">
          <label for="direccion_fab">Fecha finalizacíon</label>
          <input type="date" class="form-control" name="fecha_finalizacion_noti" value="{{old('fecha_finalizacion_noti')}}">
        </div>
        <div class="form-group">
          <label for="direccion_fab">Hora finalizacíon</label>
          <input type="time" class="form-control" name="hora_finalizacion_noti" value="{{old('hora_finalizacion_noti')}}">
        </div>
        <div class="form-group">
          <label for="direccion_fab">Estado notificación</label>
          <input type="text" class="form-control" name="estado_notificacion" value="{{old('estado_notificacion')}}">
        </div>


        <a  onclick="mostar2();" data-toggle="tab">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
        </a>
        <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>



  </div>
        <!--  <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button> -->
        </div>
			</form>
		</div>

		<!-- /.box -->


	</div>

</div>
</section>
@endsection

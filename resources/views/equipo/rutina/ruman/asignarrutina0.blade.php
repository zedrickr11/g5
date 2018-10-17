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

<form role="form" method="POST" action="{{route('ruman.store')}}">
  {!!Form::open(array('url'=>'equipo/rutina/ruman','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <a href="{{route('actualizar',$idequipo)}}">
          <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button></a>
                          <button class="btn btn-primary" type="submit">Asignar rutinas <span class="glyphicon glyphicon-ok"></span> </button>
  <br>
  <br>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<input type="hidden" name="enviar" value="enviado">
<div class="nav-tabs-custom">
<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
  @php($cont=0)
  @php($pri=0)
    @foreach($ruman as $st)
@if($pri=0)
  <li class="active"><a href="#{{$st->idrutina_mantenimiento}}" data-toggle="tab">@if ($st->frecuencia_rutina==1)
  <i>Mensual</i>     @endif
  @if ($st->frecuencia_rutina==2)
<i>Bimestral</i>     @endif
  @if ($st->frecuencia_rutina==3)
<i>Trimestral</i>     @endif
@if ($st->frecuencia_rutina==6)
<i>Semestral</i>     @endif
@if ($st->frecuencia_rutina==12)
<i>Anual</i>     @endif  </a></li>
@else
<li><a href="#{{$st->idrutina_mantenimiento}}" data-toggle="tab">@if ($st->frecuencia_rutina==1)
<i>Mensual</i>     @endif
@if ($st->frecuencia_rutina==2)
<i>Bimestral</i>     @endif
@if ($st->frecuencia_rutina==3)
<i>Trimestral</i>     @endif
@if ($st->frecuencia_rutina==6)
<i>Semestral</i>     @endif
@if ($st->frecuencia_rutina==12)
<i>Anual</i>     @endif  </a></li>

@php($pri=1)
@endif
   @endforeach
</ul>



<div class="tab-content">
  <input type="hidden" name="idequipo" value="{{$idequipo}}">
  @foreach($ruman as $ru)

<div class=" tab-pane" id="{{$ru->idrutina_mantenimiento}}">
  <div class="box-body">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <input type="hidden" name="aceptar[{{$cont}}]" value="NO">
        <label for="direccion_fab" ><h4> Asignar rutina  ---<input class="iCheck-helper" width="30px"
        height="30px" type="checkbox" name="aceptar[{{$cont}}]" value="SI">---</h4></label>


      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <h3>Fecha</h3>
    <div class="form-group">
      <label for="direccion_fab" >Frecuencia</label>
      <br>
      @if ($ru->frecuencia_rutina==1)
      <i>Mensual</i>     @endif
      @if ($ru->frecuencia_rutina==2)
      <i>Bimestral</i>     @endif
      @if ($ru->frecuencia_rutina==3)
      <i>Trimestral</i>     @endif
      @if ($ru->frecuencia_rutina==6)
      <i>Semestral</i>     @endif
      @if ($ru->frecuencia_rutina==12)
      <i>Anual</i>     @endif
    </div>
    <input type="hidden" name="frecuencia_rutina[{{$cont}}]" style="width: 100%"  value="{{$ru->frecuencia_rutina}}">


      <div class="form-group">
        <label for="direccion_fab">Fecha inicio</label>
        <br>
        <input type="date" name="start[{{$cont}}]" style="width: 100%" min="{{date("Y-m-d")}}" value="{{date("Y-m-d")}}" required>
      </div>
      <div class="form-group">
        <label for="direccion_fab">Fecha finalización</label>
        <br>
        <input type="date" name="end[{{$cont}}]" style="width: 100%" min="{{date("Y-m-d")}}" value="{{date("Y-m-d")}}" required>
      </div>

      <div class="form-group">
        <label for="direccion_fab" >descripcion</label>
        <br>
        <input type="text" name="observaciones_rutina[{{$cont}}]" style="width: 100%" value="{{old('observaciones_rutina')}}">
      </div>
      <input type="hidden" name="idsubgrupo[{{$cont}}]" value="{{$ru->idsubgrupo}}">


    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <h3>Datos rutina</h3>

    <div class="form-group">
      <label for="select" class="">Tipo rutina</label>
      <br>


               <p>PREVENTIVO</p>


    </div>


  <div class="form-group">
          <label for="direccion_fab">Tiempo estimado rutina mantenimiento en horas</label>

          <input type="number" class="form-control" name="tiempo_estimado_rutina_mantenimiento[{{$cont}}]" value="{{$ru->tiempo_estimado_rutina_mantenimiento}}" onkeypress="return valida(event)">

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

          <input type="text" class="form-control" name="responsable_area_rutina_mantenimiento[{{$cont}}]" value="{{$ru->responsable_area_rutina_mantenimiento}}">

        </div>





        <div class="form-group">

          <label for="direccion_fab">Estado rutina</label>

          <p>{{$ru->estado_rutina}}</p>
          <input type="hidden" class="form-control" name="estado_rutina[{{$cont}}]" value="{{$ru->estado_rutina}}">

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
                  <td>{{$dets->caracteristica_rutina}}</td>
                  <input type="hidden" class="form-control" name="idcaracteristica_rutina[{{$cont}}][]" value="{{$det->idcaracteristica_rutina}}">
              @endif @endforeach
                  @foreach($subru as $dets)
                  @if ($dets->idsubgrupo_rutina==$det->idsubgrupo_rutina)
                  <td>{{$dets->subgrupo_rutina}}</td>
                  <input type="hidden" class="form-control" name="idsubgrupo_rutina[{{$cont}}][]" value="{{$det->idsubgrupo_rutina}}">

                  @endif @endforeach
                  @foreach($valrefru as $dets)
                  @if ($dets->idvalor_ref_rutina==$det->idvalor_ref_rutina)
                  <td>{{$dets->descripcion}}</td>
                  <input type="hidden" class="form-control" name="idvalor_ref_rutina[{{$cont}}][]" value="{{$det->idvalor_ref_rutina}}">

                  @endif @endforeach

                </tr>
                @endif

              @endforeach
          </tbody>
      </table>
   </div>





      </div>
    </div>
  </div>
  @php($cont=$cont+1)

  @endforeach
    <input type="hidden" name="cont" value="{{$cont}}">
</div>
</div>
</div>

</form>
    {!!Form::close()!!}



</section>
@endsection

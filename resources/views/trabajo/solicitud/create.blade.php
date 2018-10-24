@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Trabajo
<small>Solicitud de trabajo</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa 	fa-suitcase"></i> Trabajo</a></li>
<li class="active">Solicitud de trabajo</li>
</ol>
</section>
<section class="content">

<div class="row">
<!-- left column -->
<div class="col-md-12">
  <!-- form start -->
{!!Form::open(array('url'=>'trabajo/solicitud','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
<div class="nav-tabs-custom">
     <ul class="nav nav-tabs pull-right">

     <li ><a href="#tab_2-2" data-toggle="tab">Área de mantenimiento</a></li>
     <li><a href="#tab_3-3" data-toggle="tab">Tipo de trabajo</a></li>
     <li class="active"><a href="#tab_4-4" data-toggle="tab">ID</a></li>
     <li class="pull-left header"><i class="fa fa-tv"></i>Nueva solicitud de trabajo</li>
    </ul>
<div class="tab-content">
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
  <li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
</div>
@if (session()->has('solicituds'))
<div class="row">
<div id="alerta_eq" class="col-md-offset-3 col-md-6 alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>{{ session('solicituds') }}</strong>
</div>
</div>
@endif
    <div class="tab-pane" id="tab_2-2">
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <p class="text-danger">(*) Campos requeridos</p>
    </div>
      <div class="form-group">
      <label>Área de mantenimiento(*)</label>
      <select name="pidarea" class="form-control"  style="width:100%" id="pidarea" data-live-search="true">
           <option value="0" disabled selected></option>
      @foreach($areas as $are)
      <option value="{{$are->idarea_mantenimiento}}">{{$are->area}}</option>
      @endforeach
      </select>
      </div>



      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <div class="form-group">
      <button type="button" id="bt_adds" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
      </div>
      </div>
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
      <thead style="background-color:#2ab863">
        <th>Opciones</th>
        <th>Áreas de mantenimiento</th>

      </thead>
        <tfoot>

        </tfoot>
        <tbody>

        </tbody>
      </table>
       </div>
                <div class="box-body col-md-12">
       <a onclick="mostar();">
         <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
       </a>


       <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
  </div>
    </div>
  <div class="tab-pane" id="tab_3-3">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <p class="text-danger">(*) Campos requeridos</p>
  </div>
    <div class="form-group">
    <label>Tipo de trabajo(*)</label>
    <select name="pidinsumo"  style="width:100%"class="form-control select2" id="pidtipo" data-live-search="true">
         <option value="0" disabled selected></option>
    @foreach($tipos as $tip)
    <option value="{{$tip->idtipo_trabajo}}">{{$tip->tipo}}</option>
    @endforeach
    </select>
    </div>
    <div class="form-group">
    <label for="direccion_fab">Descripción del tipo de trabajo</label>
    <input type="text" class="form-control" name="descripcion" id="pdescripcion" value="">
    </div>

    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <div class="form-group">
    <button type="button" id="bt_add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
    </div>
    </div>
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <table id="detalle" class="table table-striped table-bordered table-condensed table-hover">
    <thead style="background-color:#2ab863">
      <th>Opciones</th>
      <th>Tipo de trabajo</th>
      <th>Descripción tipo de trabajo</th>

    </thead>
      <tfoot>

      </tfoot>
      <tbody>

      </tbody>
    </table>
     </div>
         <div class="box-body col-md-12">
           <a onclick="mostar3();">
             <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
           </a>
     <a onclick="mostar2();" data-toggle="tab" aria-expanded="true">
  <button type="button" name="adelante" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> </button>
  </a>
    </div>
  </div>


<div class="tab-pane active" id="tab_4-4">
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
  <p class="text-danger">(*) Campos requeridos</p>
</div>
  <div class="box-body col-md-6">
    <div class="form-group">
    <label for="direccion_fab">Número de solicitud(*)</label>
    <input type="text" class="form-control" name="numero" value="{{old('numero')}}">
    </div>
  <div class="form-group">
  <label for="estado">Compra de material</label>
  <select class="form-control" name="compra_material">
  <option value='1'>SI</option>
  <option value='0'>NO</option>
  </select>
  </div>
  <div class="form-group">
  <label for="direccion_fab">Solicitud dirigida</label>
  <input type="text" class="form-control" name="dirigido_solitud_trabajo" value="{{old('dirigido_solitud_trabajo')}}">
  </div>
  <div class="form-group">
  <label for="direccion_fab">Jefe</label>
  <input type="text" class="form-control" name="jefe_solitud_trabajo" value="{{old('jefe_solitud_trabajo')}}">
  </div>
  </div>
  <div class="box-body col-md-6">

    <div class="form-group">
    <label>Equipo</label>
    <select name="idequipo" class="form-control select2" style="width:100%" id="idequipo" data-live-search="true">
         <option value="0" disabled selected></option>
    @foreach($equipos as $eq)
    <option value="{{$eq->idequipo}}">{{$eq->equipo}}</option>
    @endforeach
    </select>
    </div>
  <div class="form-group">
    <label for="solicitudes">Contratar trabajo</label>
    <select class="form-control" name="contratar_trabajo"  >
      <option value="1">SI</option>
      <option value="0">NO</option>
    </select>
  </div>
  <div class="form-group">
  <label for="direccion_fab">Puesto dirigido</label>
  <input type="text" class="form-control" name="puesto_dirigido_solitud_trabajo" value="{{old('puesto_dirigido_solitud_trabajo')}}">
  </div>
  <div class="form-group">
  <label for="direccion_fab">Edificio</label>
  <input type="text" class="form-control" name="edificio_solitud_trabajo" value="{{old('edificio_solitud_trabajo')}}">
  </div>
  </div>

  <div class="box-body col-md-12">
    <div class="form-group">
      <label>Descripción de solicitud</label>
      <textarea type="text" rows="5" cols="92"  name="descripcion" value="{{old('descripcion')}}" class="form-control">
     </textarea>
    </div>
  </div>
    <div class="box-body col-md-12">
      <a href="{{route('solicitud.index')}}">
      <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
      </a>
       <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
  <a onclick="mostar();" data-toggle="tab" aria-expanded="true">
  <button type="button" name="adelante" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span> </button>
  </a>
  </div>
</div>
<!-- /.tab-pane -->
<div class="box-footer">

</div>

</div>
  <!-- /.tab-content -->
</div>
<!-- nav-tabs-custom -->
  {!!Form::close()!!}
</div>
<!-- /.box -->
</div>
</section>
@push ('scripts')
<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>

<script>
$('#pidtipo').select2({
  theme: "classic"
});
$('#idequipo').select2({
  theme: "classic"
});
$(document).ready(function(){
  $('#bt_add').click(function(){
    agregar();
  });
});
var cont=0;
total=0;
subtotal=[];
$("#guardar").hide();

function agregar()
{
  idtipo=$("#pidtipo").val();
  tipo=$("#pidtipo option:selected").text();
  descripcion=$("#pdescripcion").val();
  idestado=$("#pestado").val();
  estado=$("#pestado option:selected").text();
  if (idtipo!="" )
  {
 var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idtipo_trabajo[]" value="'+idtipo+'">'+tipo+'</td><td><input type="text" name="descrpcion_detalle_tipo_trabajo[]" value="'+descripcion+'" ></td></tr>';
 cont++;
 limpiar();
 evaluar();
 $('#detalle').append(fila);
  }
  else
  {
      alert("Error al ingresar el detalle del tipo, revise los datos del tipo");
  }
}
function limpiar(){
  $("#pdescripcion").val("");

}

function evaluar()
{
  if (idtipo!="")
  {
    $("#guardar").show();
  }
  else
  {
    $("#guardar").hide();
  }
 }

 function eliminar(index){

  $("#fila" + index).remove();
  evaluar();

}

//parte del area de mantenimiento
$('#pidarea').select2({
  theme: "classic"
});
$(document).ready(function(){
  $('#bt_adds').click(function(){
    agregar1();
  });
});
var conts=0;
total=0;
subtotal=[];
$("#guardars").hide();
function agregar1()
{
  idarea=$("#pidarea").val();
  area=$("#pidarea option:selected").text();


  if (idarea!="" )
  {
 var fila='<tr class="selected" id="fila'+conts+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+conts+');">X</button></td><td><input type="hidden" name="idarea_mantenimiento[]" value="'+idarea+'">'+area+'</td></tr>';
 conts++;
 limpiar();
 evaluar2();
 $('#detalles').append(fila);
  }
  else
  {
      alert("Error al ingresar el detalle del area, revise los datos del area");
  }
}
function limpiar(){
  $("#pcantidad").val("");

}

function evaluar2()
{
  if (idarea!="")
  {
    $("#guardars").show();
  }
  else
  {
    $("#guardars").hide();
  }
 }

 function eliminar(index){

  $("#fila" + index).remove();
  evaluar();

}
function mostar(){

  $('.nav-tabs a[href="#tab_3-3"]').tab('show');
}
function mostar2(){

  $('.nav-tabs a[href="#tab_2-2"]').tab('show');
}
function mostar3(){

  $('.nav-tabs a[href="#tab_4-4"]').tab('show');
}
</script>
@endpush

@endsection

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Trabajo
<small>Permiso de trabajo</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa 	fa-suitcase"></i> Trabajo</a></li>
<li class="active">Seguimiento de trabajo</li>
</ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Nuevo permiso de trabajo</h3>
</div>

<!-- /.box-header -->
<!-- form start -->
<form role="form" method="POST" action="{{route('permiso.store')}}" >
{!! csrf_field() !!}
      <div class="box-body col-md-12">
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
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <p class="text-danger">(*) Campos requeridos</p>
    </div>
<div class="box-body col-md-6">
  <div class="form-group">
<label for="direccion_fab">No. de permiso</label>
<input type="text" class="form-control" readonly name="num_permiso" value="{{$numeropermiso->num_permiso+1}} ">

</div>
<div class="form-group">
<label for="direccion_fab">Descripción(*)</label>
<input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
</div>
</div>

<div class="box-body col-md-6">
  <div class="form-group">
        <label for="solicitud">No. de solicitud(*)</label>
        <select name="idsolitud_trabajo" id="idsolitud_trabajo" style="width:100%" class="form-control selectpicker" data-live-search="true">
             <option value="0" disabled selected>=== Selecciona un número de solicitud===</option>
          @foreach($solicitudes as $s)
            <option value="{{$s->idsolitud_trabajo}}">{{$s->num}}</option>
             @endforeach
          </select>
      </div>

</div>

<div class="box-body col-md-12">
<div class="form-group">
<label>Tipo de trabajo(*)</label>
<select name="pidtipo" class="form-control select2" style="width:100%" id="pidtipo" data-live-search="true">
         <option value="0" disabled selected>=== Seleccione un tipo de trabajo===</option
@foreach($tipos as $tip)
<option value="{{$tip->idtipo_trabajo}}">{{$tip->tipo}}</option>
@endforeach
</select>
</div>
<div class="form-group">
<label for="direccion_fab">Descripción del tipo de trabajo</label>
<input type="text" class="form-control" name="pdescripcion" id="pdescripcion" value="">
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
  <th>Descripción </th>
</thead>
  <tfoot>

  </tfoot>
  <tbody>

  </tbody>
</table>
 </div>
</div>
<div class="box-body col-md-12">

  <div class="form-group">
  <label>Naturaleza de peligro(*)</label>
  <select name="pidnaturaleza" class="form-control select2" style="width:100%"  id="pidnaturaleza" data-live-search="true">
       <option value="0" disabled selected>=== Seleccione un número de solicitud===</option>
  @foreach($naturalezas as $na)
  <option value="{{$na->idnaturaleza_peligro}}">{{$na->naturaleza}}</option>
  @endforeach
  </select>
  </div>

  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
  <div class="form-group">
  <button type="button" id="bt_addn" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
  </div>
  </div>
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
  <table id="detallen" class="table table-striped table-bordered table-condensed table-hover">
  <thead style="background-color:#2ab863">
    <th>Opciones</th>
    <th>Naturaleza de peligro</th>


  </thead>
    <tfoot>

    </tfoot>
    <tbody>

    </tbody>
  </table>
   </div>
</div>

<div class="box-body col-md-6">
  <div class="form-group">
  <label>Precaución responsable(*)</label>
  <select name="pidresponsable" class="form-control select2" style="width:100%" id="pidresponsable" data-live-search="true">
           <option value="0" disabled selected>=== Seleccione una precaución de responsable===</option>
  @foreach($responsables as $r)
  <option value="{{$r->idprecaucion_responsable}}">{{$r->responsable}}</option>
  @endforeach
  </select>
  </div>

  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
  <div class="form-group">
  <button type="button" id="bt_addr" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
  </div>
  </div>
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
  <table id="detaller" class="table table-striped table-bordered table-condensed table-hover">
  <thead style="background-color:#2ab863">
    <th>Opciones</th>
    <th>Precauciones para el responsable área </th>


  </thead>
    <tfoot>

    </tfoot>
    <tbody>

    </tbody>
  </table>
   </div>
</div>
<div class="box-body col-md-6">
  <div class="form-group">
  <label>Precaución ejecutante(*)</label>
  <select name="pidejecutante" class="form-control select2" style="width:100%" id="pidejecutante" data-live-search="true">
           <option value="0" disabled selected>=== Seleccione una precaución ejecutante==</option>
  @foreach($ejecutantes as $e)
  <option value="{{$e->idprecaucion_ejecutante}}">{{$e->ejecutante}}</option>
  @endforeach
  </select>
  </div>

  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
  <div class="form-group">
  <button type="button" id="bt_addj" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
  </div>
  </div>
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
  <table id="detallej" class="table table-striped table-bordered table-condensed table-hover">
  <thead style="background-color:#2ab863">
    <th>Opciones</th>
    <th>Precauciones para el ejecutante</th>


  </thead>
    <tfoot>

    </tfoot>
    <tbody>

    </tbody>
  </table>
   </div>
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">


<a href="{{route('permiso.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> </button>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
</div>
</form>
</div>
<!-- /.box -->
</div>
</div>
</section>
<script src="{{asset('ajax/jquery.min.js')}}"></script>
<script src="{{asset('ajax/bootstrap.min.js')}}"></script>
<script src="{{asset('ajax/select2.min.js')}}"></script>
<script>
$('#idsolitud_trabajo').select2({
  theme: "classic"
});
</script>

<!--Detalle Permiso tipo de trabajo-->
<script>
$('#pidtipo').select2({
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

  if (idtipo!="" )
  {
 var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idtipo_trabajo[]" value="'+idtipo+'">'+tipo+'</td><td><input type="text" name="descripcion_detalle_tipo_trabajo_permiso[]" value="'+descripcion+'" ></td></tr>';
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
  $("#pcantidad").val("");

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
</script>

<!--Detalle Naturaleza-->
<script>
$('#pidnaturaleza').select2({
  theme: "classic"
});
$(document).ready(function(){
  $('#bt_addn').click(function(){
    agregarn();
  });
});
var contn=0;
total1=0;
subtotal1=[];
$("#guardarn").hide();
function agregarn()
{
  idnaturaleza=$("#pidnaturaleza").val();
  naturaleza=$("#pidnaturaleza option:selected").text();

  if (idnaturaleza!="" )
  {
var fila='<tr class="selected" id="fila'+contn+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+contn+');">X</button></td><td><input type="hidden" name="idnaturaleza_peligro[]" value="'+idnaturaleza+'">'+naturaleza+'</td></tr>';
 contn++;
 limpiar();
 evaluar2();
 $('#detallen').append(fila);
  }
  else
  {
      alert("Error al ingresar el detalle de naturaleza, revise los datos de la naturaleza");
  }
}
function limpiar(){
  $("#pcantidad").val("");

}

function evaluar2()
{
  if (idnaturaleza!="")
  {
    $("#guardarn").show();
  }
  else
  {
    $("#guardarn").hide();
  }
 }


  function eliminar(index){

   $("#fila" + index).remove();
   evaluar2();

 }
</script>

<!--Detalle de resoponsable-->
<script>
$('#pidresponsable').select2({
  theme: "classic"
});
$(document).ready(function(){
  $('#bt_addr').click(function(){
    agregarr();
  });
});
var contr=0;
total2=0;
subtotal2=[];
$("#guardarr").hide();

function agregarr()
{
  idresponsable=$("#pidresponsable").val();
  responsable=$("#pidresponsable option:selected").text();


  if (idresponsable!="" )
  {
  var fila='<tr class="selected" id="fila'+contr+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+contr+');">X</button></td><td><input type="hidden" name="idprecaucion_responsable[]" value="'+idresponsable+'">'+responsable+'</td></tr>';
 contr++;
 limpiar();
 evaluar3();
 $('#detaller').append(fila);
  }
  else
  {
      alert("Error al ingresar el detalle de responsable, revise los datos de la precaución");
  }
}
function limpiar(){

}
function evaluar3()
{
  if (idresponsable!="")
  {
    $("#guardarr").show();
  }
  else{
    $("#guardarr").hide();
  }
 }
  function eliminar(index){
   $("#fila" + index).remove();
   evaluar3();
 }
</script>

<!--Detalle Ejecutante -->
<script>
$('#pidejecutante').select2({
  theme: "classic"
});
$(document).ready(function(){
  $('#bt_addj').click(function(){
    agregarj();
  });
});
var contj=0;
total3=0;
subtotal3=[];
$("#guardarj").hide();

function agregarj()
{
  idejecutante=$("#pidejecutante").val();
  ejecutante=$("#pidejecutante option:selected").text();


  if (idejecutante!="" )
  {
  var fila='<tr class="selected" id="fila'+contj+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+contj+');">X</button></td><td><input type="hidden" name="idprecaucion_ejecutante[]" value="'+idejecutante+'">'+ejecutante+'</td></tr>';
 contj++;
 limpiar();
 evaluar4();
 $('#detallej').append(fila);
  }
  else
  {
      alert("Error al ingresar el detalle de ejecutante, revise los datos de la precaución");
  }
}
function limpiar(){

}
function evaluar4()
{
  if (idejecutante!="")
  {
    $("#guardarj").show();
  }
  else{
    $("#guardarj").hide();
  }
 }
  function eliminar(index){
   $("#fila" + index).remove();
   evaluar4();
 }
</script>


@endsection

@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Trabajo
  <small>Solicitud de Trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Solicitud de trabajo</li>
  </ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Editar solicitud de trabajo</h3>
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
<form role="form" method="POST" action="{{route('solicitud.update',$solicitudes->idsolitud_trabajo)}}" >
{!!method_field('PUT')!!}
{!!csrf_field()!!}
<div class="box-body col-md-6">
  <div class="form-group">
  <label for="direccion_fab">No de solicitud</label>
  <input type="text" class="form-control" name="numero" value="{{$solicitudes->numero}}">
  </div>

<div class="form-group">
  <label for="estado">Compra de material</label>
  <select class="form-control" name="compra_material">
    @if ($solicitudes->compra_material==1)
      <option value="1" selected>SI</option>
      <option value="0" >NO</option>
    @else
      <option value="1" >SI</option>
      <option value="0" selected>NO</option>
    @endif
  </select>
</div>

<div class="form-group">
<label for="direccion_fab">Solicitud dirigida</label>
<input type="text" class="form-control" name="dirigido_solitud_trabajo" value="{{$solicitudes->dirigido_solitud_trabajo}}">
</div>
<div class="form-group">
<label for="direccion_fab">Jefe</label>
<input type="text" class="form-control" name="edificio_solitud_trabajo" value="{{$solicitudes->edificio_solitud_trabajo}}">
</div>

</div>
<div class="box-body col-md-6">

<div class="form-group">
<label>Fecha de solicitud</label>
<div class="input-group date">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="date" class="form-control pull-right" id="datepicker" name="fecha" value="{{$solicitudes->fecha}}">
</div>
</div>


<div class="form-group">
  <label for="solicitudes">Contratar trabajo</label>
  <select class="form-control" name="contratar_trabajo"  >
    @if ($solicitudes->contratar_trabajo==1)
      <option value="1" selected>SI</option>
      <option value="0" >NO</option>
    @else
      <option value="1" >SI</option>
      <option value="0" selected>NO</option>
    @endif
  </select>
</div>


<div class="form-group">
<label for="direccion_fab">Puesto dirigido</label>
<input type="text" class="form-control" name="puesto_dirigido_solitud_trabajo" value="{{$solicitudes->puesto_dirigido_solitud_trabajo}}">
</div>
<div class="form-group">
<label for="direccion_fab">Edificio</label>
<input type="text" class="form-control" name="edificio_solitud_trabajo" value="{{$solicitudes->edificio_solitud_trabajo}}">
</div>
</div>
<div class="box-body col-md-12">
  <div class="form-group">
  <label for="direccion_fab">Descripción</label>
  <input type="text" class="form-control" name="descripcion" value="{{$solicitudes->descripcion}}">
  </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('solicitud.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>
</div>
</form>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

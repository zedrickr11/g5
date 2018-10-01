@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
  <h1>
  Detalles
  <small>Detalle Area de Mantenimiento</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-object-ungroup"></i> Detalles</a></li>
  <li class="active">Detalle de Area</li>
  </ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Editar Detalle</h3>
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
<form role="form" method="POST" action="{{route('detallearea.update',$detalleareas->iddetalle_area_matenimiento)}}" >
{!!method_field('PUT')!!}
{!!csrf_field()!!}
<div class="box-body col-md-12">
  <div class="form-group">
    <label>Area de Mantenimiento</label>
    <select name="area_mantenimiento_idarea_mantenimiento" class="form-control" >
@foreach($areas as $a)
      @if ($a->idarea_mantenimiento==$detalleareas->area_mantenimiento_idarea_mantenimiento)
    <option value="{{$a->idarea_mantenimiento}}" selected>{{$a->area_mantenimiento}}</option>
    @else
    <option value="{{$a->idarea_mantenimiento}}">{{$a->area_mantenimiento}}</option>
    @endif
     @endforeach
</select>
</div>
<div class="form-group">
  <label>No de Solicitud</label>
  <select name="idnaturaleza_peligro" class="form-control" >
@foreach($solicitudes as $s)
    @if ($s->idsolitud_trabajo==$detalleareas->solitud_trabajo_idsolitud_trabajo)
  <option value="{{$s->idsolitud_trabajo}}" selected>{{$s->numero}}</option>
  @else
  <option value="{{$s->idsolitud_trabajo}}">{{$s->numero}}</option>
  @endif
   @endforeach
</select>
</div>

  <div class="form-group">
    <label for="estado">Estado</label>
    <select class="form-control" name="estado_detalle_area_matenimiento">
      @if ($detalleareas->estado_detalle_area_matenimiento==1)
        <option value="1" selected>SI</option>
        <option value="0" >NO</option>
      @else
        <option value="1" >SI</option>
        <option value="0" selected>NO</option>
      @endif
    </select>
  </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('detallearea.index')}}">
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

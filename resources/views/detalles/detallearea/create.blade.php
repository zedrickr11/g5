@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Detalles
<small>Detalle Area de Mantenimiento</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-object-ungroup"></i> Detalles </a></li>
<li class="active">Detalle Area</li>
</ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Nuevo Detalle de Area</h3>
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
<form role="form" method="POST" action="{{route('detallearea.store')}}" >
{!! csrf_field() !!}
<div class="box-body col-md-12">
<div class="form-group">
  <label>Area de Mantenimiento</label>
  <select name="area_mantenimiento_idarea_mantenimiento" class="form-control">
    @foreach ($areas as $a)
      <option value="{{ $a->idarea_mantenimiento}}">{{ $a->area_mantenimiento}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label>No de Solicitud</label>
  <select name="solitud_trabajo_idsolitud_trabajo" class="form-control">
    @foreach ($solicitudes as $s)
      <option value="{{ $s->idsolitud_trabajo}}">{{ $s->numero}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="estado">Estado</label>
  <select class="form-control" name="estado_detalle_area_matenimiento">
    <option value="1">SI</option>
    <option value="0">NO</option>
  </select>
</div>


</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('detallearea.index')}}">
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
@endsection

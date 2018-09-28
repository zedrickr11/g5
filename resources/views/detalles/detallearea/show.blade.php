@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Detalles
<small>Detalle Area</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-object-ungroup"></i>Detalles</a></li>
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
<h3 class="box-title">Detalles</h3>
</div>
<!-- /.box-header -->
<!-- form start -->
<div class="box-body col-md-12">
<div class="form-group">
<label for="direccion_fab">Codigo de Detalle</label>
<p>{{$detalleareas->iddetalle_area_matenimiento}}</p>
</div>
<div class="form-group">
  <label for="direccion_fab">Area de Mantenimiento</label>
@foreach($areas as $a)
    @if ($a->idarea_mantenimiento==$detalleareas->area_mantenimiento_idarea_mantenimiento)
    <p>{{$a->area_mantenimiento}}</p>
  @endif
  @endforeach
</div>
<div class="form-group">
  <label for="direccion_fab">No de Solicitud</label>
@foreach($solicitudes as $s)
    @if ($s->idsolitud_trabajo==$detalleareas->solitud_trabajo_idsolitud_trabajo)
    <p>{{$s->numero}}</p>
  @endif
  @endforeach
</div>
<div class="form-group">
  <label for="estado">Estado <br>
  @if ($detalleareas->estado_detalle_area_matenimiento==1)
    <input type="checkbox" checked disabled>
  @else
    <input  type="checkbox" disabled>
  @endif
  </label>

</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('detallearea.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

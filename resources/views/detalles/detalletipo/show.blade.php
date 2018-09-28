@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Detalles
<small>Detalle Tipo Trabajo  </small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-object-ungroup"></i>Detalles</a></li>
<li class="active">Detalle Tipo</li>
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
<label for="direccion_fab">Codigo de detalle</label>
<p>{{$detalletipos->iddetalle_tipo_trabajo}}</p>
</div>
<div class="form-group">
  <label for="direccion_fab">No de Soliitud</label>
@foreach($solicitudes as $s)
    @if ($s->idsolitud_trabajo==$detalletipos->solitud_trabajo_idsolitud_trabajo)
    <p>{{$s->numero}}</p>
  @endif
  @endforeach
</div>
<div class="form-group">
  <label for="direccion_fab">Tipo de trabajo</label>
@foreach($tipos as $t)
    @if ($t->idtipo_trabajo==$detalletipos->tipo_trabajo_idtipo_trabajo)
    <p>{{$t->nombre_tipo}}</p>
  @endif
  @endforeach
</div>
<div class="form-group">
<label for="direccion_fab">Descripción</label>
<p>{{$detalletipos->descrpcion_detalle_tipo_trabajo}}</p>
</div>
<div class="form-group">
  <label for="estado">Estado <br>
  @if ($detalletipos->estado==1)
    <input type="checkbox" checked disabled>
  @else
    <input  type="checkbox" disabled>
  @endif
  </label>

</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('detalletipo.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

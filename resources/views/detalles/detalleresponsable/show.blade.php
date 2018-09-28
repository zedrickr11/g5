@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Detalles
<small>Detalle Precaución Responsable</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-object-ungroup"></i>Detalles</a></li>
<li class="active">Detalle Precaución</li>
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
<p>{{$responsables->iddetalle_precaucion_responsable}}</p>
</div>
<div class="form-group">
  <label for="direccion_fab">Precaucion Responsable</label>
@foreach($precauciones as $n)
    @if ($n->idprecaucion_responsable==$responsables->idprecaucion_responsable)
    <p>{{$n->precaucion_responsable}}</p>
  @endif
  @endforeach
</div>
<div class="form-group">
  <label for="direccion_fab">No de Permiso</label>
@foreach($permisos as $p)
    @if ($p->idpermiso_trabajo==$responsables->idpermiso_trabajo)
    <p>{{$p->num_permiso}}</p>
  @endif
  @endforeach
</div>
<div class="form-group">
  <label for="estado">Estado <br>
  @if ($responsables->	estado_detalle_precaucion_responsable==1)
    <input type="checkbox" checked disabled>
  @else
    <input  type="checkbox" disabled>
  @endif
  </label>

</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('detalleresponsable.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

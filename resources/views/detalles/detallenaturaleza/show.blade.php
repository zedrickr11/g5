@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
<h1>
Detalles
<small>Detalle Naturaleza Peligro</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-object-ungroup"></i>Detalles</a></li>
<li class="active">Detalle Naturaleza</li>
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
<p>{{$detallenaturalezas->iddetalle_naturaleza_peligro}}</p>
</div>
<div class="form-group">
  <label for="direccion_fab">Naturaleza del peligro</label>
@foreach($naturalezas as $n)
    @if ($n->idnaturaleza_peligro==$detallenaturalezas->idnaturaleza_peligro)
    <p>{{$n->naturaleza_peligro}}</p>
  @endif
  @endforeach
</div>
<div class="form-group">
  <label for="direccion_fab">No de Permiso</label>
@foreach($permisos as $p)
    @if ($p->idpermiso_trabajo==$detallenaturalezas->idpermiso_trabajo)
    <p>{{$p->num_permiso}}</p>
  @endif
  @endforeach
</div>
<div class="form-group">
  <label for="estado">Estado <br>
  @if ($detallenaturalezas->estado_detalle_naturaleza_peligro==1)
    <input type="checkbox" checked disabled>
  @else
    <input  type="checkbox" disabled>
  @endif
  </label>

</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<a href="{{route('detallenaturaleza.index')}}">
<button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
</a>
</div>
</div>
<!-- /.box -->
</div>
</div>
</section>
@endsection

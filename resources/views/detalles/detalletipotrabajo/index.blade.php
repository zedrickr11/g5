@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
  Detalles
  <small>Detalle Tipo de Trabajo Permiso</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-object-ungroup"></i> Detalles</a></li>
  <li class="active">Detalle Tipo Permiso</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Listado de Detalles <a href="detalletipotrabajo/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
</div>
<!-- /.box-header -->
<div class="box-body">
@include('detalles.detalletipotrabajo.search')
<div class="col-md-12">
<div class="table-responsive">
<table  class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>No de permiso</th>
<th>Tipo de trabajo</th>
<th>Descripcion</th>
<th>Estado</th>
<th>Opciones</th>
</tr>
</thead>
<tbody>
@foreach ($detpermisos as $de)
<tr>
<td>{{ $de->iddetalle_tipo_trabajo_permiso}}</td>
<td>{{ $de->nu}}</td>
<td>{{ $de->no}}</td>
<td>{{ $de->descripcion_detalle_tipo_trabajo_permiso}}</td>
<td>
  @if ($de->estado_detalle_tipo_trabajo_permiso==1)
    <input type="checkbox" checked disabled>
  @else
    <input type="checkbox" disabled>
  @endif


</td>

<td>

<a href="{{route('detalletipotrabajo.edit',$de->iddetalle_tipo_trabajo_permiso)}}">
<button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
</a>
<a href="{{route('detalletipotrabajo.show',$de->iddetalle_tipo_trabajo_permiso)}}">
<button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
</a>
<form style="display: inline" method="POST" action="{{route('detalletipotrabajo.destroy', $de->iddetalle_tipo_trabajo_permiso)}}">
{!!method_field('DELETE')!!}
{!!csrf_field()!!}
<button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
</form>
</td>
</tr>
@endforeach
</tbody>
<tfoot>
</tfoot>
</table>
{!! $detpermisos->links() !!}
</div>
</div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /.box -->
</div>
<!-- /.col -->
</div>
</section>
@endsection

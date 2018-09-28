@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
  Detalles
  <small>Detalle Precaucion Ejecutante</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-object-ungroup"></i> Detalles</a></li>
  <li class="active">Detalle Precaucion</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Listado de Precauciones <a href="detalleejecutante/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
</div>
<!-- /.box-header -->
<div class="box-body">
@include('detalles.detalleejecutante.search')
<div class="col-md-12">
<div class="table-responsive">
<table  class="table table-bordered table-striped">
<thead>
  <tr>
  <th>Id</th>
    <th>Precaucion Ejecutante</th>
  <th>No de Permiso</th>
  <th>Estado</th>
  <th>Opciones</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($ejecutantes as $e)
  <tr>
  <td>{{ $e->iddetalle_precaucion_ejecutante }}</td>
  <td>{{ $e->pre }}</td>
  <td>{{ $e->nu }}</td>
  <td>
    @if ($e->estado_detalle_precaucion_ejecutante==1)
      <input type="checkbox" checked disabled>
    @else
      <input type="checkbox" disabled>
    @endif


  </td>

<td>
  <a href="{{route('detalleejecutante.edit',$e->iddetalle_precaucion_ejecutante)}}">
  <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
  </a>
  <a href="{{route('detalleejecutante.show',$e->iddetalle_precaucion_ejecutante)}}">
  <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
  </a>
  <form style="display: inline" method="POST" action="{{route('detalleejecutante.destroy', $e->iddetalle_precaucion_ejecutante)}}">
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
{!! $ejecutantes->links() !!}
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

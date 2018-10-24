@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
  Trabajo
  <small>Seguimiento de trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa 	fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Seguimiento de trabajo</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Listado de  seguimientos  <a href="{{route('seguimiento.create')}}"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
@include('trabajo.seguimiento.search')
<div class="col-md-12">
<div class="table-responsive">
<table  class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Responsable</th>
<th>No. de solicitud</th>
<th>Fecha</th>
<th>Opciones</th>
</tr>
</thead>
<tbody>
@foreach ($seguimientos as $seg)
<tr>
<td>{{ $seg->idseguimiento}}</td>
<td>{{ $seg->responsable_seguimiento}}</td>
<td>{{ $seg->num}}</td>
<td>{{ $seg->fecha_seguimiento}}</td>

<td>
<a href="{{route('seguimiento.edit',$seg->idseguimiento)}}">
<button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
</a>
<a href="{{route('seguimiento.show',$seg->idseguimiento)}}">
<button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
</a>

<!--<form style="display: inline" method="POST" action="{{route('seguimiento.destroy',$seg->idseguimiento)}}">
{!!method_field('DELETE')!!}
{!!csrf_field()!!}
<button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
</form>-->
</td>
</tr>
@endforeach
</tbody>
<tfoot>
</tfoot>
</table>

{!! $seguimientos->appends(['searchText'=>request('searchText')])->links() !!}
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
@push ('scripts')
<script>
$('#liSolicitud').addClass("treeview active");


$('#liSeguimiento').addClass("active");

</script>
@endpush
@endsection

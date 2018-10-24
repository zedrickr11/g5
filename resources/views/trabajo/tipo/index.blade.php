@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
  Trabajo
  <small>Tipo de trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa 	fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Tipo de trabajo</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Listado de tipos de trabajos <a href="{{route('tipo.create')}}"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
@include('trabajo.tipo.search')
<div class="col-md-12">
<div class="table-responsive">
<table  class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Tipo de trabajo</th>
<th>Opciones</th>
</tr>
</thead>
<tbody>
@foreach ($tipos as $t)
<tr>
<td>{{ $t->idtipo_trabajo}}</td>
<td>{{ $t->nombre_tipo}}</td>
<td>
<a href="{{route('tipo.edit', $t->idtipo_trabajo)}}">
<button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
</a>
<a href="{{route('tipo.show',$t->idtipo_trabajo)}}">
<button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
</a>
<!--<form style="display: inline" method="POST" action="{{route('tipo.destroy',$t->idtipo_trabajo)}}">
{!!method_field('DELETE')!!}
{!!csrf_field()!!}
<button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
</form> -->
</td>
</tr>
@endforeach
</tbody>
<tfoot>
</tfoot>
</table>
 {!! $tipos->appends(['searchText'=>request('searchText')])->links() !!}
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


$('#liTipotrabajo').addClass("active");

</script>
@endpush
@endsection

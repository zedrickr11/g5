@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
  Trabajo
  <small>Permiso de Trabajo</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa 	fa-suitcase"></i> Trabajo</a></li>
  <li class="active">Permiso de Trabajo</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Listado de permisos <a href="permiso/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
</div>
<!-- /.box-header -->
<div class="box-body">
@include('trabajo.permiso.search')
<div class="col-md-12">
<div class="table-responsive">
<table  class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Numero de Permiso</th>
<th>Descripción</th>
<th>No de solicitud</th>
<th>fecha</th>
<th>Opciones</th>
</tr>
</thead>
<tbody>
@foreach ($permisos as $per)
<tr>
<td>{{ $per->idpermiso_trabajo}}</td>
<td>{{ $per->num_permiso}}</td>
<td>{{ $per->descripcion}}</td>
<td>{{ $per->num}}</td>
<td>{{ $per->fecha}}</td>

<td>
<a href="{{route('permiso.edit', $per->idpermiso_trabajo)}}">
<button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
</a>
<a href="{{route('permiso.show',$per->idpermiso_trabajo)}}">
<button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
</a>
<form style="display: inline" method="POST" action="{{route('permiso.destroy',$per->idpermiso_trabajo)}}">
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
{!!$permisos->links() !!}
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
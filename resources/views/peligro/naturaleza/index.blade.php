@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
  Peligro
  <small>Naturaleza Peligro</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-times-circle-o"></i> Peligro</a></li>
  <li class="active">Naturaleza</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Listado de peligros <a href="naturaleza/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
</div>
<!-- /.box-header -->
<div class="box-body">
@include('peligro.naturaleza.search')
<div class="col-md-12">
<div class="table-responsive">
<table  class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Naturaleza del peligro</th>
<th>Opciones</th>
</tr>
</thead>
<tbody>
@foreach ($naturalezas as $n)
<tr>
<td>{{ $n->idnaturaleza_peligro}}</td>
<td>{{ $n->naturaleza_peligro}}</td>
<td>
<a href="{{route('naturaleza.edit',$n->idnaturaleza_peligro)}}">
<button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
</a>
<a href="{{route('naturaleza.show',$n->idnaturaleza_peligro)}}">
<button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
</a>
<form style="display: inline" method="POST" action="{{route('naturaleza.destroy', $n->idnaturaleza_peligro)}}">
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
{!! $naturalezas->links() !!}
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

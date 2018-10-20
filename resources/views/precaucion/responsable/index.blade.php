@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
<h1>
Precaución
<small>Precaución responsable</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-exclamation-triangle"></i> Precaución</a></li>
<li class="active">Responsable</li>
</ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Listado de precauciones de responsable <a href="responsable/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
@include('precaucion.responsable.search')
<div class="col-md-12">
<div class="table-responsive">
<table  class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Precaución</th>
<th>Opciones</th>
</tr>
</thead>
<tbody>
@foreach ($responsables as $r)
<tr>
<td>{{ $r->idprecaucion_responsable}}</td>
<td>{{ $r->precaucion_responsable}}</td>
<td>
<a href="{{route('responsable.edit',$r->idprecaucion_responsable)}}">
<button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
</a>
<a href="{{route('responsable.show',$r->idprecaucion_responsable)}}">
<button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
</a>
<form style="display: inline" method="POST" action="{{route('responsable.destroy', $r->idprecaucion_responsable)}}">
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
{!! $responsables->appends(['searchText'=>request('searchText')])->links() !!}
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

@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
  Rutinas
  <small>Listado de rutinas</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa 	fa-wrench"></i> Rutinas</a></li>
  <li class="active">Listado de rutinas</li>
  </ol>
</section>
<section class="content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Listado de rutinas </h3>
</div>
<!-- /.box-header -->
<div class="box-body">

<div class="col-md-12">
<div class="table-responsive">
<table  class="table table-bordered table-striped" style="table-layout:fixed;word-wrap:break-word;">
<thead>
<tr>
  <th>Tipo de rutina</th>
<th>Frecuencia</th>
<th>Fecha realización</th>
<th>Estado de rutina</th>
<th>Ver rutina</th>

</tr>
</thead>
<tbody>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td>

  <a href="" target="_blank">
    <button type="button" class="btn btn-success btn-sm" name="button"><span class="fa fa-edit"></span></button>
  </a>


<a href="">
<button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
</a>
<!--

{!!method_field('DELETE')!!}
{!!csrf_field()!!}
<button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span> </button>
</form>
-->
</td>
</tr>

</tbody>
<tfoot>
</tfoot>
</table>


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

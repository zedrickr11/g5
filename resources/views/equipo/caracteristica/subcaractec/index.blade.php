@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Ficha Técnica
      <small>Subgrupo caracteristica tecnica</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i>   Ficha Técnica</a></li>
      <li class="active">Subgrupo caracteristica tecnica</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de subgrupo caracteristica tecnica <a href="subcaractec/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
			  		<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.caracteristica.subcaractec.search')
                <br>
                <br>
                <br>
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre de subgrupo caracteristica tecnica</th>


                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($subcaractec as $cat)
            <tr>
              <td>{{ $cat->idsubgrupo_carac_tecnica}}</td>
              <td>{{ $cat->nombre_subgrupo_carac_tecnica}}</td>


              <td>

                  <a href="{{route('subcaractec.edit',$cat->idsubgrupo_carac_tecnica)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></button>
                  </a>
                  <a href="{{route('subcaractec.show',$cat->idsubgrupo_carac_tecnica)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></button>
                  </a>
                  <form style="display: inline" method="POST" action="{{route('subcaractec.destroy', $cat->idsubgrupo_carac_tecnica)}}">
                  {!!method_field('DELETE')!!}
                  {!!csrf_field()!!}
                    <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></button>
                  </form>


              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
              </div>

{!! $subcaractec->links() !!}
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

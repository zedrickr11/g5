@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Ficha Técnica
        <small>Caracteristica técnica</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-edit"></i> Ficha Técnica</a></li>
        <li class="active">Caracteristica técnica</li>
      </ol>
	</section>
	<section class="content">


<div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">

			  <h3 class="box-title">Listado de Caracteristica Técnica<a href="caractec/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
			  	<!--	<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a> -->
          </h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
                  @include('equipo.caracteristica.caractec.search')
                  <br>
                  <br>
                  <br>

              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre de caracteristica técnica</th>


                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($caract_tec as $cat)
            <tr>
              <td>{{ $cat->idcaracteristica_tecnica}}</td>
              <td>{{ $cat->nombre_caracteristica_tecnica}}</td>


              <td>

                  <a href="{{route('caractec.edit',$cat->idcaracteristica_tecnica)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></button>
                  </a>
                  <a href="{{route('caractec.show',$cat->idcaracteristica_tecnica)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></button>
                  </a>

                  <!--
                  <form style="display: inline" method="POST" action="{{route('caractec.destroy', $cat->idcaracteristica_tecnica)}}">
                  {!!method_field('DELETE')!!}
                  {!!csrf_field()!!}
                    <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></button>
                  </form>
                -->

              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
              </div>
      {!! $caract_tec->links() !!}

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
$('#liEq').addClass("treeview active");
$('#liCarac').addClass("treeview active");
$('#liTecnicas').addClass("active");

</script>
@endpush
@endsection
 
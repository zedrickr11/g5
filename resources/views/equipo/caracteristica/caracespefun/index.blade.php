@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Ficha Técnica
      <small>Caracteristica especial</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i>   Ficha Técnica</a></li>
      <li class="active">Caracteristica especial</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de Caracteristica especial <a href="caracespefun/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
			  </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.caracteristica.caracespefun.search')
              <br>
              <br>
              <br>
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre de caracteristica especial funcionamiento</th>


                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($caracespefun as $cat)
            <tr>
              <td>{{ $cat->idcaracteristica_especial}}</td>
              <td>{{ $cat->nombre_caracteristica_especial}}</td>


              <td>

                  <a href="{{route('caracespefun.edit',$cat->idcaracteristica_especial)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></button>
                  </a>




              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
              </div>

    {!! $caracespefun->links() !!}
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
$('#liEspe').addClass("treeview active");
$('#liCesp').addClass("active");

</script>
@endpush
@endsection

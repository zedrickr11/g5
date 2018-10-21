@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Ficha Técnica
      <small>Valor referencia técnica</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i>   Ficha Técnica</a></li>
      <li class="active">Valor referencia técnica</li>
      </ol>
	</section>
	<section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
			  <h3 class="box-title">Listado de valor referencia tecnica <a href="valorreftec/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> </button></a>
			  	<!--	<a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a> -->
          </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.caracteristica.valorreftec.search')
                <br>
                <br>
                <br>
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre de valor referencia tecnica</th>


                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($valorreftec as $cat)
            <tr>
              <td>{{ $cat->idvalor_ref_tec}}</td>
              <td>{{ $cat->nombre_valor_ref_tec}}</td>


              <td>

                  <a href="{{route('valorreftec.edit',$cat->idvalor_ref_tec)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></button>
                  </a>
                  <a href="{{route('valorreftec.show',$cat->idvalor_ref_tec)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></button>
                  </a>
                  <!-- <form style="display: inline" method="POST" action="{{route('valorreftec.destroy', $cat->idvalor_ref_tec)}}">
                  {!!method_field('DELETE')!!}
                  {!!csrf_field()!!}
                    <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></button>
                  </form> -->


              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
              </div>
{!! $valorreftec->links() !!}

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

@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Subgrupo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Subgrupo</li>
      </ol>
 </section>
 <section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
       <h3 class="box-title">Listado de Subgrupos <a href="subgrupo/create"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
        <!--   <a href="#" target="_blank"><button class="btn btn-info"><span class="glyphicon glyphicon-print"></span> </button></a>--></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('equipo.subgrupo.search')
              <div class="col-md-12">
                <div class="table-responsive">
                  <table  class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Grupo</th>
                      <th>Código</th>
                      <th>Subgrupo</th>

                      <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
              @foreach ($subgrupos as $sub)
              <tr>
                <td>{{ $sub->grupo }}</td>
                <td>{{ $sub->codigosubgrupo }}</td>
                <td>{{ $sub->subgrupo }}</td>



                <td>

                    <a href="{{route('subgrupo.edit',$sub->idsubgrupo)}}">
                      <button type="button" class="btn btn-warning btn-sm" name="button"><span class="glyphicon glyphicon-cog"></span> </button>
                    </a>
                    <a href="{{route('subgrupo.show',$sub->idsubgrupo)}}">
                      <button type="button" class="btn btn-info btn-sm" name="button"><span class="glyphicon glyphicon-info-sign"></span> </button>
                    </a>
                  <!--  <form style="display: inline" method="POST" action="{{route('subgrupo.destroy', $sub->idsubgrupo)}}">
                    {!!method_field('DELETE')!!}
                    {!!csrf_field()!!}
                      <button type="submit" class="btn btn-danger btn-sm" name="button"><span class="glyphicon glyphicon-trash"></span></button>
                    </form> -->


                </td>
              </tr>

              @endforeach
                    </tbody>
                    <tfoot>

                    </tfoot>
            </table>
            {!! $subgrupos->links() !!}
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
$('#liAreas').addClass("treeview active");
$('#liSubgrupo').addClass("active");
</script>

@endpush
@endsection

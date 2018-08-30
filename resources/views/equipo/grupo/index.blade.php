@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Grupo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Grupo</li>
      </ol>
 </section>
 <section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
       <h3 class="box-title">Listado de Grupos <a href="grupo/create"><button class="btn btn-success">Nuevo</button></a>
           </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Grupo</th>
                    <th>Área</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
            @foreach ($grupos as $gr)
            <tr>
              <td>{{ $gr->idgrupo }}</td>
              <td>{{ $gr->grupo }}</td>
              <td>{{ $gr->area }}</td>


              <td>

                  <a href="{{route('grupo.edit',$gr->idgrupo)}}">
                    <button type="button" class="btn btn-warning btn-sm" name="button">Editar</button>
                  </a>
                  <a href="{{route('grupo.show',$gr->idgrupo)}}">
                    <button type="button" class="btn btn-info btn-sm" name="button">Detalles</button>
                  </a>
                  <form style="display: inline" method="POST" action="{{route('grupo.destroy', $gr->idgrupo)}}">
                  {!!method_field('DELETE')!!}
                  {!!csrf_field()!!}
                    <button type="submit" class="btn btn-danger btn-sm" name="button">Eliminar</button>
                  </form>


              </td>
            </tr>

            @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
          </table>
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

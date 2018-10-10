@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
      <h1>
        Equipo
        <small>Equipo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-tv"></i> Equipo</a></li>
        <li class="active">Equipo</li>
      </ol>
  </section>
  <section class="content">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">

            </div>

            <!-- /.box-header -->
            <div class="box-body">

              <div class="row">
                <div class="col-lg-3 col-xs-6">

                </div>
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>Nuevo</h3>
                      <p>Equipo</p>
                    </div>
                    <div class="icon">
                      <i class="ion  ion-android-add-circle "></i>
                    </div>
                    <a href="equipo/create" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>Existente</h3>

                      <p>Equipo</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-android-attach"></i>
                    </div>
                    <a href="{{route('existente')}}" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->

                <!-- ./col -->
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

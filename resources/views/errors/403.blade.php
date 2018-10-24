@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
    Página de Error 403
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="#">Error</a></li>
    <li class="active">403 error</li>
  </ol>
</section>

<section class="content">
  <div class="error-page">
    <h2 class="headline text-yellow"> 403</h2>

    <div class="error-content">
      <h3><i class="fa fa-warning text-yellow"></i> Oops! Acceso denegado.</h3>

      <p>

        No tienes permisos para acceder a la pagina.
        Mientras tanto, puedes <a href="{{ url('calendario') }}">volver al inicio</a>
      </p>


    </div>
    <!-- /.error-content -->
  </div>
  <!-- /.error-page -->
</section>
@push ('scripts')
  <script>

  $('#liCalendario').addClass("active");
  </script>

@endpush
@endsection

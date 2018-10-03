@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
  <h1>
    Página de Error 404
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="#">Error</a></li>
    <li class="active">404 error</li>
  </ol>
</section>

<section class="content">
  <div class="error-page">
    <h2 class="headline text-yellow"> 404</h2>

    <div class="error-content">
      <h3><i class="fa fa-warning text-yellow"></i> Oops! Página no encontrada.</h3>

      <p>

        No pudimos encontrar la página que estabas buscando.
        Mientras tanto, puedes <a href="#">volver al inicio</a>
      </p>


    </div>
    <!-- /.error-content -->
  </div>
  <!-- /.error-page -->
</section>
@endsection

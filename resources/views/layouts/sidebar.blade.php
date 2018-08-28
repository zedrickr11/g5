
@section('sidebar')

<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU</li>
  <li class="active treeview">
    <a href="#">
      <i class="fa fa-tv"></i> <span>Equipo</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class=""><a href="{{route('fabricante.index')}} "><i class="fa fa-circle-o"></i> Fabricante</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Distribuidor</a></li>
      <li class=""><a href="{{route('servicioTecnico.index')}} "><i class="fa fa-circle-o"></i> Servicio Tecnico</a></li>
      <li class=""><a href="{{route('tipoManual.index')}} "><i class="fa fa-circle-o"></i> Tipo de Manual</a></li>
      <li class=""><a href="{{route('estado.index')}} "><i class="fa fa-circle-o"></i> Estado</a></li>
    </ul>
  </li>
</ul>
@endsection

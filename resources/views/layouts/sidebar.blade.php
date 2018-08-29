
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
      <li><a href="{{route('area.index')}}"><i class="fa fa-circle-o"></i> Área</a></li>
        <li class=""><a href="{{route('proveedor.index')}} "><i class="fa fa-circle-o"></i>Proveedor</a></li>
    </ul>
  </li>

  <li class="active treeview">
  <a href="#">
    <i class="fa fa-tv"></i> <span>Hospital</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>

  <ul class="treeview-menu">
    <li class=""><a href="{{route('region.index')}} "><i class="fa fa-circle-o"></i> Region</a></li>
      <li class=""><a href="{{route('hospitales.index')}} "><i class="fa fa-circle-o"></i>Hospitales</a></li>
        <li class=""><a href="{{route('unidad.index')}} "><i class="fa fa-circle-o"></i>Unidad de Salud</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Distribuidor</a></li>
  </ul>
</li>
</ul>
@endsection

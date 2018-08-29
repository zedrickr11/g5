
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
    </ul>
  </li>
</ul>
@endsection

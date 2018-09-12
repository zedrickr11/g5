
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
      
      <li class=""><a href="{{route('servicioTecnico.index')}} "><i class="fa fa-circle-o"></i> Servicio Tecnico</a></li>
      <li class=""><a href="{{route('tipoManual.index')}} "><i class="fa fa-circle-o"></i> Tipo de Manual</a></li>
      <li class=""><a href="{{route('estado.index')}} "><i class="fa fa-circle-o"></i> Estado</a></li>
            <li class=""><a href="{{route('advertencia.index')}} "><i class="fa fa-circle-o"></i> Advertencia</a></li>

      <li class="treeview menu-open">
                    <a href="#"><i class="fa fa-circle-o"></i>Areas
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu" style="display: block;">
                      <li><a href="{{route('area.index')}}"><i class="fa fa-circle-o"></i>Área</a></li>
                      <li><a href="{{route('grupo.index')}}"><i class="fa fa-circle-o"></i>Grupo</a></li>
                      <li class="treeview menu-open">
                        <a href="{{route('grupo.index')}}"><i class="fa fa-circle-o"></i>Grupo
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu" style="display: block;">

                          <li><a href="{{route('confsubgrupo.index')}}"><i class="fa fa-circle-o"></i> Configuración</a></li>
                        </ul>
                      </li>
                      <li><a href="{{route('subgrupo.index')}}"><i class="fa fa-circle-o"></i>Subgrupo</a></li>
                      <li class="treeview menu-open">
                        <a href="{{route('grupo.index')}}"><i class="fa fa-circle-o"></i>Subgrupo
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu" style="display: block;">

                          <li><a href="{{route('confcorrelativo.index')}}"><i class="fa fa-circle-o"></i> Configuración</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>



                  <li class="treeview menu-open">
                                <a href="#"><i class="fa fa-circle-o"></i>Caracteristicas
                                  <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                </a>
                                <ul class="treeview-menu" style="display: block;">
                                  <li class=""><a href="{{route('caractec.index')}} "><i class="fa fa-circle-o"></i>Tecnica</a></li>
                                  <li class=""><a href="{{route('caracespefun.index')}} "><i class="fa fa-circle-o"></i>Especial Funcionamiento</a></li>
                                  <li class=""><a href="{{route('valorrefesp.index')}} "><i class="fa fa-circle-o"></i>Valor Referencia Especial</a></li>
                                  <li class=""><a href="{{route('subcaractec.index')}} "><i class="fa fa-circle-o"></i>Subgrupo tecnica</a></li>
                                  <li class=""><a href="{{route('valorreftec.index')}} "><i class="fa fa-circle-o"></i>Valor referencia tecnica</a></li>
                                  <li class=""><a href="{{route('detcaractec.index')}} "><i class="fa fa-circle-o"></i>Detalle tecnica</a></li>


                                  </ul>
                              </li>

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
       <li class=""><a href="{{route('tipounidad.index')}} "><i class="fa fa-circle-o"></i>Tipo Unidad de Salud</a></li>
          <li class=""><a href="{{route('departamento.index')}} "><i class="fa fa-circle-o"></i>Departamento</a></li>
  </ul>
</li>
</ul>
@endsection

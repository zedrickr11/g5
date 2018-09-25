
@section('sidebar')

<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU</li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-desktop"></i> <span>Equipo</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">


      <li class=""><a href="{{route('equipo.index')}} "><i class="fa fa-circle-o"></i>Equipo</a></li>
      <li class=""><a href="{{route('estado.index')}} "><i class="fa fa-circle-o"></i>Estado</a></li>




    </ul>
  </li>
  <li class="treeview">
  <a href="">
    <i class="fa fa-edit"></i> <span>Ficha Técnica</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>

  <ul class="treeview-menu">
    <li class=""><a href="{{route('caractec.index')}} "><i class="fa fa-circle-o"></i>Característica Técnica</a></li>
    <li class=""><a href="{{route('caracespefun.index')}} "><i class="fa fa-circle-o"></i>Especial Funcionamiento</a></li>
    <li class=""><a href="{{route('valorrefesp.index')}} "><i class="fa fa-circle-o"></i>Valor Referencia Especial</a></li>
    <li class=""><a href="{{route('subcaractec.index')}} "><i class="fa fa-circle-o"></i>Subgrupo característica técnica</a></li>
    <li class=""><a href="{{route('valorreftec.index')}} "><i class="fa fa-circle-o"></i>Valor referencia técnica</a></li>
    <li class=""><a href="{{route('detcaractec.index')}} "><i class="fa fa-circle-o"></i>Detalle característica técnica</a></li>
    <li class=""><a href="{{route('detcaracesp.index')}} "><i class="fa fa-circle-o"></i>Detalle especial</a></li>

  </ul>
</li>

<li class="treeview">
<a href="">
  <i class="fa fa-th"></i> <span>Rutinas</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>

<ul class="treeview-menu">
  <li class=""><a href="{{route('caracru.index')}} "><i class="fa fa-circle-o"></i>Caracteristica rutina</a></li>
  <li class=""><a href="{{route('valorrefpru.index')}} "><i class="fa fa-circle-o"></i>Valor referencia prueba</a></li>
  <li class=""><a href="{{route('subpru.index')}} "><i class="fa fa-circle-o"></i>Subgrupo prueba</a></li>
  <li class=""><a href="{{route('pruru.index')}} "><i class="fa fa-circle-o"></i>Prueba rutina</a></li>
  <li class=""><a href="{{route('tiporu.index')}} "><i class="fa fa-circle-o"></i>Tipo rutina</a></li>
  <li class=""><a href="{{route('valrefru.index')}} "><i class="fa fa-circle-o"></i>Valor referencia rutina</a></li>
  <li class=""><a href="{{route('subru.index')}} "><i class="fa fa-circle-o"></i>Subgrupo rutina</a></li>
  <li class=""><a href="{{route('ruman.index')}} "><i class="fa fa-circle-o"></i>Rutina mantenimiento</a></li>

  <li class=""><a href="{{route('valrefru.index')}} "><i class="fa fa-circle-o"></i>Valor referencia rutina</a></li>
  <li class=""><a href="{{route('subru.index')}} "><i class="fa fa-circle-o"></i>Subgrupo rutina</a></li>
  <li class=""><a href="{{route('ruman.index')}} "><i class="fa fa-circle-o"></i>Rutina mantenimiento</a></li>
  <li class=""><a href="{{route('detcaracru.index')}} "><i class="fa fa-circle-o"></i>Detalle caracterisitca rutina</a></li>


</ul>
</li>


  <li class="treeview">
  <a href="">
    <i class="fa fa-map"></i> <span>Organización de regiones</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>

  <ul class="treeview-menu">
    <li class=""><a href="{{route('region.index')}} "><i class="fa fa-circle-o"></i>Región</a></li>
    <li class=""><a href="{{route('hospitales.index')}} "><i class="fa fa-circle-o"></i>Hospital</a></li>
    <li class=""><a href="{{route('departamento.index')}} "><i class="fa fa-circle-o"></i>Departamento</a></li>

    <li class=""><a href="{{route('unidad.index')}} "><i class="fa fa-circle-o"></i>Unidad de Salud</a></li>
    <li class=""><a href="{{route('tipounidad.index')}} "><i class="fa fa-circle-o"></i>Tipo Unidad de Salud</a></li>

  </ul>
</li>
<li class="treeview">
<a href="">
  <i class="fa fa-folder"></i> <span>Manuales</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>

<ul class="treeview-menu">
  <li class=""><a href="{{route('tipoManual.index')}} "><i class="fa fa-circle-o"></i>Tipo de Manual</a></li>


</ul>
</li>
<li class="treeview">
<a href="">
  <i class="fa fa-cubes"></i> <span>Áreas</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>

<ul class="treeview-menu" >
  <li><a href="{{route('area.index')}}"><i class="fa fa-circle-o"></i>Área</a></li>
  <li><a href="{{route('grupo.index')}}"><i class="fa fa-circle-o"></i>Grupo</a></li>
  <li><a href="{{route('confsubgrupo.index')}}"><i class="fa fa-circle-o"></i>Configuración del subgrupo</a></li>


  <li><a href="{{route('subgrupo.index')}}"><i class="fa fa-circle-o"></i>Subgrupo</a></li>
    <li><a href="{{route('confcorrelativo.index')}}"><i class="fa fa-circle-o"></i>Configuración del correlativo</a></li>
</ul>
</li>
<li class="">
<a href="{{route('fabricante.index')}} ">
  <i class="fa fa-wrench"></i> <span>Fabricante</span>
</a>
</li>
<li class="">
<a href="{{route('servicioTecnico.index')}} ">
  <i class="fa fa-cogs"></i> <span>Servicio Técnico</span>
</a>
</li>
<li class="">
<a href="{{route('advertencia.index')}} ">
  <i class="fa fa-warning"></i> <span>Advertencia</span>
</a>
</li>
<li class="">
<a href="{{route('proveedor.index')}} ">
  <i class="fa fa-cart-plus"></i> <span>Proveedor</span>
</a>
</li>
<li class="treeview">
<a href="">
  <i class="fa fa-exclamation-triangle"></i> <span>Precauciones</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>

<ul class="treeview-menu">
  <li class=""><a href="{{route('ejecutante.index')}} "><i class="fa fa-circle-o"></i>Ejecutante</a></li>
    <li class=""><a href="{{route('responsable.index')}} "><i class="fa fa-circle-o"></i>Responsable</a></li>

</ul>
</li>
<li class="treeview">
<a href="">
  <i class="fa 	fa fa-times-circle-o"></i> <span>Peligro</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li class=""><a href="{{route('naturaleza.index')}} "><i class="fa fa-circle-o"></i>Naturaleza</a></li>
</ul>
</li>
<li class="treeview">
<a href="">
  <i class="fa  fa-building-o"></i> <span>Mantenimiento</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li class=""><a href="{{route('areamantenimiento.index')}} "><i class="fa fa-circle-o"></i>Areas</a></li>
</ul>
</li>
<li class="treeview">
<a href="">
  <i class="fa  fa-suitcase"></i> <span>Trabajo</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li class=""><a href="{{route('tipo.index')}} "><i class="fa fa-circle-o"></i>Tipo de Trabajo</a></li>
  <li class=""><a href="{{route('solicitud.index')}} "><i class="fa fa-circle-o"></i>Solicitud de Trabajo</a></li>
  <li class=""><a href="{{route('permiso.index')}} "><i class="fa fa-circle-o"></i>Permiso de Trabajo</a></li>
  <li class=""><a href="{{route('seguimiento.index')}} "><i class="fa fa-circle-o"></i>Seguimiento de Trabajo</a></li>
</ul>
</li>

</ul>

@endsection

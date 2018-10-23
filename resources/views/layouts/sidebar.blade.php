
@section('sidebar')

<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU</li>
  <li id="liCalendario"  class="">
  <a href="{{ url('calendario') }}">
    <i class="fa fa-dashboard"></i> <span>Inicio</span>

  </a>


</li>

  @if (auth()->user()->hasRole(['admin']))
    <li id="liEq"class="treeview">
      <a href="#">
        <i class="fa fa-desktop"></i> <span>Equipo</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li id="liEquipo"><a href="{{route('equipo.index')}} "><i class="fa fa-bars"></i>Listado de equipo</a></li>
        <li id="liCarac" class="treeview">
          <a href="#"><i class="fa fa-th-large"></i> Características técnicas
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <li id="liTecnicas" class=""><a href="{{route('caractec.index')}} "><i class="fa fa-caret-right"></i>Caracteristica</a></li>
              <li id="liSubgrupoT" class=""><a href="{{route('subcaractec.index')}} "><i class="fa fa-caret-right"></i>Subgrupo</a></li>
              <li id="liValorT" class=""><a href="{{route('valorreftec.index')}} "><i class="fa fa-caret-right"></i>Valor referencia</a></li>

            </li>
          </ul>
        </li>
        <li id="liEspe" class="treeview">
          <a href="#"><i class="fa fa-th-large"></i> Características especiales
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <li id="liCesp" class=""><a href="{{route('caracespefun.index')}} "><i class="fa fa-caret-right"></i>Caracteristica</a></li>
              <li id="liValorE" class=""><a href="{{route('valorrefesp.index')}} "><i class="fa fa-caret-right"></i>Valor Referencia</a></li>


            </li>
          </ul>
        </li>

        <li id="liManuales" class=""><a href="{{route('tipoManual.index')}} "><i class="fa fa-book"></i>Manuales</a></li>
        <li id="liFabricante" class="">
        <a href="{{route('fabricante.index')}} ">
          <i class="fa fa-building-o"></i> <span>Fabricante</span>
        </a>
        </li>
        <li id="liServTec" class="">
        <a href="{{route('servicioTecnico.index')}} ">
          <i class="fa fa-cogs"></i> <span>Servicio Técnico</span>
        </a>
        </li>
        <li id="liProveedores" class="">
        <a href="{{route('proveedor.index')}} ">
          <i class="fa fa-cart-plus"></i> <span>Distribuidores</span>
        </a>
        </li>
        <li id="liEstado"><a href="{{route('estado.index')}} "><i class="fa fa-sliders"></i>Estados</a></li>
      </ul>
    </li>

<li id="liRutinas" class="treeview">
<a href="">
  <i class="fa fa-wrench"></i> <span>Rutinas</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>

<ul class="treeview-menu">
  <li id="liRuman" class=""><a href="{{route('ruman.index')}} "><i class="fa fa-align-center"></i>Rutina mantenimiento</a></li>
  <li id="liCaracruman" class="treeview">
    <a href="#"><i class="fa fa-th-list"></i> Características de rutina
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="treeview">
        <li id="liCaracru" class=""><a href="{{route('caracru.index')}} "><i class="fa fa-caret-right"></i>Caracteristica</a></li>
        <li id="liSubru" class=""><a href="{{route('subru.index')}} "><i class="fa fa-caret-right"></i>Subgrupo </a></li>
        <li id="liValorru" class=""><a href="{{route('valrefru.index')}} "><i class="fa fa-caret-right"></i>Valor referencia </a></li>



      </li>
    </ul>
  </li>
  <li id="liCarap" class="treeview">
    <a href="#"><i class="fa fa-th-list"></i> Características de pruebas
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="treeview">
        <li id="liPrueba" class=""><a href="{{route('pruru.index')}} "><i class="fa fa-caret-right"></i>Prueba </a></li>
        <li id="liSubp" class=""><a href="{{route('subpru.index')}} "><i class="fa fa-caret-right"></i>Subgrupo </a></li>
        <li id="liValorp" class=""><a href="{{route('valorrefpru.index')}} "><i class="fa fa-caret-right"></i>Valor referencia </a></li>





      </li>
    </ul>
  </li>

  <li id="tiporu" class=""><a href="{{route('tiporu.index')}} "><i class="fa fa-ambulance"></i>Tipo rutina</a></li>



</ul>
</li>


  <li id="liRegiones" class="treeview">
  <a href="">
    <i class="fa fa-map"></i> <span>Organización de regiones</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>

  <ul class="treeview-menu">
    <li id="liRegion" class=""><a href="{{route('region.index')}} "><i class="fa fa-map-pin"></i>Región</a></li>
    <li id="liHospi" class=""><a href="{{route('hospitales.index')}} "><i class="fa  fa-hospital-o"></i>Hospital</a></li>
    <li id="liDepto" class=""><a href="{{route('departamento.index')}} "><i class="fa fa-map-signs"></i>Departamento</a></li>

    <li id="liUnidad" class=""><a href="{{route('unidad.index')}} "><i class="fa fa-stethoscope"></i>Unidad de Salud</a></li>
    <li id="liTipo" class=""><a href="{{route('tipounidad.index')}} "><i class="fa fa-medkit"></i>Tipo Unidad de Salud</a></li>

  </ul>
</li>

<li id="liAreas" class="treeview">
<a href="">
  <i class="fa fa-cubes"></i> <span>Áreas</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>

<ul class="treeview-menu" >
  <li id="liFormato" class=""><a href="{{route('area.index')}}"><i class="fa fa-angle-double-right"></i>Formato</a></li>
  <li id="liGrupo"><a href="{{route('grupo.index')}}"><i class="fa fa-caret-right"></i>Grupo</a></li>
  <li id="liConfsubgrupo"><a href="{{route('confsubgrupo.index')}}"><i class="fa fa-angle-right"></i>Configuración del subgrupo</a></li>


  <li id="liSubgrupo"><a href="{{route('subgrupo.index')}}"><i class="fa fa-caret-right"></i>Subgrupo</a></li>
    <li id="liConfcorr"><a href="{{route('confcorrelativo.index')}}"><i class="fa fa-angle-right"></i>Configuración del correlativo</a></li>
</ul>
</li>




<li id="liSolicitud" class="treeview">
<a href="">
  <i class="fa fa-pencil-square-o"></i> <span>Solicitud de trabajo</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>

<ul class="treeview-menu">
  <li id="liTipotrabajo" class=""><a href="{{route('tipo.index')}} "><i class="fa fa-caret-right"></i>Tipo de trabajo</a></li>
  <li id="liAreamantto" class=""><a href="{{route('areamantenimiento.index')}} "><i class="fa fa-caret-right"></i>Área de mantenimiento</a></li>
  <li id="liSeguimiento" class=""><a href="{{route('seguimiento.index')}} "><i class="fa fa-caret-right"></i>Seguimiento de Trabajo</a></li>



</ul>
</li>
<li id="liPermisos" class="treeview">
<a href="">
  <i class="fa  fa-check-square-o"></i> <span>Permiso de trabajo</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>

<ul class="treeview-menu">
  <li id="liPermiso" class=""><a href="{{route('permiso.index')}} "><i class="fa fa-caret-right"></i>Permiso de Trabajo</a></li>

  <li id="liPeligro" class=""><a href="{{route('naturaleza.index')}} "><i class="fa fa-caret-right"></i>Peligro</a></li>

  <li id="liPrecaucion" class="treeview">
    <a href="#"><i class="fa fa-caret-right"></i>Precaución
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="treeview">
        <li id="liEjecutante" class=""><a href="{{route('ejecutante.index')}} "><i class="fa fa-angle-right"></i>Ejecutante</a></li>
        <li id="liResponsable" class=""><a href="{{route('responsable.index')}} "><i class="fa fa-angle-right"></i>Responsable</a></li>
      </li>
    </ul>
  </li>
</ul>
</li>







<li id="liAlmacen" class="treeview">
  <a href="#">
    <i class="fa fa-database"></i>
    <span>Almacén</span>
     <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
    <li id="liInsumos"><a href="{{url('/almacen/insumo')}}"><i class="fa fa-angle-right"></i> Insumos</a></li>
    <li id="liRepuestos"><a href="{{url('almacen/repuesto')}}"><i class="fa fa-angle-right"></i> Repuestos</a></li>
    <li id="liHerramientas" class=""><a href="{{route('herramienta.index')}} "><i class="fa fa-angle-right"></i>Herramientas</a></li>





  </ul>
</li>
<li id="liCompras" class="treeview">
  <a href="#">
    <i class="fa fa-shopping-cart"></i>
    <span>Compras</span>
     <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
    <li id="liProveedoresI"><a href="{{url('compras/insumo/prove')}}"><i class="fa fa-angle-double-right"></i> Proveedores de insumos</a></li>

    <li id="liIngresosI"><a href="{{url('compras/insumo-ingreso')}}"><i class="fa  fa-caret-right"></i> Ingresos de insumos</a></li>
    <li id="liProveedoresR"><a href="{{url('compras/repuesto/prov')}}"><i class="fa fa-angle-double-right"></i> Proveedores de repuestos</a></li>

    <li id="liIngresosR"><a href="{{url('compras/repuesto-ingreso')}}"><i class="fa  fa-caret-right"></i> Ingresos de repuestos</a></li>
  </ul>
</li>
<li id="liTecnicos" class="treeview">
  <a href="#">
    <i class="fa fa-users"></i>
    <span>Técnicos</span>
     <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
    <li id="liInternos"><a href="{{url('tecnicos/interno')}}"><i class="fa fa-user"></i> Técnicos internos</a></li>
    <li id="liExternos"><a href="{{url('tecnicos/externo')}}"><i class="fa fa-user"></i> Técnicos externos</a></li>


  </ul>
</li>
<li id="liSeguridad" class="treeview">
  <a href="#">
    <i class="fa fa-lock"></i>
    <span>Seguridad</span>
     <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
    <li id="liUsers"><a href="{{route('usuarios.index')}}"><i class="fa fa-user-plus"></i> Usuarios</a></li>


  </ul>
</li>
</ul>
@elseif(auth()->user()->hasRole(['jefe-mantto']))
  <li id="liEq"class="treeview">
    <a href="#">
      <i class="fa fa-desktop"></i> <span>Equipo</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li id="liEquipo"><a href="{{route('equipo.index')}} "><i class="fa fa-bars"></i>Listado de equipo</a></li>
      <li id="liCarac" class="treeview">
        <a href="#"><i class="fa fa-th-large"></i> Características técnicas
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <li id="liTecnicas" class=""><a href="{{route('caractec.index')}} "><i class="fa fa-caret-right"></i>Caracteristica</a></li>
            <li id="liSubgrupoT" class=""><a href="{{route('subcaractec.index')}} "><i class="fa fa-caret-right"></i>Subgrupo</a></li>
            <li id="liValorT" class=""><a href="{{route('valorreftec.index')}} "><i class="fa fa-caret-right"></i>Valor referencia</a></li>

          </li>
        </ul>
      </li>
      <li id="liEspe" class="treeview">
        <a href="#"><i class="fa fa-th-large"></i> Características especiales
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview">
            <li id="liCesp" class=""><a href="{{route('caracespefun.index')}} "><i class="fa fa-caret-right"></i>Caracteristica</a></li>
            <li id="liValorE" class=""><a href="{{route('valorrefesp.index')}} "><i class="fa fa-caret-right"></i>Valor Referencia</a></li>


          </li>
        </ul>
      </li>

      <li id="liManuales" class=""><a href="{{route('tipoManual.index')}} "><i class="fa fa-book"></i>Manuales</a></li>
      <li id="liFabricante" class="">
      <a href="{{route('fabricante.index')}} ">
        <i class="fa fa-building-o"></i> <span>Fabricante</span>
      </a>
      </li>
      <li id="liServTec" class="">
      <a href="{{route('servicioTecnico.index')}} ">
        <i class="fa fa-cogs"></i> <span>Servicio Técnico</span>
      </a>
      </li>
      <li id="liProveedores" class="">
      <a href="{{route('proveedor.index')}} ">
        <i class="fa fa-cart-plus"></i> <span>Distribuidores</span>
      </a>
      </li>
      <li id="liEstado"><a href="{{route('estado.index')}} "><i class="fa fa-sliders"></i>Estados</a></li>
    </ul>
  </li>

<li id="liRutinas" class="treeview">
<a href="">
<i class="fa fa-wrench"></i> <span>Rutinas</span>
<span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
</span>
</a>

<ul class="treeview-menu">
<li id="liRuman" class=""><a href="{{route('ruman.index')}} "><i class="fa fa-align-center"></i>Rutina mantenimiento</a></li>
<li id="liCaracruman" class="treeview">
  <a href="#"><i class="fa fa-th-list"></i> Características de rutina
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li class="treeview">
      <li id="liCaracru" class=""><a href="{{route('caracru.index')}} "><i class="fa fa-caret-right"></i>Caracteristica</a></li>
      <li id="liSubru" class=""><a href="{{route('subru.index')}} "><i class="fa fa-caret-right"></i>Subgrupo </a></li>
      <li id="liValorru" class=""><a href="{{route('valrefru.index')}} "><i class="fa fa-caret-right"></i>Valor referencia </a></li>



    </li>
  </ul>
</li>
<li id="liCarap" class="treeview">
  <a href="#"><i class="fa fa-th-list"></i> Características de pruebas
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li class="treeview">
      <li id="liPrueba" class=""><a href="{{route('pruru.index')}} "><i class="fa fa-caret-right"></i>Prueba </a></li>
      <li id="liSubp" class=""><a href="{{route('subpru.index')}} "><i class="fa fa-caret-right"></i>Subgrupo </a></li>
      <li id="liValorp" class=""><a href="{{route('valorrefpru.index')}} "><i class="fa fa-caret-right"></i>Valor referencia </a></li>





    </li>
  </ul>
</li>

<li id="tiporu" class=""><a href="{{route('tiporu.index')}} "><i class="fa fa-ambulance"></i>Tipo rutina</a></li>



</ul>
</li>


<li id="liRegiones" class="treeview">
<a href="">
  <i class="fa fa-map"></i> <span>Organización de regiones</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>

<ul class="treeview-menu">
  <li id="liRegion" class=""><a href="{{route('region.index')}} "><i class="fa fa-map-pin"></i>Región</a></li>
  <li id="liHospi" class=""><a href="{{route('hospitales.index')}} "><i class="fa  fa-hospital-o"></i>Hospital</a></li>
  <li id="liDepto" class=""><a href="{{route('departamento.index')}} "><i class="fa fa-map-signs"></i>Departamento</a></li>

  <li id="liUnidad" class=""><a href="{{route('unidad.index')}} "><i class="fa fa-stethoscope"></i>Unidad de Salud</a></li>
  <li id="liTipo" class=""><a href="{{route('tipounidad.index')}} "><i class="fa fa-medkit"></i>Tipo Unidad de Salud</a></li>

</ul>
</li>

<li id="liAreas" class="treeview">
<a href="">
<i class="fa fa-cubes"></i> <span>Áreas</span>
<span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
</span>
</a>

<ul class="treeview-menu" >
<li id="liFormato" class=""><a href="{{route('area.index')}}"><i class="fa fa-angle-double-right"></i>Formato</a></li>
<li id="liGrupo"><a href="{{route('grupo.index')}}"><i class="fa fa-caret-right"></i>Grupo</a></li>
<li id="liConfsubgrupo"><a href="{{route('confsubgrupo.index')}}"><i class="fa fa-angle-right"></i>Configuración del subgrupo</a></li>


<li id="liSubgrupo"><a href="{{route('subgrupo.index')}}"><i class="fa fa-caret-right"></i>Subgrupo</a></li>
  <li id="liConfcorr"><a href="{{route('confcorrelativo.index')}}"><i class="fa fa-angle-right"></i>Configuración del correlativo</a></li>
</ul>
</li>




<li id="liSolicitud" class="treeview">
<a href="">
<i class="fa fa-pencil-square-o"></i> <span>Solicitud de trabajo</span>
<span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
</span>
</a>

<ul class="treeview-menu">
<li id="liTipotrabajo" class=""><a href="{{route('tipo.index')}} "><i class="fa fa-caret-right"></i>Tipo de trabajo</a></li>
<li id="liAreamantto" class=""><a href="{{route('areamantenimiento.index')}} "><i class="fa fa-caret-right"></i>Área de mantenimiento</a></li>
<li id="liSeguimiento" class=""><a href="{{route('seguimiento.index')}} "><i class="fa fa-caret-right"></i>Seguimiento de Trabajo</a></li>



</ul>
</li>
<li id="liPermisos" class="treeview">
<a href="">
<i class="fa  fa-check-square-o"></i> <span>Permiso de trabajo</span>
<span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
</span>
</a>

<ul class="treeview-menu">
<li id="liPermiso" class=""><a href="{{route('permiso.index')}} "><i class="fa fa-caret-right"></i>Permiso de Trabajo</a></li>

<li id="liPeligro" class=""><a href="{{route('naturaleza.index')}} "><i class="fa fa-caret-right"></i>Peligro</a></li>

<li id="liPrecaucion" class="treeview">
  <a href="#"><i class="fa fa-caret-right"></i>Precaución
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li class="treeview">
      <li id="liEjecutante" class=""><a href="{{route('ejecutante.index')}} "><i class="fa fa-angle-right"></i>Ejecutante</a></li>
      <li id="liResponsable" class=""><a href="{{route('responsable.index')}} "><i class="fa fa-angle-right"></i>Responsable</a></li>
    </li>
  </ul>
</li>
</ul>
</li>







<li id="liAlmacen" class="treeview">
<a href="#">
  <i class="fa fa-database"></i>
  <span>Almacén</span>
   <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
  <li id="liInsumos"><a href="{{url('/almacen/insumo')}}"><i class="fa fa-angle-right"></i> Insumos</a></li>
  <li id="liRepuestos"><a href="{{url('almacen/repuesto')}}"><i class="fa fa-angle-right"></i> Repuestos</a></li>
  <li id="liHerramientas" class=""><a href="{{route('herramienta.index')}} "><i class="fa fa-angle-right"></i>Herramientas</a></li>





</ul>
</li>
<li id="liCompras" class="treeview">
<a href="#">
  <i class="fa fa-shopping-cart"></i>
  <span>Compras</span>
   <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
  <li id="liProveedoresI"><a href="{{url('compras/insumo/prove')}}"><i class="fa fa-angle-double-right"></i> Proveedores de insumos</a></li>

  <li id="liIngresosI"><a href="{{url('compras/insumo-ingreso')}}"><i class="fa  fa-caret-right"></i> Ingresos de insumos</a></li>
  <li id="liProveedoresR"><a href="{{url('compras/repuesto/prov')}}"><i class="fa fa-angle-double-right"></i> Proveedores de repuestos</a></li>

  <li id="liIngresosR"><a href="{{url('compras/repuesto-ingreso')}}"><i class="fa  fa-caret-right"></i> Ingresos de repuestos</a></li>
</ul>
</li>
<li id="liTecnicos" class="treeview">
<a href="#">
  <i class="fa fa-users"></i>
  <span>Técnicos</span>
   <i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
  <li id="liInternos"><a href="{{url('tecnicos/interno')}}"><i class="fa fa-user"></i> Técnicos internos</a></li>
  <li id="liExternos"><a href="{{url('tecnicos/externo')}}"><i class="fa fa-user"></i> Técnicos externos</a></li>


</ul>
</li>

@elseif(auth()->user()->hasRole(['jefe-sub']))
<li id="liEq"class="treeview">
  <a href="#">
    <i class="fa fa-desktop"></i> <span>Equipo</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li id="liEquipo"><a href="{{route('equipo.index')}} "><i class="fa fa-bars"></i>Listado de equipo</a></li>



    <li id="liFabricante" class="">
    <a href="{{route('fabricante.index')}} ">
      <i class="fa fa-building-o"></i> <span>Fabricante</span>
    </a>
    </li>
    <li id="liServTec" class="">
    <a href="{{route('servicioTecnico.index')}} ">
      <i class="fa fa-cogs"></i> <span>Servicio Técnico</span>
    </a>
    </li>
    <li id="liProveedores" class="">
    <a href="{{route('proveedor.index')}} ">
      <i class="fa fa-cart-plus"></i> <span>Distribuidores</span>
    </a>
    </li>

  </ul>
</li>
<li id="liRutinas" class="treeview">
  <a href="">
    <i class="fa fa-wrench"></i> <span>Rutinas</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>

  <ul class="treeview-menu">
    <li id="liRuman" class=""><a href="{{route('ruman.index')}} "><i class="fa fa-align-center"></i>Rutina mantenimiento</a></li>

  </ul>
  </li>
  <li id="liAlmacen" class="treeview">
    <a href="#">
      <i class="fa fa-database"></i>
      <span>Almacén</span>
       <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li id="liInsumos"><a href="{{url('/almacen/insumo')}}"><i class="fa fa-angle-right"></i> Insumos</a></li>
      <li id="liRepuestos"><a href="{{url('almacen/repuesto')}}"><i class="fa fa-angle-right"></i> Repuestos</a></li>
      <li id="liHerramientas" class=""><a href="{{route('herramienta.index')}} "><i class="fa fa-angle-right"></i>Herramientas</a></li>


    </ul>
  </li>
  <li id="liCompras" class="treeview">
    <a href="#">
      <i class="fa fa-shopping-cart"></i>
      <span>Compras</span>
       <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li id="liProveedoresI"><a href="{{url('compras/insumo/prove')}}"><i class="fa fa-angle-double-right"></i> Proveedores de insumos</a></li>

      <li id="liIngresosI"><a href="{{url('compras/insumo-ingreso')}}"><i class="fa  fa-caret-right"></i> Ingresos de insumos</a></li>
      <li id="liProveedoresR"><a href="{{url('compras/repuesto/prov')}}"><i class="fa fa-angle-double-right"></i> Proveedores de repuestos</a></li>

      <li id="liIngresosR"><a href="{{url('compras/repuesto-ingreso')}}"><i class="fa  fa-caret-right"></i> Ingresos de repuestos</a></li>
  </ul>
  </li>


@elseif(auth()->user()->hasRole(['tec-ing']))
<li id="liEq"class="treeview">
  <a href="#">
    <i class="fa fa-desktop"></i> <span>Equipo</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li id="liEquipo"><a href="{{route('equipo.index')}} "><i class="fa fa-bars"></i>Listado de equipo</a></li>
    </ul>
</li>

@endif
@endsection

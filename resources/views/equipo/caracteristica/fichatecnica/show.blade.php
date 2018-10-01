<!DOCTYPE html>
<html>
<title>Página de ejemplo</title>
	<link type="text/css" rel="stylesheet" href="estilos.css" />

  <body>
    <SPAN style="position: absolute; top: -45 px; left: -45 px;">
      </SPAN>


        @foreach($equipo as $eq)


        <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">

          <tr>
            <td id="gris" colspan="3"> 	<div align="center"> FICHA TÉCNICA             </div>  </td>

              <td rowspan="3" ><div align="center">
  <IMG src="dist/img/iggs.jpg" WIDTH=50 HEIGHT=50 BORDER=0>    </td>
  </div></tr>
          <tr>
            <td id="gris"> <div align="center"> No. Inventario Técnico </div></td>
              <td id="gris" colspan="1"> <div align="center"> ID: </div></td>
                <td id="negrita" rowspan="2" > <div align="center"> INSTITUTO GUATEMALTECO DE <BR>
                  SEGURIDAD SOCIAL (IGGS)</td></div>

          </tr>
          <tr>
            <td >  </td>
              <td > </td>

          </tr>
          <tr>
            <td id="gris" colspan="4"> <div align="center"> IDENTIFICACIÓN </div></td>
          </tr>
          <tr>
            <td > Equipo/Instalación: <br>
            {{ $eq->nombre_equipo}}</td>
            <td > Marca:<br>
              {{ $eq->marca}}
             </td>
            <td > Modelo: <br>
              {{ $eq->modelo}}</td>
            <td > No. de serie: <br>
            {{ $eq->serie}}</td>
          </tr>
          <tr>
              <td colspan="4">Descripción del Equipo: {{ $eq->descripcion}}  </td>

          </tr>
          <tr>

            <td  colspan="2">  Clase Tenología Médica: {{ $eq->clase_tec_med}}</td>
            <td  colspan="2">  Nivel de Riesgo: {{ $eq->nivel_riesgo}}</td>

          </tr>
          <tr>
            <td  colspan="4">  Partes de Equip:</td>
          </tr>
          <tr>
            <td  colspan="4">  Accesorios:</td>
          </tr>
          <tr>
            <td  colspan="4">  Conexión Con otro equipo: {{ $eq->conexion_otro_eq}}</td>
          </tr>
          <tr>
            <td id="gris" colspan="4"> <div align="center"> LOCALIZACIÓN Y FRECUENCIA DE USO </div></td>
          </tr>
          <tr>
            @foreach($unidadsalud as $hosp)
                     @if ($hosp->idunidadsalud==$eq->idunidadsalud)
           <td  colspan="2">   Unidad: {{$hosp->unidad_salud}} </td>
                   @endif
                    @endforeach
                    @foreach($departamento as $hosp)
                    @if ($hosp->iddepartamento==$eq->iddepartamento)
                    <td  colspan="2">   Departamento/Servicio: {{$hosp->depto}} </td>
                    @endif
                    @endforeach

          </tr>
          <tr>
            @foreach($area as $hosp)
                     @if ($hosp->idarea==$eq->idarea)
           <td  colspan="2">   Área/Sala/Laboratorio: {{$hosp->nombre_area}}</td>
                   @endif
                    @endforeach

                    <td  colspan="2"> Usuario responsable: PREGUNTAR!!!</td>


          </tr>
          <tr>

            <td  >  Frecuencia de uso: {{ $eq->frec_uso_dia_semana}}</td>
            <td >  Nivel de Riesgo: {{ $eq->frec_uso_hora_dia}}</td>
             @if ($eq->personal_cap=="1")
            <td  colspan="2">  Cuenta con personal capacitado para su uso? Sí</td>
            @else
            <td  colspan="2">  Cuenta con personal capacitado para su uso? No</td>
            @endif
          </tr>
          <tr>
            <td id="gris" colspan="4"> <div align="center"> INFORMACIÓN TÉCNICA </div></td>
          </tr>


          @foreach($fabricante as $hosp)
                   @if ($hosp->idfabricante==$eq->idfabricante)
          <tr>
            <td id="gris" colspan="2">  FABRICANTE: </div></td>
            <td id="gris" colspan="2"> <div align="center"> EXSITENCIA DE INFORMACIÓN TÉCNICA </div></td>
          </tr>
          <tr>
            <td  colspan="2">  DIRECCIÓN: {{ $hosp->direccion_fabricante}}</td>
            <td  colspan="2">  Manual de operación</td>
          </tr>
          <tr>
            <td  colspan="2">  TEL/FAX: {{ $hosp->telefono_fabricante}}</td>
            <td  colspan="2">  Manual de instalación</td>
          </tr>
          <tr>
            <td  colspan="2">  e-mail: {{ $hosp->correo_fabricante}}</td>
            <td  colspan="2">  Manual de servicio</td>
          </tr>
          @endif
           @endforeach


           @foreach($proveedor as $hosp)
                    @if ($hosp->id_proveedor==$eq->id_proveedor)
          <tr>
            <td id="gris" colspan="2">  DISTRIBUIDOR: </div></td>
            <td  colspan="2">  Manual de partes</td>
          </tr>
          <tr>
            <td  colspan="2">  DIRECCIÓN: {{ $hosp->direccion_proveedor}}</td>
            <td  colspan="2">  Otra literatura</td>
          </tr>
          <tr>
            <td  colspan="2">  TEL/FAX: {{ $hosp->telefono_proveedor}}</td>
            <td  colspan="2">  No existe información técnica</td>
          </tr>
          <tr>
            <td  colspan="2">  e-mail: {{ $hosp->correo_proveedor}}</td>
            <td  colspan="2" owspan="2">  Observaciones:</td>
          </tr>

          <tr>
            <td  colspan="2">  NOMBRE DE CONTACTO: {{ $hosp->correo_proveedor}}</td>
            <td  colspan="2" owspan="2">  Observaciones:</td>
          </tr>

          @endif
           @endforeach


           <tr>
             <td id="gris" colspan="4"> <div align="center"> REPUESTOS EN ALMACÉN </div></td>
           </tr>
           <tr>
             <td  colspan="2">  Repuesto: </td>
             <td  colspan="2">  No. de parte:</td>
           </tr>

    </table>



  @endforeach
</body>
</html>

<!DOCTYPE html>
<html>



<title>FICHA TÉCNICA </title>
	<link type="text/css" rel="stylesheet" href="estilos.css" />

  <body>
    <SPAN style="position: absolute; top: -45 px; left: -45 px;">
      </SPAN>





        <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">

          <tr>
            <td id="gris" colspan="3"> 	<div align="center"> FICHA TÉCNICA             </div>  </td>

              <td rowspan="3" ><div align="center">
  <IMG src="{{ public_path('dist/img/igss.png') }}" WIDTH=100 HEIGHT=100 BORDER=0>    </td>
  </div></tr>
          <tr>
            <td id="gris"> <div align="center"> No. Inventario Técnico </div></td>
              <td id="gris" colspan="1"> <div align="center"> ID: </div></td>
                <td id="negrita" rowspan="2" > <div align="center"> INSTITUTO GUATEMALTECO DE <BR>
                  SEGURIDAD SOCIAL (IGGS)</td></div>

          </tr>
          <tr>

            <td id="neg">  <div align="center"> {{ $equipo->inventario }}</div></td>
              <td id="neg"> <div align="center"> {{ $equipo->codigo }}</div></td>

          </tr>
          <tr>
            <td id="gris" colspan="4"> <div align="center"> IDENTIFICACIÓN </div></td>
          </tr>
          <tr>
            <td > Equipo/Instalación: <br> {{ $equipo->nombre_equipo }}<br>
            </td>
            <td > Marca:<br>
              {{ $equipo->marca }}
             </td>
            <td > Modelo: <br>
              {{ $equipo->modelo }}
            </td>
            <td > No. de serie: <br>
              {{ $equipo->serie }}
            </td>
          </tr>
          <tr>
              <td colspan="4">Descripción del Equipo:  {{ $equipo->descripcion }} </td>

          </tr>
          <tr>

            <td  colspan="2">  Clase Tenología Médica: {{ $equipo->clase_tec_med }}</td>
            <td  colspan="2">  Nivel de Riesgo: {{ $equipo->nivel_riesgo }} </td>

          </tr>
          <tr>
            <td  colspan="4">  Partes de Equipo:
              @foreach ($partes as $parte )
                <br>Parte: {{ $parte->nombre_parte }} - No. parte: {{ $parte->num_parte }}

              @endforeach
            </td>
          </tr>
          <tr>
            <td  colspan="4">  Accesorios:
              @foreach ($accesorios as $acc )
                <br>Parte: {{ $acc->nombre_accesorio }} - No. accesorio: {{ $acc->numero_parte_accesorio }}

              @endforeach
            </td>
          </tr>
          <tr>
            <td  colspan="4">  Conexión Con otro equipo: {{ $equipo->conexion_otro_eq }}</td>
          </tr>
          <tr>
            <td id="gris" colspan="4"> <div align="center"> LOCALIZACIÓN Y FRECUENCIA DE USO </div></td>
          </tr>
          <tr>

           <td  colspan="2">   Unidad: {{ $equipo->idunidadsalud }}</td>

                    <td  colspan="2">   Departamento/Servicio: {{ $equipo->servicio }} </td>


          </tr>
          <tr>

           <td  colspan="2">   Área/Sala/Laboratorio: {{ $equipo->ambiente }}</td>


                    <td  colspan="2"> Usuario responsable: {{ $equipo->name }}</td>


          </tr>
          <tr>

            <td  colspan="2">  Frecuencia de uso:
              <br>
              {{ $equipo->frec_uso_hora_dia }} horas/día - {{ $equipo->frec_uso_dia_semana }} días/semana
            </td>


             @if ($equipo->personal_cap=="1")
            <td  colspan="2">  Cuenta con personal capacitado para su uso? Sí</td>
            @else
            <td  colspan="2">  Cuenta con personal capacitado para su uso? No</td>
            @endif
          </tr>



          <tr>
            <td id="gris" colspan="4"> <div align="center"> INFORMACIÓN TÉCNICA </div></td>
          </tr>
          @if (count($cacateristicas_tecnicas)==0 && count($cacateristicas_especiales)==0)
          <tr>
             <td id="neg" colspan="4"> <div align="center"><font style="text-transform: uppercase;"> NO EXISTE INFORMACIÓN TÉCNICA </font></div></td>
           </tr>
           @else
          @foreach ($cacateristicas_tecnicas as $carac)
            <tr>
               <td id="neg" colspan="4"> <div align="center"><font style="text-transform: uppercase;"> {{ $carac->nombre_subgrupo_carac_tecnica }}  </font></div></td>
             </tr>
            <tr>

            <td id="neg" colspan="4"> <div align="center"><font style="text-transform: uppercase;"> {{ $carac->nombre_caracteristica_tecnica }} </font></div></td>
            </tr>

             <tr>

             <td  colspan="4"><font style="text-transform: uppercase;"> {{ $carac->nombre_valor_ref_tec }} </font> {{ $carac->descripcion_detalle_caracteristica_tecnica }} {{ $carac->valor_detalle_caracteristica_tecnica }} </td>

             </tr>
          @endforeach
          @foreach ($cacateristicas_especiales as $carace)
            <tr>

            <td id="neg" colspan="4"> <div align="center"><font style="text-transform: uppercase;"> {{ $carace->nombre_caracteristica_especial }} </font></div></td>
            </tr>

             <tr>

             <td  colspan="4"><font style="text-transform: uppercase;"> {{ $carace->nombre_valor_ref_esp }} </font> {{ $carace->descripcion_detalle_caracteristica_especial }} {{ $carace->valor_detalle_caracteristica_especial }} </td>

             </tr>
          @endforeach

          @endif





          @if (count($manuales)==0)


              <tr>
                <td id="gris" colspan="2">  FABRICANTE: </td>
                <td id="gris" colspan="2"> <div align="center"> EXSITENCIA DE INFORMACIÓN TÉCNICA </div></td>
              </tr>
              <tr>
                <td  colspan="2">  DIRECCIÓN: {{ $equipo->direccion_fabricante }}
                                    </td>
                <td id="neg"  colspan="2" rowspan="8">  No existe información técnica</td>
              </tr>
              <tr>
                <td  colspan="2">  TEL/FAX: {{ $equipo->telefono_fabricante }} / {{ $equipo->fax_fabricante }} </td>

              </tr>
              <tr>
                <td  colspan="2">  e-mail:  {{ $equipo->correo_fabricante }}</td>

              </tr>



              <tr>
                <td id="gris" colspan="2">  DISTRIBUIDOR: </td>

              </tr>
              <tr>
                <td  colspan="2">  DIRECCIÓN: {{ $equipo->direccion_proveedor }}</td>

              </tr>
              <tr>
                <td  colspan="2">  TEL/FAX: {{ $equipo->telefono_proveedor }}/{{ $equipo->fax_proveedor }}</td>

              </tr>
              <tr>
                <td  colspan="2">  e-mail: {{ $equipo->correo_proveedor }}</td>

              </tr>

              <tr>
                <td  colspan="2">  NOMBRE DE CONTACTO: {{ $equipo->contacto_proveedor }}</td>

              </tr>

            @else

              <tr>
                <td id="gris" colspan="2">  FABRICANTE: </td>
                <td id="gris" colspan="2"> <div align="center"> EXSITENCIA DE INFORMACIÓN TÉCNICA </div></td>
              </tr>
              <tr>
                <td  colspan="2">  DIRECCIÓN: {{ $equipo->direccion_fabricante }}
                                    </td>
                <td  colspan="2" rowspan="8" >

                @foreach ($manuales as $manual)
                    {{ $manual->nombre_tipo_manual }} : {{ $manual->link_detalle_manual }} <br>
                @endforeach
                </td>
              </tr>
              <tr>
                <td  colspan="2">  TEL/FAX: {{ $equipo->telefono_fabricante }} / {{ $equipo->fax_fabricante }} </td>

              </tr>
              <tr>
                <td  colspan="2">  e-mail:  {{ $equipo->correo_fabricante }}</td>

              </tr>



              <tr>
                <td id="gris" colspan="2">  DISTRIBUIDOR: </td>

              </tr>
              <tr>
                <td  colspan="2">  DIRECCIÓN: {{ $equipo->direccion_proveedor }}</td>

              </tr>
              <tr>
                <td  colspan="2">  TEL/FAX: {{ $equipo->telefono_proveedor }}/{{ $equipo->fax_proveedor }}</td>

              </tr>
              <tr>
                <td  colspan="2">  e-mail: {{ $equipo->correo_proveedor }}</td>

              </tr>

              <tr>
                <td  colspan="2">  NOMBRE DE CONTACTO: {{ $equipo->contacto_proveedor }}</td>

              </tr>

            @endif







             @foreach ($repuestos as $repuesto)
               <tr>
                 <td id="gris" colspan="4"> <div align="center"> REPUESTOS EN ALMACÉN </div></td>
               </tr>
               <tr>
               <td  colspan="2">  Repuesto: {{ $repuesto->nombre }}</td>
               <td  colspan="2">  No. de parte: {{ $repuesto->num_serie }}</td>
               </tr>
             @endforeach



    </table>



</body>
</html>

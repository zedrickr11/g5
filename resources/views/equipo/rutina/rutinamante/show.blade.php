<!DOCTYPE html>
<html>
<title>Historia técnico</title>
<link type="text/css" rel="stylesheet" href="estilos.css" />
<body>
  <SPAN style="position: absolute; top: -45 px; left: -45 px;">
    </SPAN>


      <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">
        <tr>
          <td id="negrita" > 	<div align="center"> Insituto Guatemalteco de Seguridad Social (IGGS)</div>  </td>

          <td  padding="0" rowspan="3" ><div align="center">

      <img src="{{ public_path('dist/img/igsslogo.png') }}" width="70" height="70">
    </div></td></tr>
    <tr>

    <td id="negrita" > <div align="center"> <font style="text-transform: uppercase;"> HISTORIAL TÉCNICO</font> </div></td>

</tr>
      <tr>
    <td id="p2" > <div align="center"> IDENTIFICACIÓN </div></td>
  </tr>

  <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">
    <tr>
      <td id="" colspan="3"> <div align="left"> EQUIPO: {{ $equipo->nombre_equipo }} </div></td>
      <td id="" colspan="2"> <div align="left"> MARCA:  {{ $equipo->marca }}</div></td>
    </tr>
    <tr>
      <td id="" colspan="3"> <div align="left"> MODELO: {{ $equipo->modelo }}</div></td>
      <td id="" colspan="2"> <div align="left"> SERIE: {{ $equipo->serie }}</div></td>
    </tr>
    <tr>
      <td id="" colspan="3"> <div align="left"> INVENTARIO: {{ $equipo->inventario }}</div></td>
      <td id="" colspan="2"> <div align="left"> CÓDIGO:  {{ $equipo->codigo }}</div></td>
    </tr>
    @foreach ($preventivo as $prev)


  <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">
    <tr>
      <td id="gris" colspan="1"> <div align="left">FECHA:<br>{{ $prev->fecha_realizacion_rutina }}</div></td>

      <td id="gris" colspan="1"> <div align="center">MANTENIMIENTO<br>{{ $prev->tipo_rutina }} </div></td>
      <td id="gris" colspan="1"> <div align="center">
        @if ($prev->frecuencia_rutina==1)
          Mensual
        @elseif ($prev->frecuencia_rutina==2)
          Bimensual
        @elseif ($prev->frecuencia_rutina==3)
          Trimestral
        @elseif ($prev->frecuencia_rutina==6)
          Semestral
        @elseif ($prev->frecuencia_rutina==12)
          Anual
        @endif
       </div>
     </td>
      <td id="gris" colspan="2"> <div align="left"> OBSERVACIONES: <br>{{ $prev->observaciones_rutina }} </div></td>
    </tr>
    @endforeach
    @foreach ($correctivo as $corr)


    <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">
      <tr>
        <td id="" > <div align="left"> FECHA:<br>{{ $corr->fecha_realizacion_rutina }}</div></td>

        <td id="" > <div align="center">MANTENIMIENTO<br>{{ $corr->tipo_rutina }}</div></td>
        <td id="" > <div align="left"> FALLA: <br>{{ $prev->observaciones_rutina }} </div></td>
      </tr>
    </table>
    @endforeach
  </table>

</table>







</table>

</body>
</html>

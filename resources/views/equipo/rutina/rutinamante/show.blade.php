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
          <td id="negrita" > 	<div align="center"> Insituto Guatemalteco de Seguridad Social (IGGS)</div>  </td>

          <td  padding="0" rowspan="3" ><div align="center">

      <img src="{{ public_path('dist/img/igsslogo.png') }}" width="70" height="70">
    </div></td></tr>
    <tr>
      @foreach($subgrupo as $hosp)
      @if ($hosp->idsubgrupo==$eq->idsubgrupo)
    <td id="negrita" > <div align="center"> <font style="text-transform: uppercase;"> HISTORIAL TÉCNICO RESUMEN {{ $hosp->subgrupo}}</font> </div></td>
  @endif
@endforeach
</tr>
      <tr>
    <td id="p2" > <div align="center"> IDENTIFICACIÓN </div></td>
  </tr>

  <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">
    <tr>
  <td id="" > <div align="left"> EQUIPO: {{ $eq->nombre_equipo}}</div></td>
    <td id="" > <div align="left"> MARCA: {{ $eq->marca}} </div></td>
</tr>
<tr>
<td id="" > <div align="left"> MODELO: {{ $eq->modelo}}</div></td>
<td id="" > <div align="left"> SERIE: {{ $eq->serie}} </div></td>
</tr>
<tr>
<td id="" > <div align="left"> MODELO: {{ $eq->modelo}}</div></td>
<td id="" > <div align="left"> SERIE: {{ $eq->idequipo}} </div></td>
</tr>

</table>




  @endforeach

</table>

</body>
</html>

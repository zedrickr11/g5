<!DOCTYPE html>
<html>
<title>Historia técnico</title>
<link type="text/css" rel="stylesheet" href="estilos.css" />
<body>
  <SPAN style="position: absolute; top: -45 px; left: -45 px;">
    </SPAN>


      <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000"  style="table-layout:fixed;word-wrap:break-word;">
        <tr>
          <td id="negrita" colspan="4" > 	<div align="center"> RUTINAS DE MANTENIMIENTO @if ($rutina->idtipo_rutina==1)
         PREVENTIVO     @endif
         @if ($rutina->idtipo_rutina==2)
         CORRECTIVO   @endif
         @if ($rutina->idtipo_rutina==3)
         PRUEBA    @endif </div>  </td>
<td  padding="0" rowspan="2" colspan="3" ><div align="center">
Instituto Guatemalteco de <br> Seguridad Social
  <br>
  <br>
  División de Mantenimiento
</td>

          <td  padding="0" rowspan="2"  ><div align="center">

      <img src="{{ public_path('dist/img/igsslogo.png') }}" width="70" height="70">
    </div></td></tr>
    <tr>

    <td id="negrita" colspan="4" > HOSPITAL:  {{$equipo->hospital}} </td> <!-- <font style="text-transform: uppercase;"></font>-->

</tr>
      <tr>
    <td id="negrita"  colspan="2" > ELEMENTO </td>
    <td id="negrita"  colspan="2"> {{$equipo->nombre_equipo}} </td>
    <td id="negrita" colspan="4" >  SERVICIO:</td>


  </tr>
  <tr>
<td id="negrita"  colspan="2">  CARACTERÍSTICA </td>
<td id="negrita"  colspan="2" >  </td>
<td id="negrita" colspan="4" >  AMBIENTE: {{$equipo->ambiente}} </td>


</tr>
</table>
  <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000" style="table-layout:fixed;word-wrap:break-word;">
    <tr>
      <td id="" colspan="7"> <div align="center">   @if ($rutina->frecuencia_rutina==1)
      MENSUAL    @endif
      @if ($rutina->frecuencia_rutina==2)
      BIMENSUAL    @endif
      @if ($rutina->frecuencia_rutina==3)
      TRIMESTRAL     @endif
      @if ($rutina->frecuencia_rutina==6)
      SEMESTRA     @endif
      @if ($rutina->frecuencia_rutina==12)
      ANUAL    @endif
      @if ($rutina->frecuencia_rutina=='')
      @if ($rutina->idtipo_rutina==2)
      CORRECTIVO @endif
      @if ($rutina->idtipo_rutina==3)
      PRUEBA @endif
       @endif  </div></td>
      <td id="" > <div align="left"> </div></td>
    </tr>

    @if($rutina->idtipo_rutina==3)
    @php($cont=1)

    @foreach($rutinaPrueba as $prueba)
    <tr>
      <td id="" colspan="1"> <div align="center">{{$cont}} </div></td>

        <td id="" colspan="6"> <div align="center">{{$prueba->descripcion}} </div></td>

        <td id="" colspan="1"> <div align="center">@if($prueba->estado_detalle_rutina_prueba==1) Realizado @endif </div></td>
      </tr>
      @php($cont=$cont+1)
    @endforeach

    @else
    @php($cont=1)
    @foreach($ruman as $prueba)
    <tr>
      <td id="" colspan="1"> <div align="center">{{$cont}} </div></td>

        <td id="" colspan="6"> <div align="center">{{$prueba->descripcion}} </div></td>

        <td id="" colspan="1"> <div align="center">@if($prueba->estado_detalle_caracteristica_rutina==1) Realizado @endif </div></td>
      </tr>
      @php($cont=$cont+1)
    @endforeach


   @endif



  </table>
  <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000" style="table-layout:fixed;word-wrap:break-word;">

  <tr>
    <td id="" colspan="2"> <div align="left">FECHA DE REALIZACIÓN</td>
    <td id="" colspan="2"> <div align="left">{{$rutina->fecha_realizacion_rutina}} </td>
      </tr>
      <tr>
        <td id="" colspan="2"> <div align="left">CÓDIGO DE TÉCNICO</td>
        <td id="" colspan="2"> <div align="left"> </td>
          </tr>
          <tr>
            <td id="" colspan="2"> <div align="left">FIRMA DE TÉCNICO</td>
            <td id="" colspan="2"> <div align="left"> </td>
              </tr>
              <tr>
                <td id="" colspan="2"> <div align="left">TIEMPO DE EJECUCION</td>
                <td id="" colspan="2"> <div align="left"> {{$rutina->tiempo_estimado_rutina_mantenimiento}} Hrs</td>
                </tr>
  </table>

  <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000" style="table-layout:fixed;word-wrap:break-word;">
    <tr>
      <td id="" colspan="2"> <div align="left">Materia Gastable</td>
        <td id="" colspan="2"> <div align="left">Repuestos Mínimos</td>
      <td id="" colspan="2"> <div align="left">Herramientas y Equipo</td>
        </tr>
        <tr>
          <td id="" colspan="2"> <div align="left">@foreach($insumo as $he)
            {{$he->nombre}}:   {{$he->cantidad}}
            <br>

            @endforeach</td>
            <td id="" colspan="2"> <div align="left">@foreach($repuesto as $he)
              {{$he->nombre}}:   {{$he->cantidad}}
              <br>

              @endforeach</td>
          <td id="" colspan="2"> <div align="left">@foreach($herramienta as $he)
            {{$he->herramienta}}
            <br>

            @endforeach
          </td>
              </tr>


  </table>
  <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000" style="table-layout:fixed;word-wrap:break-word;">
    <tr>
      <td id="" colspan="2"> <div align="left">  OBSERVACIONES: {{$rutina->observaciones_rutina}}</td>


    </tr>


</table>
</body>
</html>

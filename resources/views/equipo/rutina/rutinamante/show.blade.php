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
          <td id="negrita" colspan="1"> 	<div align="center"> RUTINA DE MANTENIMIENTO PREVENTIVO </div>  </td>
          <td id="negrita" rowspan="2" > <div align="center"> INSTITUTO GUATEMALTECO <BR> DE
            SEGURIDAD SOCIAL <BR><BR>
          Division de Mantenimiento</td></div>
          <td rowspan="2" ><div align="center">
<IMG src="dist/img/iggs.jpg"  WIDTH=50 HEIGHT=50 BORDER=0>    </td>
</div></tr>
  @foreach($hospital as $hosp)
  @if ($hosp->idhospital==$eq->idhospital)
<tr>
  <td id="negrita" > <div align="left"> HOSPITAL:  {{ $hosp->hospital}} </div></td>
<br>
 </tr>
       @endif
   @endforeach

 <tr>
   <td > <div align="left">Equipo:  {{ $eq->nombre_equipo}}</div></td>

     <td id="negrita"  colspan="2" rowspan="3" > <div align="left">Servicio:   {{ $eq->servicio}}
     </div></td>
 </tr>
 <tr>
   <td  <div align="left">Marca: {{ $eq->marca}}  </div></td>
 </tr>
 <tr>
   <td > <div align="left">Modelo:  {{ $eq->modelo}}</div></td>
 </tr>
 <tr>
   <td > <div align="left">Serie:       {{ $eq->serie}}</div></td>
 <td id="negrita"  colspan="2" rowspan="3"> <div align="left">Ambiente:  {{ $eq->ambiente}} </div></td>
 </tr>
 <tr>
   <td > <div align="left">No inv tecnico:</div></td>
 </tr>
 <tr>
   <td > <div align="left">Id:  {{ $eq->idequipo}}</div></td>
 </tr>
 <table  id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">
       <tr>
         <td id="negrita" colspan="5" > 	<div align="center"> Mensual</div>  </td>
           <td id="negrita" > 	<div align="center"> 1</div>  </td>
             <td id="negrita" > 	<div align="center"> 2</div>  </td>
               <td id="negrita" colspan="3"> 	<div align="center"> 3</div>  </td>
                 <td id="negrita " colspan="3" > 	<div align="center"> 4</div>  </td>
        </tr>
        <tr>
          <td id="negrita" > 	<div align="center"> 1</div>  </td>
            <td    colspan="4" > 	<div align="left">Inspeccionar las condiciones ambientales <br>en las que se
encuentra el equipo</div>  </td>
    <td id="negrita" > 	<div align="center"> </div>  </td>
      <td id="negrita" > 	<div align="center"> </div>  </td>
      <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
        <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>

         </tr>

          <tr>
            <td id="negrita" > 	<div align="center"> 2</div>  </td>
              <td    colspan="4" > 	<div align="left">Efectuar limpieza integral externa del equipo <br>(bandeja de
agua, tubería de cobre, etc.)</div>  </td>
      <td id="negrita" > 	<div align="center"> </div>  </td>
        <td id="negrita" > 	<div align="center"> </div>  </td>
        <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
          <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>

           </tr>
           <tr>
             <td id="negrita" > 	<div align="center"> 3</div>  </td>
               <td    colspan="4" > 	<div align="left">Revisar ductería y aislante de la misma</div>  </td>
       <td id="negrita" > 	<div align="center"> </div>  </td>
         <td id="negrita" > 	<div align="center"> </div>  </td>
         <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
           <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>

            </tr>
            <tr>
              <td id="negrita" > 	<div align="center"> 4</div>  </td>
                <td    colspan="4" > 	<div align="left">Efectuar limpieza general de condensador y evaporador</div>  </td>
        <td id="negrita" > 	<div align="center"> </div>  </td>
          <td id="negrita" > 	<div align="center"> </div>  </td>
          <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
            <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>

             </tr>
             <tr>
               <td id="negrita" > 	<div align="center"> 5</div>  </td>
                 <td    colspan="4" > 	<div align="left">Limpiar aspas y turbinas</div>  </td>
         <td id="negrita" > 	<div align="center"> </div>  </td>
           <td id="negrita" > 	<div align="center"> </div>  </td>
           <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
             <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
              </tr>
              <tr>
                <td id="negrita" > 	<div align="center"> 6</div>  </td>
                  <td    colspan="4" > 	<div align="left">Realizar limpieza general y lubricación de motores</div>  </td>
          <td id="negrita" > 	<div align="center"> </div>  </td>
            <td id="negrita" > 	<div align="center"> </div>  </td>
            <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
              <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
               </tr>
               <tr>
                 <td id="negrita" > 	<div align="center"> 7</div>  </td>
                   <td    colspan="4" > 	<div align="left">Engrasar chumaceras, baleros/cojinetes <br>según sea
necesario</div>  </td>
           <td id="negrita" > 	<div align="center"> </div>  </td>
             <td id="negrita" > 	<div align="center"> </div>  </td>
             <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
               <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                </tr>
                <tr>
                  <td id="negrita" > 	<div align="center"> 8</div>  </td>
                    <td    colspan="4" > 	<div align="left">Probar controles mecánicos, eléctricos, capacitores y<br>
protectores de sobrecarga</div>  </td>
            <td id="negrita" > 	<div align="center"> </div>  </td>
              <td id="negrita" > 	<div align="center"> </div>  </td>
              <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                 </tr>
                 <tr>
                 <td id="negrita" > 	<div align="center"> 9</div>  </td>
                   <td    colspan="4" > 	<div align="left">Efectuar chequeo general de contactos y controles <br>
eléctricos</div>  </td>
           <td id="negrita" > 	<div align="center"> </div>  </td>
             <td id="negrita" > 	<div align="center"> </div>  </td>
             <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
               <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                </tr>
                <tr>
                <td id="negrita" > 	<div align="center"> 10</div>  </td>
                  <td    colspan="4" > 	<div align="left">Reapretar soportería, pernos y tornillos en general</div>  </td>
          <td id="negrita" > 	<div align="center"> </div>  </td>
            <td id="negrita" > 	<div align="center"> </div>  </td>
            <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
              <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
               </tr>
               <tr>
               <td id="negrita" > 	<div align="center"> 11</div>  </td>
                 <td    colspan="4" > 	<div align="left">Chequear las presiones de succión y descarga (ver<br>
reverso)</div>  </td>
         <td id="negrita" > 	<div align="center"> </div>  </td>
           <td id="negrita" > 	<div align="center"> </div>  </td>
           <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
             <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
              </tr>
              <tr>
              <td id="negrita" > 	<div align="center"> 12</div>  </td>
                <td    colspan="4" > 	<div align="left">Verificar el adecuado funcionamiento del equipo</div>  </td>
        <td id="negrita" > 	<div align="center"> </div>  </td>
          <td id="negrita" > 	<div align="center"> </div>  </td>
          <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
            <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
             </tr>
               <tr>
                 <td colspan="5"    > 	<div align="left">FECHA DE REALIZACIÓN</div>  </td>
           <td id="negrita" > 	<div align="center"> </div>  </td>
             <td id="negrita" > 	<div align="center"> </div>  </td>
             <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
               <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>

                </tr>
                <tr>
                  <td colspan="5"    > 	<div align="left">CÓDIGO DE TÉCNICO</div>  </td>
            <td id="negrita" > 	<div align="center"> </div>  </td>
              <td id="negrita" > 	<div align="center"> </div>  </td>
              <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                 </tr>
                 <tr>
                   <td colspan="5"    > 	<div align="left">FIRMA DEL TÉCNICO</div>  </td>
             <td id="negrita" > 	<div align="center"> </div>  </td>
               <td id="negrita" > 	<div align="center"> </div>  </td>
               <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                 <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                  </tr>
                  <tr>
                    <td colspan="5"    > 	<div align="left">TIEMPO DE EJECUCIÓN (TIEMPO ESTÁNDAR 1 H.)</div>  </td>
              <td id="negrita" > 	<div align="center"> </div>  </td>
                <td id="negrita" > 	<div align="center"> </div>  </td>
                <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                  <td id="negrita" colspan="3" > 	<div align="center"> </div>  </td>
                   </tr>


 </table>




  @endforeach

</table>

</body>
</html>

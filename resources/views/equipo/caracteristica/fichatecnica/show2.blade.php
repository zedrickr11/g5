
<title>Página de ejemplo</title>
	<link type="text/css" rel="stylesheet" href="estilos.css" />

  <body>
    <SPAN style="position: absolute; top: -45 px; left: -45 px;">
      </SPAN>
	<div id="p" align="center"> Instituto Guatemalteco de Seguridad Social (IGGS)</div>

  <div id="p1" align="center"> FICHA TÉCNICA EQUIPO MÉDICO</div>
  <div id="p2" align="center"> IDENTIFICACÍON</div>

        @foreach($equipo as $eq)




    <table id="table" width="100%" border="10" cellpadding="5" cellspacing="0" bordercolor="#000000">

    <tr>

    <th >EQUIPO: {{ $eq->nombre_equipo}}</th>
    <th>MARCA: {{ $eq->marca}}</th>


    </tr>
    <tr>

    <th >MODELO: {{ $eq->modelo}}</th>
    <th>SERIE: {{ $eq->serie}}</th>


    </tr>





    </table>
  @endforeach
</body>

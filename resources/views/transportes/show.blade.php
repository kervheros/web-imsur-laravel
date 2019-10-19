@extends('layouts.admin')
@section('content')

<style type="text/css">
#apDiv1 {
width: 15%;
height: 40%
text-align: center;
}
</style>
  <body>
    <p>&nbsp;</p>
    <table width="100%" style="text-align:center">
          <tr>
            <td ><p>Empresa Minera del Sur &quot;IMSUR&quot;<br>
              Avenida circunvalacion S/N<br>
              Telefono 62-27793</p>
              </td>
            <td><h3><strong>PAGO TRANSPORTE<strong></h3></td>
            <td ><img src="../images/logo-principal.png" width="248" height="50"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>

    <ul>
      @foreach ($code_liq as $tra)

       <li> Fecha pago : {{ $tra->fecha_pago }}</li>

    </ul>


    <table width="100%" height="30%" border="1">
      <thead>
      <tr bgcolor="#00CCFF">
        <th style="text-align:center"><h5><strong>Cod. liquidacion</strong></h5></th>
        <th style="text-align:center"><h5><strong>Fecha ingreso</strong></h5></th>
        <th style="text-align:center"><h5><strong>Proveedor</strong></h5></th>
        <th style="text-align:center"><h5><strong>Transportista</strong></h5></th>
        <th style="text-align:center"><h5><strong>Placa Transportista</stron></h5></th>
        <th style="text-align:center"><h5><strong>Transporte</stron></h5></th>
      <tbody>
      <tr style="text-align:center">
        <td><h6>{{ $tra->cod_liquidacion }}</h6></td>
        <td><h6>{{ $tra->fecha_ingreso }}</h6></td>
				<td><h6>{{ $tra->proveedor }}</h6></td>
        <td><h6>{{ $tra->transportista }}</h6></td>
        <td><h6>{{ $tra->placa }}</h6></td>
        <td><h6>{{ $tra->trans_1 }}</h6></td>
        @endforeach
  </table>

<p>&nbsp;</p>
  <div>
      <div>
        <!--<p><strong>Detalle Retenciones de Ley</strong></p>-->
      </div>
    <div>
      <p><strong>Importe total :</strong> {{ $tra->trans_1 }}</p>
    </div>
  </div>
<table width="100%">
  <tr>
    <td>

			<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Son :</strong> {{ $conve }}</p>


    </td>
<td width="50%" style="text-align:center">
  <p><strong>Recibio conforme:</strong> {{ $tra->nombre_completo}}<br>
   <strong>CI:</strong> {{ $tra->ci}}</p></td>
</td>
</tr>
</table>
    <p>&nbsp;</p>
    <ul>


    </ul>
    <!--<p> {{ link_to('users', 'Volver atrás') }} </p>-->
  </body>

@endsection

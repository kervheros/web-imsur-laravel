@extends('layouts.admin')
@section('content')

<style type="text/css">
#apDiv1 {
width: 15%;
height: 40%
text-align: center;
}
</style>
  <body style="color:#fff">
    <p>&nbsp;</p>
    <table width="100%" style="text-align:center">
          <tr>
            <td ><p>Empresa Minera del Sur &quot;IMSUR&quot;<br>
              Avenida circunvalacion S/N<br>
              Telefono 62-27793</p>
              </td>
            <td><h3><strong>ANTICIPO DE CARGA<strong></h3></td>
            <td ><img src="../images/logo-principal.png" width="248" height="50"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>

    <ul>
      @foreach ($code_liq as $anti)
          @foreach ($anti->pago_a as $pago)
            <li> Fecha pago anticipo : {{ $pago->fecha_pago }}</li>
          @endforeach


    </ul>


    <table width="100%" height="30%" border="1">
      <thead>
      <tr bgcolor="#2984e6">
        <th style="text-align:center"><h5><strong>Cod. liquidacion</strong></h5></th>
        <th style="text-align:center"><h5><strong>Fecha ingreso</strong></h5></th>
        <th style="text-align:center"><h5><strong>Proveedor</strong></h5></th>
        <th style="text-align:center"><h5><strong>Anticipo</strong></h5></th>

      <tbody>
      <tr style="text-align:center">
        <td><h6>{{ $anti->cod_liquidacion }}</h6></td>
        <td><h6>{{ $anti->fecha_ingreso }}</h6></td>
				<td><h6>{{ $anti->proveedor_p->proveedor }}</h6></td>
        <td><h6>{{ $anti->anticipo_ }}</h6></td>
        @endforeach
  </table>

<p>&nbsp;</p>
  <div>
      <div>
        <!--<p><strong>Detalle Retenciones de Ley</strong></p>-->
      </div>
    <div>
    <p><strong>Importe total :</strong> {{ $anti->anticipo_ }}</p>
    </div>
  </div>
<table width="100%">
  <tr>
    <td>

			<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Son :</strong> {{ $conve }}</p>


    </td>
<td width="50%" style="text-align:center">
  <p><strong>Recibio conforme:</strong> {{ $anti->persona_p->nombre_completo}}<br>
   CI: {{ $anti->persona_p->ci}}</p></td>
</td>
</tr>
</table>
    <p>&nbsp;</p>
    <ul>


    </ul>
    <!--<p> {{ link_to('users', 'Volver atrás') }} </p>-->
  </body>

@endsection

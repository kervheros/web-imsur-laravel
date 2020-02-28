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
            <td><h3><strong>LIQUIDACIONES<strong></h3></td>
            <td ><img src="../images/logo-principal.png" width="248" height="50"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>

    <ul>
      @foreach ($code_liq as $liq)

       <li> Fecha liquidacion : {{ $liq->fecha_liquidacion }}</li>

    </ul>


    <table width="100%" height="30%" border="1">
      <thead>
      <tr bgcolor="#2984e6">
        <th style="text-align:center"><h5><strong>Cod. liquidacion</strong></h5></th>
        <th style="text-align:center"><h5><strong>Proveedor</strong></h5></th>
        <th style="text-align:center"><h5><strong>Fecha ingreso</strong></h5></th>
        <th style="text-align:center"><h5><strong>TMS</strong></h5></th>
        <th style="text-align:center"><h5><strong>Zinc (%)</strong></h5></th>
        <th style="text-align:center"><h5><strong>Plata DM</strong></h5></th>
        <th style="text-align:center"><h5><strong>Plomo (%)</strong></h5></th>
        <th style="text-align:center"><h5><strong>Monto Bs</strong></h5></th>
        <th style="text-align:center"><h5><strong>Prod. min</strong></h5></th>
        <th style="text-align:center"><h5><strong>Importe Total</strong></h5></th>
        <th style="text-align:center"><h5><strong>Reten de Ley</strong></h5></th>
        <th style="text-align:center"><h5><strong>Anticipo</strong></h5></th>
        <th style="text-align:center"><h5><strong>Trans</strong></h5></th>
        <th style="text-align:center"><h5><strong>A cuenta</strong></h5></th>
        <th style="text-align:center"><h5><strong>Liqui adeudadas</strong></h5></th>
        <th style="text-align:center"><h5><strong>Prestamo</strong></h5></th>
        <th style="text-align:center"><h5><strong>Regalias (6%)</strong></h5></th>
        <th style="text-align:center"><h5><strong>Saldo pagar</strong></h5></th>

      <tbody>
      <tr style="text-align:center">
        <td><h6>{{ $liq->cod_liquidacion }}</h6></td>
        <td><h6>{{ $liq->proveedor_p->proveedor }}</h6></td>
        <td><h6>{{ $liq->fecha_ingreso }}</h6></td>
        <td><h6>{{ $liq->TMS }}</h6></td>
        <td><h6>{{ $liq->ZINC }}</h6></td>
        <td><h6>{{ $liq->PLATA_DM }}</h6></td>
        <td><h6>{{ $liq->PLOMO }}</h6></td>
        <td><h6>{{ $liq->monto }}</h6></td>
        <td><h6>{{ $liq->mas_transporte }}</h6></td>
        <td><h6>{{ $liq->importe_total }}</h6></td>
      @endforeach
      @foreach ($liq->total_r as $tot)
        <td><h6>{{ $tot->total_retenciones_ley }}</h6></td>
        <td><h6>{{ $tot->menos_anticipos }}</h6></td>
        <td><h6>{{ $tot->menos_transporte }}</td>
        <td><h6>{{ $tot->menos_prestamos }}</h6></td>
        <td><h6>{{ $tot->menos_liquidaciones_adeudadas }}</h6></td>
        <td><h6>{{ $tot->menos_prestamos }}</h6></td>
        <td><h6>{{ $tot->menos_regalias }}</h6></td>
        <td><h6>{{ $tot->saldo_a_pagar }}</h6></td>--}}
      @endforeach

  </table>

<p>&nbsp;</p>
  <div>
      <div>
        <p><strong>Detalle Retenciones de Ley</strong></p>
      </div>
    <div>
      <p>Cooperativa : {{ $liq->coop->cooperativa }}</p>
    </div>
  </div>
<table width="100%">
  <tr>
    <td>
    <table width="70%" height="30%" >
      <thead>
      <tr bgcolor="#2984e6" >
        <th style="text-align:center">descripcion</th>
        <th style="text-align:center">porcentaje(%)</th>
        <th style="text-align:center">total (Bs)</th>

        @foreach ($code_reten as $ret)
      <tbody>
        <tr style="text-align:center">
        <td>{{$ret->descripcion}}</td>
        <td>{{$ret->porcentaje}}</td>
        <td>{{ $ret->total_descuento }}</td>
        @endforeach
        <tr bgcolor="#99CCCC" style="text-align:center">
        <td colspan="2">Total retenciones </td>
        @foreach ($liq->total_r as $tota)
          <td> {{ $tota->total_retenciones_ley }}</td>
        @endforeach
  </table>
</td>
<td style="text-align:center">
  <p>Recibi : {{ $liq->persona_p->nombre_completo}}<br>
   CI: {{ $liq->persona_p->ci}}</p></td>
</td>
</tr>
</table>
    <p>&nbsp;</p>
    <ul>





      <!--<table width="459" class="table">

         <thead>
           <th width="138">descripcion</th>
           <th width="133">porcentaje</th>
           <th width="365">total</th>

         @foreach ($code_reten as $ret)

         <tbody>
           <td>{{$ret->descripcion}}</td>
           <td>{{$ret->porcentaje}}</td>
           <td>{{ $ret->total_descuento }}</td>

        @endforeach
      </table>-->


    </ul>
    <!--<p> {{ link_to('users', 'Volver atrás') }} </p>-->
  </body>

@endsection

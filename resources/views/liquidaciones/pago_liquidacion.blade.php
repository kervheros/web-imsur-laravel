@extends('layouts.admin')
@section('content')

<body style="color:#fff">
<p>&nbsp;</p>
<h1>LIQUIDACIONES</h1>

@if (Auth::user()->id > 1)
  <div class="col-md-12">
  <div class="page-header">
                   <h1>

                       {!!Form::open(['route'=>'liquidacion.principal','method'=>'GET','class'=>'form-inline pull-center'])!!}
                           <div class="form-group">
                               {!!Form::text('cod_liquidacion', null, ['class' => 'form-control', 'placeholder' => 'Codigo liquidacion'])!!}
                           </div>

                           <div class="form-group">
                               <button type="submit" class="btn btn-default">
                                   <span class="glyphicon glyphicon-search"></span>
                               </button>
                           </div>
                       {!!Form::close()!!}
                   </h1>
                 </div>
               </div>
@endif
{{-- parte de stado cargas
<table class="table">
  <thead>
    <th>Codigo</th>
    <th>Proveedor</th>
    <th>Tipo muestra</th>
    <th>Estado</th>
  </thead>
  @foreach ($stado as $carga)
      <tbody>
        <td>{{$carga->cod_liquidacion}} </td>
        <td>{{$carga->proveedor}} </td>
        <td>{{$carga->tipo}} </td>
        <td>{{$carga->nuevo}} </td>
      </tbody>
  @endforeach
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>  --}}

<table class="table">

  <thead>
    <th>Codigo</th>
    <th>Proveedor</th>
    <th>Fecha de ingreso</th>
    <th>Vista Factura</th>
  </thead>
  @foreach($datos_liquido as $liq)
  <tbody>
    <td>{{$liq->cod_liquidacion}}</td>
    <td>{{$liq->proveedor_p->proveedor}}</td>
    <td>{{ $liq->fecha_ingreso }}</td>
    <td>
        {!!link_to_route('liquidacion.mostrar',$title = 'Ver factura',$parameters = $liq->cod_liquidacion, $attributes=['class'=>'btn btn-primary'])!!}
    </td>
  </tbody>
  @endforeach
</table>
{!!$datos_liquido->render()!!}

</body>
@endsection

@extends('layouts.admin')
@section('content')

<body style="color:#fff">
<p>&nbsp;</p>
<h1>ANTICIPO DE CARGA</h1>
<!--<div class="page-header">-->
@if (Auth::user()->id > 1)

  <div class="col-md-12">
  <div class="page-header">
                   <h1>

                       {!!Form::open(['route'=>'anticipo.index','method'=>'GET','class'=>'form-inline pull-center'])!!}
                           <div class="form-group">
                               {!!Form::text('cod_liqui', null, ['class' => 'form-control', 'placeholder' => 'Codigo liquidacion'])!!}
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
<table class="table">

  <thead>
    <th>Codigo</th>
    <th>Proveedor</th>
    <th>Vista Factura</th>
  </thead>
  @foreach($datos_anticipo as $anti)
  <tbody>
    <td>{{$anti->cod_liquidacion}}</td>
    <td>{{$anti->proveedor_p->proveedor }}</td>
    <td>
        {!!link_to_route('anticipo.show',$title = 'Ver factura',$parameters = $anti->cod_liquidacion, $attributes=['class'=>'btn btn-primary'])!!}
    </td>
  </tbody>
  @endforeach
</table>
{!!$datos_anticipo->render()!!}
@stop

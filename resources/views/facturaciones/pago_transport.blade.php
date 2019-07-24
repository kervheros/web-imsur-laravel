@extends('layouts.admin')
@section('content')

<h1>Pago Transporte</h1>

<!--<div class="page-header">-->

  <div class="col-md-12">
  <div class="page-header">
                   <h1>

                       {!!Form::open(['route'=>'factura.index','method'=>'GET','class'=>'form-inline pull-center'])!!}
                           <div class="form-group">
                               {!!Form::text('cod_liquidacion', null, ['class' => 'form-control', 'placeholder' => 'Codigo'])!!}
                           </div>
                           <div class="form-group">
                               {!!Form::text('transporte', null, ['class' => 'form-control', 'placeholder' => 'Transportista'])!!}
                           </div>
                           <div class="form-group">
                               {!!Form::text('placa', null, ['class' => 'form-control', 'placeholder' => 'Nº Placa'])!!}
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

<!--<li>
    {!!Form::open(['route'=>'factura.index','method'=>'GET','class'=>'input-group margin-bottom-sm'])!!}
    {!!Form::text('cod_liquidacion',null,['class'=>'form-control','placeholder'=>'Busqueda de Usuarios'])!!}
    <span type="submit" class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
    {!!Form::close()!!}
</li>
<li>
    {!!Form::open(['route'=>'factura.index','method'=>'GET','class'=>'input-group margin-bottom-sm'])!!}
    {!!Form::text('nombre_completo',null,['class'=>'form-control','placeholder'=>'Busqueda de Usuarios'])!!}
    <span type="submit" class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
    {!!Form::close()!!}
</li>-->
<table class="table">

  <thead>
    <th>Codigo</th>
    <th>Proveedor</th>
    <th>Transportista</th>
    <th>Vista Factura</th>
  </thead>
  @foreach($vista_transporte as $trans)
  <tbody>
    <td>{{$trans->cod_liquidacion}}</td>
    <td>{{$trans->proveedor}}</td>
    <td>{{$trans->transportista}}</td>
    <td>
        {!!link_to_route('factura.edit',$title = 'Ver factura',$trans->cod_liquidacion, $attributes=['class'=>'btn btn-primary'])!!}
    </td>
  </tbody>
  @endforeach
</table>
{!!$vista_transporte->render()!!}
@stop

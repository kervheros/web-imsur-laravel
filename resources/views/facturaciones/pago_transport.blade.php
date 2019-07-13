@extends('layouts.admin')
@section('content')

<h1>transporte</h1>
<table class="table">

  <thead>
    <th>Proveedor</th>
    <th>Transportista</th>
    <th>Vista Factura</th>
  </thead>
  @foreach($vista_transporte as $trans)
  <tbody>
    <td>{{$trans->proveedor}}</td>
    <td>{{$trans->transportista}}</td>
    
  </tbody>
  @endforeach
</table>
@stop

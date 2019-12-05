@extends('layouts.admin')
@section('content')

<body style="color:#fff">
<p>&nbsp;</p>
<h1>ESTADO DE CARGAS</h1>

@if (Auth::user()->id > 1)
  <div class="col-md-12">
  <div class="page-header">
                   <h1>

                       {!!Form::open(['route'=>'carga.index','method'=>'GET','class'=>'form-inline pull-center'])!!}
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




</body>
@endsection

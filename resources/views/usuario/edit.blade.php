@extends('layouts.admin')
@section('content')
@include('alerts.request')

{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}


<div class="form-group ">
  {!!Form::label('ci','Cedula de Identidad:')!!}
  {!!Form::text('ci',null,['class'=>'form-control','placeholder'=>'Ingrese su cedula identidad'])!!}
</div>

<div class="form-group ">
  {!!Form::label('nombre','Apellido Paterno y Nombre')!!}
  {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'(ejemplo: CASTRO ALEJANDRO)'])!!}
</div>

<div class="form-group ">
  {!!Form::label('direccion','Direccion:')!!}
  {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese su direccion actual'])!!}
</div>

<div class="form-group ">
  {!!Form::label('telefono','Telefono:')!!}
  {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingrese su numero de telefono o celular'])!!}
</div>

<div class="form-group ">
  {!!Form::label('email','Correo:')!!}
  {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su correo'])!!}
</div>
<div class="form-group ">
  {!!Form::label('password','Contraseña:')!!}
  {!!Form::password('password',['data-toggle'=>'password','id'=>'password','class'=>'form-control','placeholder'=>'La contraseña deve tener mayusculas minusculas y numeros'])!!}
</div>






{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}

{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE','onsubmit' => 'return confirm("seguro que quieres eliminar el registro?")'])!!}
{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}
@endsection

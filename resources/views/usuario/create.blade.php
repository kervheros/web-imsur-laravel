@extends('layouts.admin')
  @section('content')
  {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
  <div class="form-group">
    {!!Form::label('nombre','Nombre:')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'ingrese el nombre'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('email','Correo:')!!}
    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'ingrese el nombre'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('password','Contraseña:')!!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'ingrese el nombre'])!!}
  </div>
  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  {!!Form::close()!!}
  @endsection

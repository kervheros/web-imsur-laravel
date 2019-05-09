@extends('layouts.admin')
  @section('content')
    @include('alerts.request')

  {!!Form::open(['route'=>'usuario.store','method'=>'POST','files'=>true])!!}

  @include('usuario.form.usr')

  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  {!!Form::close()!!}
  @endsection

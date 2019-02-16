@extends('layouts.admin')
  @section('content')
  {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}

  @include('usuario.form.usr')

  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  {!!Form::close()!!}
  @endsection

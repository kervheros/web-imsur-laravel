@extends('layouts.admin')
  @section('content')
    @include('alerts.request')

  {!!Form::open(['route'=>'usuario.store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
  {{ csrf_field() }}
  @include('usuario.form.usr')

  <div class="form-group">
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
  </div>

  @endsection

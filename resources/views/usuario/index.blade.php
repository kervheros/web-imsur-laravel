@extends('layouts.admin')

@if(Session::has('message'))
<div class ="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')
  <table class="table">
    <thead>
      <th>nombre</th>
      <th>correo</th>
      <th>fecha creacion</th>
      <th>operacion</th>
    </thead>
    @foreach($users as $user)
    <tbody>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>
          {!!link_to_route('usuario.edit', $title='Editar',$parameters = $user->id, $attributes=['class'=>'btn btn-primary'])!!}
      </td>
    </tbody>
    @endforeach
  </table>
  {!!$users->render()!!}
@stop

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
      <th>Fotografia</th>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Correo</th>
      <th>Fecha creacion</th>
      <th>operacion</th>
    </thead>
    @foreach($users as $user)
    <tbody>
      <td>
        <img src="fotos/{{$user->path}}" alt="" style="width:50px;"/>
      </td>
      <td>{{$user->ci}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->direccion}}</td>
      <td>{{$user->telefono}}</td>
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
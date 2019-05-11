<div class="form-group ">
  {!!Form::label('ci','Cedula de Identidad:')!!}
  {!!Form::text('ci',null,['class'=>'form-control','placeholder'=>'Ingrese su cedula identidad'])!!}
</div>

<div class="form-group ">
  {!!Form::label('nombre','Nombre:')!!}
  {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
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
  {!!Form::password('password',['class'=>'form-control','placeholder'=>'La contraseña deve tener mayusculas minusculas y numeros'])!!}
</div>
<div class="form-group ">
  {!!Form::label('foto','Fotografia:')!!}
  {!!Form::file('path')!!}
</div>

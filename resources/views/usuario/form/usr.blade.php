<div class="form-group">
  {!!Form::label('nombre','Nombre:')!!}
  {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
</div>
<div class="form-group">
  {!!Form::label('email','Correo:')!!}
  {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su correo'])!!}
</div>
<div class="form-group">
  {!!Form::label('password','Contraseña:')!!}
  {!!Form::password('password',['class'=>'form-control','placeholder'=>'La contraseña deve tener mayusculas minusculas y numeros'])!!}
</div>

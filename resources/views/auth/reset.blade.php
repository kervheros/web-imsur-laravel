@extends('app')

@section('content')

<body style="background-color: #3a3b42">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color:#f5f120">Restablecer contraseña</div>
				<div class="panel-body" style="background-color:#f8ffa8">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong>Hay un problema con los datos introducidos.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class= "main-contact">


					{!!Form::open(['url'=>'/password/reset'])!!}
					<div class='col-md-6 contact-left'>
						{!!Form::hidden('token',$token,null)!!}

						{!!Form::text('email',null,['value'=>"{{old('email')}}",'placeholder'=>'ingresa tu correo'])!!}
						<div class="form-group">
						{!!Form::password('password',['data-toggle'=>'password','id'=>'password','class'=>'form-control','placeholder'=>'Ingrese tu nueva contraseña'])!!}
						</div>
						<div class="form-group">
						{!!Form::password('password_confirmation',['data-toggle'=>'password','id'=>'password','class'=>'form-control','placeholder'=>'Repite tu contraseña'])!!}
						</div>
				</div>
					{!!Form::submit('Restablecer contraseña')!!}
				{!!Form::close()!!}

		</div>











				</div>
			</div>
		</div>
	</div>
</div>
@endsection

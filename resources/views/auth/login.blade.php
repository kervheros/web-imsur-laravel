@extends('app')

@section('content')

<body style="background-color:#323232">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default" style="background-color:#f8ffa8">
				<div class="panel-heading" style="color:#1d2e7a ; background-color:#f5f120">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Hay algunos problemas con la informacion.<br><br>
							<ul>
								<!--@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach-->
							</ul>
						</div>
					@endif

					@include('alerts.errors')
					@include('alerts.request')

					{!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
					<!--<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">-->

						<div class="form-group">
							{!!Form::label('correo','Direccion de correo:',['class'=>'col-md-4 control-label'])!!}
							<div div class="col-md-6">
							{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese el correo'])!!}
							</div>

							<!--<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>-->
						</div>

						<div class="form-group">
							{!!Form::label('password','Contraseña:',['class'=>'col-md-4 control-label'])!!}
							<div class="col-md-6">
							{!!Form::password('password',['data-toggle'=>'password','id'=>'password','class'=>'form-control','placeholder'=>'Ingrese su contraseña'])!!}
							</div>
							<!--<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>-->
						</div>

						<div class="form-group">
							{!!Form::label('codigo','Codigo Proveedor:',['class'=>'col-md-4 control-label'])!!}
							<div class="col-md-6">
								<!--        nombre de la caja de text   -->
							{!!Form::text('cod_prove',null,['class'=>'form-control','placeholder'=>'Ingrese su codigo de proveedor'])!!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<!--<input type="checkbox" name="remember"> Remember Me-->
										<div >{!!link_to('password/email', $title='Olvidaste tu contraseña ?', $attributes = null, $secure = null)!!}</div>
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">

							{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}

							<!--<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>-->
						</div>
						{!!Form::close()!!}
					<!--</form>-->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

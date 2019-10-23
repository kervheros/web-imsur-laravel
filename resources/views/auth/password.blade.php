@extends('app')

@section('content')

<body style="color:#1d2e7a ;background-color: #3a3b42">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color:#f5f120">Restablecer Contraseña</div>
				<div class="panel-body" style="background-color:#f8ffa8">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Hay algun problema con los datos ingresados.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<div class="main-contact">
				 <h3 class="head">CONTACTANOS</h3>
				 <p>Olvodaste tu contraseña y no puedes recordarlo</p>
				 <p>ingresa tu correo con la que te registraste y nosotros
				 te mandaremos un mensaje con un enlace para recuperarlo </p>
				 <div class="contact-form">
					 {!!Form::open(['url' => '/password/email'])!!}
					 	<div class="col-md-6 contact-left">

					 		{!!Form::text('email')!!}
						</div>

						{!!Form::submit('Enviar link')!!}
					 {!!Form::close()!!}
				</div>
			</div>



				</div>
			</div>
		</div>
	</div>
</div>
@endsection

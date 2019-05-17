@extends('layouts.mensajeria')
 @section('content')


 <div class="main-contact">
 <h3 class="head">CONTACTANOS</h3>
 <p>Nosotros estamos para ayudarte..</p>
 <div class="contact-form">
       {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
        <div class="col-md-6 contact-left">
          {!!Form::text('name',null,['placeholder'=>'Nombre'])!!}
          {!!Form::text('email',null,['placeholder'=>'Email'])!!}
        </div>
        <div class="col-md-6 contact-right">
          {!!Form::textarea('mensaje',null,['placeholder'=>'Mensaje'])!!}
        </div>
        {!!Form::submit('ENVIAR')!!}
      {!!Form::close()!!}
    </div>
	</div>


@endsection

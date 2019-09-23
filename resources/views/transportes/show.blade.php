@extends('layouts.admin')
@section('content')

  <body>

    <ul>
       <li> Nombre de usuario: {{ $code_liq->nombre_completo }} </li>
       <li> Email: {{ $code_liq->trans_1 }} </li>
       <li> fecha {{ $code_liq->fecha_ingreso }}</li>

       <li>son: {{ NumeroALetras::convertir($code_liq->trans_1,'Bs.') }}</li>


    </ul>
    <p> {{ link_to('users', 'Volver atrás') }} </p>
 </body>

@endsection

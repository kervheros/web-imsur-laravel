@extends('layouts.admin')
@section('content')

  <body>

    <ul>
       <li> Nombre de usuario: {{ $code_liq->nombre_completo }} </li>
       <li> Email: {{ $code_liq->proveedor }} </li>
       <li> fecha {{ $code_liq->fecha_ingreso }}</li>
       <li> monto: {{ $code_liq->monto }}</li>




    </ul>
    <p> {{ link_to('users', 'Volver atrás') }} </p>
 </body>

@endsection

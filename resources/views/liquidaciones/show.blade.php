@extends('layouts.admin')
@section('content')

  <body>

    <ul>
       <li> Nombre de usuario: {{ $code_liq->nombre_completo }} </li>
       <li> Email: {{ $code_liq->proveedor }} </li>
       <li> fecha {{ $code_liq->fecha_ingreso }}</li>
       <li> monto: {{ $code_liq->monto }}</li>




       <table class="table">

         <thead>
           <th>descripcion</th>
           <th>porcentaje</th>
           <th>total</th>

         </thead>
         @foreach ($code_reten as $ret)

         <tbody>
           <td>{{$ret->descripcion}}</td>
           <td>{{$ret->porcentaje}}</td>
           <td>{{ $ret->total_descuento }}</td>

         </tbody>
        @endforeach
      </table>


    </ul>
    <!--<p> {{ link_to('users', 'Volver atrás') }} </p>-->
 </body>

@endsection

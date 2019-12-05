<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> IMSUR </title>

  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/metisMenu.min.css')!!}
  {!!Html::style('css/sb-admin-2.css')!!}
  {!!Html::style('css/font-awesome.min.css')!!}

  {!!html::style('css/cuadrito.css')!!}
  <!--stilo factura-->
  <!--{!!Html::style('css/factura.css')!!}-->
  <!--oculta pass-->





</head>

<body>

  <div id="wrapper">


    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0 ;background-color:#f5f120">
      <div class="navbar-header" >

        <a class="navbar-brand" href="#" style="color:#1d2e7a"> IMSUR - Ingenio Minera del Sur</a>
      </div>






      <ul class="nav navbar-top-links navbar-right" style="background-color:#f5f120">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            {!!Auth::user()->name!!} {!!Auth::user()->cod_prov!!} <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>

          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
            </li>
            <!--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
            </li>-->
            <li class="divider"></li>
            <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
            </li>
          </ul>
        </li>

      </ul>


      <!--{!! Form::open(['route'=>'usuario.index','method'=>'GET','class'=>'navbar-from pull-right'])!!}

              <div class="input-group">
                  {!!Form::text('name',null,['class'=>'form-control','placelholder'=>'buscar articulo..','aria-describedby'=>'search'])!!}
              </div>
              <div>
                    <button type="submit" class="btn btn-default">
                      <span class="glyphicon glyphicon-search"></span>
                    </button>
                  </div>-->
      <!--<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>-->
      <!--{!! Form::close()!!}-->



      <div class="navbar-default sidebar" role="navigation" >
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <!--<li class="nav nav-second-level" >

                          {!! Form::open(['route'=>'usuario.index','method'=>'GET','class'=>'navbar-from pull-right'])!!}
                            <div class="input-group">
                              {!!Form::text('name',null,['class'=>'form-control','placelholder'=>'buscar articulo..','aria-describedby'=>'search'])!!}

                              <span type="submit" class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>

                            </div>
                          {!! Form::close()!!}

                        </li>-->
            @if(Auth::user()->id ==1)
              <li style="background-color:#f8ffa8">
                <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level" >
                  <li>
                    {!!Form::open(['route'=>'usuario.index','method'=>'GET','class'=>'input-group margin-bottom-sm'])!!}
                    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Busqueda de Usuarios'])!!}
                    <span type="submit" class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                    {!!Form::close()!!}
                  </li>
                  <li>
                    <a href="{{route('usuario.create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                  </li>
                  <li>
                    <a href="{{route('usuario.index')}}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                  </li>
                </ul>
              </li>

              <li style="background-color:#f8ffa8">
                <a href="#"><i class="fa fa-film fa-fw"></i> Facturaciones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level" style="color:#151724">
                  <li style="text-align:center" >
                    Ingrese el codigo de liquidacion <br>de la factura que requiera ver.
                  </li>
                  <li>
                    {!!Form::open(['route'=>'liquidacion.principal','method'=>'GET','class'=>'input-group margin-bottom-sm'])!!}
                    {!!Form::text('cod_liquidacion',null,['class'=>'form-control','placeholder'=>'Liquidaciones'])!!}
                    <span type="submit" class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                    {!!Form::close()!!}
                  </li>
                  <li>
                    {!!Form::open(['route'=>'anticipo.index','method'=>'GET','class'=>'input-group margin-bottom-sm'])!!}
                    {!!Form::text('cod_liquidacion',null,['class'=>'form-control','placeholder'=>'Anticipo de carga'])!!}
                    <span type="submit" class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                    {!!Form::close()!!}
                  </li>
                  <li>
                    {!!Form::open(['route'=>'factura.index','method'=>'GET','class'=>'input-group margin-bottom-sm'])!!}
                    {!!Form::text('cod_liquidacion',null,['class'=>'form-control','placeholder'=>'Pago transporte'])!!}
                    <span type="submit" class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                    {!!Form::close()!!}
                  </li>
                </ul>
              </li>
              @endif
              @if(Auth::user()-> id > 1)
              <li>
                <a href="#"><i class="fa fa-film fa-fw"></i> Facturaciones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="{{url('/liquidacion')}}"><i class='fa fa-plus fa-fw'></i> Liquidaciones</a>
                  </li>
                  <li>
                    <a href="{{ url('/anticipo') }}"><i class='fa fa-list-ol fa-fw'></i> Anticipo de Cargas</a>
                  </li>
                  <li>
                    <a href="{{url('/factura')}}"><i class='fa fa-list-ol fa-fw'></i> Pago de Transporte </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="{{url('/carga')}}"><i class='fa fa-list-ol fa-fw'></i> Estado de cargas </a>
              </li>
            @endif


              <!--<li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Genero<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Generos</a>
                                </li>
                            </ul>
                        </li>-->

          </ul>
        </div>
      </div>

    </nav>

    <div id="page-wrapper" style="background-color:#2f4254">
      @yield('content')
    </div>

  </div>

  {!!Html::script('js/jquery.min.js')!!}
  {!!Html::script('js/bootstrap.min.js')!!}
  {!!Html::script('js/metisMenu.min.js')!!}
  {!!Html::script('js/sb-admin-2.js')!!}

  {!!Html::script('js/pass.js')!!}



</body>

</html>

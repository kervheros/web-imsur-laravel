<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  IMSUR  -  Ingenio Minero del Sur</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}


</head>

<body>

    <div id="wrapper">


        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">  IMSUR  -  Ingenio Minero del Sur</a>
            </div>






            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>

                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                  </div>
                  <!--<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>-->
              <!--{!! Form::close()!!}-->



            <div class="navbar-default sidebar" role="navigation">
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
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
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
                      @endif
                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i> Facturaciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/factura')}}"><i class='fa fa-plus fa-fw'></i> Liquidaciones</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Anticipo de Cargas</a>
                                </li>
                                <li>
                                  <a href="{{route('factura.create')}}"><i class='fa fa-list-ol fa-fw'></i> Pago de Transporte </a>
                                </li>
                            </ul>
                        </li>


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

        <div id="page-wrapper">
          @yield('content')
        </div>

    </div>

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}



</body>

</html>

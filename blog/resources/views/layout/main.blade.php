<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Titulo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="Subir imágenes" />
    <!-- <link rel="icon" type="image/jpg" href="assets/img/favicon.ico"/> -->
    <link rel="apple-touch-icon" href="{{asset('/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/vendors/css/extensions/pace.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/colors.min.css')}}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/core/menu/menu-types/vertical-overlay-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pages/invoice.min.css')}}">
    <!-- END Page Level CSS-->


</head>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-light bg-gradient-x-grey-blue">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a href="index-2.html" class="navbar-brand">
              <img alt="stack admin logo" src="{{URL::to('/images/logo/stack-logo.png')}}"
              class="brand-logo">
              <h2 class="brand-text">App</h2>
            </a>
          </li>
          <li class="nav-item hidden-md-up float-xs-right">
            <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content container-fluid">
        <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
          <ul class="nav navbar-nav">
            <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>
            <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon ft-maximize"></i></a></li>
            <li class="nav-item nav-search"><a href="#" class="nav-link nav-link-search"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input type="text" placeholder="Search..." class="input">
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-xs-right">

            <li class="dropdown dropdown-user nav-item">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                <span class="avatar avatar-online">
                  <img src="{{URL::to('/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span>
                <span class="user-name">John Doe</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                <div class="dropdown-divider"></div><a href="index/cerrar_sesion" class="dropdown-item"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


<!-- ////////////////////////////////////////////////////////////////////////////-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" navigation-header">
                <span>MENU</span><i data-toggle="tooltip" data-placement="right" data-original-title="MENU"
                                       class=""></i>
            </li>
            <li class=" nav-item active"><a href="#"><i class="ft-monitor"></i><span data-i18n="" class="menu-title">Inicio</span></a>
            </li>
            <li class=" nav-item"><a href="categoria"><i class="ft-user"></i><span data-i18n="" class="menu-title">Categorias</span></a>
                <ul class="menu-content">
                    <li><a href="{{action('CategoriaController@index')}}" class="menu-item">Lista de Categorias</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="container">
            @yield('content')
        </div>

    </div>
</div>

<!-- BEGIN VENDOR JS-->

<script src="{{URL::to('/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/core/app-menu.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/core/app.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/scripts/customizer.min.js')}}" type="text/javascript"></script>

@yield('js_scripts')

</body>
</html>
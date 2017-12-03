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
              <h2 class="brand-text">Papers.com</h2>
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
<li class="dropdown dropdown-notification nav-item">
              <a href="#" data-toggle="dropdown" class="nav-link nav-link-label" aria-expanded="false"><i class="ficon ft-bell"></i>
                <span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                    <span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span>
                  </h6>
                </li>
                <li class="list-group scrollable-container ps-container ps-theme-dark ps-active-y" data-ps-id="82a7d3a9-7b94-a4ad-9683-ea2c70811727">
                  <a href="javascript:void(0)" class="list-group-item">
                    <div class="media">
                      <div class="media-left valign-middle"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">You have new order!</h6>
                        <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <small>
                          <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="list-group-item">
                    <div class="media">
                      <div class="media-left valign-middle"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading red darken-1">99% Server load</h6>
                        <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                        <small>
                          <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="list-group-item">
                    <div class="media">
                      <div class="media-left valign-middle"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                        <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                        <small>
                          <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="list-group-item">
                    <div class="media">
                      <div class="media-left valign-middle"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6>
                        <small>
                          <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="list-group-item">
                    <div class="media">
                      <div class="media-left valign-middle"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Generate monthly report</h6>
                        <small>
                          <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time>
                        </small>
                      </div>
                    </div>
                  </a>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 254px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 170px;"></div></div></li>
                <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-user nav-item">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                <span class="avatar avatar-online">
                  <img src="{{URL::to('/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span>
                <span class="user-name">{{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                <div class="dropdown-divider"></div><a href="@" class="dropdown-item" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
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
            <li class=" nav-item active"><a href="{{action('DashboardController@index')}}"><i class="ft-monitor"></i><span data-i18n="" class="menu-title">Inicio</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-user"></i><span data-i18n="" class="menu-title">Publicaciones</span></a>
                <ul class="menu-content">
                    <li><a href="{{action('PapersController@index')}}" class="menu-item">Mis publicaciones</a></li>
                    <li><a href="{{action('PapersController@create')}}" class="menu-item">Subir Publicación</a></li>
                    <li><a href="{{action('CategoriaController@create')}}" class="menu-item">Escribir Publicación</a></li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="ft-user"></i><span data-i18n="" class="menu-title">Categorias</span></a>
                <ul class="menu-content">
                    <li><a href="{{action('CategoriaController@index')}}" class="menu-item">Lista de Categorias</a></li>
                    <li><a href="{{action('CategoriaController@create')}}" class="menu-item">Nueva Categoría</a></li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="ft-user"></i><span data-i18n="" class="menu-title">Subcategorias</span></a>
                <ul class="menu-content">
                    <li><a href="{{action('SubCategoriaController@create')}}" class="menu-item">Nueva Subcategoría</a></li>
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
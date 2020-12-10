
<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/basic.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/all.css')}}" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
<body class="loaded">
<div id="app" class="wrapper">
    <header class="header">
        <nav class="nav-main">
            <div class="container">

                <div class="row header-holder">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <small>Menu</small>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul data-nav-partner="false">
                            <li><a href="/" ><span>Home</span></a></li>
                            <li><a href="/rentals" ><span>Mis Reservas</span></a></li>
                            <li><a href="/perfil"><span class="link-register">Mi perfil</span></a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span>{{ __('Logout') }}</span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                </form>
                            @if (Route::has('login'))
                                @auth
                                    <li class="link-submenu link-submenu-costumer logged-out hidden-xs" style="display: block !important">
                                        <span class="link-login"><a href="#" id="welcome">Bienvenido {{Auth::user()->name}}</a></span>
                                @else
                                    <li class="link-submenu link-submenu-costumer logged-out hidden-xs" style="display: block !important">
                                        <span class="link-login"><a href="{{ route('login') }}" id="access-your-dashboard">Login</a></span>
                                        @if (Route::has('register'))
                                            <span class="link-register"><a href="{{ route('register') }}" id="access-personal-register-area">Registrar</a></span>
                                        @endif
                                    </li>
                                @endauth
                            @endif
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">LogOut
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                </form>
                            </div>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
    </header>
</div>
<main id="main-content">
<div class="container">
    <div class="row">
        <div class="col-md-6 img">
            <img src="https://lh3.googleusercontent.com/proxy/Jx9e4qxAz5uS1d0UjJAuuSd2_0whWZjm2dEIkhK05NjCrVvnCW_bAbWZtF4lBtjDsOgoDdn8OKL--zRCf_4_c9lDMLJflbVxIHlfwlLyCYt-t3IhfjOEixeudAQopxlhisjKyBIBdepH_O--cIu0nxIavNeT6g"  alt="" class="img-rounded">
        </div>
        <div class="col-md-6 details">
            <blockquote>
                <h5>{{Auth::user()->name}}</h5>
                <small><cite title="Source Title">{{Auth::user()->description}}  <i class="icon-map-marker"></i></cite></small>
            </blockquote>
            <p>
                {{Auth::user()->email}}<br>
                {{Auth::user()->pais}}<br>
            </p>
        </div>
    </div>
</div>
<style>
    .container{
        padding:5%;
    }
    .container .img{
        text-align:center;
    }
    .container .details{
        border-left:3px solid #ded4da;
    }
    .container .details p{
        font-size:15px;
        font-weight:bold;
    }
</style>
</main>
</body>




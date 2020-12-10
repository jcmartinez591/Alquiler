
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="{{ asset('css/basic.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/all.css')}}" />
    <link href="{{ asset('/font-awesome/css/font-awesome.css')}}"  rel="stylesheet" />
    <link href="{{ asset('/font-awesome/css/fontawesome.css')}}"  rel="stylesheet" />
    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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
    <div id="partial-groups">
        <div class="bg-blue-gradient--internal">
            <div class="bg-blue-gradient__inner">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="main-headline headline--my-reservations">
                                <span>Mis Reservas</span>
                                <small class="headline--subtitle">Web Aplication Realizada como Prueba de BackEnd</small>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        {{--  oi  --}}

                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-hover table-condensed" style="margin-top:-50px;margin-bottom:150px">
                                <thead>
                                <tr>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Auto</th>
                                    <th scope="col">Valor Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Día de Devolución</th>
                                    <th scope="col">Creado</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($rentals as $rental)
                                    <tr class="gradeX">
                                        <td class="align-middle"><img src="{{asset($rental->vehicle->image)}}" alt="{{($rental->vehicle->model)}}" width="90" /></td>
                                        <td class="align-middle">{{ $rental->vehicle->manufacturer}} - {{ $rental->vehicle->model}} - {{ $rental->vehicle->year}} - {{ $rental->vehicle->color}} </td>

                                        <td class="align-middle">USD$ {{ $rental->value}},00</td>
                                        <td class="align-middle">{{ $rental->status}}</td>
                                        <td class="align-middle">{{ $rental->return_date}}</td>
                                        <td class="align-middle">{{ $rental->created_at}}</td>
                                        <!-- btn btn-success btn-xs <i class="icon-eye-open"></i>-->
                                        @can('alter_status', App\Rental::class)
                                            @if ($rental->status != 'fineshed')
                                                <td class="actions">
                                                    <form action="{{ route('rentals.update', $rental->id)}}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <select name="status">
                                                            <option value="">Selecione</option>
                                                            <option value="progress">Progresso</option>
                                                            <option value="fineshed">Encerrado</option>
                                                        </select>
                                                        <input type="submit" class="btn btn-success" value="Atualizar status">
                                                    </form>
                                                </td>
                                            @endif
                                        @endcan
                                        @can('alter_by_client', App\Rental::class)
                                            @if ($rental->status != 'fineshed')
                                                <td class="actions"><p><a href="#ex1" rel="modal:open"><img src="{{asset('img/calendar.png')}}" width="50"></a></p>
                                                    <div id="ex1" class="modal">
                                                        <form action="{{ route('rentals.update', $rental->id)}}" method="post">
                                                            @method('PUT')
                                                            @csrf



                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="modalLabel">Qual a nova data de retorno?</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="control-group">
                                                                    <label class="control-label">Data de retorno:</label>
                                                                    <div class="controls">
                                                                        <input name="return_date" type="datetime-local" value="2019-06-29T10:26"min="<?php echo $date ?>" class="span5">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="#" rel="modal:close">Cancelar</a>
                                                                <b><input style="color:#008000"type="submit" class="btn btn-success" value="Atualizar"></b>

                                                            </div>

                                                        </form>

                                                    </div>
                                                </td>
                                            @endif
                                        @endcan


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{--  tchau  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="footer__inner--copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

</body>

</html>

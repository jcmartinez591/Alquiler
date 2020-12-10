<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/bootstrap-datetimepicker.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/basic.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/smoothness/jquery-ui.css" type="text/css" media="all" />
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
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span><?php echo e(__('Logout')); ?></span></a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                                    <?php echo csrf_field(); ?>
                                </form>
                            <?php if(Route::has('login')): ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <li class="link-submenu link-submenu-costumer logged-out hidden-xs" style="display: block !important">
                                        <span class="link-login"><a href="#" id="welcome">Bienvenido <?php echo e(Auth::user()->name); ?></a></span>
                                <?php else: ?>
                                    <li class="link-submenu link-submenu-costumer logged-out hidden-xs" style="display: block !important">
                                        <span class="link-login"><a href="<?php echo e(route('login')); ?>" id="access-your-dashboard">Login</a></span>
                                        <?php if(Route::has('register')): ?>
                                            <span class="link-register"><a href="<?php echo e(route('register')); ?>" id="access-personal-register-area">Registrar</a></span>
                                        <?php endif; ?>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">LogOut
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                                    <?php echo csrf_field(); ?>
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
    <section class="flow-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 flow-wrap__content">
                    <section class="section">
                        <div class="headline headline--register-reservation m-b-10">
                            <h1 class="headline-main--register-reservation">Confirme sus datos de reserva</h1>
                        </div>
                        <div class="divider clearfix hidden-xs-down"></div>
                        <div class="register-reservation">
                            <p>
                                <form method='POST' action="<?php echo e(route('rentals.store')); ?>">
                                 <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="control-group">
                                            <div class="well" style="margin-left: 20px; margin-top:20px; margin-bottom:-50px;">
                                                <div >
                                                    <label>DÍA DE RETORNO</label>
                                                    <div class="input-group date" >
                                                        <input data-provide="datepicker" name="return_date" type="datetime-local" class="form-control" id="datepicker">
                                                        <div class="input-group-addon">
                                                            <span class="glyphicon glyphicon-th"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider clearfix hidden-xs-down"></div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <h3>Características</h3>
                                                    <h4><?php echo e($vehicle->manufacturer); ?> <?php echo e($vehicle->model); ?> - <?php echo e($vehicle->year); ?> </h4>
                                                    <br>
                            <p><b><?php echo e($vehicle->color); ?></b></p>
                            <p> <?php echo e($vehicle->description); ?></p>

                        </div>
                        <div class="col-md-6" style="float:right;">
                            <img src="<?php echo e(asset($vehicle->image)); ?>" alt="<?php echo e(($vehicle->model)); ?>" width="300" />
                        </div>
                </div>
            </div>
            <input type="hidden" name="user_id" class="form-control" value="<?php echo e(auth()->user()->id); ?>">
            <input type="hidden" name="vehicle_id" class="form-control" value="<?php echo e($vehicle->id); ?>">
            </p>
        </div>
    </section>
    </div>
    <div id="sideBarMobile" class="col-12 col-lg-4 flow-wrap__sidebar">
        <div class="detalhes-pedido detalhes-pedido-sidebar">
            <div id="price-summary" class="section">
                <div class="calculate-wrap accordion-wrap">
                    <h2>Información Importante</h2>
                    <br>
                    <div id="summary-booking" class="accordion">
                        <div class="accordion__header">
                            <h3 class="accordion__title">
                                Beneficios
                        </div>
                        <div class="accordion__content" style="display: none;">
                            <ul class="summary-list">
                                <li>
                                    Políticas de Combustible

                                </li>
                                <li>
                                    Políticas de Cobertura de Seguro

                                </li>
                                <li>
                                    Tipos de Seguro
                                </li>
                            </ul>
                        </div>
                        <div class="accordion__hidden">
                            <ul class="summary-list">
                                <li>
                                    Políticas de Combustible

                                </li>
                                <li>
                                    Políticas de Cobertura de Seguro

                                </li>
                                <li>
                                    Tipos de Seguro
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="price-summary__total">
                    <div class="discount">
                        <h2>
                            Precio por Día
                            <span class="with-discount"></span>
                        </h2>
                    </div>
                    <div class="price-feature">
                        <div class="price">
                            <div class="price__total">
                                <span class="price__coin">USD$</span>
                                <span class="price__ammount"><?php echo e($vehicle->value); ?>,</span>
                                <span class="price__cents">00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 flow-wrap__actions--start">
                <button class="step-return button">
                    <a class="btn btn-danger" href="/"> Volver</a>
                </button>
            </div>
            <div class="col-lg-4 flow-wrap__actions--end" style="left: 0px;">
                <button class="step-next step-4-next button">
                    <input type="submit" class="btn btn-success" value="Reservar">
                </button>
            </div>
        </div>
    </div>
    </section>
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
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap-datetimepicker.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/bootstrap-datetimepicker_002.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/index.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/respond.js')); ?>"></script>
<script>
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        minDate: 'now',
        changeMonth:true,
        changeYear:true,
        showOn: "focus"

    });
</script>


</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/alquiler/resources/views/rentals/rental.blade.php ENDPATH**/ ?>
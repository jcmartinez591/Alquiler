<!DOCTYPE html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="">
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/basic.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>" />
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
    <div id="partial-groups">
        <div class="bg-blue-gradient--internal">
            <div class="bg-blue-gradient__inner">
                <div class="container">
                    <div class="row m-t-sm-0 m-t-md-50" id="wrapper-headline">
                        <div class="col-lg col-12">
                            <h1 class="main-headline"><span>Escoga un Vehículo</span></h1>
                        </div>
                    </div>
                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div id="car-groups">
                            <div class="car-item customCarItem">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="row car-item__inner--shadow">
                                            <div class="col-sm-3 col-12 car-item__column--first">
                                                <h2 class="car-item--headline">
                                                    <?php echo e($vehicle->manufacturer); ?> <?php echo e($vehicle->model); ?>  - <?php echo e($vehicle->year); ?>

                                                    
                                                </h2>
                                                <div class="car-item--short-description">
                                                    <span class="customCarItem__span"><?php echo e($vehicle->description); ?></span>
                                                    <span class="customCarItem__span customCarItem__span--infoMotor"><?php echo e($vehicle->color); ?></span>
                                                    <hr class="customCarItem__hr">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 car-item__column--middle">
                                                <img src="<?php echo e($vehicle->image); ?>" alt="Aluguel de Carros" title="Aluguel de Carro " class="car-item--image">
                                            </div>

                                            <div class="col-sm-3 col-12 car-item__column--last">
                                                <div class="card">
                                                    <div class="card__headline">Disponible</div>
                                                    <div class="card__body">
                                                        <span class="card__body--dollar">USD$</span>
                                                        <span class="card__body--price customCarItem__price"><?php echo e($vehicle->value); ?>

                                                                <small class="customCarItem__price--cents">,00</small></span>
                                                        <span class="card__body--daily customCarItem__daily">/diarios</span>
                                                    </div>
                                                </div>
                                                <div class="hidden-xs-down">
                                                    <input type="hidden" name="hdn-code" class="hdn-code" value="ECMM">
                                                    <a title="Selecionar Carro" href="<?php echo e(route('rentals.vehicles.rent', $vehicle->id)); ?>" class="button flat contrast shadow--light-2x big--font-small big--font-secondary block btn-select-group">Escoger</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($vehicles->links()); ?>

                    <br>
                </div>
            </div>
        </div>
    </div>
</main>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/alquiler/resources/views/public.blade.php ENDPATH**/ ?>
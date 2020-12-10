<?php $__env->startSection('content'); ?>
    <header id="header" class="cover cover-sm" role="banner" style="background-image: url(tpl/images/back4.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="row row-mt-15em">

                        <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Alquilar Carro</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="section border-bottom">
    <div class="container">
        <div class="container">
            <div class="row">
                <?php
                $carlist = \App\Models\Cars::get()->toArray();
                foreach($carlist as $key=>$car):
                ?>
                <form  method="POST">
                    <div class="col-lg-12">
                        <div class="panel panel-info"  style="margin: 50px 5px 5px 5px">
                            <div class="panel-heading">
                                <h2 class="panel-title"><?php echo $car["model"]; ?></h2>
                                <input type="hidden" value="<?php echo $car["model"]; ?>" name="type">
                                <input type="hidden" value="<?php echo $key+1; ?>" name="carId">
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group">
                                        <?php echo '<img src="/images/'.$car["img"].'" alt="bmw" style="width: 60px;height: 80px;">' ?>
                                    </li>
                                    <li class="list-group">
                                        <h4 style="text-align: left;">precio por Día: <?php echo $car["pricePerDay"]; ?> USD</h4>
                                    </li>
                                    <li class="list-group">
                                        <h4 style="text-align: left;">Capacidad: <?php echo $car["capacity"]; ?> </h4>
                                    </li>
                                </ul>

                                <?php echo csrf_field(); ?>

                                <button type="submit" class="btn btn-success">Alquilar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/alquiler/resources/views/page/rentcar.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="row row-mt-15em">

                        <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Reservation</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="gtco-section">
        <div class="gtco-container">
            <form method="post" action="reservationcont/valide" id="deal">
                <div class="form-group">

                    <input  type="text" class="form-control"  name="name" value="<?php echo e(Auth::user()->name); ?>">
                </div>
                <div class="form-group">
                    <label>Contact email</label>
                    <?php
                    $carId =  Request::post('id');
                    ?>
                    <input  type= "email" class="form-control"  name="email" value=<?php echo e(Auth::user()->email); ?>>
                </div>
                <div class="form-group">
                    <label>Number of your driving licence</label>
                    <input   type= "text" class="form-control"  name="licence" required>
                </div>
                <div class="form-group">
                    <label>Start day of renting</label>
                    <input   type= "date" class="form-control"  name="startTime" required>
                </div>
                <div class="form-group">
                    <label>Duration</label>
                    <input   type= "number" class="form-control"  name="duration" required>
                </div>
                <div class="form-group">
                    <input  type="hidden" class="form-control"  name="userId" value="<?php echo e(Auth::user()->id); ?>">
                </div>
                <div class="form-group">
                    <input   class="form-control"  name="carId" value="<?php echo $carId;?>">
                </div>
                <div class="form-group">
                    <label>Type of vehicule</label>
                    <input type="text" class="form-control"  name="type" value="<?php echo e(Request::post('type')); ?>">
                </div>
                <div class="form-group">
                    <label>Capacidad</label>
                    <input type="text" class="form-control"  name="capacity" value="<?php echo e(Request::post('capacity')); ?>">
                </div>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/alquiler/resources/views/page/reservation.blade.php ENDPATH**/ ?>
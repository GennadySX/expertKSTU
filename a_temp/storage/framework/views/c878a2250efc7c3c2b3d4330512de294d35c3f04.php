<?php echo $__env->make('auth.cabinet.form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo e(asset('login/images/icons/favicon.ico')); ?>"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/animate/animate.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/css-hamburgers/hamburgers.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/vendor/select2/select2.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/util.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/main.css')); ?>">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?php echo e(asset('login/images/img-01.png')); ?>" alt="IMG">
            </div>


            <?php if(auth()->guard()->guest()): ?>

                <?php echo $__env->yieldContent('login'); ?>


            <?php else: ?>
                <?php echo $__env->yieldContent('signup'); ?>
                <?php endif; ?>

        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/bootstrap/js/popper.js')); ?>"></script>
<script src="<?php echo e(asset('login/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/vendor/tilt/tilt.jquery.min.js')); ?>"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="<?php echo e(asset('login/js/main.js')); ?>"></script>

</body>
</html>

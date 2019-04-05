<?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('header'); ?>
    <main class="py-4">
        <?php echo $__env->yieldContent('section'); ?>
    </main>
<?php echo $__env->make('dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('footer'); ?>
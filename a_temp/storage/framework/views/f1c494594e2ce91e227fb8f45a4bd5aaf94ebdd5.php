<?php $__env->startSection('login'); ?>

    <form class="login100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <span class="login100-form-title">
						Member Login
					</span>

    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="<?php echo e(__('E-Mail Address')); ?>" value="{ old('email') }}">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
        <?php if($errors->has('email')): ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
        <?php endif; ?>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" name="pass" placeholder="<?php echo e(__('Password')); ?>">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        <?php if($errors->has('password')): ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
        <?php endif; ?>
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            <?php echo e(__('Login')); ?>

        </button>
    </div>

    <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
        <?php if(Route::has('password.request')): ?>


        <a class="txt2" href="<?php echo e(route('password.request')); ?>">
            Username / Password
        </a>
           <?php endif; ?>
    </div>

    <div class="text-center p-t-136">
        <a class="txt2" href="#">
            Create your Account
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </a>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('signup'); ?>
    <form class="login100-form validate-form">
					<span class="login100-form-title">
						Become our user
					</span>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="name" placeholder="Name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" placeholder="Repeat password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-repeat" aria-hidden="true"></i>
						</span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Sign Up
            </button>
        </div>



        <div class="text-center p-t-136">
            <a class="txt2" href="/login">
                Login
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
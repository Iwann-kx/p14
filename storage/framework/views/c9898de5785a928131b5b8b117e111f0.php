<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="auth-card">
    <div class="auth-card-header">
        <div class="logo-section">
            <i class="fas fa-sign-in-alt"></i>
        </div>
        <h2><?php echo e(__('Login')); ?></h2>
        <p>Masuk ke akun Anda</p>
    </div>

    <div class="auth-card-body">
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="email"><?php echo e(__('Email Address')); ?></label>
                <input 
                    id="email" 
                    type="email" 
                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    name="email" 
                    value="<?php echo e(old('email')); ?>" 
                    required 
                    autocomplete="email" 
                    autofocus
                    placeholder="Masukkan email Anda">

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="password"><?php echo e(__('Password')); ?></label>
                <input 
                    id="password" 
                    type="password" 
                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    name="password" 
                    required 
                    autocomplete="current-password"
                    placeholder="Masukkan password Anda">

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-check">
                <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="remember" 
                    id="remember" 
                    <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label class="form-check-label" for="remember">
                    <?php echo e(__('Remember Me')); ?>

                </label>
            </div>

            <button type="submit" class="btn btn-login">
                <?php echo e(__('Login')); ?>

            </button>

            <div class="auth-links">
                <?php if(Route::has('password.request')): ?>
                    <a href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot Your Password?')); ?>

                    </a>
                <?php endif; ?>
                
                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">
                        <?php echo e(__('Create Account')); ?>

                    </a>
                <?php endif; ?>
            </div>

            <?php if(Route::has('register')): ?>
            <div class="auth-footer">
                Belum punya akun? 
                <a href="<?php echo e(route('register')); ?>"><?php echo e(__('Daftar di sini')); ?></a>
            </div>
            <?php endif; ?>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-item\resources\views/auth/login.blade.php ENDPATH**/ ?>
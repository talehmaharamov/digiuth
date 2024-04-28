<?php if($errors->any()): ?>
<p class="text-center font-semibold text-danger my-3">
    <?php if($errors->has('email')): ?>
        <?php echo e($errors->first('email')); ?>

    <?php else: ?>
        <?php echo e($errors->first('password')); ?>

    <?php endif; ?>
    </p>
<?php endif; ?>
<?php /**PATH /var/www/laravel/vendor/laravel/nova/src/../resources/views/auth/partials/errors.blade.php ENDPATH**/ ?>
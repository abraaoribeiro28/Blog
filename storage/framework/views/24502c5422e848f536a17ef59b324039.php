<?php if($errors->any()): ?>
    <div class="alert alert-icon alert-danger mt-3 px-3" role="alert">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <i class="ni ni-alert-circle" style="font-size: 1rem;"></i>
            <strong><?php echo e($error); ?></strong> <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible alert-icon mt-3">
        <em class="icon ni ni-check-circle"></em>
        <strong><?php echo e(session('success')); ?></strong>
        <button class="close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible alert-icon mt-3">
        <em class="icon ni ni-cross-circle"></em>
        <strong><?php echo e(session('error')); ?></strong>
        <button class="close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/admin/forms/alert.blade.php ENDPATH**/ ?>
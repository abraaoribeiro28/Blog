
<script src="<?php echo e(url('theme/src/assets/js/bundle.js')); ?>"></script>
<script src="<?php echo e(url('theme/src/assets/js/scripts.js')); ?>"></script>
<script src="<?php echo e(url('theme/src/assets/js/charts/gd-default.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/functions.js')); ?>"></script>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

<?php echo $__env->yieldContent('script'); ?>
<?php /**PATH /var/www/html/resources/views/components/admin/includes/scripts.blade.php ENDPATH**/ ?>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>

<!-- Fav Icon  -->
<link rel="icon" type="image/x-icon" href="<?php echo e(url($configuration['favicon'])); ?>">
<!-- StyleSheets  -->
<link rel="stylesheet" href="<?php echo e(url('theme/src/assets/css/dashlite.min.css')); ?>">
<link id="skin-default" rel="stylesheet" href="<?php echo e(url('theme/src/assets/css/theme.css')); ?>">

<?php echo $__env->yieldContent('style'); ?><?php /**PATH /var/www/html/resources/views/components/admin/includes/styles.blade.php ENDPATH**/ ?>
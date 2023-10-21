<title><?php echo e($configuration['titulo']); ?></title>

<link rel="icon" type="image/x-icon" href="<?php echo e(url($configuration['favicon'])); ?>">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" media="all">

<link rel="stylesheet" href="<?php echo e(asset($cssColorPath)); ?>">

<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/home.css']); ?>

<?php echo $__env->yieldContent('style'); ?>
<?php /**PATH /var/www/html/resources/views/components/portal/includes/styles.blade.php ENDPATH**/ ?>
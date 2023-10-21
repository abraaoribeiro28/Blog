<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php if (isset($component)) { $__componentOriginalf8e19b1f4c32fb083147f9d3f6799bb3 = $component; } ?>
<?php $component = App\View\Components\Portal\Includes\MetaTags::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portal.includes.meta-tags'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Portal\Includes\MetaTags::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8e19b1f4c32fb083147f9d3f6799bb3)): ?>
<?php $component = $__componentOriginalf8e19b1f4c32fb083147f9d3f6799bb3; ?>
<?php unset($__componentOriginalf8e19b1f4c32fb083147f9d3f6799bb3); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal377b9b824f63a0d5b001957713aee2de = $component; } ?>
<?php $component = App\View\Components\Portal\Includes\Styles::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portal.includes.styles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Portal\Includes\Styles::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal377b9b824f63a0d5b001957713aee2de)): ?>
<?php $component = $__componentOriginal377b9b824f63a0d5b001957713aee2de; ?>
<?php unset($__componentOriginal377b9b824f63a0d5b001957713aee2de); ?>
<?php endif; ?>
</head>
<body class="body">
    <?php if (isset($component)) { $__componentOriginal330210b261598062d80ef9ec20a3cead = $component; } ?>
<?php $component = App\View\Components\Portal\Layout\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portal.layout.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Portal\Layout\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal330210b261598062d80ef9ec20a3cead)): ?>
<?php $component = $__componentOriginal330210b261598062d80ef9ec20a3cead; ?>
<?php unset($__componentOriginal330210b261598062d80ef9ec20a3cead); ?>
<?php endif; ?>
    <?php echo e($slot); ?>

    <?php if (isset($component)) { $__componentOriginal2f10dd9d43de6f81d68f40e2ce4338c8 = $component; } ?>
<?php $component = App\View\Components\Portal\Layout\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portal.layout.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Portal\Layout\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f10dd9d43de6f81d68f40e2ce4338c8)): ?>
<?php $component = $__componentOriginal2f10dd9d43de6f81d68f40e2ce4338c8; ?>
<?php unset($__componentOriginal2f10dd9d43de6f81d68f40e2ce4338c8); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal0d6bce5c07db18439164e662ff1154c1 = $component; } ?>
<?php $component = App\View\Components\Portal\Includes\Scripts::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portal.includes.scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Portal\Includes\Scripts::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0d6bce5c07db18439164e662ff1154c1)): ?>
<?php $component = $__componentOriginal0d6bce5c07db18439164e662ff1154c1; ?>
<?php unset($__componentOriginal0d6bce5c07db18439164e662ff1154c1); ?>
<?php endif; ?>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/layouts/portal.blade.php ENDPATH**/ ?>
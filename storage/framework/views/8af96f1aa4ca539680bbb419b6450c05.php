<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <?php if (isset($component)) { $__componentOriginalfa3e87bdd149694f5ffc0a9984472669 = $component; } ?>
<?php $component = App\View\Components\Admin\Includes\MetaTags::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.includes.meta-tags'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Includes\MetaTags::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa3e87bdd149694f5ffc0a9984472669)): ?>
<?php $component = $__componentOriginalfa3e87bdd149694f5ffc0a9984472669; ?>
<?php unset($__componentOriginalfa3e87bdd149694f5ffc0a9984472669); ?>
<?php endif; ?>
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <?php if (isset($component)) { $__componentOriginalce4d09e8197915b527bda538da49b3b5 = $component; } ?>
<?php $component = App\View\Components\Admin\Includes\Styles::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.includes.styles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Includes\Styles::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce4d09e8197915b527bda538da49b3b5)): ?>
<?php $component = $__componentOriginalce4d09e8197915b527bda538da49b3b5; ?>
<?php unset($__componentOriginalce4d09e8197915b527bda538da49b3b5); ?>
<?php endif; ?>
</head>

<body class="nk-body bg-white npc-default has-aside">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap ">
                <?php if (isset($component)) { $__componentOriginal9d6f3d191d43deffded4ffa85bf5a6c5 = $component; } ?>
<?php $component = App\View\Components\Admin\Layout\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.layout.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Layout\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d6f3d191d43deffded4ffa85bf5a6c5)): ?>
<?php $component = $__componentOriginal9d6f3d191d43deffded4ffa85bf5a6c5; ?>
<?php unset($__componentOriginal9d6f3d191d43deffded4ffa85bf5a6c5); ?>
<?php endif; ?>
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                                <?php if (isset($component)) { $__componentOriginal5f7b813ee964067109c5adb4f091aca3 = $component; } ?>
<?php $component = App\View\Components\Admin\Layout\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.layout.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Layout\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f7b813ee964067109c5adb4f091aca3)): ?>
<?php $component = $__componentOriginal5f7b813ee964067109c5adb4f091aca3; ?>
<?php unset($__componentOriginal5f7b813ee964067109c5adb4f091aca3); ?>
<?php endif; ?>
                            </div>
                            <div class="nk-content-body">
                                <?php echo e($slot); ?>

                                <?php if (isset($component)) { $__componentOriginal70a780c953085fd3c9031391b9286ef3 = $component; } ?>
<?php $component = App\View\Components\Admin\Layout\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.layout.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Layout\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70a780c953085fd3c9031391b9286ef3)): ?>
<?php $component = $__componentOriginal70a780c953085fd3c9031391b9286ef3; ?>
<?php unset($__componentOriginal70a780c953085fd3c9031391b9286ef3); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginal1553a8ab98c4a60fb352831e1356a60d = $component; } ?>
<?php $component = App\View\Components\Admin\Includes\Scripts::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.includes.scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Includes\Scripts::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1553a8ab98c4a60fb352831e1356a60d)): ?>
<?php $component = $__componentOriginal1553a8ab98c4a60fb352831e1356a60d; ?>
<?php unset($__componentOriginal1553a8ab98c4a60fb352831e1356a60d); ?>
<?php endif; ?>
</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>
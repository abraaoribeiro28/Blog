<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Postagens</h3>
                        <div class="nk-block-des text-soft">
                            <p>Listagem dos registros de postagrens.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">
                                <i class="icon bi bi-plus me-1"></i>
                               Nova postagem
                            </a>
                        </div>
                    </div>
                </div>
                <?php if (isset($component)) { $__componentOriginal855749ad3b21f969eaa7492700f4a203 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Alert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal855749ad3b21f969eaa7492700f4a203)): ?>
<?php $component = $__componentOriginal855749ad3b21f969eaa7492700f4a203; ?>
<?php unset($__componentOriginal855749ad3b21f969eaa7492700f4a203); ?>
<?php endif; ?>
            </div>


            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                        <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid">
                                        <label class="custom-control-label" for="uid"></label>
                                    </div>
                                </th>
                                <th class="nk-tb-col"><span class="sub-text">Título</span></th>
                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Categoria</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Data de publicação</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                <th class="nk-tb-col tb-col-md nk-tb-col-tools text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="nk-tb-item" id="item-<?php echo e($post->id); ?>">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="<?php echo e($post->id); ?>">
                                            <label class="custom-control-label" for="<?php echo e($post->id); ?>"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead"><?php echo e(Str::limit($post->title, 40, '...')); ?></span>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead"><?php echo e($post->category->name); ?></span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span><?php echo e(date('d/m/Y', strtotime($post->publication_date))); ?></span>
                                    </td>

                                    <td class="nk-tb-col tb-col-md">
                                    <span class="tb-status">
                                        <?php if($post->status): ?>
                                            <em class="icon ni ni-check-circle text-success"></em>
                                            Publicado
                                        <?php else: ?>
                                            <em class="icon ni ni-cross-circle text-danger"></em>
                                            Rascunho
                                        <?php endif; ?>
                                    </span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md text-center">

                                        <div class="dropdown">
                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false">
                                                <em class="icon ni ni-more-h"></em>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                                <ul class="link-list-plain">
                                                    <li><a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="text-primary">Editar</a></li>
                                                    
                                                    <li>
                                                        <a href="#" class="text-danger" onclick="confirmDelete(<?php echo e($post->id); ?>)">
                                                            Excluir
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startSection('script'); ?>
        <script>
            async function confirmDelete(id){
                const item = document.querySelector(`#item-${id}`);



                    // Swal.fire({
                    //     title: 'Tem certeza?',
                    //     text: "Você não poderá reverter isso!",
                    //     icon: 'warning',
                    //     showCancelButton: true,
                    //     confirmButtonText: 'Sim, exclua-o!',
                    //     cancelButtonText: 'Cancelar',
                    // }).then(async function (result) {
                    //     if (result.value) {
                    //         const response = await myFetch('/admin/posts/delete', 'POST', {
                    //             "id": id
                    //         });
                    //         if (response){
                    //             item.remove();
                    //             Swal.fire('Excluído!', 'O registro foi excluído.', 'success');
                    //         }else{
                    //             Swal.fire('Não foi possível deletar o registro', 'Ocorreu um erro inesperado. Por favor, tente novamente.', 'error');
                    //         }
                    //     }
                    // });




                Swal.fire({
                    title: 'Tem certeza?',
                    text: "Você não poderá reverter isso!",
                    icon: 'warning',
                    cancelButtonText: 'Cancelar',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, exclua-o!',
                    showLoaderOnConfirm: true,
                    preConfirm: async function preConfirm() {
                        const response = await myFetch('/admin/posts/delete', 'POST', {
                            "id": id
                        });
                        if (!response){
                            Swal.showValidationMessage("Ocorreu um erro inesperado. Por favor, tente novamente.");
                        }
                    },
                    allowOutsideClick: function allowOutsideClick() {
                        return !Swal.isLoading();
                    }
                }).then(function (response) {
                    if (response) {
                        item.remove();
                        Swal.fire('Excluído!', 'O registro foi excluído.', 'success');
                    }
                });
            }
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/admin/post/index.blade.php ENDPATH**/ ?>
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
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        <?php if(isset($post)): ?>
                            Editar postagem
                        <?php else: ?>
                            Cadastrar postagem
                        <?php endif; ?>
                    </h3>
                    <div class="nk-block-des text-soft">
                        <p>Preencha os campos do formulário com as informações.</p>
                    </div>
                </div>
                <div class="nk-block-head-content">

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

        <div class="card card-bordered">
            <div class="card-inner">
                <form action="<?php echo e(isset($post) ? route('posts.update', $post->id) : route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php if(isset($post)): ?>
                        <?php echo method_field('PUT'); ?>
                    <?php endif; ?>
                    <div class="row">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.forms.input','data' => ['id' => 'title','title' => 'Título','value' => isset($post) ? $post->title : null,'mandatory' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'title','title' => 'Título','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($post) ? $post->title : null),'mandatory' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.forms.input','data' => ['id' => 'author','title' => 'Autor','value' => isset($post) ? $post->author : null,'mandatory' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'author','title' => 'Autor','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($post) ? $post->author : null),'mandatory' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.forms.input','data' => ['id' => 'category_posts_id','title' => 'Categoria','type' => 'select','cols' => '6','data' => $categories,'value' => isset($post) ? $post->category_posts_id : null,'mandatory' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'category_posts_id','title' => 'Categoria','type' => 'select','cols' => '6','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($post) ? $post->category_posts_id : null),'mandatory' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.forms.input','data' => ['id' => 'publication_date','title' => 'Data de publicação','type' => 'date','cols' => '6','value' => isset($post) ? $post->publication_date : null,'mandatory' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'publication_date','title' => 'Data de publicação','type' => 'date','cols' => '6','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($post) ? $post->publication_date : null),'mandatory' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.forms.input','data' => ['id' => 'highlight','title' => 'Imagem de destaque','value' => isset($highlight) ? $highlight->path : null,'type' => 'highlight']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'highlight','title' => 'Imagem de destaque','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($highlight) ? $highlight->path : null),'type' => 'highlight']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.forms.input','data' => ['id' => 'text','title' => 'Texto','value' => isset($post) ? $post->text : null,'type' => 'summernote','mandatory' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'text','title' => 'Texto','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($post) ? $post->text : null),'type' => 'summernote','mandatory' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-lg btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $__env->startSection('style'); ?>
        <link rel="stylesheet" href="<?php echo e(url('theme/src/assets/css/editors/summernote.css')); ?>">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(url('theme/src/assets/js/libs/editors/summernote.js')); ?>"></script>
        <script src="<?php echo e(url('theme/src/assets/js/editors.js')); ?>"></script>

        <script defer>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 150
                });
            });


            const post = <?php echo json_encode($post ?? null, 15, 512) ?>;
            let highlight = <?php echo json_encode($highlight ?? false, 15, 512) ?>;

            const selectFile = document.querySelector('#select-file');
            const inputHighlight = document.querySelector('#highlight');
            const imageHighlight = document.querySelector('#image-highlight');
            const removeHighlight = document.querySelector('#remove-highlight');

            selectFile.onclick = () => {
                inputHighlight.click();
            }

            inputHighlight.onchange = () => {
                if (inputHighlight.files[0]) {
                    const reader = new FileReader();
                    reader.onload = () => {
                        imageHighlight.src = reader.result;
                    }
                    reader.readAsDataURL(inputHighlight.files[0]);
                    removeHighlight.classList.remove('d-none');
                }
            }

            removeHighlight.addEventListener('click', async _ => {
                if(post && highlight){
                    resultado = await myFetch('/admin/posts/delete-highlight', 'POST', {
                        "id": post.id
                    });
                    highlight = false;
                }
                imageHighlight.src = window.location.origin + '/assets/images/sem-imagem.jpg';
                removeHighlight.classList.add('d-none');
            });


        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/admin/post/form.blade.php ENDPATH**/ ?>
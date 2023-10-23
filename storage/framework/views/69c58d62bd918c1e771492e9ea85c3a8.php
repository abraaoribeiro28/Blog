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
                    <h3 class="nk-block-title page-title">Configurações do site</h3>
                    <div class="nk-block-des text-soft">
                        <p>Preencha os campos do formulário com as informações.</p>
                    </div>
                </div>
                <div class="nk-block-head-content">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link <?php if(old('tab') == 'tab-info' || empty(old('tab'))): ?> active <?php endif; ?>"
                               data-bs-toggle="tab" href="#tab-info">
                                <i class="icon bi bi-info-circle"></i>
                                <span>Informações</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(old('tab') == 'tab-incorp'): ?> active <?php endif; ?>"
                               data-bs-toggle="tab" href="#tab-incorp">
                                <i class="icon bi bi-code-slash"></i>
                                <span>Incorporação</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(old('tab') == 'tab-img'): ?> active <?php endif; ?>"
                               data-bs-toggle="tab" href="#tab-img">
                                <i class="icon bi bi-images"></i>
                                <span>Imagens</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(old('tab') == 'tab-option'): ?> active <?php endif; ?>"
                               data-bs-toggle="tab" href="#tab-option">
                                <i class="icon bi bi-gear"></i>
                                <span>Opções</span>
                            </a>
                        </li>
                    </ul>
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
                <form action="<?php echo e(route('configurations.update', 1)); ?>" method="POST" enctype="multipart/form-data" class="gy-3">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input type="hidden" name="tab" id="input-tab" value="<?php echo e(old('tab') ?? 'tab-info'); ?>">
                    <div class="tab-content">
                        <div class="tab-pane <?php if(old('tab') == 'tab-info' || empty(old('tab'))): ?> active <?php endif; ?>" id="tab-info">
                            <?php if (isset($component)) { $__componentOriginal815717427ecb31da438e22402b626953 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputText::resolve(['id' => 'titulo','dataArray' => $config['titulo'],'mandatory' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputText::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal815717427ecb31da438e22402b626953)): ?>
<?php $component = $__componentOriginal815717427ecb31da438e22402b626953; ?>
<?php unset($__componentOriginal815717427ecb31da438e22402b626953); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalcd398ae2534888f6d062d070ff4a15de = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\Textarea::resolve(['id' => 'descricao','dataArray' => $config['descricao'],'mandatory' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd398ae2534888f6d062d070ff4a15de)): ?>
<?php $component = $__componentOriginalcd398ae2534888f6d062d070ff4a15de; ?>
<?php unset($__componentOriginalcd398ae2534888f6d062d070ff4a15de); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal815717427ecb31da438e22402b626953 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputText::resolve(['id' => 'copyright','dataArray' => $config['copyright'],'mandatory' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputText::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal815717427ecb31da438e22402b626953)): ?>
<?php $component = $__componentOriginal815717427ecb31da438e22402b626953; ?>
<?php unset($__componentOriginal815717427ecb31da438e22402b626953); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal815717427ecb31da438e22402b626953 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputText::resolve(['id' => 'email','dataArray' => $config['email'],'mandatory' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputText::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal815717427ecb31da438e22402b626953)): ?>
<?php $component = $__componentOriginal815717427ecb31da438e22402b626953; ?>
<?php unset($__componentOriginal815717427ecb31da438e22402b626953); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal815717427ecb31da438e22402b626953 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputText::resolve(['id' => 'telefone','dataArray' => $config['telefone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputText::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal815717427ecb31da438e22402b626953)): ?>
<?php $component = $__componentOriginal815717427ecb31da438e22402b626953; ?>
<?php unset($__componentOriginal815717427ecb31da438e22402b626953); ?>
<?php endif; ?>
                        </div>
                        <div class="tab-pane <?php if(old('tab') == 'tab-incorp'): ?> active <?php endif; ?>" id="tab-incorp">
                            <?php if (isset($component)) { $__componentOriginalcd398ae2534888f6d062d070ff4a15de = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\Textarea::resolve(['id' => 'incorporacao_cabecalho','dataArray' => $config['incorporacao_cabecalho']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd398ae2534888f6d062d070ff4a15de)): ?>
<?php $component = $__componentOriginalcd398ae2534888f6d062d070ff4a15de; ?>
<?php unset($__componentOriginalcd398ae2534888f6d062d070ff4a15de); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalcd398ae2534888f6d062d070ff4a15de = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\Textarea::resolve(['id' => 'incorporacao_rodape','dataArray' => $config['incorporacao_rodape']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd398ae2534888f6d062d070ff4a15de)): ?>
<?php $component = $__componentOriginalcd398ae2534888f6d062d070ff4a15de; ?>
<?php unset($__componentOriginalcd398ae2534888f6d062d070ff4a15de); ?>
<?php endif; ?>
                        </div>
                        <div class="tab-pane <?php if(old('tab') == 'tab-img'): ?> active <?php endif; ?>" id="tab-img">
                            <?php if (isset($component)) { $__componentOriginal148bae599b208b83e273b9fcf3627a1c = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputFile::resolve(['id' => 'logo','dataArray' => $config['logo']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputFile::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal148bae599b208b83e273b9fcf3627a1c)): ?>
<?php $component = $__componentOriginal148bae599b208b83e273b9fcf3627a1c; ?>
<?php unset($__componentOriginal148bae599b208b83e273b9fcf3627a1c); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal148bae599b208b83e273b9fcf3627a1c = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputFile::resolve(['id' => 'favicon','dataArray' => $config['favicon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputFile::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal148bae599b208b83e273b9fcf3627a1c)): ?>
<?php $component = $__componentOriginal148bae599b208b83e273b9fcf3627a1c; ?>
<?php unset($__componentOriginal148bae599b208b83e273b9fcf3627a1c); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal148bae599b208b83e273b9fcf3627a1c = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputFile::resolve(['id' => 'logo_radape','dataArray' => $config['logo_radape']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputFile::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal148bae599b208b83e273b9fcf3627a1c)): ?>
<?php $component = $__componentOriginal148bae599b208b83e273b9fcf3627a1c; ?>
<?php unset($__componentOriginal148bae599b208b83e273b9fcf3627a1c); ?>
<?php endif; ?>
                        </div>
                        <div class="tab-pane <?php if(old('tab') == 'tab-option'): ?> active <?php endif; ?>" id="tab-option">
                            <?php if (isset($component)) { $__componentOriginal760255031dc3f597bf674db3b6773966 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputSwitch::resolve(['id' => 'manutencao','dataArray' => $config['manutencao']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-switch'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputSwitch::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal760255031dc3f597bf674db3b6773966)): ?>
<?php $component = $__componentOriginal760255031dc3f597bf674db3b6773966; ?>
<?php unset($__componentOriginal760255031dc3f597bf674db3b6773966); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal760255031dc3f597bf674db3b6773966 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputSwitch::resolve(['id' => 'exibir_versao','dataArray' => $config['exibir_versao']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-switch'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputSwitch::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal760255031dc3f597bf674db3b6773966)): ?>
<?php $component = $__componentOriginal760255031dc3f597bf674db3b6773966; ?>
<?php unset($__componentOriginal760255031dc3f597bf674db3b6773966); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal815717427ecb31da438e22402b626953 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputText::resolve(['id' => 'cor_principal','dataArray' => $config['cor_principal'],'haveColor' => true,'mandatory' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputText::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal815717427ecb31da438e22402b626953)): ?>
<?php $component = $__componentOriginal815717427ecb31da438e22402b626953; ?>
<?php unset($__componentOriginal815717427ecb31da438e22402b626953); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal815717427ecb31da438e22402b626953 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputText::resolve(['id' => 'cor_titulos','dataArray' => $config['cor_titulos'],'haveColor' => true,'mandatory' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputText::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal815717427ecb31da438e22402b626953)): ?>
<?php $component = $__componentOriginal815717427ecb31da438e22402b626953; ?>
<?php unset($__componentOriginal815717427ecb31da438e22402b626953); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal815717427ecb31da438e22402b626953 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputText::resolve(['id' => 'cor_botoes','dataArray' => $config['cor_botoes'],'haveColor' => true,'mandatory' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputText::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal815717427ecb31da438e22402b626953)): ?>
<?php $component = $__componentOriginal815717427ecb31da438e22402b626953; ?>
<?php unset($__componentOriginal815717427ecb31da438e22402b626953); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal815717427ecb31da438e22402b626953 = $component; } ?>
<?php $component = App\View\Components\Admin\Forms\Configuration\InputText::resolve(['id' => 'cor_fundo','dataArray' => $config['cor_fundo'],'haveColor' => true,'mandatory' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.forms.configuration.input-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admin\Forms\Configuration\InputText::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal815717427ecb31da438e22402b626953)): ?>
<?php $component = $__componentOriginal815717427ecb31da438e22402b626953; ?>
<?php unset($__componentOriginal815717427ecb31da438e22402b626953); ?>
<?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-lg btn-primary">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $__env->startSection('script'); ?>
        <script>
            // Salvando último tab clicado
            const tabs = document.querySelectorAll('.nav-tabs .nav-link');
            const inputTab = document.querySelector('#input-tab');

            tabs.forEach(element => element.onclick = () => {
                inputTab.value = element.getAttribute('href').replace('#', '');
            })

            // exibindo imagem selecionada
            const inputsFile = document.querySelectorAll('.form-file-input');

            inputsFile.forEach(element => {
                element.onchange = () => {
                    const file = element.files[0];
                    const reader = new FileReader();

                    reader.onload = () => {
                        const img = document.getElementById('image-' + element.id);
                        img.src = reader.result;
                    }

                    reader.readAsDataURL(file);
                }
            });
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/admin/configuration/edit.blade.php ENDPATH**/ ?>
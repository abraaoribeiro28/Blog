<div class="nk-sidebar-menu" data-simplebar>
    <ul class="nk-menu">
        <li class="nk-menu-heading">
            <h6 class="overline-title text-primary-alt">Dashboards</h6>
        </li>

        <li class="nk-menu-item">
            <a href="<?php echo e(route('dashboard')); ?>" class="nk-menu-link">
                <span class="nk-menu-icon"><i class="icon bi bi-graph-up"></i></span>
                <span class="nk-menu-text">Dashboard</span>
            </a>
        </li>

        <li class="nk-menu-item">
            <a href="<?php echo e(route('posts.index')); ?>" class="nk-menu-link">
                <span class="nk-menu-icon"><i class="icon bi bi-postcard"></i></span>
                <span class="nk-menu-text">Postagens</span>
            </a>
        </li>

        <li class="nk-menu-item">
            <a href="#" class="nk-menu-link">
                <span class="nk-menu-icon"><i class="icon bi bi-chat-left-dots"></i></span>
                <span class="nk-menu-text">Solicitações
                    <span class="ms-2 badge bg-info">2</span>
                </span>
            </a>
        </li>

        <li class="nk-menu-item">
            <a href="#" class="nk-menu-link">
                <span class="nk-menu-icon"><i class="icon bi bi-images"></i></span>
                <span class="nk-menu-text">Galeria de imagens</span>
            </a>
        </li>

        <li class="nk-menu-item has-sub">
            <a href="#" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                <span class="nk-menu-text">Gerenciamento de usuários</span>
            </a>
            <ul class="nk-menu-sub">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-text">Lista de usuários</span>
                    </a>
                </li>
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-text">Perfis e permissões</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nk-menu-item">
            <a href="<?php echo e(route('configurations.edit', 1)); ?>" class="nk-menu-link">
                <span class="nk-menu-icon"><i class="icon bi bi-sliders"></i></span>
                <span class="nk-menu-text">Configurações</span>
            </a>
        </li>
    </ul>
</div>
<?php /**PATH /var/www/html/resources/views/components/admin/layout/sidebar.blade.php ENDPATH**/ ?>
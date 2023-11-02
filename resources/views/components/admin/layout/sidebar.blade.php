
<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('dashboard') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('theme/src/images/logo.png') }}" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('theme/src/images/logo-dark.png') }}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('theme/src/images/logo-small.png') }}" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><i class="icon bi bi-graph-up"></i></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('posts.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><i class="icon bi bi-postcard"></i></span>
                            <span class="nk-menu-text">Postagens</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><i class="icon bi bi-chat-left-dots"></i></span>
                            <span class="nk-menu-text">Solicitações
                             <span class="ms-2 badge bg-info">2</span></span>
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
                            <span class="nk-menu-icon"><i class="icon bi bi-stack"></i></span>
                            <span class="nk-menu-text">Seções do site</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('instagram.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Instagram</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-text">E-book</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item">
                        <a href="{{ route('menus.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><i class="icon bi bi-list"></i></span>
                            <span class="nk-menu-text">Menus do site</span>
                        </a>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Usuários</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('users.index') }}" class="nk-menu-link">
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
                        <a href="{{ route('configurations.edit', 1) }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><i class="icon bi bi-sliders"></i></span>
                            <span class="nk-menu-text">Configurações</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

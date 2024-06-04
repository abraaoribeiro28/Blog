<aside mini="false" class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto transition-all duration-200 -translate-x-full bg-white border-0 shadow-none xl:ml-4 dark:bg-gray-950 ease-soft-in-out z-990 max-w-64 rounded-2xl xl:translate-x-0 xl:bg-transparent" id="sidenav-main">
    <div class="h-20">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 dark:text-white xl:hidden" aria-hidden="true" sidenav-close-btn></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700 dark:text-white" href="{{ route('dashboard') }}" target="_blank">
            <img src="{{ url($configuration['logo']) }}" class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:hidden" alt="logo" />
            <img src="{{ url($configuration['logo']) }}" class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:inline-block" alt="logo" />
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">

    <div class="items-center block w-full h-auto grow basis-full" id="sidenav-collapse-main">
        <ul class="flex flex-col pl-0 mb-0 list-none">
            <x-admin.layout.side-item title="Dashboard" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <x-slot name="icon">
                    <i class="bi bi-pie-chart-fill"></i>
                </x-slot>
            </x-admin.layout.side-item>

            @can('postagens.index')
                <x-admin.layout.side-item title="Postagens" href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                    <x-slot name="icon">
                        <i class="bi bi-postcard-fill"></i>
                    </x-slot>
                </x-admin.layout.side-item>
            @endcan

            @can('solicitacoes.index')
                <x-admin.layout.side-item title="Solicitações" href="#">
                    <x-slot name="icon">
                        <i class="bi bi-chat-left-dots-fill"></i>
                    </x-slot>
                </x-admin.layout.side-item>
            @endcan

            @can('galeria.index')
                <x-admin.layout.side-item title="Galeria de imagens" href="#">
                    <x-slot name="icon">
                        <i class="bi bi-images"></i>
                    </x-slot>
                </x-admin.layout.side-item>
            @endcan


            @canany(['instagram.index', 'ebooks.index'])
                <x-admin.layout.side-item title="Seções do site">
                    <x-slot name="icon">
                        <i class="bi bi-layers-fill"></i>
                    </x-slot>

                    <x-slot name="subitems">
                        @can('instagram.index')
                            <x-admin.layout.side-subitem title="Instagram" href="{{ route('instagram.index') }}" :active="request()->routeIs('instagram.index')"/>
                        @endcan
                        @can('ebooks.index')
                            <x-admin.layout.side-subitem title=">E-book" href="{{ route('ebooks.index') }}" :active="request()->routeIs('ebooks.index')"/>
                        @endcan
                    </x-slot>
                </x-admin.layout.side-item>
            @endcanany

            @can('menus.index')
                <x-admin.layout.side-item title="Menus do site" href="{{ route('menus.index') }}" :active="request()->routeIs('menus.index')">
                    <x-slot name="icon">
                        <i class="bi bi-list-nested"></i>
                    </x-slot>
                </x-admin.layout.side-item>
            @endcan

            @can('redes-sociais.index')
                <x-admin.layout.side-item title="Redes sociais" href="{{ route('social-media.index') }}" :active="request()->routeIs('social-media.index')">
                    <x-slot name="icon">
                        <i class="icon bi bi-facebook"></i>
                    </x-slot>
                </x-admin.layout.side-item>
            @endcan

            @canany(['usuarios.index', 'perfis.index'])
                <x-admin.layout.side-item title="Usuários">
                    <x-slot name="icon">
                        <i class="bi bi-people-fill"></i>
                    </x-slot>

                    <x-slot name="subitems">
                        @can('usuarios.index')
                            <x-admin.layout.side-subitem title="Lista de usuários" href="{{ route('users.index') }}" :active="request()->routeIs('users.index')"/>
                        @endcan
                        @can('perfis.index')
                            <x-admin.layout.side-subitem title=">Perfis e permissões" href="{{ route('profiles.index') }}" :active="request()->routeIs('profiles.index')"/>
                        @endcan
                    </x-slot>
                </x-admin.layout.side-item>
            @endcanany

            @can('configuracoes.edit')
                <x-admin.layout.side-item title="Configurações" href="{{ route('configurations.edit', 1) }}" :active="request()->routeIs('configurations.edit')">
                    <x-slot name="icon">
                        <i class="bi bi-gear-fill"></i>
                    </x-slot>
                </x-admin.layout.side-item>
            @endcan
        </ul>
    </div>
</aside>

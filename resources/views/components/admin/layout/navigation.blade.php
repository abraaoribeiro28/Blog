<nav navbar-main class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 mt-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav class="md:mr-12">
            <h4 class="mb-0 font-bold capitalize dark:text-white">{{ $title }}</h4>
        </nav>
        <!-- Menu burger -->
        <div class="flex items-center">
            <a mini-sidenav-burger href="javascript:;" class="hidden p-0 transition-all ease-nav-brand text-sm text-slate-500 xl:block" aria-expanded="false">
                <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 translate-x-[5px] rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                    <i class="ease-soft relative block h-0.5 translate-x-[5px] rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                </div>
            </a>
        </div>

        <div class="flex items-center grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto" id="navbar">
            <ul class="flex flex-row justify-end ml-auto pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center px-4">
                    <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500 dark:text-white">
                        <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                        <!-- fixed-plugin-button-nav  -->
                    </a>
                </li>

                <li class="flex items-center pl-4 relative"
                    x-data="{ open: false, name: '{{ auth()->user()->name }}', email: '{{ auth()->user()->email }}' }"
                    x-on:profile-updated.window="email = $event.detail.email; name = $event.detail.name; " >
                    <button x-on:click="open = !open" class="flex items-center text-sm sm-min:pe-1 font-bold text-gray-900 rounded-full md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
                        <div class="sm:me-2 flex items-center justify-center w-9 h-9 shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                        </div>
                        <div x-text="name" class="sm-max:hidden"></div>
                        <svg class="w-2.5 h-2.5 ms-3 sm-max:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>

                    <div x-show="open" class="z-10 bg-white divide-y divide-gray-100 rounded-lg w-fit shadow-lg dark:bg-gray-700 dark:divide-gray-600 absolute top-[50px] right-0 overflow-hidden">
                        <div class="flex items-center justify-center px-6 py-4 text-sm text-gray-900 dark:text-white">
                            <div class="flex items-center justify-center font-bold mr-3  w-9 h-9 shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 text-white rounded-full">
                                {{ getUsernameInitials() }}
                            </div>
                            <div class="text-nowrap">
                                <div class="font-bold text-sm" x-text="name"></div>
                                <div class="truncate text-xs" x-text="email"></div>
                            </div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="#" wire:navigate.hover class="block px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                    </svg>
                                    <span class="ml-1">Meu perfil</span>
                                </a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <button wire:click="logout" class="block w-full px-5 py-2 text-sm text-start text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                                </svg>
                                <span class="ml-1">Sair</span>
                            </button>
                        </div>
                    </div>
                </li>

                <li class="flex items-center pl-4 xl:hidden">
                    <a sidenav-trigger class="block p-0 transition-all ease-nav-brand text-sm text-slate-500 dark:text-white" href="javascript:;" aria-expanded="false">
                        <div class="w-4.5 overflow-hidden">
                            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                            <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

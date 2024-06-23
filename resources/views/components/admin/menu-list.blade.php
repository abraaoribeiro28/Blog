<ul class="@if($level) ps-4 @endif sortable min-w-[415px]">
    @foreach ($menus as $menu)
        <li id="item-{{ $menu->id }}" class="item-menu border rounded-1 mb-2 shadow-sm">
            <div class="flex items-center p-3">
                <div class="flex items-center">
                    @can('menus.edit')
                        <span class="handle">
                            <i class="icon bi bi-list text-xl"></i>
                        </span>
                    @endcan
                    <span class="ml-3">{{ $menu->name }}</span>
                </div>

                <div class="flex items-center gap-2 ml-auto">
                    @if($menu->status)
                        <em class="ni ni-check-circle text-success" style="font-size: 19px;"></em>
                    @else
                        <em class="ni ni-cross-circle text-danger" style="font-size: 19px;"></em>
                    @endif

                    @canany(['menus.edit', 'menus.destroy'])
                        @can('menus.edit')
                            <a href="{{ route('menus.edit', $menu->id) }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Editar
                            </a>
                        @endcan
                        @can('menus.destroy')
                            <a href="javascript:" onclick="confirmDelete({{$menu->id}})"
                                class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Excluir
                            </a>
                        @endcan
                    @endcanany
                </div>
            </div>

            @if($menu->children->count())
                @include('components.admin.menu-list', ['menus' => $menu->children()->orderBy('order')->get(), 'level' => $level + 1])
            @endif
        </li>
    @endforeach
</ul>

<ul class="@if($level) ps-4 @endif sortable">
    @foreach ($menus as $menu)
        <li id="item-{{ $menu->id }}" style="font-size: 16px" class="item-menu">
            <div class="d-flex align-items-center dd-item">
                <div class="texts">
                    @can('menus.edit')
                        <span class="handle">
                            <i class="icon bi bi-list" style="font-size: 20px"></i>
                        </span>
                    @endcan
                    <span class="tb-lead ms-1">{{ $menu->name }}</span>
                </div>
                <div class="ms-auto me-2 d-flex align-items-center">
                    @if($menu->status)
                        <em class="ni ni-check-circle text-success" data-bs-toggle="tooltip" data-bs-title="Ativado" style="font-size: 19px;"></em>
                    @else
                        <em class="ni ni-cross-circle text-danger" data-bs-toggle="tooltip" data-bs-title="Desativado" style="font-size: 19px;"></em>
                    @endif
                    <i class="bi bi-info-circle-fill mx-1" data-bs-toggle="tooltip" data-bs-title="{{ $menu->url }}" style="line-height: 0;"></i>

                    @canany(['menus.edit', 'menus.destroy'])
                        <div class="dropdown">
                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="8" aria-expanded="false">
                            <em class="icon ni ni-more-h"></em>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                            <ul class="link-list-plain">
                                @can('menus.edit')
                                    <li><a href="{{ route('menus.edit', $menu->id) }}" class="text-primary">Editar</a></li>
                                @endcan
                                @can('menus.destroy')
                                    <li>
                                        <a href="#" class="text-danger" onclick="confirmDelete({{$menu->id}})">
                                            Excluir
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </div>
                    @endcanany
                </div>
            </div>

            @if($menu->children->count())
                @include('components.admin.menu-list', ['menus' => $menu->children()->orderBy('order')->get(), 'level' => $level + 1])
            @endif
        </li>
    @endforeach
</ul>

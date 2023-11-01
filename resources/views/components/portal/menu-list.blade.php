@foreach ($menus as $menu)
    @if($menu->children->count())
        @if(isset($dropend))
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">{{ $menu->name }}</a>
                <ul class="dropdown-menu">
                    @include('components.portal.menu-list', ['menus' => $menu->children, 'level' =>
                    $level + 1, 'dropend' => false])
                </ul>
            </li>
        @else
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @include('components.portal.menu-list', ['menus' => $menu->children, 'level' =>
                    $level + 1, 'dropend' => true])
                </ul>
            </div>
        @endif
    @else
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ $menu->url }}">{{ $menu->name }}</a>
        </li>
    @endif
@endforeach

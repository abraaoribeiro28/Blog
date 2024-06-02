@foreach ($menus as $menu)
    @if(isset($subitem) && $subitem)
        <a href="{{ $menu->url }}" class="block text-sm text-black rounded hover:text-primary py-[10px] px-4">{{ $menu->name }}</a>
    @elseif($menu->children->count())
        <li class="relative group submenu-item">
            <a href="javascript:void(0)" class="text-base text-black group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:pl-0 lg:pr-4 flex mx-8 lg:mr-0 lg:ml-8 xl:ml-12 relative after:absolute after:w-2 after:h-2 after:border-b-2 after:border-r-2 after:border-current after:rotate-45 lg:after:right-0 after:right-1 after:top-1/2 after:translate-y-[-50%] after:mt-[-2px]">
                {{ $menu->name }}
            </a>
            <div class="submenu hidden relative lg:absolute w-[250px] top-full lg:top-[110%] left-0 rounded-sm lg:shadow-lg p-4 lg:block lg:opacity-0 lg:invisible group-hover:opacity-100 lg:group-hover:visible lg:group-hover:top-full bg-white transition-[top] duration-300">
                @include('components.portal.menu-list', ['menus' => $menu->children, 'subitem' => true])
            </div>
        </li>
    @else
        <li class="relative group">
            <a href="{{ $menu->url }}" class="menu-scroll text-base text-black group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0">{{ $menu->name }}</a>
        </li>
    @endif
@endforeach

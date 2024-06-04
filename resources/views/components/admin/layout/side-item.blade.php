<li class="mt-0.5 w-full" x-data="{ open: false}">
    @php
        if ($active = (isset($active) && $active)){
            $linkClass = 'xl:shadow-soft-xl rounded-lg  bg-white font-semibold text-slate-700 after:rotate-180 after:text-slate-800 transition-all';
            $iconClass = 'shadow-soft-sm bg-gradient-to-tl from-purple-700 to-pink-500 text-white';
        }else{
            $linkClass = 'font-medium text-slate-500 shadow-none transition-colors';
            $iconClass = 'shadow-soft-2xl fill-current';
        }

        if ($existSubItems = (isset($subitems) && $subitems)){
            $href = "javascript:;";
            $linkClass .= "after:ease-soft-in-out after:font-awesome-5-free after:ml-auto after:inline-block after:font-bold after:text-slate-800 after:antialiased after:transition-all after:duration-200 after:content-['\\f107']";
        }
    @endphp

    <a class="{{ $linkClass }} ease-soft-in-out text-sm py-2.7 my-0 mx-4 flex items-center whitespace-nowrap px-4 dark:text-white dark:opacity-80"
       @if($existSubItems) collapse_trigger="primary" aria-expanded="{{ $active ? 'true' : 'false' }}" @else wire:navigate.hover @endif
       href="{{ $href ?? '#' }}" target="{{ $target ?? '_self' }}">
        <div class="{{ $iconClass }} stroke-none mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center p-2.5 text-center">
            {{ $icon ?? '' }}
        </div>
        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-slate-700">
            {{ $title ?? 'Link Default'}}
        </span>
    </a>

    @if($existSubItems)
        <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out @if(!$active) max-h-0 @endif">
            <ul class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                {{ $subitems }}
            </ul>
        </div>
    @endif
</li>

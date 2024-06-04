@php
    if ($active = (isset($active) && $active)){
        $linkClass = 'before:-left-5 rounded-lg font-semibold text-slate-800 before:h-2 before:w-2 before:bg-slate-800 dark:opacity-100';
    }else{
        $linkClass = 'before:-left-4.5 before:h-1.25 before:w-1.25 font-medium text-slate-800/50 before:bg-slate-800/50 dark:opacity-60';
    }
@endphp


<li class="mt-0.5 w-full">
    <a class="{{ $linkClass }} ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:content-[''] dark:text-white dark:before:bg-white dark:before:opacity-80"
       href="{{ $href ?? '#' }}" target="{{ $target ?? '_self' }}" wire:navigate.hover>
        <span class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out"></span>
        <span class="transition-all duration-100 pointer-events-none ease-soft">
            {{ $title ?? 'Link Default'}}
        </span>
    </a>
</li>

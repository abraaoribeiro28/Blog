@if ($paginator->hasPages())
    <div class="flex flex-wrap mx-[-16px] wow fadeInUp" data-wow-delay=".15s">
        <div class="w-full px-4">
            <ul class="flex flex-wrap items-center pt-8 justify-center">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="m-1">
                        <span class="flex items-center justify-center rounded-sm bg-body-color bg-opacity-[15%] hover:bg-primary hover:bg-opacity-100 transition hover:text-white text-body-color px-4 text-sm min-w-[36px] h-9">
                            @lang('pagination.previous')
                        </span>
                    </li>
                @else
                    <li class="m-1">
                        <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center justify-center rounded-sm bg-body-color bg-opacity-[15%] hover:bg-primary hover:bg-opacity-100 transition hover:text-white text-body-color px-4 text-sm min-w-[36px] h-9">
                            @lang('pagination.previous')
                        </a>
                    </li>
                @endif

                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="m-1">
                            <span class="flex items-center justify-center rounded-sm bg-body-color bg-opacity-[15%] text-body-color px-4 text-sm min-w-[36px] h-9 cursor-not-allowed">
                                {{ $element }}
                            </span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="m-1">
                                    <span class="flex items-center justify-center rounded-sm bg-primary text-white transition px-4 text-sm min-w-[36px] h-9">
                                        {{ $page }}
                                    </span>
                                </li>
                            @else
                                <li class="m-1">
                                    <a href="{{ $url }}" class="flex items-center justify-center rounded-sm bg-body-color bg-opacity-[15%] hover:bg-primary hover:bg-opacity-100 transition hover:text-white text-body-color px-4 text-sm min-w-[36px] h-9">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="m-1">
                        <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center justify-center rounded-sm bg-body-color bg-opacity-[15%] hover:bg-primary hover:bg-opacity-100 transition hover:text-white text-body-color px-4 text-sm min-w-[36px] h-9">
                            @lang('pagination.next')
                        </a>
                    </li>
                @else
                    <li class="m-1">
                        <span class="flex items-center justify-center rounded-sm bg-body-color bg-opacity-[15%] hover:bg-primary hover:bg-opacity-100 transition hover:text-white text-body-color px-4 text-sm min-w-[36px] h-9">
                            @lang('pagination.next')
                        </span>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endif

@if ($paginator->hasPages())
    <div class="container-pagination">
        <div class="pagination-info">
            Showing 1 to 7 of 15 entries
        </div>
        <nav class="pagination">
            <ul class="pagination-list">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="pager">
                        <a href="javascript:;">
                            <
                        </a>
                    </li>
                @else
                    <li class="pager">
                        <a href="{{ $paginator->previousPageUrl() }}">
                            <
                        </a>
                    </li>
                @endif

                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li>
                            <a href="javascript:;" class="cursor-not-allowed">
                                {{ $element }}
                            </a>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active">
                                    <a href="javascript:;">
                                        {{ $page }}
                                    </a>
                                </li>
                            @else
                                <li class="">
                                    <a href="{{ $url }}">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="pager">
                        <a href="{{ $paginator->nextPageUrl() }}">
                            >
                        </a>
                    </li>
                @else
                    <li class="pager">
                        <a href="javascript:;">
                            >
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif

@section('style')
    @parent
    @vite(['resources/css/admin/pagination.css'])
@endsection
@if ($paginator->hasPages())
    <nav>
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button type="button" class="pagination_button left disabled"
                        style="cursor: not-allowed"
                        aria-disabled="true"
                        aria-label="@lang('pagination.previous')">
                    <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                </button>
            @else
                <button type="button">
                    <a class="pagination_button left"
                       href="{{ $paginator->previousPageUrl() }}"
                       rel="prev"
                       aria-label="@lang('pagination.previous')">
                        <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                    </a>
                </button>
            @endif


            {{-- Pagination Elements --}}
            <ul class="pagination_list">
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="pagination--item active" aria-current="page"><span>{{ $page }}</span></li>
                            @else
                                <li class="pagination--item"><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <button type="button">
                    <a class="pagination_button right"
                       href="{{ $paginator->nextPageUrl() }}"
                       rel="next"
                       aria-label="@lang('pagination.next')">
                        <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                    </a>
                </button>
            @else
                <button style="cursor: not-allowed" type="button" class="pagination_button right">
                    <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}" alt="arrow">
                </button>
            @endif
        </div>
    </nav>
@endif

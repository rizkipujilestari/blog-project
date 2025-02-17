@if ($paginator->hasPages())
    <div id="pagination">
        <span class="all">Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}</span>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="page-link" style="color: gray;">&laquo; Previous</span>
        @else
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
        @endif
        
        @foreach ($elements as $element)
            @if (is_string($element))
                <a class="page-item disabled"><span class="page-link">{{ $element }}</span></a>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="current">{{ $page }}</span>
                    @else
                        <a class="inactive" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next &raquo;</a>
        @else
            <span class="page-link" style="color: gray;">Next &raquo;</span>
        @endif
    </div>
@endif

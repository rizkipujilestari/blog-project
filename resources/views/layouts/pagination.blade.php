@if ($paginator->hasPages())
    <div id="pagination">
        <span class="all">Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}</span>
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
    </div>
@endif

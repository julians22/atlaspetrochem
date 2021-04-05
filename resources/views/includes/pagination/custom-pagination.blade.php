@if ($paginator->hasPages())
    <div class="flex items-end justify-center my-2">

        @if ( ! $paginator->onFirstPage())
            {{-- First Page Link --}}
            {{-- <a wire:click="gotoPage(1)"> << </a> --}}
            @if($paginator->currentPage() > 1)
            {{-- Previous Page Link --}}
            <a wire:click="previousPage" class="cursor-pointer"> < </a>
            @endif
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <!--  Use three dots when current page is greater than 3.  -->
                    {{-- @if ($paginator->currentPage() > 3 && $page === 2)
                        <div class="text-blue-800 mx-1">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif --}}

                    <!--  Show active page two pages before and after it.  -->
                    @if ($page == $paginator->currentPage())
                        <span class="mx-1 cursor-pointer text-api-redLighten font-semibold">{{ $page }}</span>
                    @else
                        <a class="mx-1 cursor-pointer hover:text-api-redLighten" wire:click="gotoPage({{$page}})">{{ $page }}</a>
                    @endif

                    <!--  Use three dots when current page is away from end.  -->
                    {{-- @if ($paginator->currentPage() < $paginator->lastPage() - 2  && $page === $paginator->lastPage() - 1)
                        <div class="text-blue-800 mx-1">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif --}}
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            @if($paginator->lastPage() - $paginator->currentPage() >= 1)
                <a wire:click="nextPage" rel="next" class="cursor-pointer"> > </a>
            @endif
            {{-- <a wire:click="gotoPage({{ $paginator->lastPage() }})"> >> </a> --}}
        @endif
    </div>
@endif

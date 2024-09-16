@if ($paginator->hasPages())
    <div class="row">
        {{--  <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
            <div>
                <select name="kt_customers_table_length" aria-controls="kt_customers_table" class="form-select form-select-solid form-select-sm" id="dt-length-0">
                    <option value="10" {{ request()->get('per_page') == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request()->get('per_page') == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request()->get('per_page') == 50 ? 'selected' : '' }}>50</option>
                    <option value="100" {{ request()->get('per_page') == 100 ? 'selected' : '' }}>100</option>
                </select>
                <label for="dt-length-0"></label>
            </div>
        </div>  --}}
        <div class="col-sm-12 col-md-12 d-flex align-items-center  justify-content-md-end">
            <div class="dt-paging paging_simple_numbers">
                <nav>
                    <ul class="pagination pagination-outline ">
                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <li class="page-item previous disabled m-1" aria-disabled="true">
                                <a href="#" class="page-link">
                                    <i class="previous"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item previous m-1">
                                <a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev" aria-label="@lang('pagination.previous')">
                                    <i class="previous"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <li class="page-item disabled m-1" aria-disabled="true">
                                    <span class="page-link">{{ $element }}</span>
                                </li>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="page-item active m-1" aria-current="page">
                                            <a href="#" class="page-link">{{ $page }}</a>
                                        </li>
                                    @else
                                        <li class="page-item m-1">
                                            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <li class="page-item next m-1">
                                <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next" aria-label="@lang('pagination.next')">
                                    <i class="next"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item next disabled m-1" aria-disabled="true">
                                <a href="#" class="page-link">
                                    <i class="next"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endif

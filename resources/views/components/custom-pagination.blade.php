<!-- BEGIN: Pagination -->
@if ($paginator->hasPages())
<div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
  <nav role="navigation" class="w-full sm:w-auto sm:mr-auto">
    <ul class="pagination">

      @if ($paginator->onFirstPage())
      <li class="page-item disabled" aria-disabled="true">
        <div class="page-link" aria-label="Previous">
          <i class="w-4 h-4" data-lucide="chevrons-left"></i>
        </div>
      </li>
      @else
      <li class="page-item">
        <a href="{{ route('fppps.index') }}" class="page-link" aria-label="Previous">
          <i class="w-4 h-4" data-lucide="chevrons-left"></i>
        </a>
      </li>
      @endif

      @if($paginator->onFirstPage())
      <li class="page-item">
        <div class="page-link" aria-disabled="true">
          <i class="w-4 h-4" data-lucide="chevron-left"></i>
        </div>
      </li>
      @else
      <li class="page-item">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
          <i class="w-4 h-4" data-lucide="chevron-left"></i>
        </a>
      </li>
      @endif

      @foreach ($elements as $element)
          
          @if (is_array($element))
              @foreach ($element as $page => $url)

                  @if ($paginator->currentPage() > 4 && $page === 2)
                  <li class="page-item">
                    <div class="page-link" aria-disabled="true">...</div>
                  </li>
                  @endif

                  @if ($page == $paginator->currentPage())
                      <li class="page-item active font-bold">
                        <a class="page-link" aria-disabled="true">{{ $page }}</a>
                      </li>
                  @elseif($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page ===
                  $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page
                  === 1)
                      <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                      </li>
                  @endif

                  @if ($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage() - 1)
                    <li class="page-item">
                      <div class="page-link" aria-disabled="true">...</div>
                    </li>
                  @endif
              @endforeach
          @endif
      @endforeach

      @if ($paginator->hasMorePages())
          <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
              <i class="w-4 h-4" data-lucide="chevron-right"></i>
            </a>
          </li>
      @else
          <li class="page-item">
            <div class="page-link">
              <i class="w-4 h-4" data-lucide="chevron-right"></i>
            </div>
          </li>
      @endif
     
      @if ($paginator->onLastPage())
      <li class="page-item">
        <div class="page-link">
          <i class="w-4 h-4" data-lucide="chevrons-right"></i>
        </div>
      </li>
      @else
     <li class="page-item">
        <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">
          <i class="w-4 h-4" data-lucide="chevrons-right"></i>
        </a>
      </li>
      @endif

    </ul>
  </nav>
  <select class="w-20 form-select box mt-3 sm:mt-0">
    <option>10</option>
    <option>25</option>
    <option>35</option>
    <option>50</option>
  </select>
</div>
@endif
<!-- END: Pagination -->
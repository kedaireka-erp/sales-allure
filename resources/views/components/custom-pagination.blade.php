<!-- BEGIN: Pagination -->
@if ($paginator->hasPages())
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
      <nav class="w-full sm:w-auto sm:mr-auto">
        <ul class="pagination">
          
          <li class="page-item">
            <a class="page-link" href="#">
              <i class="w-4 h-4" data-lucide="chevrons-left"></i>
            </a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#">
              <i class="w-4 h-4" data-lucide="chevron-left"></i>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">...</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">...</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">
              <i class="w-4 h-4" data-lucide="chevron-right"></i>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">
              <i class="w-4 h-4" data-lucide="chevrons-right"></i>
            </a>
          </li>
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

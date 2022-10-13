@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert" id="session alert">
      <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> 
      {{ $message }}
      <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
        <i data-lucide="x" class="w-4 h-4"></i>
      </button>
    </div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-pending alert-dismissible show flex items-center mb-2" role="alert" id="session alert">
  <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> 
  @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
  @endif
  <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
    <i data-lucide="x" class="w-4 h-4"></i>
  </button>
</div>
@endif


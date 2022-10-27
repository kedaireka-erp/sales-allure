@extends('../layout/' . $layout)

@section('subhead')
<title>Log - Detail</title>
@endsection

@section('subcontent')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Detail Log</h2>
</div>
<!-- BEGIN: Changes -->
<div class="intro-y box overflow-hidden mt-5">
    <div class="py-3 px-5 flex flex-col gap-2">

        <h1 class="text-md"><span class="font-bold">Description:</span> {{ $log->description }}</h1>
        <h1 class="text-md"><span class="font-bold">Time:</span> {{
            \Carbon\Carbon::parse($log->created_at)->translatedFormat('d F Y, H:i') }}</h1>
    </div>
</div>
<!-- END: Changes -->
<!-- BEGIN: Changes -->
<div class="intro-y box overflow-hidden mt-5">
    <div class="py-3 px-5 flex flex-col gap-2">
        <h1 class="text-md"><span class="font-bold">Causer</h1>
        <pre>{{ $log->causer ? $log->causer->toJson(JSON_PRETTY_PRINT) : '-none-' }}</pre>
    </div>
</div>

<!-- END: Changes -->
<!-- BEGIN: Changes -->
<div class="intro-y box overflow-hidden mt-5">
    <div class="py-3 px-5 flex flex-col gap-2">
        <h1 class="text-md"><span class="font-bold">Subject</h1>
        <pre>{{ $log->subject->toJson(JSON_PRETTY_PRINT) }}</pre>
    </div>
</div>
<!-- END: Changes -->
<!-- BEGIN: Changes -->
<div class="intro-y box overflow-hidden mt-5">
    <div class="py-3 px-5 flex flex-col gap-2">
        <h1 class="text-md"><span class="font-bold">Changes on subject</h1>
        <pre>{{ $log->changes->toJson(JSON_PRETTY_PRINT) }}</pre>
    </div>
</div>

<!-- END: Changes -->
@endsection
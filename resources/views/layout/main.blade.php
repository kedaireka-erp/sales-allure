@extends('layout.base')

@section('body')
    <body class="py-5">
        {{-- <x-loading-page /> --}}
        <div id="content">
            @yield('content')
        </div>
        @include('layout.components.dark-mode-switcher')
        @include('layout.components.main-color-switcher')

        <!-- BEGIN: JS Assets-->
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @yield('script')
    </body>
@endsection



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

        @yield('script')
    </body>
@endsection



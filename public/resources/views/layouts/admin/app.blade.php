<!DOCTYPE html>

<html lang="en">

<head>
    <base href="">
    <title>Jari Telunjuk</title>
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <link rel="shortcut icon" href="{{ asset('assets/admin/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('/assets/admin/plugins/custom/leaflet/leaflet.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        var ajaxUrlAdmin = '{{ url('admin') }}/';
    </script>

    @stack('css')
</head>

<body id="kt_body"
	class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
	style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('layouts.admin.partials.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('layouts.admin.partials.header')
                @yield('content')
                @include('layouts.admin.partials.footer')
            </div>
        </div>
    </div>

    <script>
        var hostUrl = 'assets/admin/';
    </script>

    <script src="{{ asset('/assets/admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/custom/modals/select-location.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


    @yield('scripts')

    @stack('js');

</body>

</html>

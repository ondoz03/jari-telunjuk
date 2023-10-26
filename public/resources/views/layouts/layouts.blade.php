<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset=UTF-8>

    <meta name="description"
        content="Astro description">
    <meta name="viewport"
        content="width=device-width">
    <link rel="icon"
        type="image/svg+xml"
        href="/favicon.svg">
    <link rel="preconnect"
        href="https://fonts.googleapis.com">
    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap"
        rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/source-sans-pro"
        rel="stylesheet">
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <meta name="generator"
        content="{Astro.generator}">

    @yield('title')
    <link rel="stylesheet" href="{{ asset('/assets')}}/front/blog-detail.ba35dd2c.css" />
    <link rel="stylesheet" href="{{ asset('/assets')}}/front/index.1e77ef8f.css" />
    <link rel="stylesheet" href="{{ asset('/assets')}}/front/404-recommendation.c48ff23f.css" />
    <link rel="stylesheet"
        href="{{ asset('/assets') }}/front/404-recommendation.2e871350.css" />
    <link rel="stylesheet"
        href="{{ asset('/assets') }}/front/index.1e77ef8f.css" />

    @yield('header-js')

    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.2e413d6c.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.25b3dcdb.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.52eed5be.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.56fd44db.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.64f44cfb.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.6695be64.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.7225d69c.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.166569e6.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.440790ec.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.cfa70760.js"></script>
    <script type="module"
        src="{{ asset('/assets') }}/front/hoisted.f5ae75b8.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body class="layar-telunjuk relative font-source-sans text-[#2e2e2e]">
    <!--begin::Header-->
    @include('layouts.partials.header')
    @include('layouts.partials.header-mobile')

    <!--end::Header-->
    <!--begin::Content-->
    @yield('content')
    <!--end::Content-->
    <!--begin::Footer-->
    @include('layouts.partials.footer')


    @yield('js')

</body>

</html>

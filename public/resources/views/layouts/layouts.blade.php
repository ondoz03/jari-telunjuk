
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Astro description">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/source-sans-pro" rel="stylesheet">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="generator" content="{Astro.generator}">
    <title>Discover books you’ll love! | Jari Telunjuk</title>
    <link rel="stylesheet" href="{{ asset('public/assets')}}/front/blog-detail.3bea6739.css" />
    <link rel="stylesheet" href="{{ asset('public/assets')}}/front/index.1e77ef8f.css" />

    @yield('header-js')
    <script type="module" src="{{ asset('public/assets')}}/front/hoisted.6632b69c.js"></script>
    <script type="module" src="{{ asset('public/assets')}}/front/hoisted.d78003cb.js"></script>

</head>
  <body class="layar-telunjuk relative font-source-sans text-[#2e2e2e]">
    @include('layouts.partials.header-mobile')
    <!--end::Header tablet and mobile-->
    <!--begin::Header-->
    @include('layouts.partials.header')
    <!--end::Header-->
    <!--begin::Content-->
    @yield('content')
    <!--end::Content-->
    <!--begin::Footer-->
    @include('layouts.partials.footer')
  </body>
</html>

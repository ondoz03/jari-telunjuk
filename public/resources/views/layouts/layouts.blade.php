<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset=UTF-8>

    {!!GeneralHelper::urlBot()!!}

    <meta name="viewport"
          content="width=device-width">
    <link rel="icon"
          type="image/x-icon"
          href="{{asset('favicon.ico')}}">
    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap"
          rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/source-sans-pro"
          rel="stylesheet">

          <script>
            !function (w, d, t) {
              w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++
    )ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=i+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};

              ttq.load('CMDTEBJC77UFQ8DF4R50');
              ttq.page();
            }(window, document, 'ttq');
        </script>

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '358726900075784');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=358726900075784&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5X54CZG2');</script>
    <!-- End Google Tag Manager -->


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6GJWH6LMM7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6GJWH6LMM7');
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script
        src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"
        defer
    ></script>

    @yield('title')
    <link rel="stylesheet"
          href="{{ asset('/assets') }}/front/404-recommendation.b4f51728.css"/>
    <link rel="stylesheet"
          href="{{ asset('/assets') }}/front/index.1e77ef8f.css"/>

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
            src="{{ asset('/assets') }}/front/hoisted.7225d69c.js"></script>
    <script type="module"
            src="{{ asset('/assets') }}/front/hoisted.166569e6.js"></script>
    <script type="module"
            src="{{ asset('/assets') }}/front/hoisted.440790ec.js"></script>
    <script type="module"
            src="{{ asset('/assets') }}/front/hoisted.cfa70760.js"></script>
    <script type="module"
            src="{{ asset('/assets') }}/front/hoisted.aaf112db.js"></script>
    <script type="module"
            src="{{ asset('/assets') }}/front/hoisted.f5ae75b8.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .lazy-img {
            filter: blur(10px);
            border-radius: 9px;
            background: linear-gradient(165deg);
        }

        .box-item {
            width: 86px;
            height: 120px;
            background-color: #f0f0f0;
        }

        .shimmerBG {
            animation: shimmer 2s linear infinite forwards;
            background: linear-gradient(to right, #f6f6f6 8%, #e5e5e5 18%, #f6f6f6 33%);
            background-size: 1200px 100%;
        }

        .skeleton-paragraph-4 {
            height: 7px;
            border-radius: 8px;
            margin-top: 8px;
            background-color: #f5f5f5;
            width: 70%;
        }

        .skeleton-paragraph-5 {
            height: 7px;
            border-radius: 8px;
            margin-top: 8px;
            background-color: #f5f5f5;
            width: 90%;
        }

        li {
            list-style: none;
        }

        @keyframes shimmer {
            0% {
                background-position: 100% 0;
            }
            100% {
                background-position: -100% 0;
            }
        }

    </style>


</head>

<body class="layar-telunjuk relative font-source-sans text-[#2e2e2e]">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X54CZG2"
    height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
    <!-- End Google Tag Manager (noscript) -->
<!--begin::Header-->
@include('layouts.partials.header')

<!--end::Header-->
<!--begin::Content-->
@yield('content')
<!--end::Content-->
<!--begin::Footer-->
@include('layouts.partials.footer')


<div class="modal modal__overlay astro-J7PV25F6"
     tabindex="-1"
     id="modal-login"
     data-micromodal-close style="display: none">

    <div class="relative z-10 ease-in " aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!--
          Background backdrop, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity duration-200 ease-out duration-300s" ></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0 s">
                <!--
                  Modal panel, show/hide based on modal state.

                  Entering: "ease-out duration-300"
                    From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    To: "opacity-100 translate-y-0 sm:scale-100"
                  Leaving: "ease-in duration-200"
                    From: "opacity-100 translate-y-0 sm:scale-100"
                    To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                -->
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg ease-out duration-300 ease-in duration-200">
                    <div class="bg-white px-4 py-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">

                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title"> Sign Up/Login </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500"> Bergabunglah dengan Jaritelunjuk sekarang dan jadilah bagian dari komunitas pembaca yang aktif dan temukan rekomendasi baru</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <div class="flex w-full max-w-sm flex-col items-start gap-4">
                            <a href="{{ route('auth.google') }}"
                               class="relative flex w-full items-center justify-center gap-3 rounded-full border-2 border-black bg-white py-4">
                                <img class="h-6 w-6"
                                     src="{{ asset('/assets') }}/media/icon-google.png"
                                     alt="Icon Google">

                                <p class="text-base font-semibold leading-5">
                                    Sign up with Google
                                </p>
                            </a>


                            <a
                                onclick="onClose()"
                                class="relative flex w-full items-center justify-center gap-3 rounded-full border-2 border-black bg-white py-4" style="cursor: pointer">
                                <p class="text-base font-semibold leading-5"> <u>Close</u></p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div id="modal-signup-new" class="modal-signup-new fixed inset-0 z-[999999999] hidden h-full w-full items-center justify-center flex astro-J7PV25F6">
    <!-- overlay -->
    <div id="close-overlay" class="fixed inset-0 z-10 h-full w-full bg-black/50 astro-J7PV25F6">
    </div>

    <!-- content -->
    <div class="relative z-10 -mt-0 min-h-screen w-full max-w-4xl px-0 lg:-mt-12 lg:min-h-max lg:px-8">
        <nav class="flex items-center justify-between border-b border-[#EBEBEB] bg-white/95 p-4 pt-4 lg:justify-center lg:rounded-t-2xl lg:border-b-0 lg:pt-11">

            <h1 class="text-left font-arvo text-xl font-normal lg:text-center lg:text-4xl">
                Sign Up/Login
            </h1>
            <button id="close-icon" class="block lg:hidden">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6649 18.0492C20.1117 18.496 20.1117 19.2183 19.6649 19.6651C19.442 19.888 19.1495 20 18.8569 20C18.5643 20 18.2718 19.888 18.0489 19.6651L12 13.6161L5.95107 19.6651C5.72822 19.888 5.43566 20 5.1431 20C4.85054 20 4.55798 19.888 4.33513 19.6651C3.88829 19.2183 3.88829 18.496 4.33513 18.0492L10.3841 12.0001L4.33513 5.95111C3.88829 5.50426 3.88829 4.78199 4.33513 4.33514C4.78197 3.88829 5.50423 3.88829 5.95107 4.33514L12 10.3842L18.0489 4.33514C18.4958 3.88829 19.218 3.88829 19.6649 4.33514C20.1117 4.78199 20.1117 5.50426 19.6649 5.95111L13.6159 12.0001L19.6649 18.0492Z" fill="#2E2E2E"></path>
                </svg>
            </button>
        </nav>

        <h3 class="bg-white/95 py-4 text-center text-sm leading-5 lg:py-0">
            Bergabunglah dengan Jaritelunjuk sekarang dan jadilah bagian dari komunitas pembaca yang aktif dan temukan rekomendasi baru
        </h3>

        <div class="relative z-10 h-[calc(100vh_-_113px)] bg-white/95 px-6 pt-11 lg:h-auto lg:rounded-b-2xl lg:pb-14 lg:pt-11">
            <img class="absolute left-1/2 top-1/2 h-auto w-full -translate-x-1/2 -translate-y-1/2" src="{{ asset('/assets/media') }}/books-blur.png" alt="Books Blur">
            <div class="relative z-10 flex h-full flex-col items-center">
                <h5 class="mb-6 text-center text-base font-bold">

                </h5>

                <div class="flex w-full max-w-sm flex-col items-start gap-4">
                    <a href="{{ route('auth.google') }}" class="relative flex w-full items-center justify-center gap-3 rounded-full border-2 border-black bg-white py-4">
                        <img class="h-6 w-6" src="{{ asset('/assets/media') }}/icon-google.png" alt="Icon Google">

                        <p class="text-base font-semibold leading-5">Sign up with Google</p>
                    </a>
                    <a
                        onclick="onCloseM()"
                        class="relative flex w-full items-center justify-center gap-3" style="cursor: pointer;">
                        <p class="text-base font-semibold leading-5"> <u>Close</u></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $('#btn-modal-login').click(function () {
        $("#modal-login").show();
    });

    function onCloseM() {
        $(".modal-signup-new").addClass("hidden");
    }

    function onClose() {
        $("#modal-login").hide();
    }

    function toggleDropdown() {
        var dropdown = document.getElementById('dropdownDotsHorizontal');
        dropdown.classList.toggle('hidden');
    }

    $('.btn-modal-signup').click(function () {
        $("#header-phone").removeClass("block");
        $("#header-phone").addClass("hidden");
        $("#modal-login").show();
    });

    $('#btn-modal-signup').click(function () {
        $("#modal-signup-new").removeClass("hidden");
    });

    $('#modal-signup-new #close-overlay').click(function () {
        $("#modal-signup-new").addClass("hidden");
    });

    lazyload();

    // lazy load
    function lazyload() {
        const imgElements = document.querySelectorAll("img[data-src]");
        const lazyLoadingImage = (entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.src = entry.target.dataset.src;
                entry.target.addEventListener("load", () => {
                    entry.target.classList.remove("lazy-img");
                    observer.unobserve(entry.target);
                });
            });
        };
        const lazyLoadingObserver = new IntersectionObserver(lazyLoadingImage, {
            threshold: 0.9,
        });
        imgElements.forEach((img) => lazyLoadingObserver.observe(img));
    }


</script>

@yield('js')


</body>

</html>

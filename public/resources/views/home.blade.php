@extends('layouts.layouts')
@section('title')
    <title>Discover books you’ll love! | Jari Telunjuk</title>
@endsection

@section('header-js')
    <script type="module" src="{{ asset('/assets')}}/front/hoisted.25b3dcdb.js"></script>
@endsection
@section('content')
<main class="relative">
    <section class="relative mt-20 overflow-hidden xl:mt-32 astro-J7PV25F6">
        <div class="container mx-auto flex max-w-screen-xl flex-col items-center px-4 text-center xl:px-12 astro-J7PV25F6">
        <h1 class="mb-4 font-arvo text-2xl leading-7 xl:mb-6 xl:text-[42px] xl:leading-[34px] astro-J7PV25F6">
            {{ GeneralHelper::settingPerpustakan('title_header') }}
        </h1>
        <p class="max-w-[636px] text-base leading-6 astro-J7PV25F6">
            {{ GeneralHelper::settingPerpustakan('body_header') }}

        </p>
        </div>

        <section class="relative flex w-full scale-110 items-center gap-6 astro-J7PV25F6">
        <div id="overlay" class="absolute left-0 top-0 z-50 h-full w-full bg-gradient-to-t from-stone-300 to-stone-50/25 astro-J7PV25F6">
        </div>

        <section class="-mb-12 flex w-full items-center gap-2 xl:-mb-24 xl:gap-6 astro-J7PV25F6">
            <div class="flex w-1/5 flex-col items-start gap-2 xl:gap-6 astro-J7PV25F6">
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 1">
            </div>
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 2">
            </div>
            </div>

            <div class="mt-16 flex w-1/5 flex-col items-start gap-2 xl:mt-32 xl:gap-6 astro-J7PV25F6">
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 3">
            </div>
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 4">
            </div>
            </div>

            <div class="mt-28 flex w-1/5 flex-col items-start gap-2 xl:mt-56 xl:gap-6 astro-J7PV25F6">
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 5">
            </div>
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 6">
            </div>
            </div>

            <div class="mt-16 flex w-1/5 flex-col items-start gap-2 xl:mt-32 xl:gap-6 astro-J7PV25F6">
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 7">
            </div>
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 8">
            </div>
            </div>

            <div class="flex w-1/5 flex-col items-start gap-2 xl:gap-6 astro-J7PV25F6">
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 9">
            </div>
            <div class="relative h-auto w-full astro-J7PV25F6">
                <img class="h-full w-full object-cover object-top astro-J7PV25F6" src="{{GeneralHelper::getRandomFirstBook()}}" alt="Book Photo 10">
            </div>
            </div>
        </section>
        </section>

        <section class="relative w-full bg-[#F9F8F6] py-6 xl:py-24 astro-J7PV25F6">
        <div class="container mx-auto max-w-screen-xl px-4 xl:px-12 astro-J7PV25F6">
            <h3 class="mb-12 text-center font-arvo text-2xl leading-7 xl:mb-20 xl:text-[34px] xl:leading-none astro-J7PV25F6">
            Benefit Jari Telunjuk
            </h3>

            <section class="grid grid-cols-2 gap-4 xl:grid-cols-4 xl:gap-12 astro-J7PV25F6">
            <figure class="space-y-2 xl:space-y-10 astro-J7PV25F6">
                <img src="{{ asset('/assets/media')}}/benefit-1.png" alt="Benefit 1" class="astro-J7PV25F6">
                <figcaption class="text-sm leading-[22px] xl:text-base xl:leading-6 astro-J7PV25F6">
                Rekomendasi buku berdasarkan selera/ kebutuhan
                </figcaption>
            </figure>

            <figure class="space-y-2 xl:space-y-10 astro-J7PV25F6">
                <img src="{{ asset('/assets/media')}}/benefit-2.png" alt="Benefit 2" class="astro-J7PV25F6">
                <figcaption class="text-sm leading-[22px] xl:text-base xl:leading-6 astro-J7PV25F6">
                Tracking buku apa saja yang Anda baca, sudah dibaca ataupun akan
                dibaca.
                </figcaption>
            </figure>

            <figure class="space-y-2 xl:space-y-10 astro-J7PV25F6">
                <img src="{{ asset('/assets/media')}}/benefit-3.png" alt="Benefit 3" class="astro-J7PV25F6">
                <figcaption class="text-sm leading-[22px] xl:text-base xl:leading-6 astro-J7PV25F6">
                Berbagi daftar buku favorit atau buku yang akan Anda baca dengan
                teman ataupun komunitas
                </figcaption>
            </figure>

            <figure class="space-y-2 xl:space-y-10 astro-J7PV25F6">
                <img src="{{ asset('/assets/media')}}/benefit-4.png" alt="Benefit 4" class="astro-J7PV25F6">
                <figcaption class="text-sm leading-[22px] xl:text-base xl:leading-6 astro-J7PV25F6">
                Daftar buku ter-update
                </figcaption>
            </figure>
            </section>
        </div>
        </section>

        <section class="relative w-full bg-white py-6 xl:py-24 astro-J7PV25F6">
        <div class="container mx-auto max-w-screen-xl space-y-6 px-4 xl:space-y-20 xl:px-12 astro-J7PV25F6">
            <header class="space-y-4 text-center xl:mb-7 xl:space-y-6 astro-J7PV25F6">
            <h3 class="font-arvo text-2xl leading-7 xl:text-[34px] xl:leading-none astro-J7PV25F6">
                Rekomendasi Buku
            </h3>

            <p class="astro-J7PV25F6">Because Bedul liked...</p>
            </header>

            <div class="relative grid w-full grid-cols-2 gap-x-4 gap-y-6 xl:grid-cols-4 xl:gap-16 astro-J7PV25F6">
            <svg class="absolute -bottom-20 -z-0 hidden h-auto w-full xl:block astro-J7PV25F6" viewBox="0 0 817 279" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.25 88.548C18.6561 87.0002 35.0363 79.3796 49.8038 72.5171C71.9385 62.2309 94.9469 53.1585 118.104 45.4397C160.246 31.3922 203.405 21.7266 247.294 15.2638C327.106 3.51128 405.288 2.46607 485.737 2.46607C562.456 2.46607 659.272 2.36093 730.039 34.5279C749.98 43.5917 769.268 54.4089 786.148 68.4757C798.389 78.6766 812.808 93.1981 814.505 110.169C816.466 129.786 781.471 131.197 769.308 131.926C689.676 136.694 614.124 136.049 534.368 130.04C514.218 128.522 452.316 110.169 415 144.5C391.5 166.12 387 208.5 408 276.5" stroke="#242424" stroke-opacity="0.8" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="astro-J7PV25F6"></path>
            </svg>

            <svg class="absolute -bottom-20 left-1/2 -z-0 block h-full w-auto -translate-x-1/2 xl:hidden astro-J7PV25F6" viewBox="0 0 220 414" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 44.6908C40.7218 26.4563 66.0698 11.654 119.048 17.169C172.026 22.6841 232.841 101.848 201.369 180.064C169.897 258.279 43.3331 176.053 27.2587 231.204C11.1843 286.356 190.449 225.757 117.406 310.218C101.54 328.564 98.391 327.376 108.543 372.5" stroke="#242424" stroke-opacity="0.8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="astro-J7PV25F6"></path>
            </svg>

            <figure class="relative h-64 w-full shadow-2xl xl:h-96 astro-J7PV25F6">
                <img class="h-full w-full object-cover astro-J7PV25F6" src="" alt="Book 1" id="book-homepage-1">
            </figure>
            <figure class="relative h-64 w-full shadow-2xl xl:h-96 astro-J7PV25F6">
                <img class="h-full w-full object-cover astro-J7PV25F6" src="" alt="Book 2" id="book-homepage-2">
            </figure>
            <figure class="relative h-64 w-full shadow-2xl xl:h-96 astro-J7PV25F6">
                <img class="h-full w-full object-cover astro-J7PV25F6" src="" alt="Book 3" id="book-homepage-3">
            </figure>
            <figure class="relative h-64 w-full shadow-2xl xl:h-96 astro-J7PV25F6">
                <img class="h-full w-full object-cover astro-J7PV25F6" src="" alt="Book 4" id="book-homepage-4">
            </figure>
            </div>

            <div class="relative flex w-full flex-col items-center pt-4 astro-J7PV25F6">
            <svg class="h-24 w-24 astro-J7PV25F6" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_14_34)" class="astro-J7PV25F6">
                <path d="M47.449 100.965C48.1387 102.345 50.3802 102.345 51.0699 100.965C56.9322 90.2754 62.2772 79.4128 65.3808 67.6882C65.7257 65.964 63.829 64.2398 62.2772 65.2743C58.8288 67.6882 55.8977 70.6194 53.3114 74.0678C54.001 49.9289 57.277 24.9278 51.5871 1.13372C51.2423 -0.590493 48.3114 -0.24566 48.4838 1.47883C51.5871 26.135 49.1732 50.6188 48.8287 75.275C45.8975 72.6887 42.9664 70.1024 40.2076 67.5161C39.0007 66.3091 36.4141 66.9988 36.5865 69.0679C37.9662 80.4474 41.7594 91.1375 47.449 100.965ZM49.3457 80.4474C50.3802 81.9992 53.3114 81.6543 53.3114 79.2404C53.3114 79.068 53.3114 78.8956 53.3114 78.8956C55.3804 76.8265 57.277 74.7575 59.5185 72.6884C56.7598 80.6198 53.3113 88.0339 49.3459 95.448C45.8975 88.7236 43.3112 81.8267 41.9318 74.4126C43.8285 76.1368 45.8975 77.8611 47.7944 79.7577C48.1387 80.4474 48.8287 80.6198 49.3457 80.4474Z" fill="#242424" class="astro-J7PV25F6"></path>
                </g>
                <defs class="astro-J7PV25F6">
                <clipPath id="clip0_14_34" class="astro-J7PV25F6">
                    <rect width="102" height="102" fill="white" transform="translate(102 102) rotate(-180)" class="astro-J7PV25F6"></rect>
                </clipPath>
                </defs>
            </svg>

            <h5 class="my-4 text-center text-lg font-semibold leading-[22px] astro-J7PV25F6">
                He Discovered:
            </h5>

            <figure class="mb-10 flex items-center justify-center gap-2 xl:gap-10 astro-J7PV25F6">
                <div class="mt-16 max-w-[180px] space-y-1.5 self-start text-right astro-J7PV25F6">
                <h5 class="text-lg font-semibold leading-6 astro-J7PV25F6" id="book-homepage-5-judul">
                </h5>
                <p class="text-base font-normal leading-6 astro-J7PV25F6" id="book-homepage-5-penulis"></p>
                </div>

                <img class="h-64 w-auto shadow-2xl 2xl:h-96 astro-J7PV25F6" src="" alt="Book 8" id="book-homepage-5">

                <div class="mb-16 max-w-[180px] self-end astro-J7PV25F6">
                <h5 class="text-lg font-semibold leading-6 astro-J7PV25F6" id="book-homepage-5-kategori">
                </h5>
                </div>
            </figure>

            <button id="book-recommendation" type="button" class="flex w-60 items-center justify-center rounded-full bg-[#128C55] px-6 py-4 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90 astro-J7PV25F6">
                Coba Rekomendasi Buku
            </button>
            </div>
        </div>
        </section>

        <section class="CATEGORIES relative w-full py-24 astro-J7PV25F6">
        <div class="container mx-auto max-w-screen-xl space-y-9 px-4 xl:px-12 astro-J7PV25F6">
            <h3 class="mb-9 text-center font-arvo text-2xl leading-7 xl:text-left xl:text-[34px] xl:leading-none astro-J7PV25F6">
            Kategori Buku
            </h3>

            <div class="flex flex-wrap items-start justify-between gap-8 xl:items-center astro-J7PV25F6">
            <img class="h-64 w-full xl:w-auto astro-J7PV25F6" src="{{ asset('/assets/media')}}/category-ill-1.jpg" alt="Category illustration">
                @php
                    $itemsPerNav = 5;
                    $numNavBlocks = ceil(count(GeneralHelper::getKategory()) / $itemsPerNav);
                    $index = 0;
                @endphp

                @foreach (GeneralHelper::getKategory() as $item)
                    @if ($index % $itemsPerNav === 0)
                        <nav class="flex flex-col items-start gap-3 astro-J7PV25F6">
                    @endif
                        <a class="text-sm leading-5 text-[#128C55] hover:underline xl:text-base astro-J7PV25F6" href="{{ route("buku", $item->slug)}}">{{$item->name}}</a>
                    @if (($index + 1) % $itemsPerNav === 0 || ($index + 1) === count(GeneralHelper::getKategory()))
                        </nav>
                    @endif
                    @php
                        $index++
                    @endphp
                @endforeach
            </div>
        </div>
        </section>

        <section class="QUOTES relative w-full bg-[#F9F8F6] py-6 xl:py-24 astro-J7PV25F6">
        <div class="container mx-auto max-w-screen-xl px-4 xl:px-12 astro-J7PV25F6">
            <div class="flex w-full flex-1 justify-start astro-J7PV25F6">
            <svg class="h-14 w-auto xl:h-20 astro-J7PV25F6" viewBox="0 0 80 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.14" d="M18 72C12.8 72 8.46667 69.8682 5 65.6046C1.66667 61.2034 0 55.0831 0 47.2436C0 36.9284 2.53333 27.7135 7.6 19.5989C12.6667 11.3467 19.7333 4.81376 28.8 0L34.2 9.90259C28.0667 13.6161 23.2 18.2235 19.6 23.7249C16 29.0888 14 35.3467 13.6 42.4986C15.2 41.6734 16.9333 41.2607 18.8 41.2607C22.9333 41.2607 26.2667 42.6361 28.8 45.3868C31.4667 48.1375 32.8 51.7135 32.8 56.1146C32.8 60.9284 31.4 64.7794 28.6 67.6676C25.8 70.5559 22.2667 72 18 72ZM63.8 72C58.6 72 54.2667 69.8682 50.8 65.6046C47.4667 61.2034 45.8 55.0831 45.8 47.2436C45.8 36.9284 48.3333 27.7135 53.4 19.5989C58.4667 11.3467 65.5333 4.81376 74.6 0L80 9.90259C73.8667 13.6161 69 18.2235 65.4 23.7249C61.8 29.0888 59.8 35.3467 59.4 42.4986C61 41.6734 62.7333 41.2607 64.6 41.2607C68.7333 41.2607 72.0667 42.6361 74.6 45.3868C77.2667 48.1375 78.6 51.7135 78.6 56.1146C78.6 60.9284 77.2 64.7794 74.4 67.6676C71.6 70.5559 68.0667 72 63.8 72Z" fill="#2E2E2E" class="astro-J7PV25F6"></path>
            </svg>
            </div>

            <div class="container mx-auto flex max-w-4xl flex-col items-center py-6 text-center astro-J7PV25F6">
            <h3 class="mb-6 font-arvo text-xl font-bold italic leading-8 text-[#2e2e2e] xl:mb-9 xl:text-[34px] xl:leading-[40px] astro-J7PV25F6">
                “{{ GeneralHelper::settingPerpustakan('qoutes_header') }}.”
            </h3>

            <p class="mb-6 font-arvo text-base font-medium xl:mb-14 xl:text-2xl astro-J7PV25F6">
                ~{{ GeneralHelper::settingPerpustakan('by_quotes') }}~
            </p>

            <a href="/" class="flex w-60 items-center justify-center rounded-full bg-[#128C55] px-6 py-3 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90 xl:py-4 astro-J7PV25F6">
                Share
            </a>
            </div>

            <div class="flex w-full flex-1 justify-end astro-J7PV25F6">
            <svg class="h-14 w-auto xl:h-20 astro-J7PV25F6" viewBox="0 0 80 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.14" d="M18 72C12.8 72 8.46667 69.8682 5 65.6046C1.66667 61.2034 0 55.0831 0 47.2436C0 36.9284 2.53333 27.7135 7.6 19.5989C12.6667 11.3467 19.7333 4.81376 28.8 0L34.2 9.90259C28.0667 13.6161 23.2 18.2235 19.6 23.7249C16 29.0888 14 35.3467 13.6 42.4986C15.2 41.6734 16.9333 41.2607 18.8 41.2607C22.9333 41.2607 26.2667 42.6361 28.8 45.3868C31.4667 48.1375 32.8 51.7135 32.8 56.1146C32.8 60.9284 31.4 64.7794 28.6 67.6676C25.8 70.5559 22.2667 72 18 72ZM63.8 72C58.6 72 54.2667 69.8682 50.8 65.6046C47.4667 61.2034 45.8 55.0831 45.8 47.2436C45.8 36.9284 48.3333 27.7135 53.4 19.5989C58.4667 11.3467 65.5333 4.81376 74.6 0L80 9.90259C73.8667 13.6161 69 18.2235 65.4 23.7249C61.8 29.0888 59.8 35.3467 59.4 42.4986C61 41.6734 62.7333 41.2607 64.6 41.2607C68.7333 41.2607 72.0667 42.6361 74.6 45.3868C77.2667 48.1375 78.6 51.7135 78.6 56.1146C78.6 60.9284 77.2 64.7794 74.4 67.6676C71.6 70.5559 68.0667 72 63.8 72Z" fill="#2E2E2E" class="astro-J7PV25F6"></path>
            </svg>
            </div>
        </div>
        </section>

        <section class="relative w-full py-6 xl:py-24 astro-J7PV25F6">
        <div class="container mx-auto max-w-screen-xl space-y-6 px-4 xl:space-y-20 xl:px-12 astro-J7PV25F6">
            <h3 class="text-center font-arvo text-2xl leading-7 xl:text-left xl:text-[34px] xl:leading-none astro-J7PV25F6">
            Blog Post
            </h3>

            <div class="grid grid-cols-2 gap-5 xl:grid-cols-3 astro-J7PV25F6">

                @foreach(\App\Helpers\GeneralHelper::getPost() as $item)
                    <figure class="relative w-full overflow-hidden rounded-lg border border-[#DCDCDC] bg-white shadow-none transition-all duration-300 ease-out hover:shadow-md astro-J7PV25F6">
                        <a class="absolute z-10 h-full w-full astro-J7PV25F6" href="https://www.jaritelunjuk.com/blog/{{$item['slug']}}">

                        </a>

                        <img class="aspect-video h-auto w-full astro-J7PV25F6" src="{{$item['featuredImage']['node']['mediaDetails']['sizes'][0]['sourceUrl']}}" alt="Blog 1" style="object-fit: cover;">

                        <div class="w-full px-2 pb-3.5 pt-1.5 xl:p-5 astro-J7PV25F6">
                            <h5 class="mb-1 text-sm font-bold leading-5 text-[#2e2e2e] xl:mb-5 xl:text-xl xl:leading-[26px] astro-J7PV25F6">
                                {!! Str::limit($item['title'], 60) !!}
                             </h5>

                             <p class="text-sm leading-5 text-[#2e2e2e] xl:text-base astro-J7PV25F6" style="margin-top:10px">
                                <span class="astro-J7PV25F6">{{date('d, M Y' ,strtotime($item['date'])) }}</span>
                            </p>
                        </div>
                    </figure>
                @endforeach

            </div>

            <div class="flex w-full justify-center astro-J7PV25F6">
            <a href="https://www.jaritelunjuk.com/blog/" class="flex w-60 items-center justify-center rounded-full bg-[#128C55] px-6 py-3 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90 xl:py-4 astro-J7PV25F6">
                Semua Blog
            </a>
        </div>
        </div>
        </section>
    </section>

    <div class="modal micromodal-slide astro-J7PV25F6" id="modal-1" aria-hidden="true">
        <div class="modal__overlay astro-J7PV25F6" tabindex="-1" data-micromodal-close>
            <div class="modal__container rounded-none xl:rounded-2xl astro-J7PV25F6" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <div id="modal-1-container">
                    <header class="mb-6 mt-11 flex items-center justify-between px-4 xl:justify-center astro-J7PV25F6">
                    <h2 class="text-center font-arvo text-xl leading-none xl:text-[34px] astro-J7PV25F6" id="modal-1-title">
                        Pilih rekomendasi
                    </h2>

                    <button id="close-modal" type="button" class="block xl:hidden astro-J7PV25F6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="astro-J7PV25F6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6649 18.0492C20.1117 18.496 20.1117 19.2183 19.6649 19.6651C19.442 19.888 19.1495 20 18.8569 20C18.5643 20 18.2718 19.888 18.0489 19.6651L12 13.6161L5.95107 19.6651C5.72822 19.888 5.43566 20 5.1431 20C4.85054 20 4.55798 19.888 4.33513 19.6651C3.88829 19.2183 3.88829 18.496 4.33513 18.0492L10.3841 12.0001L4.33513 5.95111C3.88829 5.50426 3.88829 4.78199 4.33513 4.33514C4.78197 3.88829 5.50423 3.88829 5.95107 4.33514L12 10.3842L18.0489 4.33514C18.4958 3.88829 19.218 3.88829 19.6649 4.33514C20.1117 4.78199 20.1117 5.50426 19.6649 5.95111L13.6159 12.0001L19.6649 18.0492Z" fill="#2E2E2E" class="astro-J7PV25F6"></path>
                        </svg>
                    </button>
                    </header>
                    <main class="modal__content px-4 !font-source-sans xl:px-8 astro-J7PV25F6" id="modal-1-content">
                    <div class="flex flex-wrap items-center justify-center gap-3 astro-J7PV25F6">
                        <ul class="flex w-full flex-row flex-wrap gap-3 astro-J7PV25F6">
                            @foreach (GeneralHelper::getKategory() as $kategori)
                            <li class="astro-J7PV25F6">
                                <input type="checkbox" id="{{$kategori->id.'_kategori'}}" value="{{$kategori->id}}" name="kategori" class="peer hidden astro-J7PV25F6 kategori" required="">
                                <label for="{{$kategori->id.'_'.$kategori->name}}" class="inline-flex w-full cursor-pointer items-center justify-between gap-3 rounded-full border border-[#EBEBEB] bg-white p-3 text-gray-500 hover:bg-gray-50 hover:text-gray-600 peer-checked:border-[#128C55] peer-checked:bg-[#128C55]/10 peer-checked:text-gray-600 xl:p-4 astro-J7PV25F6">
                                    <div class="w-full text-sm font-semibold xl:text-lg astro-J7PV25F6">
                                    {{$kategori->name}}
                                    </div>
                                    <svg class="flex-shrink-0 astro-J7PV25F6" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 2C3.58853 2 0 5.58853 0 10C0 14.4115 3.58853 18 8 18C12.4115 18 16 14.4108 16 10C16 5.58916 12.4115 2 8 2ZM8 16.7607C4.27266 16.7607 1.23934 13.728 1.23934 10C1.23934 6.27203 4.27266 3.23934 8 3.23934C11.7273 3.23934 14.7607 6.27203 14.7607 10C14.7607 13.728 11.728 16.7607 8 16.7607Z" fill="#515151" class="astro-J7PV25F6"></path>
                                    <path d="M11.0987 9.32457H8.61998V6.84588C8.61998 6.50382 8.34298 6.2262 8.00029 6.2262C7.6576 6.2262 7.3806 6.50382 7.3806 6.84588V9.32457H4.90191C4.55923 9.32457 4.28223 9.6022 4.28223 9.94426C4.28223 10.2863 4.55923 10.5639 4.90191 10.5639H7.3806V13.0426C7.3806 13.3847 7.6576 13.6623 8.00029 13.6623C8.34298 13.6623 8.61998 13.3847 8.61998 13.0426V10.5639H11.0987C11.4414 10.5639 11.7184 10.2863 11.7184 9.94426C11.7184 9.6022 11.4414 9.32457 11.0987 9.32457Z" fill="#515151" class="astro-J7PV25F6"></path>
                                    </svg>
                                </label>
                            </li>
                            @endforeach
                                
                        </ul>
                    </div>
                    </main>
                    <footer class="flex items-center justify-between bg-[#F9F8F6] p-4 xl:px-8 xl:py-12 astro-J7PV25F6">
                    <button class="text-2xl font-bold leading-7 astro-J7PV25F6"><span id="countSelectedCategory">0</span>/5</button>
                    <button class="rounded-full bg-[#128C55] px-6 py-4 font-source-sans text-base font-semibold leading-none tracking-widest text-white astro-J7PV25F6" aria-label="Close this dialog window" id="submitCategory">Selesai</button>
                    </footer>
                </div>
                <div id="modal-2-container" style="display:none">
                    <header class="mb-6 mt-11 flex items-center justify-between px-4 xl:justify-center astro-J7PV25F6">
                    <h2 class="text-center font-arvo text-xl leading-none xl:text-[34px] astro-J7PV25F6" id="modal-2-title">
                        Rekomendasi Buku Untukmu
                    </h2>

                    <button id="close-modal" type="button" class="block xl:hidden astro-J7PV25F6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="astro-J7PV25F6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6649 18.0492C20.1117 18.496 20.1117 19.2183 19.6649 19.6651C19.442 19.888 19.1495 20 18.8569 20C18.5643 20 18.2718 19.888 18.0489 19.6651L12 13.6161L5.95107 19.6651C5.72822 19.888 5.43566 20 5.1431 20C4.85054 20 4.55798 19.888 4.33513 19.6651C3.88829 19.2183 3.88829 18.496 4.33513 18.0492L10.3841 12.0001L4.33513 5.95111C3.88829 5.50426 3.88829 4.78199 4.33513 4.33514C4.78197 3.88829 5.50423 3.88829 5.95107 4.33514L12 10.3842L18.0489 4.33514C18.4958 3.88829 19.218 3.88829 19.6649 4.33514C20.1117 4.78199 20.1117 5.50426 19.6649 5.95111L13.6159 12.0001L19.6649 18.0492Z" fill="#2E2E2E" class="astro-J7PV25F6"></path>
                        </svg>
                    </button>
                    </header>
                    <main class="modal__content px-4 !font-source-sans xl:px-8 astro-J7PV25F6" id="modal-2-content">
                    <h3 class="bg-white/95 py-4 text-center text-sm leading-5 lg:py-0">
                      Kami telah memilih rekomendasi yang cocok buat kamu
                    </h3>

                    <div class="relative z-10 h-[calc(100vh_-_113px)] bg-white/95 px-6 pt-11 lg:h-auto lg:rounded-b-2xl lg:pb-14 lg:pt-11">
                      <img class="absolute left-1/2 top-1/2 h-auto w-full -translate-x-1/2 -translate-y-1/2" src="{{ asset('/assets')}}/media/books-blur.png" alt="Books Blur">
                      <div class="relative z-10 flex h-full flex-col items-center">
                        <h5 class="mb-6 text-center text-base font-bold">
                          Daftar sekarang untuk melihat rekomendasi.
                        </h5>

                        <div class="flex w-full max-w-sm flex-col items-start gap-4">
                          <a href="{{route('auth.google')}}" class="relative flex w-full items-center justify-center gap-3 rounded-full border-2 border-black bg-white py-4">
                            <img class="h-6 w-6" src="{{ asset('/assets')}}/media/icon-google.png" alt="Icon Google">

                            <p class="text-base font-semibold leading-5">
                              Sign up with Google
                            </p>
                          </a>

                          <button class="relative flex w-full items-center justify-center gap-3 rounded-full border-2 border-black bg-white py-4">
                            <img class="h-6 w-6" src="{{ asset('/assets')}}/media/icon-facebook.png" alt="Icon facebook">

                            <p class="text-base font-semibold leading-5">
                              Sign up with Facebook
                            </p>
                          </button>

                          <button class="relative flex w-full items-center justify-center gap-3 rounded-full border-2 border-black bg-white py-4">
                            <img class="h-6 w-6" src="{{ asset('/assets')}}/media/icon-x.png" alt="Icon x">

                            <p class="text-base font-semibold leading-5">Sign up with X</p>
                          </button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    $( document ).ready(function() {

        if (localStorage.getItem("default-recommendation-book")) {
            refreshDefaultRecommendationBook(JSON.parse(localStorage.getItem("default-recommendation-book")));
        } else {
            $.ajax({
                url: "{{ route('ajax.book-homepage') }}",
                type: "GET",
                data: {
                },
                success: function(data) {
                    localStorage.setItem("default-recommendation-book", JSON.stringify(data));
                    refreshDefaultRecommendationBook(data);
                },
            });
        }
    });

    $('#book-recommendation').click(function(){
        $("#modal-1-container").show();
        $("#modal-2-container").hide();
        $.each(JSON.parse(localStorage.getItem("selected-category-book")), function(index, value){
            $('#'+value+'_kategori').prop( "checked", true );

        });
        $("#countSelectedCategory").text( $("input[name='kategori']:checked").length);
    });

    $('.kategori').click(function(){
        var numberOfChecked = $("input[name='kategori']:checked").length;
        if(numberOfChecked > 5) {
            $(this).prop( "checked", false );
        }
        $("#countSelectedCategory").text($("input[name='kategori']:checked").length);
    });

    $('#submitCategory').click(function(){
        var arr = [];
        $.each($("input[name='kategori']:checked"), function(){
          arr.push($(this).val());
        });
        localStorage.setItem("selected-category-book", JSON.stringify(arr));
        var check_auth = {{GeneralHelper::authCheck()}};
        if(check_auth){
            window.location.href = "{{ route('user.profile')}}";
        } else {
            $("#modal-1-container").hide();
            $("#modal-2-container").show();
        }
    });


    function refreshDefaultRecommendationBook(data){
        order = 1;
        $.each(data, function (key, item) {
            $("#book-homepage-"+order).attr("src",item.image);
            order = order + 1;
            if (order == 5) {
                $("#book-homepage-"+order+"-judul").text(item.judul);
                $("#book-homepage-"+order+"-penulis").text(item.penulis);
                $("#book-homepage-"+order+"-kategori").text(item.detail_buku.kategori.name);
            }
            if (order > 5) {
                return false;
            }
        });
    }
    // console.log('sss');
</script>
@endsection







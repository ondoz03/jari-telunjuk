@extends('layouts.layouts')
@section('title')
    <title>Discover books you’ll love! | Jari Telunjuk</title>
@endsection

@section('header-js')
    <link rel="stylesheet" href="{{ asset('/assets') }}/front/modal-choose-book.b098e3c6.css"/>
    <script type="module" src="{{ asset('/assets') }}/front/hoisted.25b3dcdb.js"></script>
    <script type="module" src="{{ asset('/assets') }}/front/hoisted.d9f1f507.js"></script>
@endsection
@section('content')

    <main class="relative w-full">

        <div class="container relative mx-auto grid h-full min-h-screen max-w-screen-xl grid-cols-1 px-4 lg:grid-cols-12 lg:gap-10 xl:px-12">
            <section class="col-span-1 mt-20 min-h-screen lg:col-span-9 lg:mt-28">
                <nav class="mb-4 flex items-center justify-between lg:mb-6">
                    <h1 class="mb-4 font-arvo text-2xl leading-7 lg:text-3xl">Want to Read</h1>
                    <div class="lg:block">
                        <a href="{{ route('buku', 'buku') }}" id="search-book" type="button" class="relative flex items-center justify-center rounded-full bg-[#128C55] px-8 py-2 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
                            Cari Buku
                        </a>
                    </div>
                </nav>

                @if(count($user->user_want_read->where('status', '1')) > 0)
                    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4 lg:gap-6">
                        @foreach ($user->user_want_read as $item)
                            @if ($item->status === '1')
                                <figure class="space-y-2.5 lg:space-y-5">
                                    <img src="{{$item->buku->image}}" alt="Rekomendasi 1">

                                    <figcaption class="space-y-2">
                                        <a href="{{ route('detail-buku', [$item->buku->kategori->first()->slug, $item->buku->slug]) }}" class="hover:underline">
                                            <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                                {{$item->buku->judul}}
                                            </h5>
                                        </a>

                                        <a href="{{ route('author', $item->buku->penulis) }}" class="text-sm text-[#515151] hover:underline">
                                            by {{$item->buku->penulis}}
                                        </a>
                                    </figcaption>
                                </figure>
                            @endif
                        @endforeach
                    </div>
                @else
                    <div class="flex flex-col items-center gap-6">
                        <img class="h-auto w-56" src="https://cdn.jaritelunjuk.com/web-asset/footer-ill-02-01.jpg" alt="Recommendation 404">

                        <h5 class="text-base font-semibold">
                            Anda belum memiliki daftar buku yang ingin di baca.
                        </h5>
                    </div>
                @endif

                <div class="my-8 hidden h-px w-full bg-[#dcdcdc] lg:block"></div>

                <h1 class="mb-4 font-arvo text-2xl leading-7 lg:text-3xl">Rekomendasi untuk {{$user->name}}</h1>

         
                    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4 lg:gap-6">
                        @forelse (\App\Helpers\GeneralHelper::recomendationItem() as $item)
                            <figure class="space-y-2.5 lg:space-y-5">
                                <img src="{{$item->image}}" alt="Rekomendasi 1" style="height: 251px;">

                                <figcaption class="space-y-2">
                                    <a href="{{ route('detail-buku', [$item->kategori->first()->slug, $item->slug]) }}" class="hover:underline">
                                        <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                            {{$item->judul}}
                                        </h5>
                                    </a>

                                    <a href="{{ route('author', $item->penulis) }}" class="text-sm text-[#515151] hover:underline">
                                        by {{$item->penulis}}
                                    </a>
                                </figcaption>
                            </figure>
                        @empty
                            <div class="flex flex-col items-center gap-6">
                                <img class="h-auto w-56" src="https://cdn.jaritelunjuk.com/web-asset/footer-ill-02-01.jpg" alt="Recommendation 404">

                                <h5 class="text-base font-semibold">
                                    Anda belum mendapatkan rekomendasi buku.
                                </h5>

                                <button id="book-recommendation" type="button" class="flex w-60 items-center justify-center rounded-full bg-[#128C55] px-6 py-4 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90 astro-LUHUBFT3 ">
                                    Coba Rekomendasi Buku
                                </button>
                            </div>
                        @endforelse
                    </div>


                <div class="my-8 hidden h-px w-full bg-[#dcdcdc] lg:block"></div>

                <header class="mb-6 hidden items-center gap-3 lg:flex">
                    <h1 class="font-arvo text-2xl leading-7 lg:text-3xl">Giveaway</h1>

                    <button class="-mb-1.5 rounded-[4px] bg-[#D6E4FE] px-3 py-1 text-xs font-semibold">
                        Beta
                    </button>
                </header>

                <div class="mb-20 hidden grid-cols-2 gap-4 lg:grid lg:grid-cols-4 lg:gap-6">
                    <figure class="space-y-2.5 lg:space-y-5 lazy-img">
                        <img src="{{asset('assets/media')}}/book-photo-1.png" alt="Rekomendasi 1">
                        <figcaption class="space-y-2">
                            <a href="/" class="hover:underline">
                                <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                    1 Jam Ahli Pemrograman : HTML, CSS, Dan Javascript
                                </h5>
                            </a>

                            <a href="/" class="text-sm text-[#515151] hover:underline">
                                by Adam Saputra
                            </a>
                        </figcaption>
                    </figure>
                    <figure class="space-y-2.5 lg:space-y-5 lazy-img">
                        <img src="{{asset('assets/media')}}/book-photo-2.png" alt="Rekomendasi 1">

                        <figcaption class="space-y-2">
                            <a href="/" class="hover:underline">
                                <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                    The Intelligent Investor
                                </h5>
                            </a>

                            <a href="/" class="text-sm text-[#515151] hover:underline">
                                by +++
                            </a>
                        </figcaption>
                    </figure>
                    <figure class="space-y-2.5 lg:space-y-5 lazy-img">
                        <img src="{{asset('assets/media')}}/book-photo-3.png" alt="Rekomendasi 1">

                        <figcaption class="space-y-2">
                            <a href="/" class="hover:underline">
                                <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                    Atomic Habits
                                </h5>
                            </a>

                            <a href="/" class="text-sm text-[#515151] hover:underline">
                                by James Clear
                            </a>
                        </figcaption>
                    </figure>
                    <figure class="space-y-2.5 lg:space-y-5 lazy-img">
                        <img src="{{asset('assets/media')}}/book-photo-4.png" alt="Rekomendasi 1">

                        <figcaption class="space-y-2">
                            <a href="/" class="hover:underline">
                                <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                    Outliers
                                </h5>
                            </a>

                            <a href="/" class="text-sm text-[#515151] hover:underline">
                                by Malcolm Gladwell
                            </a>
                        </figcaption>
                    </figure>
                    <figure class="space-y-2.5 lg:space-y-5 lazy-img">
                        <img src="{{asset('assets/media')}}/book-photo-5.png" alt="Rekomendasi 1">

                        <figcaption class="space-y-2">
                            <a href="/" class="hover:underline">
                                <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                    Mark Manson: Everything Is F*Cked
                                </h5>
                            </a>

                            <a href="/" class="text-sm text-[#515151] hover:underline">
                                by Mark Manson
                            </a>
                        </figcaption>
                    </figure>
                    <figure class="space-y-2.5 lg:space-y-5 lazy-img">
                        <img src="{{asset('assets/media')}}/book-photo-6.png" alt="Rekomendasi 1">

                        <figcaption class="space-y-2">
                            <a href="/" class="hover:underline">
                                <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                    Atomic Habits
                                </h5>
                            </a>

                            <a href="/" class="text-sm text-[#515151] hover:underline">
                                by James Clear
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </section>

            <div class="relative col-span-1 lg:sticky lg:top-32 lg:col-span-3 lg:mt-32">
                <div class="my-8 block h-px w-full bg-[#dcdcdc] lg:hidden"></div>

                <section class="relative mb-8">
                    <header class="mb-2 space-y-4">
                        <h3 class="font-arvo text-2xl leading-7 lg:text-3xl">Currently to Read</h3>

                        <p class="text-sm font-semibold">
                        </p>
                    </header>
                    <div class="my-4 hidden h-px w-full bg-[#dcdcdc] lg:block"></div>
                    @if(count($user->user_want_read->where('status', '2')) > 0)
                        <div class=" gap-4 lg:grid-cols-4 lg:gap-6">
                            @foreach ($user->user_want_read->take(5) as $item)
                                @if ($item->status === '2')
                                    <a href="{{ route('detail-buku', [$item->buku->kategori->first()->slug, $item->buku->slug]) }}" class="hover:underline">
                                        <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                            {{$item->buku->judul}}
                                        </h5>
                                    </a>

                                    <a href="{{ route('author', $item->buku->penulis) }}" class="text-sm text-[#515151] hover:underline">
                                        by {{$item->buku->penulis}}
                                    </a>
                                    <div class="my-4 hidden h-px w-full bg-[#dcdcdc] lg:block"></div>
                                @endif
                            @endforeach
                        </div>
                    @endif

                </section>

                <div class="my-8 block h-px w-full bg-[#dcdcdc] lg:hidden"></div>

                <section class="relative mb-8">
                    <h3 class="mb-4 font-arvo text-2xl leading-7 lg:text-3xl">
                        Popular This Week
                    </h3>

                    <div class="mb-4 space-y-4">
                        @foreach (GeneralHelper::popularItem() as $item)
                            <figure class="group relative space-y-2">
                                <a class="absolute inset-0 z-10 h-full w-full" href="{!! route('detail-buku', [$item->kategori[0]->slug , $item->slug]) !!}"></a>
                                <h5 class="text-sm font-semibold group-hover:underline">
                                    {{$item->judul}}
                                </h5>

                                <p class="text-sm text-[#515151]">
                                    by {{$item->penulis}}
                                </p>
                            </figure>
                        @endforeach
                    </div>

                    <a href="{{ route('buku', 'buku') }}" id="search-book" type="button" class="relative flex items-center justify-center rounded-full bg-[#128C55] px-8 py-2 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
                        Cari Buku
                    </a>
                </section>
            </div>
        </div>

    </main>
    {{--    modal--}}
    <div class="modal-book-recommendation-new modal micromodal-slide astro-LUHUBFT3" id="modal-1" aria-hidden="true">
        <div class="modal__overlay astro-LUHUBFT3" tabindex="-1" data-micromodal-close>
            <div class="modal__container max-sm:h-full flex flex-col items-start rounded-none astro-LUHUBFT3 lg:rounded-2xl" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="flex h-[72px] w-full items-center justify-between bg-white px-4 py-6 xl:justify-center lg:rounded-2xl astro-LUHUBFT3">
                    <h2 class="text-center font-arvo text-xl leading-none xl:text-[34px] astro-LUHUBFT3 " id="modal-1-title">
                        Pilih rekomendasi
                    </h2>

                    <button id="close-modal" type="button" class="block xl:hidden astro-LUHUBFT3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="astro-LUHUBFT3">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6649 18.0492C20.1117 18.496 20.1117 19.2183 19.6649 19.6651C19.442 19.888 19.1495 20 18.8569 20C18.5643 20 18.2718 19.888 18.0489 19.6651L12 13.6161L5.95107 19.6651C5.72822 19.888 5.43566 20 5.1431 20C4.85054 20 4.55798 19.888 4.33513 19.6651C3.88829 19.2183 3.88829 18.496 4.33513 18.0492L10.3841 12.0001L4.33513 5.95111C3.88829 5.50426 3.88829 4.78199 4.33513 4.33514C4.78197 3.88829 5.50423 3.88829 5.95107 4.33514L12 10.3842L18.0489 4.33514C18.4958 3.88829 19.218 3.88829 19.6649 4.33514C20.1117 4.78199 20.1117 5.50426 19.6649 5.95111L13.6159 12.0001L19.6649 18.0492Z" fill="#2E2E2E" class="astro-LUHUBFT3"></path>
                        </svg>
                    </button>
                </header>

                <!-- content -->
                <div id="choose-book-section" class="relative z-20 hidden h-screen w-full max-w-4xl overflow-hidden bg-white p-0 lg:h-full lg:max-h-[576px] lg:rounded-2xl lg:px-8  lg:pb-14 astro-J7PV25F6">
                    <p class="mb-5 text-base text-center font-normal leading-6 text-[#636363] astro-J7PV25F6">
                        Kami menampilkan sesuai kategori yang kamu pilih.
                    </p>

                    <!-- search -->
                    <div class="flex w-full items-center justify-center gap-4 px-4 lg:px-4 astro-J7PV25F6" style="margin-bottom: 20px">
                        <div class="relative w-full lg:max-w-sm astro-J7PV25F6">
                            <svg class="absolute left-4 top-1/2 z-10 h-6 w-6 -translate-y-1/2 lg:left-6 astro-J7PV25F6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 10C5 6.691 7.691 4 11 4C14.309 4 17 6.691 17 10C17 13.309 14.309 16 11 16C7.691 16 5 13.309 5 10ZM21.707 19.293L17.312 14.897C18.366 13.542 19 11.846 19 10C19 5.589 15.411 2 11 2C6.589 2 3 5.589 3 10C3 14.411 6.589 18 11 18C12.846 18 14.542 17.366 15.897 16.312L20.293 20.707C20.488 20.902 20.744 21 21 21C21.256 21 21.512 20.902 21.707 20.707C22.098 20.316 22.098 19.684 21.707 19.293Z" fill="#8D8D8D" class="astro-J7PV25F6"></path>
                            </svg>

                            <input type="text" class="w-full rounded-full border border-[#dedede] py-2 pl-12 lg:pl-16 astro-J7PV25F6 serachRecomendasi" placeholder="Cari judul buku sesuai kategori...">
                        </div>

                        <button class="block flex-shrink-0 text-sm lg:hidden astro-J7PV25F6">Cari</button>
                    </div>

                    <section class="block h-[calc(100vh-288px)] overflow-y-auto p-4 lg:h-[270px] lg:p-5 astro-J7PV25F6">
                        <div class="grid w-full grid-cols-3 justify-center gap-4 lg:grid-cols-7 lg:gap-6 astro-J7PV25F6" id="book-list-recommendation">
                            <div class="wrapper-skeleton">
                                <li class="carousel-cell">
                                    <div class="box-item shimmerBG"></div>
                                    <div class="product-authors">
                                        <p class="skeleton-paragraph-4"></p>
                                        <p class="skeleton-paragraph-5"></p>
                                    </div>
                                </li>
                            </div>
                            <div class="wrapper-skeleton">
                                <li class="carousel-cell">
                                    <div class="box-item shimmerBG"></div>
                                    <div class="product-authors">
                                        <p class="skeleton-paragraph-4"></p>
                                        <p class="skeleton-paragraph-5"></p>
                                    </div>
                                </li>
                            </div>
                            <div class="wrapper-skeleton">
                                <li class="carousel-cell">
                                    <div class="box-item shimmerBG"></div>
                                    <div class="product-authors">
                                        <p class="skeleton-paragraph-4"></p>
                                        <p class="skeleton-paragraph-5"></p>
                                    </div>
                                </li>
                            </div>
                            <div class="wrapper-skeleton">
                                <li class="carousel-cell">
                                    <div class="box-item shimmerBG"></div>
                                    <div class="product-authors">
                                        <p class="skeleton-paragraph-4"></p>
                                        <p class="skeleton-paragraph-5"></p>
                                    </div>
                                </li>
                            </div>
                            <div class="wrapper-skeleton">
                                <li class="carousel-cell">
                                    <div class="box-item shimmerBG"></div>
                                    <div class="product-authors">
                                        <p class="skeleton-paragraph-4"></p>
                                        <p class="skeleton-paragraph-5"></p>
                                    </div>
                                </li>
                            </div>
                            <div class="wrapper-skeleton">
                                <li class="carousel-cell">
                                    <div class="box-item shimmerBG"></div>
                                    <div class="product-authors">
                                        <p class="skeleton-paragraph-4"></p>
                                        <p class="skeleton-paragraph-5"></p>
                                    </div>
                                </li>
                            </div>
                            <div class="wrapper-skeleton">
                                <li class="carousel-cell">
                                    <div class="box-item shimmerBG"></div>
                                    <div class="product-authors">
                                        <p class="skeleton-paragraph-4"></p>
                                        <p class="skeleton-paragraph-5"></p>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="flex w-full items-center justify-center gap-4 px-4 lg:px-4 astro-J7PV25F6" id="search-empty" style="margin-bottom: 20px">
                        </div>
                    </section>

                    <footer class="fixed bottom-0 left-0 z-10 flex h-32 w-full flex-col items-start gap-2 border-t bg-[#FCFAF7] p-4 shadow-xl lg:absolute lg:bottom-0 lg:h-28 lg:w-full lg:flex-row lg:items-center lg:justify-between lg:border-0 lg:px-14 lg:py-8 lg:shadow-none">
                        <div class="print-values astro-J7PV25F6">
                            <h5 id="valueList" class="text-base font-bold leading-5 text-[#141414] astro-J7PV25F6">
                                <span id="countSelectedBook">0</span> Buku dipilih
                            </h5>
                            <span id="required" style="color: #dc1414; display:none" class="hide"> Minimal Anda Harus Memilih 3 Buku </span>
                        </div>

                        <div class="flex w-full flex-row gap-2 lg:w-auto lg:gap-4 astro-J7PV25F6">
                            <button id="btn-prev-choose-book" class="w-full rounded-full border border-[#222222] bg-white px-6 py-3 text-base font-bold leading-5 text-[#222222] lg:w-auto lg:py-4 astro-J7PV25F6">
                                Previous
                            </button>

                            <button id="submitBook" class="w-full rounded-full bg-[#128C55] px-6 py-4 font-source-sans text-base font-semibold leading-none tracking-widest text-white lg:w-full lg:py-4 astro-J7PV25F6">
                                Next
                            </button>
                        </div>
                    </footer>

                    <footer class="flex h-20 w-full items-center justify-between bg-[#F9F8F6] p-4 xl:px-8 xl:pb-12 astro-LUHUBFT3">

                    </footer>
                </div>
                <div id="recommend-book-section" class="relative z-20 w-full max-w-4xl overflow-hidden bg-white p-0 lg:h-full lg:max-h-[576px] lg:rounded-2xl lg:p-11 astro-J7PV25F6">
                    <section class="block h-[calc(100vh_-_200px)] overflow-y-auto p-4 lg:h-[540px] lg:p-0 astro-J7PV25F6">
                        <!-- <main class="=px-4 overflow-auto !font-source-sans xl:px-8"> -->
                        <div class="flex flex-wrap items-center justify-center gap-3 astro-J7PV25F6">
                            <ul class="flex w-full flex-row flex-wrap gap-3 astro-J7PV25F6">
                                @foreach (GeneralHelper::getKategory() as $kategori)
                                    <li class="astro-J7PV25F6">
                                        <input type="checkbox" id="{{ $kategori->id . '_kategori_mobile' }}" value="{{ $kategori->id }}" name="kategori" class="kategori peer hidden astro-J7PV25F6" required="">
                                        <label for="{{ $kategori->id . '_kategori_mobile' }}" class="inline-flex w-full cursor-pointer items-center justify-between gap-3 rounded-full border border-[#EBEBEB] bg-white p-3 text-gray-500 hover:bg-gray-50 hover:text-gray-600 peer-checked:border-[#128C55] peer-checked:bg-[#128C55]/10 peer-checked:text-gray-600 xl:p-4 astro-J7PV25F6">
                                            <div class="w-full text-sm font-semibold xl:text-lg astro-J7PV25F6">
                                                {{ $kategori->name }}
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
                        <!-- </main> -->
                    </section>

                    <div class="fixed bottom-0 left-0 z-10 flex h-32 w-full flex-col items-start gap-2 border-t bg-[#FCFAF7] p-4 shadow-xl lg:absolute lg:bottom-0 lg:h-28 lg:w-full lg:flex-row lg:items-center lg:justify-between lg:border-0 lg:px-14 lg:py-8 lg:shadow-none">
                        <div class="print-values astro-J7PV25F6">
                            <h5 class="text-base font-bold leading-5 text-[#141414] astro-J7PV25F6">
                                <span id="countSelectedCategory">0</span>/5
                                <span id="required-kategori" style="color: #dc1414; display: none"> Minimal Anda Harus Memilih 3 Kategori </span>

                            </h5>
                        </div>

                        <div class="flex w-full flex-row lg:w-auto lg:gap-4 astro-J7PV25F6">
                            <button id="btn-category-finish" class="btn-category-finish w-full rounded-full bg-[#128C55] px-6 py-4 font-source-sans text-base font-semibold leading-none tracking-widest text-white lg:w-full lg:py-4 astro-J7PV25F6" aria-label="Close this dialog window">Next</button>
                        </div>
                    </div>
                </div>

                <div id="signup-section" class="relative hidden z-20 -mt-0 min-h-screen w-full max-w-4xl px-0 lg:-mt-12 lg:min-h-max lg:px-8">

                    <div class="relative z-10 h-[calc(100vh_-_113px)] lg:h-full lg:max-h-[576px] px-6 pt-11 lg:h-[270px] lg:rounded-b-2xl lg:pb-14 lg:pt-11">
                        {{--                            <img class="absolute left-1/2 top-1/2 h-auto w-full -translate-x-1/2 -translate-y-1/2" src="{{ asset('/assets/media') }}/books-blur.png" alt="Books Blur">--}}
                        <div class="relative z-10 h-[calc(100vh_-_113px)] bg-white/95 px-6 pt-11 lg:h-auto lg:rounded-b-2xl lg:pb-14 lg:pt-11">
                            <img class="absolute left-1/2 top-1/2 h-auto w-full -translate-x-1/2 -translate-y-1/2" src="{{ asset('/assets/media') }}/books-blur.png" alt="Books Blur">
                            <div class="relative z-10 flex h-full flex-col items-center">
                                <h5 class="mb-6 text-center text-base font-bold">
                                    Daftar sekarang untuk melihat rekomendasi.
                                </h5>

                                <div class="flex w-full max-w-sm flex-col items-start gap-4">
                                    <a href="{{ route('auth.google') }}" class="redirect-profile relative flex w-full items-center justify-center gap-3 rounded-full border-2 border-black bg-white py-4">
                                        <img class="h-6 w-6" src="{{ asset('/assets/media') }}/icon-google.png" alt="Icon Google">

                                        <p class="text-base font-semibold leading-5">Sign up with Google</p>
                                    </a>

                                    <button id="btn-prev-choose-book-category" class="redirect-profile relative flex w-full items-center justify-center gap-3 rounded-full border-2 border-black bg-white py-4">
                                        Previous
                                    </button>

                                    <p class="text-center text-neutral-600">
                                        By clicking continue, you agree to our
                                        <a class="underline" href="/privacy-policy"> <u> Privacy Policy. </u></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajax({
                url: "{{ route('ajax.set-session-global') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    redirect_profile: 1
                },
                success: function (data) {

                },
            });

            $(".redirect-profile").click(function () {
                $.ajax({
                    url: "{{ route('ajax.set-session-global') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        redirect_profile: 1
                    },
                    success: function (data) {

                    },
                });
            });

            if (localStorage.getItem("default-recommendation-book")) {
                refreshDefaultRecommendationBook(JSON.parse(localStorage.getItem("default-recommendation-book")));
            } else {
                $.ajax({
                    url: "{{ route('ajax.book-homepage') }}",
                    type: "GET",
                    data: {},
                    success: function (data) {
                        localStorage.setItem("default-recommendation-book", JSON.stringify(data));
                        refreshDefaultRecommendationBook(data);
                    },
                });
            }
        });

        $('.modal-book-recommendation-new #overlay-index').click(function () {
            $(".modal-book-recommendation-new").addClass("hidden");
        });

        $('#close-modal-index-book').click(function () {
            $(".modal-book-recommendation-new").addClass("hidden");
        });

        $('#close-modal-index').click(function () {
            $(".modal-book-recommendation-new").addClass("hidden");
        });

        $('#close-icon').click(function () {
            $(".modal-book-recommendation-new").addClass("hidden");
        });


        $('#book-recommendation-new').click(function () {
            if ($(".modal-book-recommendation-new").hasClass("hidden")) {
                $.each(JSON.parse(localStorage.getItem("selected-category-book")), function (index, value) {
                    $('#' + value + '_kategori').prop("checked", true);
                });
                $(".modal-book-recommendation-new").removeClass("hidden");
                $(".modal-book-recommendation-new").addClass("flex");
            }
            $("#countSelectedCategory").text($("input[name='kategori']:checked").length);
        });


        $('.kategori').click(function () {
            var numberOfChecked = $("input[name='kategori']:checked").length;
            if (numberOfChecked > 5) {
                $(this).prop("checked", false);
            }
            $("#countSelectedCategory").text($("input[name='kategori']:checked").length);
        });

        $('.bookpicker').click(function () {
            var numberOfChecked = $("input[name='book_selected']:checked").length;
            if (numberOfChecked > 5) {
                $(this).prop("checked", false);
            }
            $("#countSelectedBook").text($("input[name='book_selected']:checked").length);
        });


        $('#btn-prev-choose-book-category').click(function () {
            // if ($("#signup-section").hasClass("relative")) {
            $("#signup-section").addClass("hidden");
            $("#choose-book-section").removeClass("hidden");
            // }
        })


        $('#btn-category-finish').click(function () {
            var arr = [];
            var numberOfChecked = $("input[name='kategori']:checked").length;
            // console.log(numberOfChecked)
            if (numberOfChecked > 2) {
                $("#required-kategori").hide();
                $.each($("input[name='kategori']:checked"), function () {
                    arr.push($(this).val());
                });
                localStorage.setItem("selected-category-book", JSON.stringify(arr));
                setSessionCategory();
                listBookByCategory();

                if ($("#recommend-book-section").hasClass("relative")) {
                    $("#recommend-book-section").addClass("hidden");
                    $("#choose-book-section").removeClass("hidden");
                }

                $('#modal-1-title').text('Pilih Buku')
            } else {
                $("#required-kategori").show();
            }
        });

        $('#submitBook').click(function () {
            var arr = [];
            var numberOfChecked = $("input[name='book_selected']:checked").length;

            $.each($("input[name='book_selected']:checked"), function () {
                arr.push($(this).val());
            });

            if (numberOfChecked > 2) {

                localStorage.setItem("selected-book", JSON.stringify(arr));
                setSessionSelectedBook();
                setSessionCategory();

                var check_auth = {{ GeneralHelper::authCheck() }};
                if (check_auth) {
                    setSessionSelectedBook();
                    setSessionCategory();
                    window.location.href = "{{ route('user.profile') }}";
                } else {
                    if ($("#signup-section").hasClass("relative")) {
                        $("#recommend-book-section").addClass("hidden");
                        $("#choose-book-section").addClass("hidden");
                        $("#signup-section").removeClass("hidden");
                    }

                }
            } else {
                $("#required").show();
            }
        });

        $('#btn-prev-choose-book').click(function () {
            $('#modal-1-title').text('Pilih rekomendasi')

            if ($("#recommend-book-section").hasClass("relative")) {
                $("#choose-book-section").addClass("hidden");
                $("#recommend-book-section").removeClass("hidden");
            }
        });

        function refreshDefaultRecommendationBook(data) {
            order = 1;
            $.each(data, function (key, item) {
                $("#book-homepage-" + order).attr("src", item.image);
                if (order == 5) {
                    $("#book-homepage-" + order + "-judul").text(item.judul);
                    $("#book-homepage-" + order + "-penulis").text(item.penulis);
                    const names = item.kategori.map(items => items.name);
                    const result = names.join(', ');
                    $("#book-homepage-" + order + "-kategori").text(result);
                }
                if (order > 5) {
                    return false;
                }
                order = order + 1;
            });
        }

        function setSessionCategory() {
            $("#category_book").val(localStorage.getItem("selected-category-book"));
            $.ajax({
                url: "{{ route('ajax.set-session-global') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    category_session: localStorage.getItem("selected-category-book")
                },
                success: function (data) {
                    true
                },
            });
        }

        function setSessionSelectedBook() {
            $.ajax({
                url: "{{ route('ajax.set-session-global') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    selected_book_session: localStorage.getItem("selected-book")
                },
                success: function (data) {
                    true
                },
            });
        }

        function listBookByCategory() {
            $("#countSelectedBook").text($("input[name='book_selected']:checked").length);
            $.ajax({
                url: "{{ route('ajax.list-book-recommendation') }}",
                type: "GET",
                data: {},
                success: function (data) {
                    var list_book = data;
                    var html = '';
                    $.each(list_book, function (index, value) {
                        var shortText = jQuery.trim(value.judul).substring(0, 30).split(" ").slice(0, -1).join(" ") + "...";

                        html = html + '<div class="astro-J7PV25F6">\
                        <input type="checkbox" id="list_book_' + index + '" value="' + value.id + '" class="checkbox peer hidden astro-J7PV25F6 bookpicker" name="book_selected">\
                        <label for="list_book_' + index + '" class="peer-checked:leading-2 w-full cursor-pointer text-sm font-normal peer-checked:bg-red-400 peer-checked:font-[sans-serif] peer-checked:font-semibold lg:peer-checked:text-[0.75rem] [&>img]:shadow-md peer-checked:[&>img]:shadow-2xl astro-J7PV25F6">\
                        <figure class="relative space-y-3 astro-J7PV25F6">\
                            <img  style="height:120px !important" class="h-auto lazy-img w-full astro-J7PV25F6" data-src="' + value.image + '" alt="' + value.judul + '">\
                            <div class="pointer-events-none leading-5 astro-J7PV25F6">\
                                ' + shortText + '\
                            </div>\
                        </figure>\
                        </label>\
                    </div>';
                    });

                    $("#book-list-recommendation").html(html);
                    $('.bookpicker').click(function () {
                        var numberOfChecked = $("input[name='book_selected']:checked").length;
                        if (numberOfChecked > 5) {
                            $(this).prop("checked", false);
                        }
                        $("#countSelectedBook").text($("input[name='book_selected']:checked").length);
                    });

                    lazyload()
                },
            });
        }

        $(".serachRecomendasi").on("input", function () {
            var searchValue = $(this).val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ route('ajax.list-book-recommendation-search') }}",
                type: "POST",
                data: {
                    'search': searchValue,
                    'selected_book_categori': localStorage.getItem("selected-category-book")
                },
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function (data) {
                    var list_book = data;
                    var html = '';

                    if (data.length > 0) {
                        $.each(list_book, function (index, value) {
                            var shortText = jQuery.trim(value.judul).substring(0, 30).split(" ").slice(0, -1).join(" ") + "...";

                            html = html + '<div class="astro-J7PV25F6">\
                        <input type="checkbox" id="list_book_' + index + '" value="' + value.id + '" class="checkbox peer hidden astro-J7PV25F6 bookpicker" name="book_selected">\
                        <label for="list_book_' + index + '" class="peer-checked:leading-2 w-full cursor-pointer text-sm font-normal peer-checked:bg-red-400 peer-checked:font-[sans-serif] peer-checked:font-semibold lg:peer-checked:text-[0.75rem] [&>img]:shadow-md peer-checked:[&>img]:shadow-2xl astro-J7PV25F6">\
                        <figure class="relative space-y-3 astro-J7PV25F6">\
                            <img  style="height:120px !important" class="h-auto lazy-img w-full astro-J7PV25F6" data-src="' + value.image + '" alt="' + value.judul + '">\
                            <div class="pointer-events-none leading-5 astro-J7PV25F6">\
                                ' + shortText + '\
                            </div>\
                        </figure>\
                        </label>\
                    </div>';
                        });
                        $("#book-list-recommendation").html(html);
                        $('#search-empty').html('');
                    } else {
                        html = `<section class="flex flex-col items-center justify-center gap-6 p-4 lg:p-0">
                        <img class="h-auto w-80 object-cover" src="https://cdn.jaritelunjuk.com/web-asset/footer-ill-02-01.jpg" alt="Footer Illustration">

                        <h5 class="text-center font-bold">
                            Oopss! Sementara yang kamu cari tidak ada, <br>di kategori ini. Coba cari dengan judul lain.
                        </h5>
                      </section>`
                        $("#book-list-recommendation").html('');
                        $('#search-empty').html(html);
                    }


                    $('.bookpicker').click(function () {
                        var numberOfChecked = $("input[name='book_selected']:checked").length;
                        if (numberOfChecked > 5) {
                            $(this).prop("checked", false);
                        }
                        $("#countSelectedBook").text($("input[name='book_selected']:checked").length);
                    });

                    lazyload()
                },
            });

        })
    </script>
    <script>
        //-----------------------------------------------------------------------------//
        const modal_chooseBook = document.querySelector("#modal_choose-book");
        const modal_chooseBook_overlay = document.querySelector(
            "#modal_choose-book #overlay"
        );

        modal_chooseBook_overlay.addEventListener("click", () => {
            if (modal_chooseBook.classList.contains("flex")) {
                modal_chooseBook.classList.remove("flex");
                modal_chooseBook.classList.add("hidden");
            }
        });
        //-----------------------------------------------------------------------------//
        const close_modal = document.querySelector("#close-modal");

        close_modal.addEventListener("click", () => {
            if (modal_chooseBook.classList.contains("flex")) {
                modal_chooseBook.classList.remove("flex");
                modal_chooseBook.classList.add("hidden");
            }
        });
        //-----------------------------------------------------------------------------//
        const valueList = document.querySelector("#valueList");
        let valueListText = `<span> Buku dipilih</span>`;

        let listArray = [];

        const checkboxes = document.querySelectorAll(".checkbox");
        const next_btn: HTMLElement = document.querySelector("#next-btn");

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("click", () => {
                if (checkbox.checked) {
                    listArray.push(checkbox.value);
                    valueList.innerHTML = listArray.length + valueListText;
                } else {
                    listArray = listArray.filter((e) => e !== checkbox.value);
                    valueList.innerHTML = listArray.length + valueListText;
                }

                if (listArray.length > 3) {
                    next_btn.classList.remove("bg-[#72D1A6]");
                    next_btn.classList.add("bg-[#128C55]");
                } else {
                    next_btn.classList.remove("bg-[#128C55]");
                    next_btn.classList.add("bg-[#72D1A6]");
                }
            });
        });
        //-----------------------------------------------------------------------------//
    </script>
@endsection


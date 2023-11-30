@extends('layouts.layouts')
@section('title')
    <title>Discover books you’ll love! | Jari Telunjuk</title>
@endsection

@section('header-js')
    <script type="module" src="{{ asset('/assets')}}/front/hoisted.25b3dcdb.js"></script>
@endsection
@section('content')

    <main class="relative w-full">

        <div class="container relative mx-auto grid h-full min-h-screen max-w-screen-xl grid-cols-1 px-4 lg:grid-cols-12 lg:gap-10 xl:px-12">
            <section class="col-span-1 mt-20 min-h-screen lg:col-span-9 lg:mt-28">
                <nav class="mb-4 flex items-center justify-between lg:mb-6">
                    <h1 class="mb-4 font-arvo text-2xl leading-7 lg:text-3xl">Want to Read</h1>
                    <div class="hidden lg:block">
                        <a class="relative flex items-center justify-center rounded-full bg-[#128C55] px-6 py-2 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90" href="{{ route('buku', 'buku') }}">
                            Tambahkan Buku
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
                        <img class="h-auto w-56" src="{{ asset('/assets/media') }}/rekomendasi-404.png" alt="Recommendation 404">

                        <h5 class="text-base font-semibold">
                            Anda belum memiliki daftar buku yang ingin di baca.
                        </h5>
                    </div>
                @endif

                <div class="my-8 hidden h-px w-full bg-[#dcdcdc] lg:block"></div>

                <h1 class="mb-4 font-arvo text-2xl leading-7 lg:text-3xl">Rekomendasi untuk {{$user->name}}</h1>

                @if(count($user->user_recommendation) > 0)
                    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4 lg:gap-6">
                        @foreach ($user->user_recommendation as $item)
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
                        @endforeach
                    </div>
                @else
                    <div class="flex flex-col items-center gap-6">
                        <img class="h-auto w-56" src="{{ asset('/assets/media') }}/rekomendasi-404.png" alt="Recommendation 404">

                        <h5 class="text-base font-semibold">
                            Anda belum mendapatkan rekomendasi buku.
                        </h5>

                        <button id="book-recommendation" type="button" class="flex items-center justify-center rounded-full bg-[#128C55] px-6 py-4 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90 lg:w-60">
                            Coba Rekomendasi Buku
                        </button>
                    </div>
                @endif

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
{{--                            Tambahkan bacaan yang ingin anda baca dari rekomendasi buku.--}}
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
                                <a class="absolute inset-0 z-10 h-full w-full" href="{{route('detail-buku', [$item->kategori[0]->slug , $item->slug]) }}"></a>

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
@endsection

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
                @foreach($data as $key => $kategori)
                <nav class="mb-4 flex items-center justify-between lg:mb-6">
                    <h1 class="mb-4 font-arvo text-2xl leading-7 lg:text-3xl">{{ $kategori->name}}</h1>
                    <div class="hidden lg:block">
                        <a class="relative flex items-center justify-center rounded-full border border-black bg-white px-6 py-2 font-bold transition-all duration-300 ease-out hover:bg-black/10" href="{{ route('buku', $kategori->slug) }}">
                            Lihat Lebih Banyak
                        </a>
                    </div>
                </nav>

                @if(count($kategori->buku_limit) > 0)
                    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4 lg:gap-6">
                        @foreach ($kategori->buku_limit as $item)

                            <figure class="space-y-2.5 lg:space-y-5">
                                <img src="{{$item->image}}" alt="Rekomendasi 1">

                                <figcaption class="space-y-2">
                                    <a href="{{ route('detail-buku', [$kategori->slug, $item->slug]) }}" class="hover:underline">
                                        <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                                            {{$item->judul}}
                                        </h5>
                                    </a>

                                    <a href="{{ route('author', $item->penulis) }}" class="text-sm text-[#515151] hover:underline">
                                        by {{$item->penulis}}
                                    </a>
                                </figcaption>
                            </figure>
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
                @endforeach

            </section>

            <div class="relative col-span-1 lg:sticky lg:top-32 lg:col-span-3 lg:mt-32">
                <div class="my-8 block h-px w-full bg-[#dcdcdc] lg:hidden"></div>

                @foreach($count as $key => $item)
                <section class="relative mb-2">
                <a href="{{ route('buku', $item->kategori->slug) }}" class="font-arvo text-lg leading-7 text-[#128C55]">
                    {{ $item->kategori->name }}
                </a>
                @endforeach
            </section>
            </div>
        </div>

    </main>
@endsection

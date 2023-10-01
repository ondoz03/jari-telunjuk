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
      <h1 class="mb-4 font-arvo text-2xl leading-7 lg:text-3xl">Rekomendasi untuk {{$user->name}}</h1>

      @if(count($user->user_recommendation) > 0)
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-4 lg:gap-6">
          @foreach ($user->user_recommendation as $item)
          <figure class="space-y-2.5 lg:space-y-5">
              <img src="{{$item->buku->image}}" alt="Rekomendasi 1">

              <figcaption class="space-y-2">
                <a href="/" class="hover:underline">
                  <h5 class="line-clamp-2 text-base font-semibold leading-[1.25] lg:text-lg lg:leading-[1.125]">
                    {{$item->buku->judul}}
                  </h5>
                </a>

                <a href="/" class="text-sm text-[#515151] hover:underline">
                  by {{$item->buku->penulis}}
                </a>
              </figcaption>
          </figure>
          @endforeach
        </div>
      @else
        <div class="flex flex-col items-center gap-6">
          <img class="h-auto w-56" src="/rekomendasi-404.png" alt="Recommendation 404">

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
        <figure class="space-y-2.5 lg:space-y-5">
                <img src="/rekomendasi-1.png" alt="Rekomendasi 1">

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
              </figure><figure class="space-y-2.5 lg:space-y-5">
                <img src="/rekomendasi-2.png" alt="Rekomendasi 1">

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
              </figure><figure class="space-y-2.5 lg:space-y-5">
                <img src="/rekomendasi-3.png" alt="Rekomendasi 1">

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
              </figure><figure class="space-y-2.5 lg:space-y-5">
                <img src="/rekomendasi-4.png" alt="Rekomendasi 1">

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
              </figure><figure class="space-y-2.5 lg:space-y-5">
                <img src="/rekomendasi-5.png" alt="Rekomendasi 1">

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
              </figure><figure class="space-y-2.5 lg:space-y-5">
                <img src="/rekomendasi-6.png" alt="Rekomendasi 1">

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
          <h3 class="font-arvo text-2xl leading-7 lg:text-3xl">Want to Read</h3>

          <p class="text-sm font-semibold">
            Tambahkan bacaan yang ingin anda baca dari rekomendasi buku.
          </p>
        </header>

        <p class="text-sm text-[#515151]">
          In her second novel, The Stationery Shop, Marjan Kamali weaves a
          heartbreaking tale
        </p>
      </section>

      <div class="my-8 block h-px w-full bg-[#dcdcdc] lg:hidden"></div>

      <section class="relative mb-8">
        <h3 class="mb-4 font-arvo text-2xl leading-7 lg:text-3xl">
          Popular This Week
        </h3>

        <div class="mb-4 space-y-4">
          <figure class="group relative space-y-2">
                  <a class="absolute inset-0 z-10 h-full w-full" href="/"></a>
                  <h5 class="text-sm font-semibold group-hover:underline">
                    Outliers
                  </h5>

                  <p class="text-sm text-[#515151]">
                    by Malcolm Gladwell
                  </p>
                </figure><figure class="group relative space-y-2">
                  <a class="absolute inset-0 z-10 h-full w-full" href="/"></a>
                  <h5 class="text-sm font-semibold group-hover:underline">
                    Everything Is F*cked
                  </h5>

                  <p class="text-sm text-[#515151]">
                    by Mark Manson
                  </p>
                </figure><figure class="group relative space-y-2">
                  <a class="absolute inset-0 z-10 h-full w-full" href="/"></a>
                  <h5 class="text-sm font-semibold group-hover:underline">
                    12 Rules For Life: An Antidote To Chaos
                  </h5>

                  <p class="text-sm text-[#515151]">
                    by Jordan B. Peterson
                  </p>
                </figure><figure class="group relative space-y-2">
                  <a class="absolute inset-0 z-10 h-full w-full" href="/"></a>
                  <h5 class="text-sm font-semibold group-hover:underline">
                    Desain Grafis dengan Canva untuk Pemula
                  </h5>

                  <p class="text-sm text-[#515151]">
                    by Jubilee Enterprise
                  </p>
                </figure>
        </div>

        <button id="search-book" type="button" class="relative flex items-center justify-center rounded-full bg-[#128C55] px-8 py-2 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
          Cari Buku
        </button>
      </section>
    </div>
  </div>

</main>
@endsection
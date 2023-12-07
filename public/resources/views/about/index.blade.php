@extends('layouts.layouts')
@section('title')
    <title>Tentang Jari Telunjuk</title>
@endsection

@section('header-js')
    <script type="module" src="{{ asset('/assets')}}/front/hoisted.25b3dcdb.js"></script>
@endsection
@section('content')
<style type="text/css">
    ul {
        margin: 0px !important;
        padding-left: 30px !important;
        padding-right: 30px !important;
    }
    ul li {
        list-style-type: disc;
    }
</style>
<main class="relative w-full">
      
    <div class="container relative mx-auto grid h-full min-h-screen max-w-screen-xl grid-cols-1 px-4 lg:grid-cols-12 lg:gap-10 xl:px-12">
      <!-- Author - Detail -->
      <section class="col-span-1 mt-20 min-h-screen lg:col-span-9 lg:mt-28">
        <!-- Heading -->
        <h1 class="mb-6 font-arvo text-[34px] leading-none"></h1>

        <article class="mb-6">
          <h3 class="font-arvo mb-3 text-2xl xl:text-[42px] font-bold leading-8">Tentang Jari Telunjuk</h3>

          <p>
            Jari Telunjuk adalah platform rekomendasi buku yang membantu pembaca menemukan buku-buku terbaik sesuai dengan minat mereka. Kami percaya bahwa setiap orang memiliki selera membaca yang unik, dan kami ingin membantu mereka menemukan buku-buku yang akan mereka sukai.
          </p>
        </article>

        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">Visi dan Misi</h3>
          <p>
            Visi kami adalah menjadi platform rekomendasi buku terpercaya di Indonesia. Kami ingin membantu pembaca menemukan buku-buku terbaik, baik dari segi kualitas maupun relevansinya dengan minat mereka.
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">Misi kami adalah:</h3>
          <p>
            <ul>
                <li>
                    Memberikan rekomendasi buku yang akurat dan relevan
                </li>
                <li>
                    Membantu pembaca menemukan buku-buku baru yang mereka sukai
                </li>
                <li>
                    Mendukung industri buku Indonesia
                </li>
            </ul>
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">Cara Kerja</h3>
          <p>
            Untuk menggunakan Jari Telunjuk, pembaca dapat mendaftar dengan akun Google Anda. Setelah mendaftar, pembaca dapat mengisi profil mereka untuk membantu kami memberikan rekomendasi buku yang lebih akurat. Profil tersebut dapat mencakup minat membaca, genre favorit, dan penulis favorit.
          </p>
          <p>
              Pembaca juga dapat memberikan rating dan ulasan buku untuk membantu kami meningkatkan kualitas rekomendasi kami.
          </p>
          <p>
              Kami berharap Jari Telunjuk dapat menjadi teman Anda dalam mencari rekomendasi buku.
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">Kontak</h3>
          <p>
            Jika Anda memiliki pertanyaan atau saran, silakan hubungi kami melalui:
          </p>
          <p>
            <ul>
                <li>
                    Email: [halo@jaritelunjuk.com]
                </li>
                <li>
                    Instagram: @jaritelunjukcom
                </li>
                <li>
                    Twitter: @jaritelunjukcom
                </li>
            </ul>
          </p>
        </article>
      </section>
        <div class="relative col-span-1 lg:sticky lg:top-32 lg:col-span-3 lg:mt-32">
            <div class="my-8 block h-px w-full bg-[#dcdcdc] lg:hidden"></div>

            <div class="my-8 block h-px w-full bg-[#dcdcdc] lg:hidden"></div>

            <section class="relative mb-2">
                <a href="{{route('home')}}" class="font-arvo text-lg leading-7 text-[#128C55]">
                    Home
                </a>
            </section>
            <section class="relative mb-2">
                <a href="{{route('category')}}" class="font-arvo text-lg leading-7 text-[#128C55]">
                    Category
                </a>
            </section>
            <section class="relative mb-2">
                <a href="#" class="font-arvo text-lg leading-7 text-[#128C55]">
                    Blog
                </a>
            </section>
            <section class="relative mb-2">
                <a href="{{route('about')}}" class="font-arvo text-lg leading-7 text-[#128C55]">
                    About
                </a>
            </section>
            <section class="relative mb-2">
                <a href="https://www.jaritelunjuk.com/blog/kontak/" class="font-arvo text-lg leading-7 text-[#128C55]">
                    Contact Us
                </a>
            </section>
            <section class="relative mb-2">
                <a href="{{route('privacy-policy')}}" class="font-arvo text-lg leading-7 text-[#128C55]">
                    Privacy Policy
                </a>
            </section>
        </div>
    </div>

</main>
@endsection
@extends('layouts.layouts')
@section('title')
    <title>Discover books you’ll love! | Jari Telunjuk</title>
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
      <section class="mt-20 min-h-screen lg:mt-28" style="grid-column: span 12;">
        <!-- Heading -->
        <h1 class="mb-6 font-arvo text-[34px] leading-none"></h1>

        <article class="mb-6">
          <h3 class="font-arvo mb-3 text-2xl xl:text-[42px] font-bold leading-8">Privacy Policy</h3>
        </article>

        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">1. Pendahuluan</h3>
          <p>
            Kebijakan Privasi ini mengatur bagaimana kami mengumpulkan, menggunakan, dan membagikan informasi pribadi Anda saat Anda menggunakan Platform Jari Telunjuk kami.
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">2. Informasi yang Kami Kumpulkan</h3>
          <p>
            Kami mengumpulkan informasi pribadi Anda ketika Anda menggunakan Platform Jari Telunjuk kami, termasuk:
          </p>
          <p>
            <ul>
                <li>
                    Informasi yang Anda berikan kepada kami, seperti nama, alamat email, dan alamat IP.
                </li>
                <li>
                    Informasi yang kami kumpulkan secara otomatis ketika Anda menggunakan Platform Jari Telunjuk kami, seperti informasi tentang perangkat dan browser Anda.
                </li>
                <li>
                    Informasi yang kami kumpulkan dari pihak ketiga, seperti informasi tentang minat Anda yang diperoleh dari media sosial atau situs web lain.
                </li>
            </ul>
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">3. Cara Kami Menggunakan Informasi Anda</h3>
          <p>
            Kami menggunakan informasi pribadi Anda untuk tujuan berikut:
          </p>
          <p>
            <ul>
                <li>
                    Menyediakan Platform Jari Telunjuk kepada Anda.
                </li>
                <li>
                    Meningkatkan dan mengembangkan Platform JariTelunjuk kami.
                </li>
                <li>
                    Mengirimkan email dan pemberitahuan kepada Anda.
                </li>
                <li>
                    Menampilkan iklan yang relevan kepada Anda.
                </li>
                <li>
                    Memasarkan produk dan layanan kami kepada Anda.
                </li>
            </ul>
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">4. Cara Kami Membagikan Informasi Anda</h3>
          <p>
            Kami dapat membagikan informasi pribadi Anda dengan pihak ketiga, termasuk:
          </p>
          <p>
            <ul>
                <li>
                    Penyedia layanan pihak ketiga yang membantu kami menjalankan Platform JariTelunjuk kami.
                </li>
                <li>
                    Penyedia iklan yang membantu kami menampilkan iklan yang relevan kepada Anda.
                </li>
            </ul>
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">5. Hak-Hak Anda</h3>
          <p>
            Anda memiliki hak untuk:
          </p>
          <p>
            <ul>
                <li>
                    Mengakses informasi pribadi Anda yang kami miliki.
                </li>
                <li>
                    Meminta kami untuk memperbarui atau memperbaiki informasi pribadi Anda yang tidak akurat.
                </li>
                <li>
                    Meminta kami untuk menghapus informasi pribadi Anda.
                </li>
                <li>
                    Membatalkan izin Anda untuk kami menggunakan informasi pribadi Anda.
                </li>
            </ul>
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">6. Keamanan Informasi</h3>
          <p>
            Kami mengambil langkah-langkah keamanan untuk melindungi informasi pribadi Anda dari akses, penggunaan, atau pengungkapan yang tidak sah.
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">7. Perubahan Kebijakan Privasi</h3>
          <p>
            Kami dapat mengubah Kebijakan Privasi ini dari waktu ke waktu. Jika kami membuat perubahan yang signifikan, kami akan memberi tahu Anda melalui email atau pemberitahuan di Platform Jari Telunjuk kami.
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">8. Kontak</h3>
          <p>
            Jika Anda memiliki pertanyaan tentang Kebijakan Privasi ini, silakan hubungi kami di [halo@jaritelunjuk.com].
          </p>
        </article>
        v
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">9. Ketentuan Tambahan</h3>
          <p>
            Kebijakan Privasi ini tunduk pada Ketentuan Layanan kami.
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">10. Bahasa</h3>
          <p>
            Kebijakan Privasi ini tersedia dalam bahasa Indonesia. Jika terdapat perbedaan antara versi bahasa Indonesia dan bahasa lain, versi bahasa Indonesia yang berlaku.
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">11. Hukum yang Berlaku</h3>
          <p>
            Kebijakan Privasi ini tunduk pada hukum Indonesia.
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">12. Domisili</h3>
          <p>
            Untuk semua tujuan hukum, Platform JariTelunjuk kami dianggap berada di Indonesia
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">13. Pengalihan</h3>
          <p>
            Kami dapat mengalihkan informasi pribadi Anda kepada pihak ketiga jika kami diakuisisi oleh atau bergabung dengan perusahaan lain.
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">14. Hak untuk Mengajukan Keluhan</h3>
          <p>
            Jika Anda memiliki keluhan tentang cara kami menggunakan informasi pribadi Anda, Anda dapat mengajukan keluhan kepada Badan Perlindungan Data Personal (PDP).
          </p>
        </article>
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">15. Tanggal Efektif</h3>
          <p>
            Kebijakan Privasi ini mulai berlaku pada tanggal 15 Desember 2023.
          </p>
        </article>

      </section>
    </div>

</main>
@endsection

@extends('layouts.layouts')
@section('title')
    <title> Sorry, Sepertinya Anda typo atau asal nulis</title>
    {!! GeneralHelper::canonical()!!}

@endsection

@section('content')
<main class="relative">
    <section class="relative mt-20 overflow-hidden xl:mt-32 astro-J7PV25F6">
            <div class="relative flex items-top justify-center bg-white sm:items-center sm:pt-0">
                <div class="max-w-xl mx-auto sm:px-6 lg:px-8">

                    <section class="flex flex-col items-center justify-center gap-6 p-4 lg:p-0">
                        <img class="h-auto w-80 object-cover" src="https://cdn.jaritelunjuk.com/web-asset/footer-ill-02-01.jpg" alt="Footer Illustration">

                        <h5 class="text-center font-bold">
                            Oopss! Sementara yang kamu cari tidak ada, <br>hubungi kami melalui social media atau <a href="https://www.jaritelunjuk.com/blog/kontak/">Kontak Kami</a>

                        </h5>
                      </section>
                    <div class="flex items-center pt-10 sm:justify-start sm:pt-8">
                    </div>
                </div>
            </div>
    </section>
</main>
@endsection

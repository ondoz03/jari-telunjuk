
@extends('layouts.layouts')
@section('title')
    <title> Sorry, Sepertinya Anda typo atau asal nulis</title>
    {!! GeneralHelper::canonical()!!}

@endsection

@section('content')
<main class="relative">
    <section class="relative mt-10 overflow-hidden xl:mt-32 astro-J7PV25F6">
            <div class="relative flex items-top justify-center bg-white sm:items-center sm:pt-0">
                <div class="max-w-xl mx-auto sm:px-6 lg:px-8">

                    <section class="flex flex-col items-center justify-center gap-6 p-4 lg:p-0">
                        <img class="h-auto w-80 object-cover" src="{{ asset('/assets/media')}}/verification.png" alt="Footer Illustration">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                Link Verifikasi baru telah di kirim ke E-Mail Anda.
                            </div>
                        @endif
                        <h5 class="text-center font-bold">
                            Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi. Jika Anda tidak menerima email tersebut,

                        </h5>
                        <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="flex w-60 items-center justify-center rounded-full bg-[#128C55] px-6 py-4 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90 ">
                                Resend Verifikasi
                            </button>.
                        </form>
                      </section>
                    <div class="flex items-center pt-10 sm:justify-start sm:pt-8">
                    </div>
                </div>
            </div>
    </section>
</main>
@endsection


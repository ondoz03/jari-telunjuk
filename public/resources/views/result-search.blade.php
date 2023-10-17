@extends('layouts.layouts')
@section('title')
    <title>{{ Str::ucfirst($request->search) }} - Jari Telunjuk</title>
@endsection
@section('content')
    <main class="relative w-full">

        <main class="relative overflow-hidden pb-10 pt-20 xl:pb-20 xl:pt-32">
            <div class="container mx-auto max-w-screen-xl px-4 xl:px-12">
                <div class="relative grid grid-cols-1 gap-10 xl:grid-cols-12 xl:pb-14 xl:pt-10">
                    <section class="col-span-1 xl:col-span-8">
                        <h3 class="mb-6 font-arvo text-2xl leading-7 text-[#2E2E2E] xl:mb-10 xl:text-[34px] xl:leading-none">
                            <span class="text-[#868686]">Result for</span> {{ Str::ucfirst($request->search) }}
                        </h3>


                        <div class="space-y-4 xl:space-y-10">

                            @foreach ($buku as $item)
                                <figure class="group relative flex w-full  items-start gap-3 xl:flex-nowrap xl:gap-8">
                                    <a class="absolute z-10 h-full w-full"
                                        href="{{ route('detail-buku', [$item->kategori[0]->slug, $item->slug]) }}"></a>

                                    {{-- <img class="aspect-video h-auto w-full rounded-md xl:h-48 xl:w-auto" src="{{$item->image}}" alt="Blog 1 Photo"> --}}
                                    <img class="mb-6 w-full rounded-md"
                                        src="{{ $item->image }}"
                                        style="height: 251px; width:171px"
                                        alt="Book Photo 1">


                                    <div class="space-y-2 text-left">
                                        <h5
                                            class="text-base font-bold leading-5 group-hover:underline xl:text-2xl xl:leading-[28px]">
                                            {{ $item->judul }}
                                        </h5>

                                        <p class=" text-sm text-[#515151] xl:text-base"
                                            style=" overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-box-orient: vertical;
                                        -webkit-line-clamp: 3">
                                            {{ $item->detail_buku->description }}
                                        </p>

                                        <p class="relative z-20 space-x-2 text-sm xl:text-base md:flex"
                                            style=" overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-box-orient: vertical;
                                        -webkit-line-clamp: 1">
                                            <span>Category</span>
                                            @foreach ($item->kategori as $val)
                                                <a href="{{ route('buku', $val->slug) }}"
                                                    class="text-[#128C55] hover:underline">
                                                    {{ $val->name }}
                                                </a>
                                            @endforeach

                                        </p>

                                        <p class="text-sm xl:text-base"
                                            style=" overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-box-orient: vertical;
                                        -webkit-line-clamp: 1">
                                            {{ $item->penulis }}
                                        </p>
                                        <p>
                                            {{ $item->detail_buku->tgl_rilis }}
                                        </p>
                                    </div>
                                </figure>
                            @endforeach
                            {!! $buku->links() !!}
                        </div>
                    </section>

                    <section class="col-span-1 xl:col-span-4">
                        <h3 class="mb-6 font-arvo text-2xl leading-7 xl:mb-10 xl:text-[34px] xl:leading-none">
                            Popular
                        </h3>

                        <div class="space-y-4 xl:space-y-6">
                            <figure class="group relative flex w-full items-start gap-3 xl:gap-4">
                                <a class="absolute z-10 h-full w-full"
                                    href="/"></a>

                                <h3 class="font-arvo text-2xl font-bold italic leading-[26px] opacity-20">
                                    01
                                </h3>

                                <div class="flex-1 space-y-2">
                                    <h5 class="text-lg font-semibold leading-5 group-hover:underline xl:text-xl">
                                        Sell Yourself to Success In Career and Life
                                    </h5>

                                    <p class="line-clamp-2 pb-1.5 text-sm text-[#515151] xl:text-base">
                                        In her second novel, The Stationery Shop, Marjan Kamali
                                        weaves a heartbreaking tale. No matter your occupation,
                                        you’re going...
                                    </p>

                                    <p class="relative z-20 space-x-2 text-sm xl:text-base">
                                        <span>Category</span>
                                        <a href="/category"
                                            class="text-[#128C55] hover:underline">
                                            Self Improvement
                                        </a>
                                    </p>

                                    <p class="text-sm xl:text-base">
                                        Reza Adil - 25 Januari 2021
                                    </p>
                                </div>
                            </figure>
                            <figure class="group relative flex w-full items-start gap-3 xl:gap-4">
                                <a class="absolute z-10 h-full w-full"
                                    href="/"></a>

                                <h3 class="font-arvo text-2xl font-bold italic leading-[26px] opacity-20">
                                    02
                                </h3>

                                <div class="flex-1 space-y-2">
                                    <h5 class="text-lg font-semibold leading-5 group-hover:underline xl:text-xl">
                                        Sell Yourself to Success In Career and Life
                                    </h5>

                                    <p class="line-clamp-2 pb-1.5 text-sm text-[#515151] xl:text-base">
                                        In her second novel, The Stationery Shop, Marjan Kamali
                                        weaves a heartbreaking tale. No matter your occupation,
                                        you’re going...
                                    </p>

                                    <p class="relative z-20 space-x-2 text-sm xl:text-base">
                                        <span>Category</span>
                                        <a href="/category"
                                            class="text-[#128C55] hover:underline">
                                            Self Improvement
                                        </a>
                                    </p>

                                    <p class="text-sm xl:text-base">
                                        Reza Adil - 25 Januari 2021
                                    </p>
                                </div>
                            </figure>
                            <figure class="group relative flex w-full items-start gap-3 xl:gap-4">
                                <a class="absolute z-10 h-full w-full"
                                    href="/"></a>

                                <h3 class="font-arvo text-2xl font-bold italic leading-[26px] opacity-20">
                                    03
                                </h3>

                                <div class="flex-1 space-y-2">
                                    <h5 class="text-lg font-semibold leading-5 group-hover:underline xl:text-xl">
                                        Sell Yourself to Success In Career and Life
                                    </h5>

                                    <p class="line-clamp-2 pb-1.5 text-sm text-[#515151] xl:text-base">
                                        In her second novel, The Stationery Shop, Marjan Kamali
                                        weaves a heartbreaking tale. No matter your occupation,
                                        you’re going...
                                    </p>

                                    <p class="relative z-20 space-x-2 text-sm xl:text-base">
                                        <span>Category</span>
                                        <a href="/category"
                                            class="text-[#128C55] hover:underline">
                                            Self Improvement
                                        </a>
                                    </p>

                                    <p class="text-sm xl:text-base">
                                        Reza Adil - 25 Januari 2021
                                    </p>
                                </div>
                            </figure>
                            <figure class="group relative flex w-full items-start gap-3 xl:gap-4">
                                <a class="absolute z-10 h-full w-full"
                                    href="/"></a>

                                <h3 class="font-arvo text-2xl font-bold italic leading-[26px] opacity-20">
                                    04
                                </h3>

                                <div class="flex-1 space-y-2">
                                    <h5 class="text-lg font-semibold leading-5 group-hover:underline xl:text-xl">
                                        Sell Yourself to Success In Career and Life
                                    </h5>

                                    <p class="line-clamp-2 pb-1.5 text-sm text-[#515151] xl:text-base">
                                        In her second novel, The Stationery Shop, Marjan Kamali
                                        weaves a heartbreaking tale. No matter your occupation,
                                        you’re going...
                                    </p>

                                    <p class="relative z-20 space-x-2 text-sm xl:text-base">
                                        <span>Category</span>
                                        <a href="/category"
                                            class="text-[#128C55] hover:underline">
                                            Self Improvement
                                        </a>
                                    </p>

                                    <p class="text-sm xl:text-base">
                                        Reza Adil - 25 Januari 2021
                                    </p>
                                </div>
                            </figure>
                            <figure class="group relative flex w-full items-start gap-3 xl:gap-4">
                                <a class="absolute z-10 h-full w-full"
                                    href="/"></a>

                                <h3 class="font-arvo text-2xl font-bold italic leading-[26px] opacity-20">
                                    05
                                </h3>

                                <div class="flex-1 space-y-2">
                                    <h5 class="text-lg font-semibold leading-5 group-hover:underline xl:text-xl">
                                        Sell Yourself to Success In Career and Life
                                    </h5>

                                    <p class="line-clamp-2 pb-1.5 text-sm text-[#515151] xl:text-base">
                                        In her second novel, The Stationery Shop, Marjan Kamali
                                        weaves a heartbreaking tale. No matter your occupation,
                                        you’re going...
                                    </p>

                                    <p class="relative z-20 space-x-2 text-sm xl:text-base">
                                        <span>Category</span>
                                        <a href="/category"
                                            class="text-[#128C55] hover:underline">
                                            Self Improvement
                                        </a>
                                    </p>

                                    <p class="text-sm xl:text-base">
                                        Reza Adil - 25 Januari 2021
                                    </p>
                                </div>
                            </figure>
                        </div>
                    </section>
                </div>
            </div>
        </main>

    </main>
@endsection
@section('js')
@endsection

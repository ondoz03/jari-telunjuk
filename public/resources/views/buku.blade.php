@extends('layouts.layouts')
@section('title')
    <title>{{Str::ucfirst($kategori->name)}} - Jari Telunjuk</title>
@endsection
@section('content')
<main class="relative">
    <main class="relative w-full py-20 xl:py-24">
        <div class="container mx-auto max-w-screen-xl px-4 xl:px-12">
            <header class="border-b border-[#DCDCDC] pb-6 xl:pb-12">
                <!-- Breadcrumb -->
                <div class="Breadcrumb mb-4 flex items-center gap-1 text-xs text-[#128C55] xl:mb-6 xl:text-sm">
                    <a class="hover:underline" href="/">Category</a>

                    <span>&gt;</span>
                    <a class="hover:underline" href="/">{{Str::ucfirst($kategori->name)}} </a>
                </div>

                <section class="container mx-auto w-full max-w-screen-lg space-y-4 text-center xl:space-y-6">
                    <h1 class="font-arvo text-2xl font-normal xl:text-[34px]">{{Str::ucfirst($kategori->name)}} </h1>

                    <div class="text-sm xl:text-base">
                        <p>
                           {!! $kategori->description !!}
                        </p>
                    </div>
                </section>
            </header>

            <div class="grid grid-cols-1 gap-10 pb-14 pt-10 xl:grid-cols-12">
                <section class="col-span-1 border-b border-[#dedede] pb-12 xl:col-span-8">
                    <header class="mb-4 flex items-center justify-between xl:mb-8">
                        <h3 class="font-arvo text-2xl leading-7 xl:text-[34px] xl:leading-none">
                            New Releases
                        </h3>

                        <div class="relative hidden w-72 xl:block">
                            <input class="w-full rounded-full border border-[#DEDEDE] px-6 py-2 text-sm text-[#2e2e2e] outline-none ring-2 ring-transparent placeholder:text-stone-500 focus:border-stone-300 focus:ring-[#DEDEDE]/25" type="text" placeholder="Cari buku berdasarkan kategori ...">
                        </div>
                    </header>

                    <div class="grid grid-cols-2 gap-x-6 gap-y-8 xl:grid-cols-4">
                        @foreach ($buku as $item)
                            <figure class="group relative item-buku'">
                                <a href="{{route('detail-buku', $item->slug)}}" class="absolute z-10 h-full w-full object-cover"></a>

                                <img class="mb-6 w-full" src="{{ $item->image}}" style="height: 251px;" alt="Book Photo 1">

                                <figcaption class="mb-1.5 text-md font-semibold leading-[22px] group-hover:underline" style="
                                letter-spacing: normal;
                                color: #151515;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                display: -webkit-box;
                                -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                width: 100%;
                                text-align: left;
                                margin-bottom: 5px;" alt="testing">
                                    {{ Str::title(Str::lower($item->judul)) }}
                                </figcaption>

                                <p class="text-[#515151]">By {{$item->penulis}}</p>
                            </figure>
                        @endforeach
                    </div>

                    <div class="mt-8 flex w-full justify-center">
                        <button id="llb" class="flex w-60 items-center justify-center rounded-full bg-[#128C55] px-6 py-4 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
                            Lihat Lebih Banyak
                        </button>
                    </div>
                </section>

                <section class="relative col-span-1 space-y-14 xl:col-span-4">
                    <div class="space-y-6">
                        <h3 class="font-arvo text-[34px] leading-none">Related Category</h3>
                        <nav class="flex flex-col items-start gap-3">
                            @foreach (GeneralHelper::getRandomGetCategory() as $item)
                                <a class="text-[#128C55] hover:underline" href="{{route('buku', $item->slug)}}">{{$item->name}}</a>
                            @endforeach
                        </nav>
                    </div>

                    <div class="relative space-y-6 xl:sticky xl:right-0 xl:top-28 xl:h-screen">
                        <h3 class="font-arvo text-[34px] leading-none">Related Blog</h3>

                        <div class="flex w-full flex-col items-start gap-4">
                            @foreach(\App\Helpers\GeneralHelper::getPost() as $item)
                                <figure class="relative w-full overflow-hidden rounded-lg border border-[#DCDCDC] bg-white shadow-none transition-all duration-300 ease-out hover:shadow-md astro-J7PV25F6">
                                    <a class="absolute z-10 h-full w-full astro-J7PV25F6" href="https://www.jaritelunjuk.com/blog/{{$item['slug']}}">

                                    </a>

                                    <img class="aspect-video h-auto w-full astro-J7PV25F6" src="{{$item['featuredImage']['node']['mediaDetails']['sizes'][0]['sourceUrl']}}" alt="Blog 1" style="object-fit: cover;">

                                    <div class="w-full px-2 pb-3.5 pt-1.5 xl:p-5 astro-J7PV25F6">
                                        <h5 class="mb-1 text-sm font-bold leading-5 text-[#2e2e2e] xl:mb-5 xl:text-xl xl:leading-[26px] astro-J7PV25F6">
                                            {!! Str::limit($item['title'], 60) !!}
                                        </h5>

                                        <br>
                                        <p class="text-sm leading-5 text-[#2e2e2e] xl:text-base astro-J7PV25F6" style="margin-top:10px">
                                            <span class="astro-J7PV25F6">{{date('d, M Y' ,strtotime($item['date'])) }}</span>
                                        </p>
                                    </div>
                                </figure>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>

            <div class="grid grid-cols-1 gap-10 pb-20 xl:grid-cols-12">
                <section class="Accordion col-span-1 xl:col-span-8">
                    <h3 class="mb-6 font-arvo text-[34px] leading-none">FAQ</h3>

                    <div class="space-y-3">
                        <section class="menu space-y-2 border-b border-stone-300 pb-3">
                            <button type="button" class="header flex w-full items-center justify-between">
                                <h5 class="text-lg font-bold">What is FAQ?</h5>

                                <svg class="arrow-down_icon h-5 w-5 rotate-0 fill-[#2e2e2e]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7072 7.70725L10.7073 12.7073C10.5122 12.9023 10.2562 13.0002 10.0002 13.0002C9.74425 13.0002 9.48825 12.9023 9.29325 12.7073L4.29325 7.70725C3.90225 7.31625 3.90225 6.68425 4.29325 6.29325C4.68425 5.90225 5.31625 5.90225 5.70725 6.29325L10.0002 10.5862L14.2933 6.29325C14.6842 5.90225 15.3162 5.90225 15.7072 6.29325C16.0982 6.68425 16.0982 7.31625 15.7072 7.70725Z"></path>
                                </svg>
                            </button>

                            <main class="content hidden">
                                Nunc vitae euismod velit, ac commodo nulla. Quisque ultrices sed
                                ipsum ut fermentum.
                            </main>
                        </section>

                        <section class="menu space-y-2 border-b border-stone-300 pb-3">
                            <button type="button" class="header flex w-full items-center justify-between">
                                <h5 class="text-lg font-bold">What is FAQ?</h5>

                                <svg class="arrow-down_icon h-5 w-5 rotate-0 fill-[#2e2e2e]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7072 7.70725L10.7073 12.7073C10.5122 12.9023 10.2562 13.0002 10.0002 13.0002C9.74425 13.0002 9.48825 12.9023 9.29325 12.7073L4.29325 7.70725C3.90225 7.31625 3.90225 6.68425 4.29325 6.29325C4.68425 5.90225 5.31625 5.90225 5.70725 6.29325L10.0002 10.5862L14.2933 6.29325C14.6842 5.90225 15.3162 5.90225 15.7072 6.29325C16.0982 6.68425 16.0982 7.31625 15.7072 7.70725Z"></path>
                                </svg>
                            </button>

                            <main class="content hidden">
                                Nunc vitae euismod velit, ac commodo nulla. Quisque ultrices sed
                                ipsum ut fermentum.
                            </main>
                        </section>
                        <section class="menu space-y-2 border-b border-stone-300 pb-3">
                            <button type="button" class="header flex w-full items-center justify-between">
                                <h5 class="text-lg font-bold">What is FAQ?</h5>

                                <svg class="arrow-down_icon h-5 w-5 rotate-0 fill-[#2e2e2e]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7072 7.70725L10.7073 12.7073C10.5122 12.9023 10.2562 13.0002 10.0002 13.0002C9.74425 13.0002 9.48825 12.9023 9.29325 12.7073L4.29325 7.70725C3.90225 7.31625 3.90225 6.68425 4.29325 6.29325C4.68425 5.90225 5.31625 5.90225 5.70725 6.29325L10.0002 10.5862L14.2933 6.29325C14.6842 5.90225 15.3162 5.90225 15.7072 6.29325C16.0982 6.68425 16.0982 7.31625 15.7072 7.70725Z"></path>
                                </svg>
                            </button>

                            <main class="content hidden">
                                Nunc vitae euismod velit, ac commodo nulla. Quisque ultrices sed
                                ipsum ut fermentum.
                            </main>
                        </section>
                    </div>
                </section>

                <section class="col-span-1 xl:col-span-4"></section>
            </div>
        </div>
    </main>

</main>
@endsection
@section('js')
    <script>
        var page = 1;
        $(document).ready(function() {
            url = {!! route('buku-page', $slug) !!}
            $('#llb').click(function(){
                // console.log('test');
                // if($('#totalData').val() != page){
                // page++;
                // console.log(page);
                    $.ajax({
                        url: url,
                        type: "GET",
                        dataType: JSON,
                        success: function(response){
                            console.log(response)
                            // console.log(page)
                            // console.log(e)
                        }
                    });
                // console.log(page)
                // loadMoreData(page);
                // }
            });
        });

        function loadMoreData(page) {
            console.log('?page=' + page);


        }

        // function showLoadingImage() {
        //     $('#relaod-page').append(`
        //         <figure class="group relative">
        //             <a href="" class="absolute z-10 h-full w-full object-cover"></a>

        //             <img class="mb-6 w-full" src="" style="height: 251px;" alt="Book Photo 1">

        //             <figcaption class="mb-1.5 text-md font-semibold leading-[22px] group-hover:underline" style="
        //             letter-spacing: normal;
        //             color: #151515;
        //             overflow: hidden;
        //             text-overflow: ellipsis;
        //             display: -webkit-box;
        //             -webkit-line-clamp: 2;
        //             -webkit-box-orient: vertical;
        //             width: 100%;
        //             text-align: left;
        //             margin-bottom: 5px;" alt="testing">
        //             </figcaption>

        //             <p class="text-[#515151]">By </p>
        //         </figure>
        //     `);
        // }



    </script>
@endsection

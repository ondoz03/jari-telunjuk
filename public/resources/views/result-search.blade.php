@extends('layouts.layouts')
@section('title')
    <title>{{ Str::ucfirst($request->search) }} - Jari Telunjuk</title>
    {!! GeneralHelper::canonical()!!}

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


                        <div class="space-y-4 xl:space-y-10" id="data-wrapper">
                            @include('data-result-search')
                        </div>

                        <div class="auto-load text-center" style="display: none;">
                            <svg version="1.1"
                                id="L9"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                height="60"
                                viewBox="0 0 100 100"
                                enable-background="new 0 0 0 0"
                                xml:space="preserve">
                                <path fill="#000"
                                    d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                    <animateTransform attributeName="transform"
                                        attributeType="XML"
                                        type="rotate"
                                        dur="1s"
                                        from="0 50 50"
                                        to="360 50 50"
                                        repeatCount="indefinite" />
                                </path>
                            </svg>
                        </div>
                        @if ($buku->lastPage() > 1)
                            <div class="mt-8 flex w-full justify-center">
                                <button id="llb"
                                    class="flex w-60 load-more-data items-center justify-center rounded-full bg-[#128C55] px-6 py-4 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
                                    Lihat Lebih Banyak
                                </button>
                            </div>
                        @endif
                    </section>

                    <section class="col-span-1 xl:col-span-4">
                        <h3 class="mb-6 font-arvo text-2xl leading-7 xl:mb-10 xl:text-[34px] xl:leading-none">
                            Popular
                        </h3>

                        <div class="space-y-4 xl:space-y-6">
                            @foreach (\App\Helpers\GeneralHelper::getPostPopuler() as $key => $item)
                                <figure class="group relative flex w-full items-start gap-3 xl:gap-4">
                                    <a class="absolute z-10 h-full w-full"
                                        href="{{ $item['link'] }}"></a>

                                    <h3 class="font-arvo text-2xl font-bold italic leading-[26px] opacity-20">
                                        0{{ $key + 1 }}
                                    </h3>

                                    <div class="flex-1 space-y-2">
                                        <h5 class="text-lg font-semibold leading-5 group-hover:underline xl:text-xl">
                                            {!! $item['title'] !!}

                                        </h5>

                                        {{-- <p class="line-clamp-2 pb-1.5 text-sm text-[#515151] xl:text-base">
                                            {!! Str::limit($item['content'], 150) !!}
                                        </p> --}}

                                        <p class="relative z-20 space-x-2 text-sm xl:text-base">
                                            <span>Category</span>
                                            @foreach ($item['categories']['nodes'] as $category)
                                                <a href="{{ $category['link'] }}"
                                                    class="text-[#128C55] hover:underline">
                                                    {{ $category['name'] }}
                                                </a>
                                            @endforeach

                                        </p>

                                        {{-- <p class="text-sm xl:text-base">
                                            {{ $item['author']['node']['name'] }} -
                                            {{ date('d, M Y', strtotime($item['date'])) }}
                                        </p> --}}
                                    </div>
                                </figure>
                            @endforeach

                        </div>
                    </section>
                </div>
            </div>
        </main>

    </main>
@endsection
@section('js')
<script>
        var ENDPOINT = document.URL;
        var page = 1;
        var loadMoreClicks = 0;
        var maxClicks = 3;

        $(".load-more-data").click(function() {
            if (loadMoreClicks >= maxClicks) {
                $(this).hide();
                return;
            }

            page++;
            loadMoreClicks++;
            infinteLoadMore(page);
        });


        function infinteLoadMore(page) {
            $.ajax({
                    url: ENDPOINT + "&page=" + page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function() {
                        $('.auto-load').show();
                    }
                })
                .done(function(response) {
                    if (response.html == '') {
                        $('.auto-load').html("We don't have more data to display :(");
                        return;
                    }
                    $('.auto-load').hide();
                    $("#data-wrapper").append(response.html);
                    lazyload()
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
</script>
@endsection

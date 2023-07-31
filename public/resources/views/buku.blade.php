@extends('layouts.layouts')
@section('content')
<main class="relative">
    <main class="relative w-full py-24">
      <div class="container mx-auto max-w-screen-xl px-12">
        <header class="border-b border-[#DCDCDC] pb-12">
          <!-- Breadcrumb -->
          <div class="Breadcrumb mb-6 flex items-center gap-1 text-[#128C55]">
            <a class="hover:underline" href="/">Category</a>
            <span>&gt;</span>
            <a class="hover:underline" href="/">Fantasy</a>
          </div>

          <section class="container mx-auto w-full max-w-screen-lg space-y-6 text-center">
            <h1 class="font-arvo text-[34px] font-normal">Fantasy</h1>
            <div class="">
              <p>
                Fantasy is a genre that uses magic and other supernatural forms as
                a primary element of plot, theme, and/or setting. Fantasy is
                generally distinguished from science fiction and horror by the
                expectation that it steers clear of technological and macabre
                themes, respectively, though there is a great deal of overlap
                between the three (collectively known as speculative fiction of
                science fiction/fantasy)
              </p>
              <br>
              <p>
                In its broadest sense, fantasy comprises works by many writers,
                artists, filmmakers, and musicians, from ancient myths and legends
                to many recent works embraced by a wide audience today, including
                <button class="font-semibold text-[#128C55]"> ...more</button>
              </p>
            </div>
          </section>
        </header>

        <div class="grid grid-cols-12 gap-10 pb-14 pt-10">
          <section class="col-span-8 border-b border-[#dedede] pb-12">
            <header class="mb-8 flex items-center justify-between">
              <h3 class="font-arvo text-[34px] leading-none">New Releases</h3>

              <div class="relative w-72">
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

                <div id="relaod-page">

                </div>
            </div>

            <div class="mt-8 flex w-full justify-center">
              <button id="llb" class="flex w-60 items-center justify-center rounded-full bg-[#128C55] px-6 py-4 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
                Lihat Lebih Banyak
              </button>
            </div>
          </section>

          <section class="relative col-span-4 space-y-14">
            <div class="space-y-6">
              <h3 class="font-arvo text-[34px] leading-none">Related Category</h3>
              <nav class="flex flex-col items-start gap-3">
                @foreach (GeneralHelper::getRandomGetCategory() as $item)
                    <a class="text-[#128C55] hover:underline" href="{{route('buku', $item->slug)}}">{{$item->name}}</a>
                @endforeach
              </nav>
            </div>

            <div class="sticky right-0 top-28 h-screen space-y-6">
              <h3 class="font-arvo text-[34px] leading-none">Related Blog</h3>
              <div class="flex flex-col items-start gap-4">
                <a class="relative overflow-hidden" href="/">
                        <figure class="w-full overflow-hidden rounded-lg border border-[#DCDCDC] bg-white shadow-none transition-all duration-300 ease-out hover:shadow-md">
                          <img class="aspect-video h-auto w-full" src="{{asset('public/assets/media')}}/blog-1.png" alt="Blog 1">

                          <div class="w-full p-5">
                            <h5 class="mb-5 text-xl font-semibold leading-[26px] text-[#2e2e2e]">
                              A conversation with Marjan Kamali
                            </h5>

                            <p class="mb-8 leading-5 text-[#515151]">
                              In her second novel, The Stationery Shop, Marjan
                              Kamali weaves a heartbreaking tale
                            </p>

                            <p class="leading-5 text-[#2e2e2e]">
                              <span>Reza Adil</span> -
                              <span>25 Januari 2021</span>
                            </p>
                          </div>
                        </figure>
                      </a><a class="relative overflow-hidden" href="/">
                        <figure class="w-full overflow-hidden rounded-lg border border-[#DCDCDC] bg-white shadow-none transition-all duration-300 ease-out hover:shadow-md">
                          <img class="aspect-video h-auto w-full" src="{{asset('public/assets/media')}}/blog-1.png" alt="Blog 1">

                          <div class="w-full p-5">
                            <h5 class="mb-5 text-xl font-semibold leading-[26px] text-[#2e2e2e]">
                              A conversation with Marjan Kamali
                            </h5>

                            <p class="mb-8 leading-5 text-[#515151]">
                              In her second novel, The Stationery Shop, Marjan
                              Kamali weaves a heartbreaking tale
                            </p>

                            <p class="leading-5 text-[#2e2e2e]">
                              <span>Reza Adil</span> -
                              <span>25 Januari 2021</span>
                            </p>
                          </div>
                        </figure>
                      </a><a class="relative overflow-hidden" href="/">
                        <figure class="w-full overflow-hidden rounded-lg border border-[#DCDCDC] bg-white shadow-none transition-all duration-300 ease-out hover:shadow-md">
                          <img class="aspect-video h-auto w-full" src="{{asset('public/assets/media')}}/blog-1.png" alt="Blog 1">

                          <div class="w-full p-5">
                            <h5 class="mb-5 text-xl font-semibold leading-[26px] text-[#2e2e2e]">
                              A conversation with Marjan Kamali
                            </h5>

                            <p class="mb-8 leading-5 text-[#515151]">
                              In her second novel, The Stationery Shop, Marjan
                              Kamali weaves a heartbreaking tale
                            </p>

                            <p class="leading-5 text-[#2e2e2e]">
                              <span>Reza Adil</span> -
                              <span>25 Januari 2021</span>
                            </p>
                          </div>
                        </figure>
                      </a>
              </div>
            </div>
          </section>
        </div>

        <div class="grid grid-cols-12 gap-10 pb-20">
          <section class="Accordion col-span-8">
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

          <section class="col-span-4"></section>
        </div>
      </div>
    </main>

</main>
@endsection
@section('js')
    <script>
        var page = 1;

        $('#llb').click(function(){
            if($('#totalData').val() != page){
                page++;
                // console.log(page)
                loadMoreData(page);
             }
        });

        function loadMoreData(page) {
            // console.log('?page=' + page)
            $.ajax({
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                    showLoadingImage()
                }
            })
            .done(function(data) {
                if (data.html == " ") {
                    $('.ajax-load').html("No more records found");
                    return;
                }
                // console.log(page)
                hideLoadingImage();
                if(data.total_data !== $('.item-buku').length){
                    $("#relaod-page").append()

                }else{

                }
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('server not responding...');
            });
        }

        function showLoadingImage() {
            $('#relaod-page').append(`
                <figure class="group relative">
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
            `);
        }



    </script>
@endsection

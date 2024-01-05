@extends('layouts.layouts')
@section('title')
    <title>Daftar Buku Karya {{ Str::title(Str::replace('-', ' ',$author_name))}}</title>
    {!! GeneralHelper::canonical()!!}

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfilePage",
        "mainEntity": {
          "@id": "#main-author",
          "@type": "Person",
          "name": "{{$author_name}}"
        },
        "hasPart" : {!! $resultJson !!}
      }
    </script>
@endsection

@section('header-js')
    <script type="module" src="{{ asset('/assets')}}/front/hoisted.25b3dcdb.js"></script>
@endsection
@section('content')

<main class="author relative mt-14 min-h-screen pb-10 pt-7 lg:mt-20 lg:pb-20">

    <div
      class="author container relative mx-auto grid max-w-screen-xl grid-cols-1 gap-8 px-5 lg:grid-cols-12 lg:px-12"
    >
      <!-- Author - Photo & Share -->
      <section
        class="photo-share col-span-1 flex h-full flex-col items-center space-y-8 lg:sticky lg:left-0 lg:top-24 lg:col-span-3 lg:min-h-screen"
      >
        <!-- Photo -->
        <div class="relative h-60 w-60 overflow-hidden rounded-xl shadow-2xl">
          <img
            class="h-full w-full object-cover"
            src="{{ asset('/assets/media')}}/author-photo-1.png"
            alt="{{ $author_name}}"
          />
        </div>

        <!-- Share -->
        <div class="flex flex-col items-center gap-2 lg:gap-4">
          <h5 class="text-base">Share</h5>

          <div class="flex flex-row items-center gap-6 lg:flex-col">
            <!-- Twitter -->
            <a href="/">
              <svg
                width="36"
                height="36"
                viewBox="0 0 36 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_57_244)">
                  <path
                    d="M18 0C8.06039 0 0 8.06039 0 18C0 27.9396 8.06039 36 18 36C27.9396 36 36 27.9396 36 18C36 8.06039 27.9396 0 18 0ZM26.2186 14.0345C26.2266 14.2116 26.2304 14.3896 26.2304 14.5684C26.2304 20.0278 22.0748 26.3232 14.4753 26.3235H14.4756H14.4753C12.1421 26.3235 9.97092 25.6396 8.14252 24.4677C8.46579 24.5058 8.79483 24.5248 9.12799 24.5248C11.0638 24.5248 12.8452 23.8645 14.2594 22.7563C12.4508 22.7227 10.9259 21.5283 10.3997 19.8866C10.6515 19.935 10.9105 19.9613 11.1761 19.9613C11.5532 19.9613 11.9185 19.9105 12.2657 19.8158C10.3752 19.4373 8.95111 17.7665 8.95111 15.7659C8.95111 15.7473 8.95111 15.7305 8.95166 15.7132C9.50839 16.0227 10.1451 16.209 10.8229 16.2298C9.71356 15.4896 8.98434 14.2243 8.98434 12.7908C8.98434 12.0339 9.18896 11.3247 9.54382 10.7141C11.5812 13.2141 14.6261 14.8582 18.0599 15.0309C17.989 14.7283 17.9525 14.413 17.9525 14.0889C17.9525 11.8081 19.8029 9.95773 22.0844 9.95773C23.2729 9.95773 24.3463 10.4601 25.1002 11.2632C26.0414 11.0775 26.9253 10.7336 27.7237 10.2604C27.4147 11.2247 26.7599 12.0339 25.9069 12.5456C26.7426 12.4456 27.5392 12.2239 28.2794 11.8949C27.7265 12.7235 27.0253 13.4514 26.2186 14.0345Z"
                    fill="#515151"></path>
                </g>
                <defs>
                  <clipPath id="clip0_57_244">
                    <rect width="36" height="36" fill="white"></rect>
                  </clipPath>
                </defs>
              </svg>
            </a>

            <!-- Instagram -->
            <a href="/">
              <svg
                width="36"
                height="36"
                viewBox="0 0 36 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_57_246)">
                  <path
                    d="M21.4453 18C21.4453 19.9028 19.9028 21.4453 18 21.4453C16.0972 21.4453 14.5547 19.9028 14.5547 18C14.5547 16.0972 16.0972 14.5547 18 14.5547C19.9028 14.5547 21.4453 16.0972 21.4453 18Z"
                    fill="#515151"></path>
                  <path
                    d="M26.0575 11.9041C25.8919 11.4553 25.6277 11.0491 25.2843 10.7156C24.9509 10.3723 24.545 10.1081 24.0959 9.94247C23.7317 9.80103 23.1846 9.63266 22.1768 9.58679C21.0867 9.53708 20.7599 9.52637 18.0001 9.52637C15.2401 9.52637 14.9132 9.5368 13.8234 9.58652C12.8157 9.63266 12.2683 9.80103 11.9044 9.94247C11.4553 10.1081 11.0491 10.3723 10.7159 10.7156C10.3726 11.0491 10.1084 11.455 9.94247 11.9041C9.80103 12.2683 9.63266 12.8157 9.58679 13.8234C9.53708 14.9132 9.52637 15.2401 9.52637 18.0001C9.52637 20.7599 9.53708 21.0867 9.58679 22.1768C9.63266 23.1846 9.80103 23.7317 9.94247 24.0959C10.1084 24.545 10.3723 24.9509 10.7156 25.2843C11.0491 25.6277 11.455 25.8919 11.9041 26.0575C12.2683 26.1992 12.8157 26.3676 13.8234 26.4135C14.9132 26.4632 15.2398 26.4736 17.9998 26.4736C20.7602 26.4736 21.087 26.4632 22.1766 26.4135C23.1843 26.3676 23.7317 26.1992 24.0959 26.0575C24.9973 25.7098 25.7098 24.9973 26.0575 24.0959C26.1989 23.7317 26.3673 23.1846 26.4135 22.1768C26.4632 21.0867 26.4736 20.7599 26.4736 18.0001C26.4736 15.2401 26.4632 14.9132 26.4135 13.8234C26.3676 12.8157 26.1992 12.2683 26.0575 11.9041ZM18.0001 23.3073C15.0687 23.3073 12.6924 20.9313 12.6924 17.9998C12.6924 15.0684 15.0687 12.6924 18.0001 12.6924C20.9313 12.6924 23.3076 15.0684 23.3076 17.9998C23.3076 20.9313 20.9313 23.3073 18.0001 23.3073ZM23.5175 13.7229C22.8325 13.7229 22.2771 13.1675 22.2771 12.4825C22.2771 11.7975 22.8325 11.2422 23.5175 11.2422C24.2025 11.2422 24.7578 11.7975 24.7578 12.4825C24.7575 13.1675 24.2025 13.7229 23.5175 13.7229Z"
                    fill="#515151"></path>
                  <path
                    d="M18 0C8.06039 0 0 8.06039 0 18C0 27.9396 8.06039 36 18 36C27.9396 36 36 27.9396 36 18C36 8.06039 27.9396 0 18 0ZM28.2736 22.2613C28.2236 23.3616 28.0486 24.1128 27.7932 24.7703C27.2563 26.1587 26.1587 27.2563 24.7703 27.7932C24.1131 28.0486 23.3616 28.2233 22.2616 28.2736C21.1594 28.3239 20.8073 28.3359 18.0003 28.3359C15.193 28.3359 14.8412 28.3239 13.7387 28.2736C12.6387 28.2233 11.8872 28.0486 11.2299 27.7932C10.54 27.5337 9.91544 27.1269 9.39908 26.6009C8.87338 26.0848 8.46661 25.46 8.20706 24.7703C7.95163 24.1131 7.77667 23.3616 7.72668 22.2616C7.67587 21.1591 7.66406 20.807 7.66406 18C7.66406 15.193 7.67587 14.8409 7.72641 13.7387C7.7764 12.6384 7.95108 11.8872 8.20651 11.2297C8.46606 10.54 8.87311 9.91516 9.39908 9.39908C9.91516 8.87311 10.54 8.46634 11.2297 8.20679C11.8872 7.95135 12.6384 7.77667 13.7387 7.72641C14.8409 7.67615 15.193 7.66406 18 7.66406C20.807 7.66406 21.1591 7.67615 22.2613 7.72668C23.3616 7.77667 24.1128 7.95135 24.7703 8.20651C25.46 8.46606 26.0848 8.87311 26.6012 9.39908C27.1269 9.91544 27.5339 10.54 27.7932 11.2297C28.0489 11.8872 28.2236 12.6384 28.2739 13.7387C28.3241 14.8409 28.3359 15.193 28.3359 18C28.3359 20.807 28.3241 21.1591 28.2736 22.2613Z"
                    fill="#515151"></path>
                </g>
                <defs>
                  <clipPath id="clip0_57_246">
                    <rect width="36" height="36" fill="white"></rect>
                  </clipPath>
                </defs>
              </svg>
            </a>

            <!-- Facebook -->

            <a href="/">
              <svg
                width="36"
                height="36"
                viewBox="0 0 36 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_57_250)">
                  <path
                    d="M36 18C36 8.05781 27.9422 0 18 0C8.05781 0 0 8.05781 0 18C0 27.9422 8.05781 36 18 36C18.1055 36 18.2109 36 18.3164 35.993V21.9867H14.4492V17.4797H18.3164V14.1609C18.3164 10.3148 20.6648 8.21953 24.0961 8.21953C25.7414 8.21953 27.1547 8.33906 27.5625 8.39531V12.4172H25.2C23.3367 12.4172 22.9711 13.3031 22.9711 14.6039V17.4727H27.4359L26.8523 21.9797H22.9711V35.3039C30.4945 33.1453 36 26.2195 36 18Z"
                    fill="#515151"></path>
                </g>
                <defs>
                  <clipPath id="clip0_57_250">
                    <rect width="36" height="36" fill="white"></rect>
                  </clipPath>
                </defs>
              </svg>
            </a>

            <!-- Linkedin -->
            <a href="/">
              <svg
                width="36"
                height="36"
                viewBox="0 0 36 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_57_255)">
                  <path
                    d="M18 0C8.06039 0 0 8.06039 0 18C0 27.9396 8.06039 36 18 36C27.9396 36 36 27.9396 36 18C36 8.06039 27.9396 0 18 0ZM12.7694 27.2109H8.38559V14.0221H12.7694V27.2109ZM10.5776 12.2212H10.5491C9.078 12.2212 8.12659 11.2085 8.12659 9.9429C8.12659 8.64871 9.10712 7.66406 10.6068 7.66406C12.1064 7.66406 13.0292 8.64871 13.0578 9.9429C13.0578 11.2085 12.1064 12.2212 10.5776 12.2212ZM28.5765 27.2109H24.1933V20.1552C24.1933 18.382 23.5585 17.1727 21.9724 17.1727C20.7614 17.1727 20.0402 17.9885 19.7232 18.7759C19.6073 19.0577 19.579 19.4516 19.579 19.8457V27.2109H15.1955C15.1955 27.2109 15.2529 15.2595 15.1955 14.0221H19.579V15.8895C20.1616 14.9908 21.2039 13.7126 23.5297 13.7126C26.4139 13.7126 28.5765 15.5976 28.5765 19.6485V27.2109Z"
                    fill="#515151"></path>
                </g>
                <defs>
                  <clipPath id="clip0_57_255">
                    <rect width="36" height="36" fill="white"></rect>
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
        </div>
      </section>

      <!-- Author - Detail -->
      <section class="detail col-span-1 lg:col-span-9">
        <!-- Heading -->
        <h1 class="mb-6 font-arvo text-[34px] leading-none">{{ Str::title(Str::replace('-', ' ',$author_name))}}</h1>

        <!-- Description -->
        <article class="mb-6">
          <h3 class="font-arvo text-lg font-bold leading-8">Tentang Penulis</h3>

          <p>
{{--            Penulis yang memiliki banyak karya-karya yang menarik kurang lebih {{ count($buku) }} dalam berbagai kategori.--}}
              -
          </p>
        </article>

        <!-- All Books -->
        <div class="space-y-3">
          <h3 class="font-arvo text-lg font-bold leading-8">Semua Buku</h3>

          <div class="space-y-6" id="data-wrapper">
              @foreach ($buku as $item)
              <figure class="group relative flex flex-row items-start gap-6 border-b border-[#DCDCDC] pb-6 last:border-b-0">
                  <a href="{{ route('detail-buku', ['buku', $item->slug]) }}" class="absolute inset-0 z-10 h-full w-full object-cover"></a>

                  <img class="h-auto w-20" src="{{ $item->image }}" alt="Book Photo 1">

                  <div class="space-y-3">
                    <h5 class="text-lg font-semibold leading-6 group-hover:underline">
                      {{ $item->judul }}
                    </h5>

                    <div class="flex items-center gap-1.5">
                        {{$item->rating}}
                        <div class="review">Reviews ({{$item->count_rating}} / 5)
                        </div>
                    </div>

                    <p class="text-base font-normal text-[#515151]">
                      {{ $item->penulis }}
                    </p>
                  </div>
                </figure>

                @endforeach
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
        </div>
      </section>
    </div>

</main>
@endsection
@section('js')
    <script>
        var ENDPOINT = document.URL;
        var page = 1;
        var loadMoreClicks = 0;
        var maxClicks = 8;

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

            console.log(page)
            $.ajax({
                    url: ENDPOINT + "?page=" + page,
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

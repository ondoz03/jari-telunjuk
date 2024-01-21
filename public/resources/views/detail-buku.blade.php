@extends('layouts.layouts')
@section('title')
    <title> Buku {{ $buku->judul }} - Karya {{ $buku->penulis }}</title>

    <link rel="canonical" href="{{url('/buku/'.$buku->slug)}}" />
    <meta name="description"  content="{{ Str::limit($buku->detail_buku->description, 160) }}">
    <script type="application/ld+json">

        @if (count($buku->kategori) > 1)
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
              "@type": "ListItem",
              "position": 1,
              "name": "Category",
              "item": "{{url('/category')}}"
            },{
              "@type": "ListItem",
              "position": 2,
              "name": "{{ Str::ucfirst($kategori->name) }}",
              "item": "{{ route('buku', $kategori->slug) }}"
            },{
              "@type": "ListItem",
              "position": 3,
              "name": "{{ Str::ucfirst($buku->kategori[1]->name) }}",
              "item": "{{ route('buku', $buku->kategori[1]->slug) }}"
            },{
               "@type": "ListItem",
               "position": 4,
               "name": "{{ Str::ucfirst($buku->judul) }}",
               "item": "{{ route('detail-buku', [$kategori->slug, $buku->slug]) }}s"
             }]
          }
        @else
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
              "@type": "ListItem",
              "position": 1,
              "name": "Category",
              "item": "{{url('/category')}}"
            },{
              "@type": "ListItem",
              "position": 2,
              "name": "{{ Str::ucfirst($kategori->name) }}",
              "item": "{{ route('buku', $kategori->slug) }}"
            },{
               "@type": "ListItem",
               "position": 3,
               "name": "{{ Str::ucfirst($buku->judul) }}",
               "item": "{{ route('detail-buku', [$kategori->slug, $buku->slug]) }}s"
             }]
          }

        @endif
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "AggregateRating",
        "itemReviewed": {
            "@type": "Book",
            "image": "{{ $buku->image }}",
            "name": "{{ $buku->judul }}"
        },
        "ratingValue": "{{$buku->count_rating == 0 ? 4 : $buku->count_rating}}",
        "bestRating": "5",
        "ratingCount": "{{$buku->reviews()->count() == 0 ? 20 : $buku->reviews()->count()}}"
    }

    </script>

    <style>
        .checked {
            color: orange;
        }

        a:hover svg g path{
            fill: #128C55;
        }
    </style>
@endsection
@section('content')
    <main class="relative w-full">
        <main class="relative min-h-screen w-full pb-10 pt-20 xl:pb-16 xl:pt-28">
            <div class="container mx-auto max-w-screen-xl px-4 xl:px-12">
                <header class="pb-6">
                    <!-- Breadcrumb -->
                    <div class="flex items-center gap-1 text-xs text-[#128C55] xl:mb-6 xl:text-sm">
                        <a class="hover:underline"
                            href="/">Category</a>

                        <span>&gt;</span>
                        @foreach ($buku->kategori as $item)
                        <a class="hover:underline"
                         href="{{ route('buku', $item->slug) }}">{{ Str::ucfirst($item->name) }}
                        </a>
                        <span>&gt;</span>

                        @endforeach

                        <a class="hover:underline"
                            href="{{ route('detail-buku', [$kategori->slug, $buku->slug]) }}">{{ Str::ucfirst($buku->judul) }}
                        </a>
                    </div>

                </header>
                <div class="relative grid grid-cols-1 gap-10 xl:grid-cols-12">
                    <section class="relative col-span-1 flex min-h-screen flex-row items-start gap-8 xl:col-span-8">
                        <section
                            class="hidden w-full flex-col items-center gap-5 xl:sticky xl:left-0 xl:top-24 xl:flex xl:basis-1/3">
                            <div class="relative h-auto w-full">
                                <img class="h-full w-full object-cover lazy-img"
                                    data-src="{{ $buku->image }}"
                                    alt="Book 5">
                            </div>

                            <div>
                                <h5 class="mb-2 text-center font-arvo text-base">
                                    Beri penilaian
                                </h5>

                                <div id="stars" class="flex items-center gap-1.5">
                                    {{GeneralHelper::rating($buku->id)}}
                                </div>
                            </div>

                            <div class="flex flex-col items-center gap-6">
                                <h5 class="text-base">Share</h5>
                                <div class="flex flex-col items-center gap-2">
                                    <!-- Twitter -->
                                    <a href="https://twitter.com/intent/tweet?text={{$buku->judul}}&url={{ url()->full()}}" target="_blank">
                                        <svg width="30"
                                            height="30"
                                            viewBox="0 0 36 36"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_57_244)">
                                                <path
                                                    d="M18 0C8.06039 0 0 8.06039 0 18C0 27.9396 8.06039 36 18 36C27.9396 36 36 27.9396 36 18C36 8.06039 27.9396 0 18 0ZM26.2186 14.0345C26.2266 14.2116 26.2304 14.3896 26.2304 14.5684C26.2304 20.0278 22.0748 26.3232 14.4753 26.3235H14.4756H14.4753C12.1421 26.3235 9.97092 25.6396 8.14252 24.4677C8.46579 24.5058 8.79483 24.5248 9.12799 24.5248C11.0638 24.5248 12.8452 23.8645 14.2594 22.7563C12.4508 22.7227 10.9259 21.5283 10.3997 19.8866C10.6515 19.935 10.9105 19.9613 11.1761 19.9613C11.5532 19.9613 11.9185 19.9105 12.2657 19.8158C10.3752 19.4373 8.95111 17.7665 8.95111 15.7659C8.95111 15.7473 8.95111 15.7305 8.95166 15.7132C9.50839 16.0227 10.1451 16.209 10.8229 16.2298C9.71356 15.4896 8.98434 14.2243 8.98434 12.7908C8.98434 12.0339 9.18896 11.3247 9.54382 10.7141C11.5812 13.2141 14.6261 14.8582 18.0599 15.0309C17.989 14.7283 17.9525 14.413 17.9525 14.0889C17.9525 11.8081 19.8029 9.95773 22.0844 9.95773C23.2729 9.95773 24.3463 10.4601 25.1002 11.2632C26.0414 11.0775 26.9253 10.7336 27.7237 10.2604C27.4147 11.2247 26.7599 12.0339 25.9069 12.5456C26.7426 12.4456 27.5392 12.2239 28.2794 11.8949C27.7265 12.7235 27.0253 13.4514 26.2186 14.0345Z"
                                                    fill="#515151"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_57_244">
                                                    <rect width="36"
                                                        height="36"
                                                        fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <!-- Facebook -->

                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(url()->full())?>" target="_blank">
                                        <svg width="30"
                                            height="30"
                                            viewBox="0 0 36 36"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_57_250)">
                                                <path
                                                    d="M36 18C36 8.05781 27.9422 0 18 0C8.05781 0 0 8.05781 0 18C0 27.9422 8.05781 36 18 36C18.1055 36 18.2109 36 18.3164 35.993V21.9867H14.4492V17.4797H18.3164V14.1609C18.3164 10.3148 20.6648 8.21953 24.0961 8.21953C25.7414 8.21953 27.1547 8.33906 27.5625 8.39531V12.4172H25.2C23.3367 12.4172 22.9711 13.3031 22.9711 14.6039V17.4727H27.4359L26.8523 21.9797H22.9711V35.3039C30.4945 33.1453 36 26.2195 36 18Z"
                                                    fill="#515151"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_57_250">
                                                    <rect width="36"
                                                        height="36"
                                                        fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>


                                    <!-- Linkedin -->
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= url()->full()?>&title=<?= $buku->judul?>" target="_blank">
                                        <svg width="30"
                                            height="30"
                                            viewBox="0 0 36 36"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_57_255)">
                                                <path
                                                    d="M18 0C8.06039 0 0 8.06039 0 18C0 27.9396 8.06039 36 18 36C27.9396 36 36 27.9396 36 18C36 8.06039 27.9396 0 18 0ZM12.7694 27.2109H8.38559V14.0221H12.7694V27.2109ZM10.5776 12.2212H10.5491C9.078 12.2212 8.12659 11.2085 8.12659 9.9429C8.12659 8.64871 9.10712 7.66406 10.6068 7.66406C12.1064 7.66406 13.0292 8.64871 13.0578 9.9429C13.0578 11.2085 12.1064 12.2212 10.5776 12.2212ZM28.5765 27.2109H24.1933V20.1552C24.1933 18.382 23.5585 17.1727 21.9724 17.1727C20.7614 17.1727 20.0402 17.9885 19.7232 18.7759C19.6073 19.0577 19.579 19.4516 19.579 19.8457V27.2109H15.1955C15.1955 27.2109 15.2529 15.2595 15.1955 14.0221H19.579V15.8895C20.1616 14.9908 21.2039 13.7126 23.5297 13.7126C26.4139 13.7126 28.5765 15.5976 28.5765 19.6485V27.2109Z"
                                                    fill="#515151"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_57_255">
                                                    <rect width="36"
                                                        height="36"
                                                        fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </section>

                        <div class="flex flex-col items-center space-y-3 xl:basis-2/3 xl:items-start">
                            <div class="relative mb-3 block h-auto w-40 xl:hidden">
                                <img class="h-full w-full object-cover lazy-img"
                                    data-src="{{ $buku->image }}"
                                    alt="Book 5">
                            </div>

                            <h1
                                class="w-80 text-center font-arvo text-2xl leading-7 xl:w-full xl:text-start xl:text-[34px] xl:leading-none">
                                {{ $buku->judul }}
                            </h1>

                            <div class="rating">
                                {{$buku->rating}}
                                <div class="review">Reviews ({{$buku->count_rating}} / 5)
                                </div>
                            </div>

                            <p class="text-sm font-semibold xl:text-lg">
                                by
                                @foreach ($buku->penulis_array as $key => $item)
                                    @if($key!==0)
                                        , &nbsp
                                    @endif
                                    <a class="hover:underline"
                                    href="{{ route('author',strtolower(str_replace(' ','-',$item['key']))) }}">
                                            {{ $item['text'] }}
                                    </a>
                                @endforeach
                            </p>

                            <div class="hidden items-center gap-1.5">
                                <div class="flex items-center gap-1">
                                    <svg class="h-8 w-8 fill-[#FAB801]"
                                        viewBox="0 0 32 32"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M23.416 27.6957C23.3133 27.6957 23.2093 27.6731 23.1133 27.6224L16 23.8811L8.88667 27.6224C8.668 27.7371 8.40133 27.7184 8.20133 27.5731C8 27.4264 7.9 27.1811 7.94267 26.9371L9.30133 19.0157L3.54667 13.4064C3.368 13.2331 3.30533 12.9731 3.38133 12.7397C3.45733 12.5037 3.66133 12.3317 3.90667 12.2971L11.86 11.1397L15.4173 3.93306C15.6373 3.48773 16.3627 3.48773 16.5827 3.93306L20.14 11.1397L28.0933 12.2971C28.3387 12.3317 28.5427 12.5037 28.6187 12.7397C28.6947 12.9731 28.632 13.2331 28.4533 13.4064L22.6987 19.0157L24.0573 26.9371C24.1 27.1811 24 27.4264 23.7987 27.5731C23.6853 27.6544 23.552 27.6957 23.416 27.6957Z">
                                        </path>
                                    </svg><svg class="h-8 w-8 fill-[#FAB801]"
                                        viewBox="0 0 32 32"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M23.416 27.6957C23.3133 27.6957 23.2093 27.6731 23.1133 27.6224L16 23.8811L8.88667 27.6224C8.668 27.7371 8.40133 27.7184 8.20133 27.5731C8 27.4264 7.9 27.1811 7.94267 26.9371L9.30133 19.0157L3.54667 13.4064C3.368 13.2331 3.30533 12.9731 3.38133 12.7397C3.45733 12.5037 3.66133 12.3317 3.90667 12.2971L11.86 11.1397L15.4173 3.93306C15.6373 3.48773 16.3627 3.48773 16.5827 3.93306L20.14 11.1397L28.0933 12.2971C28.3387 12.3317 28.5427 12.5037 28.6187 12.7397C28.6947 12.9731 28.632 13.2331 28.4533 13.4064L22.6987 19.0157L24.0573 26.9371C24.1 27.1811 24 27.4264 23.7987 27.5731C23.6853 27.6544 23.552 27.6957 23.416 27.6957Z">
                                        </path>
                                    </svg><svg class="h-8 w-8 fill-[#FAB801]"
                                        viewBox="0 0 32 32"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M23.416 27.6957C23.3133 27.6957 23.2093 27.6731 23.1133 27.6224L16 23.8811L8.88667 27.6224C8.668 27.7371 8.40133 27.7184 8.20133 27.5731C8 27.4264 7.9 27.1811 7.94267 26.9371L9.30133 19.0157L3.54667 13.4064C3.368 13.2331 3.30533 12.9731 3.38133 12.7397C3.45733 12.5037 3.66133 12.3317 3.90667 12.2971L11.86 11.1397L15.4173 3.93306C15.6373 3.48773 16.3627 3.48773 16.5827 3.93306L20.14 11.1397L28.0933 12.2971C28.3387 12.3317 28.5427 12.5037 28.6187 12.7397C28.6947 12.9731 28.632 13.2331 28.4533 13.4064L22.6987 19.0157L24.0573 26.9371C24.1 27.1811 24 27.4264 23.7987 27.5731C23.6853 27.6544 23.552 27.6957 23.416 27.6957Z">
                                        </path>
                                    </svg><svg class="h-8 w-8 fill-[#FAB801]"
                                        viewBox="0 0 32 32"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M23.416 27.6957C23.3133 27.6957 23.2093 27.6731 23.1133 27.6224L16 23.8811L8.88667 27.6224C8.668 27.7371 8.40133 27.7184 8.20133 27.5731C8 27.4264 7.9 27.1811 7.94267 26.9371L9.30133 19.0157L3.54667 13.4064C3.368 13.2331 3.30533 12.9731 3.38133 12.7397C3.45733 12.5037 3.66133 12.3317 3.90667 12.2971L11.86 11.1397L15.4173 3.93306C15.6373 3.48773 16.3627 3.48773 16.5827 3.93306L20.14 11.1397L28.0933 12.2971C28.3387 12.3317 28.5427 12.5037 28.6187 12.7397C28.6947 12.9731 28.632 13.2331 28.4533 13.4064L22.6987 19.0157L24.0573 26.9371C24.1 27.1811 24 27.4264 23.7987 27.5731C23.6853 27.6544 23.552 27.6957 23.416 27.6957Z">
                                        </path>
                                    </svg><svg class="h-8 w-8 fill-[#FAB801]"
                                        viewBox="0 0 32 32"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M23.416 27.6957C23.3133 27.6957 23.2093 27.6731 23.1133 27.6224L16 23.8811L8.88667 27.6224C8.668 27.7371 8.40133 27.7184 8.20133 27.5731C8 27.4264 7.9 27.1811 7.94267 26.9371L9.30133 19.0157L3.54667 13.4064C3.368 13.2331 3.30533 12.9731 3.38133 12.7397C3.45733 12.5037 3.66133 12.3317 3.90667 12.2971L11.86 11.1397L15.4173 3.93306C15.6373 3.48773 16.3627 3.48773 16.5827 3.93306L20.14 11.1397L28.0933 12.2971C28.3387 12.3317 28.5427 12.5037 28.6187 12.7397C28.6947 12.9731 28.632 13.2331 28.4533 13.4064L22.6987 19.0157L24.0573 26.9371C24.1 27.1811 24 27.4264 23.7987 27.5731C23.6853 27.6544 23.552 27.6957 23.416 27.6957Z">
                                        </path>
                                    </svg>
                                </div>
                                <p>5/5</p>
                            </div>

                            <div class="flex w-full flex-col items-center justify-center gap-3 xl:hidden">
                                <div class="flex flex-col items-center gap-3">
                                        <a onclick="wantToRead(this, '{{ $buku->id }}', 'add')" style="{{$user_want_read->status === '0' ||  $user_want_read->status === '2' ? '' : 'display: none'}}"
                                            class="wantToRead w-60 rounded-full bg-[#128C55] px-5 py-3 text-center text-base leading-6 text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
                                            Want to Read
                                        </a>

                                        <a onclick="wantToRead(this, '{{ $buku->id }}', 'delete')" style="{{$user_want_read->status === '1' || $user_want_read->status === '2'  ? '' : 'display: none;'}}background-color: #f26b6b; transition: opacity 0.3s ease;"
                                            class="noWantToRead w-60 rounded-full px-5 py-3 text-center text-base leading-6 text-white" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">
                                            Remove
                                        </a>
                                        @guest
                                            <a onclick="wantToRead(this, '{{ $buku->id }}', 'update')" style="{{$user_want_read->status === '0' || $user_want_read->status === '1' ? '' : 'display: none;'}}"
                                                class="caWantToRead w-60 rounded-full border border-black bg-white px-5 py-3 text-center text-base leading-6 text-black transition-all duration-300 ease-out hover:bg-black/10">
                                                Currently Read
                                            </a>
                                        @else
                                            @if(count(auth()->user()->user_want_read->where('status', '2')) < 5)
                                                <a onclick="wantToRead(this, '{{ $buku->id }}', 'update')" style="{{$user_want_read->status === '0' || $user_want_read->status === '1' ? '' : 'display: none;'}}"
                                                class="caWantToRead w-60 rounded-full border border-black bg-white px-5 py-3 text-center text-base leading-6 text-black transition-all duration-300 ease-out hover:bg-black/10">
                                                Currently Read
                                                </a>
                                            @endif

                                            @if (auth()->user()->user_want_read->where('status', '2')->where('buku_id', $buku->id)->first())
                                                <a onclick="wantToRead(this, '{{ $buku->id }}', 'update')" style="{{$user_want_read->status === '0' || $user_want_read->status === '1' ? '' : 'display: none;'}}"
                                                    class="caWantToRead w-60 rounded-full border border-black bg-white px-5 py-3 text-center text-base leading-6 text-black transition-all duration-300 ease-out hover:bg-black/10">
                                                    Currently Read
                                                </a>
                                            @endif
                                        @endif
                                </div>

                                <div class="mt-2 flex flex-col items-center">
                                    <h5 class="mb-1.5 text-center font-arvo text-base">
                                        Beri penilaian
                                    </h5>

                                    <div id="stars"
                                        class="flex items-center">
                                        {{GeneralHelper::rating($buku->id)}}
                                    </div>
                                </div>
                            </div>


                            <div class="block w-full pb-3 pt-4 xl:hidden">
                                <div class="h-px w-full bg-[#DCDCDC]"></div>
                            </div>

                            <div class="hidden items-center gap-3 pb-4 xl:flex">

                                    <a onclick="wantToRead(this, '{{ $buku->id }}', 'add')" style="{{$user_want_read->status === '0' ||  $user_want_read->status === '2' ? '' : 'display: none'}};cursor: pointer;"
                                        class="wantToRead w-40 rounded-full bg-[#128C55] px-5 py-3 text-center text-base leading-6 text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
                                        Want to Read
                                    </a>

                                    <a onclick="wantToRead(this, '{{ $buku->id }}', 'delete')" style="{{$user_want_read->status === '1' || $user_want_read->status === '2' ? ''  : 'display: none;'}}background-color: #f26b6b; transition: opacity 0.3s ease; cursor: pointer;"
                                        class="noWantToRead w-40 rounded-full px-5 py-3 text-center text-base leading-6 text-white" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">
                                        Remove
                                    </a>
                                    @guest
                                        <a onclick="wantToRead(this, '{{ $buku->id }}', 'update')" style="{{$user_want_read->status === '0' || $user_want_read->status === '1'  ? '' : 'display: none;'}};cursor: pointer;"
                                            class="caWantToRead rounded-full border-[1.5px] border-black bg-white stroke-black px-5 py-3 text-base leading-6 text-black transition-all duration-300 ease-out hover:bg-black/10">
                                            Currently Read
                                        </a>
                                     @else
                                        @if(count(auth()->user()->user_want_read->where('status', '2')) < 5)
                                            <a onclick="wantToRead(this, '{{ $buku->id }}', 'update')" style="{{$user_want_read->status === '0' || $user_want_read->status === '1'  ? '' : 'display: none;'}};cursor: pointer;"
                                                class="caWantToRead rounded-full border-[1.5px] border-black bg-white stroke-black px-5 py-3 text-base leading-6 text-black transition-all duration-300 ease-out hover:bg-black/10">
                                                Currently Read
                                            </a>
                                        @endif

                                        @if (auth()->user()->user_want_read->where('status', '2')->where('buku_id', $buku->id)->first())
                                            <a onclick="wantToRead(this, '{{ $buku->id }}', 'update')" style="{{$user_want_read->status === '0' || $user_want_read->status === '1'  ? '' : 'display: none;'}};cursor: pointer;"
                                                class="caWantToRead rounded-full border-[1.5px] border-black bg-white stroke-black px-5 py-3 text-base leading-6 text-black transition-all duration-300 ease-out hover:bg-black/10">
                                                Currently Read
                                            </a>
                                        @endif


                                    @endif
                            </div>

                            @guest
                            @else

                                @if ($user_want_read->status === '2')
                                    @if ($user_want_read->challenge->where('is_status', 'read')->first())
                                    * Kamu Telah Membaca Buku Ini
                                    @endif
                                @endif
                                @if (count(auth()->user()->user_want_read->where('status', '2')) >= 5)
                                    * Kamu mencapai batas maksimum Currently Read (5)
                                @endif
                            @endif

                            <div class="Description text-base xl:border-t xl:border-stone-300 xl:pt-4">
                                <h5 class="font-arvo text-lg font-bold leading-[34px] text-[#212121]">
                                    About this edition
                                </h5>

                                <article id="wrapper-desc"
                                    class="line-clamp-5 text-base font-normal leading-7 text-stone-500 [&>*]:inline [&>*]:text-justify"
                                    style="white-space: pre-line">
                                    {{ $buku->detail_buku->description }}
                                </article>

                                <button id="read-more"
                                    class="mt-4 text-base font-semibold hover:underline">
                                    Baca Selengkapnya
                                </button>
                            </div>

                            <section class="relative pt-8">
                                <h5 class="font-arvo text-lg font-bold leading-[34px] text-[#212121]">
                                    Details
                                </h5>

                                <ul class="w-full space-y-4">
                                    <li class="grid w-full grid-cols-2"
                                        style="display: inline-grid;">
                                        <div class="space-y-0.5">
                                            <h5 class="text-sm font-bold text-stone-500">
                                                Jumlah Halaman
                                            </h5>
                                            <p class="text-base">{{ $buku->detail_buku->jumlah_halaman }}</p>
                                        </div>

                                        <div class="space-y-0.5">
                                            <h5 class="text-sm font-bold text-stone-500">Penerbit</h5>
                                            <p class="text-base">{{ $buku->detail_buku->penerbit }}</p>
                                        </div>
                                    </li>

                                    <li class="grid w-full grid-cols-2"
                                        style="display: inline-grid;">
                                        <div class="space-y-0.5">
                                            <h5 class="text-sm font-bold text-stone-500">
                                                Tanggal Terbit
                                            </h5>
                                            <p class="text-base">
                                                {{ date('d M, Y', strtotime($buku->detail_buku->tgl_rilis)) }}</p>
                                        </div>

                                        <div class="space-y-0.5">
                                            <h5 class="text-sm font-bold text-stone-500">Penulis</h5>
                                            @foreach ($buku->penulis_array as $key => $item)
                                                @if($key!==0)
                                                    , &nbsp
                                                @endif
                                                <a class="text-base"
                                                href="{{ route('author', strtolower(str_replace(' ','-',$item['key']))) }}">
                                                        {{ $item['text'] }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </li>

                                    <li class="grid w-full grid-cols-2"
                                        style="display: inline-grid;">
                                        <div class="space-y-0.5">
                                            <h5 class="text-sm font-bold text-stone-500">Bahasa</h5>
                                            <p class="text-base">Indonesia</p>
                                        </div>

                                        <div class="space-y-0.5">
                                            <h5 class="text-sm font-bold text-stone-500">ISBN</h5>
                                            <p class="text-base">{{ $buku->isbn ?? '-' }}</p>
                                        </div>
                                    </li>
                                </ul>

                            </section>

                            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

                            @include('comment-review')

                        </div>



                    </section>

                    <section class="col-span-1 xl:col-span-4">
                        <h3 class="mb-4 font-arvo text-2xl font-normal leading-7 xl:mb-5 xl:text-[34px] xl:leading-none">
                            Similar Books
                        </h3>

                        <div class="grid grid-cols-3 gap-2">

                            @foreach (GeneralHelper::getRandomGetBook($kategori->slug) as $item)
                                <a href="{{ route('detail-buku', ['buku', $item->slug]) }}">
                                    {{-- <a href=""> --}}
                                    <img style="height: 176px; width: 118px;"
                                    class="lazy-img"
                                        data-src="{{ $item->image }}"
                                        alt="Book Photo 1">
                                </a>
                            @endforeach
                        </div>
                    </section>

                </div>

            </div>

        </main>
    </main>


    <div class="modal modal__overlay astro-J7PV25F6 "  id="modal-login-review" style="display: none"  aria-hidden="true" tabindex="-1" data-micromodal-close>
        <div class="modal__container rounded-none xl:rounded-2xl astro-J7PV25F6"
            role="dialog"
            aria-modal="true"
            aria-labelledby="modal-login-review-title">
            <div id="modal-login-review-container">
                <header class="mb-6 mt-11 flex items-center justify-between px-4 xl:justify-center astro-J7PV25F6">
                    <h2 class="text-center font-arvo text-xl leading-none xl:text-[34px] astro-J7PV25F6"
                        id="modal-2-title">
                        Sign Up/Login <br>
                        untuk memberikan Rating pada buku.
                    </h2>
                </header>
                <main class="modal__content px-4 !font-source-sans xl:px-8 astro-J7PV25F6" id="">
                    <h3 class="bg-white/95 py-4 text-center text-sm leading-5 lg:py-0">
                        Bergabunglah dengan Jaritelunjuk sekarang dan jadilah bagian dari komunitas pembaca yang aktif dan temukan rekomendasi baru
                    </h3>

                    <div class="relative z-10 h-[calc(100vh_-_113px)] bg-white/95 px-6 pt-11 lg:h-auto lg:rounded-b-2xl lg:pb-14 lg:pt-11">
                        <img class="absolute left-1/2 top-1/2 h-auto w-full -translate-x-1/2 -translate-y-1/2"
                            src="{{ asset('/assets') }}/media/books-blur.png"
                            alt="Books Blur">
                        <div class="relative z-10 flex h-full flex-col items-center">
                            <h5 class="mb-6 text-center text-base font-bold">
                                 Daftar sekarang
                            </h5>

                            <div class="flex w-full max-w-sm flex-col items-start gap-4">
                                <a href=""  class="relative flex w-full items-center justify-center gap-3 rounded-full border-2 border-black bg-white py-4" id="google-login">
                                    {{-- <input type="hidden" name="star" value=0> --}}
                                    <img class="h-6 w-6"
                                        src="{{ asset('/assets') }}/media/icon-google.png"
                                        alt="Icon Google">

                                    <p class="text-base font-semibold leading-5">
                                        Sign up with Google
                                    </p>
                                </a>


                                <a
                                onclick="onCloseModal()"
                                class="relative flex w-full items-center justify-center gap-3" style="cursor: pointer;">
                                    <p class="text-base font-semibold leading-5"><u>Close</u></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script type="text/javascript">

    function wantToRead(element, id, type){
        if({{GeneralHelper::authCheck()}}){
            $.ajax({
                url: "{{ route('ajax.set-want-to-read') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    buku_id: id,
                    type: type
                },
                success: function(data) {
                    if (type=='add') {
                        $(".wantToRead").hide();
                        $(".noWantToRead").show();

                            $(".caWantToRead").show();

                    }

                    if (type=='delete') {

                            $(".caWantToRead").show();

                        $(".wantToRead").show();
                        $(".noWantToRead").hide();
                    }

                    if(type == 'update') {

                            $(".caWantToRead").hide();

                        $(".noWantToRead").show();
                        $(".wantToRead").show();
                    }


                },
            });
        }else{
            if(type === 'add'){
                var typeParam = "?type=want_to_read";
            } else {
                var typeParam = "?type=currently_to_read";
            }

            var bukuParam = "&buku=" + id;

            var googleLoginUrl = "{!! route('auth.google') !!}" + typeParam + bukuParam;

            $("#google-login").attr('href', googleLoginUrl);
            $("#modal-login-review").show();

            $("#modal-login-review").show();
        }

    }

    function addReview(star){
        if({{GeneralHelper::authCheck()}}){
            $.ajax({
                url: "{{ route('ajax.review-book') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    buku_id: {{$buku->id}},
                    star: star
                },
                success: function(data) {
                    location.reload()
                },
            });
        }else{

            var typeParam = "?type=rating";
            var starParam = "&star=" + star;
            var bukuParam = "&buku=" + {!! $buku->id !!};

            var googleLoginUrl = "{!! route('auth.google') !!}" + typeParam + starParam + bukuParam;

            $("#google-login").attr('href', googleLoginUrl);
            $("#modal-login-review").show();

        }
    }

    function onCloseModal()
    {
        $("#modal-login-review").hide();
    }

    function openReviewWrite()
    {
        $("#modal-login-review").show();
    }

    $(document).ready(function() {
        $.ajax({
            url: "{{ route('ajax.set-session-global') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                redirect_profile: 0
            },
            success: function(data) {

            },
        });
    });

    function submit_ajax_review(){
            // Get form data
            var formData = $('#formChangesReview').serialize();
            $.ajax({
                type: 'POST',
                url: $('#formChangesReview').attr('action'),
                data: formData,
                dataType: 'html',
                success: function (data) {
                    window.location.reload();
                },
                error: function (error) {
                    console.error('Error submitting form:', error);
                }
            });
        }

    const moreTextElements = document.getElementsByClassName('more-text');
    const toggleBtnElements = document.getElementsByClassName('toggle-btn');
    const hideBtnElements = document.getElementsByClassName('hide-btn');

    for (let i = 0; i < toggleBtnElements.length; i++) {
        toggleBtnElements[i].addEventListener('click', () => {
            moreTextElements[i].classList.toggle('line-clamp-5');
            toggleBtnElements[i].classList.toggle('hidden');
            hideBtnElements[i].classList.toggle('hidden');
        });

        hideBtnElements[i].addEventListener('click', () => {
            moreTextElements[i].classList.toggle('line-clamp-5');
            toggleBtnElements[i].classList.toggle('hidden');
            hideBtnElements[i].classList.toggle('hidden');
        });
    }
</script>
@endsection

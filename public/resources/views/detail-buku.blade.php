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
                                <div class="flex flex-col items-center gap-5">
                                    <!-- Twitter -->
                                    <a href="https://twitter.com/intent/tweet?text={{$buku->judul}}&url={{ url()->full()}}" target="_blank">
                                        <svg width="28" height="28" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M36.6526 3.8078H43.3995L28.6594 20.6548L46 43.5797H32.4225L21.7881 29.6759L9.61989 43.5797H2.86886L18.6349 25.56L2 3.8078H15.9222L25.5348 16.5165L36.6526 3.8078ZM34.2846 39.5414H38.0232L13.8908 7.63406H9.87892L34.2846 39.5414Z" fill="black"/>
                                        </svg>
                                    </a>
                                    <!-- Facebook -->

                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(url()->full())?>" target="_blank">
                                        <svg width="28" height="28" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_17_61)">
                                            <path d="M24 0C10.7453 0 0 10.7453 0 24C0 35.255 7.74912 44.6995 18.2026 47.2934V31.3344H13.2538V24H18.2026V20.8397C18.2026 12.671 21.8995 8.8848 29.9194 8.8848C31.44 8.8848 34.0637 9.18336 35.137 9.48096V16.129C34.5706 16.0694 33.5866 16.0397 32.3645 16.0397C28.4294 16.0397 26.9088 17.5306 26.9088 21.4061V24H34.7482L33.4013 31.3344H26.9088V47.8243C38.7926 46.3891 48.001 36.2707 48.001 24C48 10.7453 37.2547 0 24 0Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_17_61">
                                            <rect width="48" height="48" fill="black"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>


                                    <!-- Linkedin -->
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= url()->full()?>&title=<?= $buku->judul?>" target="_blank">
                                        <svg width="28" height="28" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_17_68)">
                                            <path d="M44.4469 0H3.54375C1.58437 0 0 1.54688 0 3.45938V44.5312C0 46.4437 1.58437 48 3.54375 48H44.4469C46.4062 48 48 46.4438 48 44.5406V3.45938C48 1.54688 46.4062 0 44.4469 0ZM14.2406 40.9031H7.11563V17.9906H14.2406V40.9031ZM10.6781 14.8688C8.39062 14.8688 6.54375 13.0219 6.54375 10.7437C6.54375 8.46562 8.39062 6.61875 10.6781 6.61875C12.9563 6.61875 14.8031 8.46562 14.8031 10.7437C14.8031 13.0125 12.9563 14.8688 10.6781 14.8688ZM40.9031 40.9031H33.7875V29.7656C33.7875 27.1125 33.7406 23.6906 30.0844 23.6906C26.3812 23.6906 25.8187 26.5875 25.8187 29.5781V40.9031H18.7125V17.9906H25.5375V21.1219H25.6312C26.5781 19.3219 28.9031 17.4188 32.3625 17.4188C39.5719 17.4188 40.9031 22.1625 40.9031 28.3313V40.9031Z" fill="black"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_17_68">
                                            <rect width="48" height="48" fill="black"/>
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
                                @if ($user_want_read->challenge->where('is_status', 'read')->first())
                                * Kamu Telah Membaca Buku Ini
                                <br>
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

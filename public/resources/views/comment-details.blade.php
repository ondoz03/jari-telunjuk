@extends('layouts.layouts')
@section('title')
    <title>Daftar Buku {{ Str::ucfirst($kategori->name) }} - Jari Telunjuk</title>
    {!! GeneralHelper::canonical()!!}
    <meta name="description"  content="{{$kategori->description}}">
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
    <main class="relative">
        <main class="relative w-full py-20 xl:py-24">
            <div class="container mx-auto max-w-screen-xl px-4 xl:px-12">
                <header class="border-b border-[#DCDCDC] pb-6 xl:pb-12">
                    <!-- Breadcrumb -->
                    <div class="Breadcrumb mb-4 flex items-center gap-1 text-xs text-[#128C55] xl:mb-6 xl:text-sm">
                        <a class="hover:underline"
                            href="/">Category</a>

                        <span>&gt;</span>
                        <a class="hover:underline"
                            href="{{ route('buku', $kategori->slug) }}">{{ Str::ucfirst($kategori->name) }} </a>
                    </div>

                    <section class="container mx-auto w-full max-w-screen-lg space-y-4 text-center xl:space-y-6">
                        <h1 class="font-arvo text-2xl font-normal xl:text-[34px]">{{ Str::ucfirst($buku->judul) }} </h1>

                        <div class="text-sm xl:text-base">
                            <p>
                                {{-- {!! $kategori->description !!} --}}
                                Coba Details Comments
                            </p>
                        </div>
                    </section>
                </header>

                <div class="grid grid-cols-1 gap-10 pb-14 pt-10">

                    <section class="relative col-span-1 flex min-h-screen flex-row items-start gap-8 xl:col-span-8">
                        <section class="hidden w-full flex-col items-center gap-5 xl:sticky xl:left-0 xl:top-24 xl:flex xl:basis-1/3">
                            <div class="relative">
                                <img class="lazy-img w-full h-full" style="width: 248px; height: 372px;"
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
                        <section class="col-span-12 xl:col-span-4">
                            {{-- <header class="mb-4 flex items-center justify-between xl:mb-8">
                                <h3 class="font-arvo text-2xl leading-7 xl:text-[34px] xl:leading-none">
                                    New Releases
                                </h3>
                            </header> --}}

                            <div class="flex items-center mb-5 w-full">
                                <p class="bg-green-100 text-green-800 text-smfont-semibold inline-flex items-center p-1.5 rounded dark:bg-green-200 dark:text-green-800">{{$buku->count_rating}}</p>
                                <span class="w-1 h-1 mx-2 bg-gray-900 rounded-full dark:bg-gray-500"></span>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{$buku->reviews->count()}} reviews</p>

                            </div>
                            <div class="gap-2 sm:grid" style="width: 100%">
                                <div class="flex items-center ">
                                    <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">5 star</a>
                                    <div style="width: 100%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_five}}%"></div>
                                    </div>
                                    <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_five}}%</span>
                                </div>
                                <div class="flex items-center ">
                                    <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">4 star</a>
                                    <div style="width: 100%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_four}}%"></div>
                                    </div>
                                    <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_four}}%</span>
                                </div>
                                <div class="flex items-center ">
                                    <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">3 star</a>
                                    <div style="width: 100%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_three}}%"></div>
                                    </div>
                                    <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_three}}%</span>
                                </div>
                                <div class="flex items-center ">
                                    <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">2 star</a>
                                    <div style="width: 100%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_two}}%"></div>
                                    </div>
                                    <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_two}}%</span>
                                </div>
                                <div class="flex items-center ">
                                    <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">1 star</a>
                                    <div style="width: 100%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_one}}%"></div>
                                    </div>
                                    <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_one}}%</span>
                                </div>
                            </div>

                            <div class="xl:pt-4 w-full">
                                <p class="ms-auto text-base text-gray-500 dark:text-gray-400 my-2" style="font-size: 0.9rem;">Remember, contributions to this topic should follow our <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Community Guidelines</a>.</p>

                                @guest
                                <div class="pb-5 border-b border-gray-200 dark:border-gray-800 text-center" style="padding-bottom: 30px;">
                                    <h1 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white" id="content">What do you think ?</h1>
                                    <br>
                                    <br>
                                    <a onclick="openReviewWrite()" style="cursor: pointer;"
                                        class="w-60 rounded-full mb-3 bg-[#128C55] px-5 py-3 text-center text-base leading-6 text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
                                        Write a Review
                                    </a>
                                </div>
                                @else
                                    @if (!empty($user_want_read->challenge))
                                        @if (!$buku->reviews()->where('user_id', auth()->user()->id)->first() && $user_want_read->challenge->where('is_status', 'read')->first())
                                        <form action="{{route('ajax.review-book')}}" method="post" id="formChangesReview">
                                            @csrf
                                            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50">
                                                <input type="hidden" name="buku_id" value="{{$buku->id}}">
                                                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                    <label for="comment" class="sr-only">Your comment</label>
                                                    <textarea id="comment" rows="4" style="font-size: 0.9rem;" name="review" class="w-full px-0 text-base text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
                                                </div>
                                                <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                                    <a style="cursor: pointer;"  onclick="submit_ajax_review()" class="bg-blue-100 bg-[#128C55] inline-flex px-3 py-2 text-xs font-medium text-center text-white bg-green rounded-lg focus:ring-4" style="font-size: 0.9rem;">
                                                        Post comment
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                        @else
                                        @endif
                                        @else
                                            <i> Baca buku ini terlebih dahulu sebelum memberikan komentar. Tambahkan buku ke daftar bacaanmu, lalu tracking di halaman <a href="{{route('challenge')}}" class="font-medium text-green-600 dark:text-green-500 hover:underline inline-flex">Reading Tracker
                                                <svg class="ml-2" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.8965 5.48388C11.3513 4.98923 12.1 4.84698 12.7169 5.18274C13.3219 5.51199 13.6096 6.19721 13.4617 6.83703M10.8965 5.48388C10.815 5.57253 10.7429 5.67251 10.6827 5.78308C10.2868 6.51058 10.5556 7.42131 11.2831 7.81726C12.0106 8.2132 12.9213 7.94442 13.3173 7.21692C13.384 7.09438 13.4318 6.96664 13.4617 6.83703M10.8965 5.48388C11.5593 5.24502 13.0003 5.18126 13.4617 6.83703M10 10.6039C10.8889 10.6039 12.8667 10.4875 13.6667 10.0217C14.6667 9.43947 7.66667 20.7926 14 18.7549M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="black" stroke-linecap="round"/>
                                                </svg>
                                            </a>
                                            </i>
                                    @endif
                                @endguest
                            </div>

                                @guest
                                    @php
                                        $dataReview = $buku->reviews->take(10);
                                        $dataFirst = false;
                                    @endphp
                                @else
                                    @php
                                        $dataReview = $buku->reviews()->where('user_id', '!=', auth()->user()->id)->get()->take(10);
                                        $dataFirst = $buku->reviews()->where('user_id', auth()->user()->id)->where('review', '!=' ,'')->first();
                                    @endphp
                                @endguest

                                @if ($dataFirst)
                                    <div class="p-5 mb-4 border border-green-100 rounded-lg bg-green-50 col-span-2 w-full">
                                        <ol class="mt-3 divide-y divider-green-200 dark:divide-green-700 w-full">
                                            <li>
                                                <div class="flex items-center my-3">
                                                    <img class="w-10 h-10 me-4 rounded-full" src="{!!$dataFirst->user->avatar!!}" alt="">
                                                    <div class="font-medium dark:text-white w-full">
                                                        <p>{{$dataFirst->user->name}}
                                                            <div class="text-xs flex text-gray-500 dark:text-gray-400 justify-between">
                                                                <div>
                                                                    {{$dataFirst->buku->rating}}
                                                                </div>

                                                                <div class="text-base inline-flex">
                                                                    <svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M11.0785 1.08052C13.8602 0.683483 20.1388 1.55697 23 8.22727M1.00781 11.8119C1.3672 20.8296 13.9908 28.4957 21.8078 17.7563" stroke="black" stroke-opacity="0.3" stroke-linecap="round"/>
                                                                        <path d="M12.2072 3V11.6248C12.2072 11.6696 12.2172 11.7158 12.2497 11.7465C12.289 11.7835 12.34 11.8069 12.395 11.8119L23 12.7752M5.9035 3.99269C5.94875 3.98621 7.04424 3.84514 6.99861 2.86149C6.99442 2.77111 6.98274 2.6889 6.96459 2.61437C6.94187 2.52107 6.909 2.43981 6.86798 2.36966C6.53164 1.79459 5.64713 1.96639 5.31032 2.36966C5.17815 2.52804 4.90116 2.92968 5.03615 3.43173C5.12076 3.74645 5.39528 3.94715 5.68182 3.99095C5.75594 4.00227 5.83086 4.0031 5.9035 3.99269ZM2.9035 7.99269C2.94875 7.98621 4.04424 7.84514 3.99861 6.86149C3.99442 6.77111 3.98274 6.6889 3.96459 6.61437C3.94187 6.52107 3.909 6.43981 3.86798 6.36966C3.53164 5.79459 2.64713 5.96639 2.31032 6.36966C2.17815 6.52804 1.90116 6.92968 2.03615 7.43173C2.12076 7.74645 2.39528 7.94715 2.68182 7.99095C2.75594 8.00227 2.83086 8.0031 2.9035 7.99269Z" stroke="black" stroke-linecap="round"/>
                                                                    </svg>

                                                                    <a class="ml-1 text-xs text-black-600 dark:text-black-500">{{$dataFirst->created_at->diffForHumans()}}</a>
                                                                </div>
                                                            </div>
                                                        </p>

                                                    </div>
                                                </div>
                                                <p class="more-text leading-relaxed text-base font-normal text-stone-500 [&>*]:inline [&>*]:text-justify line-clamp-5" style="line-height:1.5 rem">
                                                {{ $dataFirst->review}}
                                                </p>

                                                <button id="toggle-btn" class="toggle-btn block mb-5 text-sm font-medium text-center text-blue-600 hover:underline dark:text-blue-500 inline-flex items-center">
                                                    <span>Read More</span>
                                                    <svg class="w-2 h-2 text-gray-800 dark:text-white ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                                                    </svg>
                                                </button>

                                                <button id="hide-btn" class="hide-btn hidden block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Hide</button>

                                                <div class="font-medium dark:text-white w-full">
                                                    <div class="text-xs flex text-gray-500 dark:text-gray-400 justify-between">
                                                        <div class="text-base inline-flex">
                                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M23 4.77022C22.7786 2.03202 20.5519 1.04015 19.1325 1.00008C19.0753 0.998462 19.0214 1.0223 18.9832 1.06343L8.9913 11.8222C8.97235 11.8426 8.95808 11.8666 8.94943 11.8927L7.37533 16.6432M22.9058 4.86223L13.0506 16.1342C13.0264 16.1619 12.9948 16.1824 12.9592 16.1936L8.74505 17.523M12.9194 16.1765C12.668 15.0419 11.5627 12.8098 9.15091 12.2211M7.54986 17.9L7.26424 17.9901C7.10809 18.0393 6.95984 17.8971 7.0099 17.746L7.06885 17.5681M7.54986 17.9C7.59835 17.8945 7.57003 17.8204 7.06885 17.5681M7.54986 17.9L8.03968 17.7455M7.06885 17.5681L7.17337 17.2527M8.03968 17.7455C7.8454 17.5812 7.40015 17.2527 7.17337 17.2527M8.03968 17.7455L8.47258 17.6089M7.17337 17.2527L7.2889 16.904M8.47258 17.6089C8.21102 17.4003 7.6081 16.9673 7.2889 16.904M8.47258 17.6089L8.74505 17.523M7.2889 16.904L7.37533 16.6432M8.74505 17.523C8.59946 17.3117 8.12169 16.8399 7.37533 16.6432M20.0912 23C18.807 21.7104 6.85957 21.388 4.29133 21.388C1.72309 21.388 1.06301 21.8008 1.40206 20.0984C1.68054 18.7001 1.47776 9.61953 1 3.79989M11 3.00033C7.46706 3.0087 3.92423 3.17575 2.36365 3.44759M20.8617 13.5C20.9679 17.503 21.0378 21.2855 20.978 22.9999" stroke="black" stroke-linecap="round"/>
                                                                </svg>

                                                            <a  class="ml-2 text-green-600 dark:text-green-500 hover:underline" data-modal-target="editModal" data-modal-toggle="editModal" >Edit</a>
                                                        </div>

                                                        <p style="font-size: 12px">
                                                            <button type="button" onclick="submitLike({{$dataFirst->id}})" class="inline-flex px-3 py-2 text-xs font-medium text-center text-white  bg-[#128C55] rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                                                <svg style="margin-right: 5px" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14 10.945C13.3836 10.289 12.003 8.63215 11.2034 7.04814C11.1703 6.98257 11.0247 6.98456 10.9937 7.05061C10.5221 8.05496 9.07362 9.92941 8 10.945M11.0333 7.44444C10.9392 9.86549 11 15 12 17" stroke="white" stroke-linecap="round"/>
                                                                    <path d="M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="white" stroke-opacity="0.3" stroke-linecap="round"/>
                                                                </svg>
                                                                Yes  ( {{ count($dataFirst->review_like->where('is_status_response', 'like'))}})
                                                            </button>
                                                            <button type="button" onclick="submit_ajax_unlike({{$dataFirst->id}})" style="margin-left:5px" class=" inline-flex px-3 py-2 text-xs font-medium text-center text-black bg-gray-200 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                                                <svg style="margin-right: 5px" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8 13.055C8.61644 13.711 9.99704 15.3679 10.7966 16.9519C10.8297 17.0174 10.9753 17.0154 11.0063 16.9494C11.4779 15.945 12.9264 14.0706 14 13.055M10.9667 16.5556C11.0608 14.1345 11 9 10 7" stroke="black" stroke-linecap="round"/>
                                                                    <path d="M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="black" stroke-opacity="0.3" stroke-linecap="round"/>
                                                                </svg>

                                                                No ( {{ count($dataFirst->review_like->where('is_status_response', 'unlike'))}})
                                                            </button>
                                                        </p>

                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>

                                    <div id="editModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <div class="flex items-center justify-between p-3 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-base font-semibold text-gray-900 dark:text-white" id="title-modal">
                                                        Update Comment
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editModal">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>

                                                <form action="{{route('ajax.review-book')}}" method="post" id="formChangesReview">
                                                    @csrf
                                                    <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50">
                                                        <input type="hidden" name="buku_id" value="{{$buku->id}}">
                                                        <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                                            <label for="comment" class="sr-only">Your comment</label>
                                                            <textarea id="comment" rows="4" style="font-size: 0.9rem;" name="review" class="w-full px-0 text-base text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required> {{ $dataFirst->review}}</textarea>
                                                        </div>
                                                        <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                                            <a style="cursor: pointer;"  onclick="submit_ajax_review()" class="bg-blue-100 bg-[#128C55] inline-flex px-3 py-2 text-xs font-medium text-center text-white bg-green rounded-lg focus:ring-4" style="font-size: 0.9rem;">
                                                                Update
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif


                            <div id="data-wrapper">
                                @include('data-comment')
                            </div>
                            @if (count($buku->reviews) > 1)
                                <div class="mt-8 flex w-full justify-center">
                                    <button
                                        class="flex w-60 load-more-data-review items-center justify-center rounded-full bg-[#128C55] px-6 py-4 font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90">
                                        Lihat Lebih Banyak
                                    </button>
                                </div>
                            @endif


                            <div class="auto-load text-center"
                                style="display: none;">
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
                        </section>
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
<script>

    var ENDPOINT = "{{ route('buku-page.review-page', [$kategori->slug, $buku->slug]) }}";
    var page = 1;
    var loadMoreClicks = 0;
    var maxClicks = 8;

    $(".load-more-data-review").click(function() {
        // console.log('clicked');
        if (loadMoreClicks >= maxClicks) {
            $(this).hide();
            return;
        }

        page++;
        loadMoreClicks++;
        infinteLoadMore(page);
    });


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

    function submitLike(id){

        $.ajax({
            type: 'POST',
            url: "{{route('ajax.review-book-like')}}",
            data: {
                "_token": "{{ csrf_token() }}",
                status: 'like',
                review:id
            },
            dataType: 'json',
            success: function (data) {
                window.location.reload();
            },
            error: function (error) {
                $("#modal-login-review").show();
            }
        });
    }

    function submit_ajax_unlike(id)
    {
        $.ajax({
            type: 'POST',
            url: "{{route('ajax.review-book-like')}}",
            data: {
                "_token": "{{ csrf_token() }}",
                status: 'unlike',
                review:id
            },
            dataType: 'json',
            success: function (data) {
                window.location.reload();
            },
            error: function (error) {
                $("#modal-login-review").show();
            }
        });
    }

    function infinteLoadMore(page) {
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

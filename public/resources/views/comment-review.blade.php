

<div class="flex items-center mb-5 xl:border-t xl:border-stone-300 xl:pt-4 w-full">
    <p class="bg-green-100 text-green-800 text-smfont-semibold inline-flex items-center p-1.5 rounded dark:bg-green-200 dark:text-green-800">{{$buku->count_rating}}</p>
    <span class="w-1 h-1 mx-2 bg-gray-900 rounded-full dark:bg-gray-500"></span>
    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{$buku->reviews->count()}} reviews</p>
    <a href="#" class="ms-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500" style="margin-left: 10px"> Read all reviews</a>
</div>
<div class="gap-2 sm:grid" style="width: 100%">
    <div class="flex items-center ">
        <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">5 star</a>
        <div style="width: 70%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_five}}%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_five}}%</span>
    </div>
    <div class="flex items-center ">
        <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">4 star</a>
        <div style="width: 70%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_four}}%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_four}}%</span>
    </div>
    <div class="flex items-center ">
        <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">3 star</a>
        <div style="width: 70%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_three}}%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_three}}%</span>
    </div>
    <div class="flex items-center ">
        <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">2 star</a>
        <div style="width: 70%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_two}}%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_two}}%</span>
    </div>
    <div class="flex items-center ">
        <a href="#" class="xl:text-base text-sm font-medium text-black-600 dark:text-black-500 hover:underline">1 star</a>
        <div style="width: 70%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: {{$buku->review_one}}%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">{{$buku->review_one}}%</span>
    </div>
</div>

<div class="xl:border-t xl:border-stone-300 xl:pt-4 w-full">
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



                 <i> Baca buku ini terlebih dahulu sebelum memberikan komentar. Tambahkan buku ke daftar bacaanmu, lalu tracking di halaman <p class="font-medium text-green-600 dark:text-green-500 hover:underline inline-flex">Reading Tracker
                    <svg class="ml-2" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.8965 5.48388C11.3513 4.98923 12.1 4.84698 12.7169 5.18274C13.3219 5.51199 13.6096 6.19721 13.4617 6.83703M10.8965 5.48388C10.815 5.57253 10.7429 5.67251 10.6827 5.78308C10.2868 6.51058 10.5556 7.42131 11.2831 7.81726C12.0106 8.2132 12.9213 7.94442 13.3173 7.21692C13.384 7.09438 13.4318 6.96664 13.4617 6.83703M10.8965 5.48388C11.5593 5.24502 13.0003 5.18126 13.4617 6.83703M10 10.6039C10.8889 10.6039 12.8667 10.4875 13.6667 10.0217C14.6667 9.43947 7.66667 20.7926 14 18.7549M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="black" stroke-linecap="round"/>
                    </svg>
                </p>
                 </i>
        @endif
    @endguest
</div>

    @guest
        @php
            $dataReview = $buku->reviews;
            $dataFirst = false;
        @endphp
    @else
        @php
            $dataReview = $buku->reviews()->where('user_id', '!=', auth()->user()->id)->get()->take(10);
            $dataFirst = $buku->reviews()->where('user_id', auth()->user()->id)->first();
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
                                <a href="#" class="inline-flex px-3 py-2 text-xs font-medium text-center text-white  bg-[#128C55] rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    <svg style="margin-right: 5px" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 10.945C13.3836 10.289 12.003 8.63215 11.2034 7.04814C11.1703 6.98257 11.0247 6.98456 10.9937 7.05061C10.5221 8.05496 9.07362 9.92941 8 10.945M11.0333 7.44444C10.9392 9.86549 11 15 12 17" stroke="white" stroke-linecap="round"/>
                                        <path d="M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="white" stroke-opacity="0.3" stroke-linecap="round"/>
                                    </svg>

                                    Yes (1)
                                </a>
                                <a href="#" style="margin-left:5px" class=" inline-flex px-3 py-2 text-xs font-medium text-center text-black bg-gray-200 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    <svg style="margin-right: 5px" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 13.055C8.61644 13.711 9.99704 15.3679 10.7966 16.9519C10.8297 17.0174 10.9753 17.0154 11.0063 16.9494C11.4779 15.945 12.9264 14.0706 14 13.055M10.9667 16.5556C11.0608 14.1345 11 9 10 7" stroke="black" stroke-linecap="round"/>
                                        <path d="M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="black" stroke-opacity="0.3" stroke-linecap="round"/>
                                    </svg>

                                    No (0)
                                </a>
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

    @foreach ($dataReview as $item)
        <div class="p-5 mb-4 border border-gray-100 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 col-span-2 w-full">
            <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700 w-full">
                <li>
                    <div class="flex items-center my-3">
                        <img class="w-10 h-10 me-4 rounded-full" src="{!!$item->user->avatar!!}" alt="">
                        <div class="font-medium dark:text-white w-full">
                            <p>{{$item->user->name}}
                                <div class="text-xs flex text-gray-500 dark:text-gray-400 justify-between">
                                    <div>
                                        {{$item->buku->rating}}
                                    </div>

                                    <div class="text-base inline-flex">
                                        <svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.0785 1.08052C13.8602 0.683483 20.1388 1.55697 23 8.22727M1.00781 11.8119C1.3672 20.8296 13.9908 28.4957 21.8078 17.7563" stroke="black" stroke-opacity="0.3" stroke-linecap="round"/>
                                            <path d="M12.2072 3V11.6248C12.2072 11.6696 12.2172 11.7158 12.2497 11.7465C12.289 11.7835 12.34 11.8069 12.395 11.8119L23 12.7752M5.9035 3.99269C5.94875 3.98621 7.04424 3.84514 6.99861 2.86149C6.99442 2.77111 6.98274 2.6889 6.96459 2.61437C6.94187 2.52107 6.909 2.43981 6.86798 2.36966C6.53164 1.79459 5.64713 1.96639 5.31032 2.36966C5.17815 2.52804 4.90116 2.92968 5.03615 3.43173C5.12076 3.74645 5.39528 3.94715 5.68182 3.99095C5.75594 4.00227 5.83086 4.0031 5.9035 3.99269ZM2.9035 7.99269C2.94875 7.98621 4.04424 7.84514 3.99861 6.86149C3.99442 6.77111 3.98274 6.6889 3.96459 6.61437C3.94187 6.52107 3.909 6.43981 3.86798 6.36966C3.53164 5.79459 2.64713 5.96639 2.31032 6.36966C2.17815 6.52804 1.90116 6.92968 2.03615 7.43173C2.12076 7.74645 2.39528 7.94715 2.68182 7.99095C2.75594 8.00227 2.83086 8.0031 2.9035 7.99269Z" stroke="black" stroke-linecap="round"/>
                                        </svg>

                                        <a class="ml-1 text-xs text-black-600 dark:text-black-500">{{$item->created_at->diffForHumans()}}</a>
                                    </div>
                                </div>
                            </p>
                        </div>
                    </div>
                    <p class="more-text leading-relaxed text-base font-normal text-stone-500 [&>*]:inline [&>*]:text-justify line-clamp-5" style="line-height:1.5 rem">
                    {{ $item->review}}
                    </p>

                    <button id="toggle-btn" class="toggle-btn block mb-5 text-sm font-medium text-center text-blue-600 hover:underline dark:text-blue-500 inline-flex items-center">
                        <span>Read More</span>
                        <svg class="w-2 h-2 text-gray-800 dark:text-white ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                        </svg>
                    </button>

                    <button id="hide-btn" class="hide-btn hidden block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Hide</button>

                    <aside class="flex items-center my-3 justify-end">
                        <a href="#" class="inline-flex px-3 py-2 text-xs font-medium text-center text-white  bg-[#128C55] rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg style="margin-right: 5px" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 10.945C13.3836 10.289 12.003 8.63215 11.2034 7.04814C11.1703 6.98257 11.0247 6.98456 10.9937 7.05061C10.5221 8.05496 9.07362 9.92941 8 10.945M11.0333 7.44444C10.9392 9.86549 11 15 12 17" stroke="white" stroke-linecap="round"/>
                                <path d="M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="white" stroke-opacity="0.3" stroke-linecap="round"/>
                            </svg>

                            Yes (1)
                        </a>
                        <a href="#" style="margin-left:5px" class=" inline-flex px-3 py-2 text-xs font-medium text-center text-black bg-gray-200 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg style="margin-right: 5px" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 13.055C8.61644 13.711 9.99704 15.3679 10.7966 16.9519C10.8297 17.0174 10.9753 17.0154 11.0063 16.9494C11.4779 15.945 12.9264 14.0706 14 13.055M10.9667 16.5556C11.0608 14.1345 11 9 10 7" stroke="black" stroke-linecap="round"/>
                                <path d="M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="black" stroke-opacity="0.3" stroke-linecap="round"/>
                            </svg>

                            No (0)
                        </a>
                    </aside>
                </li>
            </ol>
        </div>
    @endforeach








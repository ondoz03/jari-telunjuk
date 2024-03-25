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
                                {{$item->rating_review}}
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
                <button type="button" onclick="submitLike({{$item->id}})" class="inline-flex px-3 py-2 text-xs font-medium text-center text-white  bg-[#128C55] rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg style="margin-right: 5px" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 10.945C13.3836 10.289 12.003 8.63215 11.2034 7.04814C11.1703 6.98257 11.0247 6.98456 10.9937 7.05061C10.5221 8.05496 9.07362 9.92941 8 10.945M11.0333 7.44444C10.9392 9.86549 11 15 12 17" stroke="white" stroke-linecap="round"/>
                        <path d="M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="white" stroke-opacity="0.3" stroke-linecap="round"/>
                    </svg>
                    Yes  ( {{ count($item->review_like->where('is_status_response', 'like'))}})
                </button>
                <button type="button" onclick="submit_ajax_unlike({{$item->id}})" style="margin-left:5px" class=" inline-flex px-3 py-2 text-xs font-medium text-center text-black bg-gray-200 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg style="margin-right: 5px" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 13.055C8.61644 13.711 9.99704 15.3679 10.7966 16.9519C10.8297 17.0174 10.9753 17.0154 11.0063 16.9494C11.4779 15.945 12.9264 14.0706 14 13.055M10.9667 16.5556C11.0608 14.1345 11 9 10 7" stroke="black" stroke-linecap="round"/>
                        <path d="M10.5376 22.7916C11.0152 22.7207 22.5795 21.1781 22.0978 10.4211C22.0536 9.43274 21.9303 8.53367 21.7387 7.71865M10.5376 22.7916C16.876 22.3728 20.0969 19.8899 21.5383 16.9142M10.5376 22.7916C9.7707 22.9055 8.97982 22.8964 8.19743 22.7725M21.7387 7.71865C21.4988 6.69828 21.1518 5.80967 20.7188 5.04257M21.7387 7.71865C22.6022 10.1105 23.0542 13.7848 21.5383 16.9142M20.7188 5.04257C17.1684 -1.24629 7.83127 0.632493 4.27577 5.04257C2.88063 6.77451 -0.0433281 11.1668 1.38159 16.6571C2.27481 20.0988 5.17269 22.2936 8.19743 22.7725M20.7188 5.04257C22.0697 6.9404 24.0299 11.3848 22.3541 15.4153M21.5383 16.9142C21.8737 16.4251 22.1428 15.9235 22.3541 15.4153M8.19743 22.7725C12.1971 23.4683 20.6281 22.971 22.3541 15.4153" stroke="black" stroke-opacity="0.3" stroke-linecap="round"/>
                    </svg>

                    No ( {{ count($item->review_like->where('is_status_response', 'unlike'))}})
                </button>
            </aside>
        </li>
    </ol>
</div>
@endforeach


<div class="flex items-center mb-5">
    <p class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded dark:bg-blue-200 dark:text-blue-800">8.7</p>
    <p class="ms-2 font-medium text-gray-900 dark:text-white">Excellent</p>
    <span class="w-1 h-1 mx-2 bg-gray-900 rounded-full dark:bg-gray-500"></span>
    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">376 reviews</p>
    <a href="#" class="ms-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500" style="margin-left: 10px"> Read all reviews</a>
</div>

<div class="gap-2 sm:grid" style="width: 100%">
    {{-- <div>
        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Star 5</dt>
        <dd class="flex items-center mb-3">
            <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
        </dd>

        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Star 4</dt>
        <dd class="flex items-center mb-3">
            <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 78%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">7.8</span>
        </dd>
        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Star 3</dt>
        <dd class="flex items-center mb-3">
            <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 68%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">6.8</span>
        </dd>
        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Star 2</dt>
        <dd class="flex items-center mb-3">
            <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 58%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">4.8</span>
        </dd>
        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Star 1</dt>
        <dd class="flex items-center mb-3">
            <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 28%"></div>
            </div>
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">2.8</span>
        </dd>
    </div> --}}



<div class="flex items-center ">
    <a href="#" class="text-sm font-medium text-black-600 dark:text-black-500 hover:underline">5 star</a>
    <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
        <div class="h-3 bg-[#128C55] rounded" style="width: 70%"></div>
    </div>
    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">70%</span>
</div>
<div class="flex items-center ">
    <a href="#" class="text-sm font-medium text-black-600 dark:text-black-500 hover:underline">4 star</a>
    <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
        <div class="h-3 bg-[#128C55] rounded" style="width: 17%"></div>
    </div>
    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">17%</span>
</div>
<div class="flex items-center ">
    <a href="#" class="text-sm font-medium text-black-600 dark:text-black-500 hover:underline">3 star</a>
    <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
        <div class="h-3 bg-[#128C55] rounded" style="width: 8%"></div>
    </div>
    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8%</span>
</div>
<div class="flex items-center ">
    <a href="#" class="text-sm font-medium text-black-600 dark:text-black-500 hover:underline">2 star</a>
    <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
        <div class="h-3 bg-[#128C55] rounded" style="width: 4%"></div>
    </div>
    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">4%</span>
</div>
<div class="flex items-center ">
    <a href="#" class="text-sm font-medium text-black-600 dark:text-black-500 hover:underline">1 star</a>
    <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
        <div class="h-3 bg-[#128C55] rounded" style="width: 1%"></div>
    </div>
    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">1%</span>
</div>

</div>


<div class="p-5 mb-4 border border-gray-100 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 col-span-2 w-full">

    @foreach ($buku->reviews as $item)
    <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700 w-full">
        <li>
            <div class="flex items-center mb-4">
                <img class="w-10 h-10 me-4 rounded-full" src="{!!$item->user->avatar!!}" alt="">
                <div class="font-medium dark:text-white">
                    <p>{{$item->user->name}} <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400"></time></p>
                </div>
            </div>
            <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                {{$item->buku->rating}}
                <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white"></h3>
            </div>
            <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400"><p>Di Review {{$item->created_at->diffForHumans()}} </p></footer>
            <p class="mb-2 text-gray-500 dark:text-gray-400">{{$item->review}}</p>
            <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read more</a>
            <aside class="flex items-center mt-3">
                <a href="#" class="inline-flex items-center text-sm text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                    <svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                    </svg>
                    Yes (1)
                </a>
                <a href="#" class="inline-flex items-center text-sm text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    <svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M11.955 2.117h-.114C9.732 1.535 6.941.5 4.356.5c-1.4 0-1.592.526-1.879 1.316l-2.355 7A2 2 0 0 0 2 11.5h3.956L4.4 16a1.779 1.779 0 0 0 3.332 1.061 24.8 24.8 0 0 1 4.226-5.36l-.003-9.584ZM15 11h2a1 1 0 0 0 1-1V2a2 2 0 1 0-4 0v8a1 1 0 0 0 1 1Z"/>
                    </svg>
                    No (0)
                </a>
            </aside>
        </li>

    </ol>
    @endforeach

</div>



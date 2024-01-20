

<div class="flex items-center mb-5 xl:border-t xl:border-stone-300 xl:pt-4 w-full">
    <p class="bg-green-100 text-green-800 text-smfont-semibold inline-flex items-center p-1.5 rounded dark:bg-green-200 dark:text-green-800">8.7</p>
    <p class="ms-2 font-medium text-gray-900 dark:text-white">Excellent</p>
    <span class="w-1 h-1 mx-2 bg-gray-900 rounded-full dark:bg-gray-500"></span>
    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">376 reviews</p>
    <a href="#" class="ms-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500" style="margin-left: 10px"> Read all reviews</a>
</div>
<div class="gap-2 sm:grid" style="width: 100%">
    <div class="flex items-center ">
        <a href="#" class="text-base font-medium text-black-600 dark:text-black-500 hover:underline">5 star</a>
        <div style="width: 80%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: 70%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">70%</span>
    </div>
    <div class="flex items-center ">
        <a href="#" class="text-base font-medium text-black-600 dark:text-black-500 hover:underline">4 star</a>
        <div style="width: 80%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: 17%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">17%</span>
    </div>
    <div class="flex items-center ">
        <a href="#" class="text-base font-medium text-black-600 dark:text-black-500 hover:underline">3 star</a>
        <div style="width: 80%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: 8%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">8%</span>
    </div>
    <div class="flex items-center ">
        <a href="#" class="text-base font-medium text-black-600 dark:text-black-500 hover:underline">2 star</a>
        <div style="width: 80%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: 4%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">4%</span>
    </div>
    <div class="flex items-center ">
        <a href="#" class="text-base font-medium text-black-600 dark:text-black-500 hover:underline">1 star</a>
        <div style="width: 80%" class="h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
            <div class="h-3 bg-[#128C55] rounded" style="width: 1%"></div>
        </div>
        <span class="text-base font-medium text-gray-500 dark:text-gray-400">1%</span>
    </div>

</div>

<div class="xl:border-t xl:border-stone-300 xl:pt-4 w-full">
    <p class="ms-auto text-base text-gray-500 dark:text-gray-400 my-2" style="font-size: 0.9rem;">Remember, contributions to this topic should follow our <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Community Guidelines</a>.</p>

    <form>
        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50">
            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                <label for="comment" class="sr-only">Your comment</label>
                <textarea id="comment" rows="4" style="font-size: 0.9rem;" class="w-full px-0 text-base text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
            </div>
            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                <button type="submit" class="bg-blue-100 bg-[#128C55] inline-flex px-3 py-2 text-xs font-medium text-center text-white bg-green rounded-lg focus:ring-4" style="font-size: 0.9rem;">
                    Post comment
                </button>
            </div>
        </div>
     </form>



</div>


<div class="p-5 mb-4 border border-gray-100 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 col-span-2 w-full">

    @foreach ($buku->reviews as $item)
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

                            <p style="font-size: 12px">
                                {{$item->created_at->diffForHumans()}}
                            </p>

                        </div>
                    </p>
                </div>
            </div>
            <p class="more-text leading-relaxed text-base font-normal text-stone-500 [&>*]:inline [&>*]:text-justify line-clamp-5" style="line-height:1.5 rem">
                Meneliti dan menuangkan gagasan ke dalam buku ilmiah di bidang ilmu hukum adalah pekerjaan yang sekarang ini kurang dihargai. Para pengajar di perguruan tinggi, termasuk di Fakultas Hukum, lebih suka mencari credit points (untuk berbagai kepentingan) dengan menulis kajian ilmiah dalam bentuk artikel pendek yang dimuat di jurnal ilmiah terakreditasi, terutama akreditasi internasional dan terindeks scopus. Selain itu, kebanyakan orang. termasuk para pengemban hukum, lebih suka membaca cepat dan berkomentar sama bergegasnya lewat gawai serta tampil sebagai pakar dadakan di media-media sosial. Menulis karya ílmiah dilepaskan dari tujuan utamanya, yaitu berdialog secara kritis dan berdebat dengan santun untuk mengembangkan ilmu.
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
                    <svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                    </svg>
                    Yes (1)
                </a>
                <a href="#" style="margin-left:10px" class=" inline-flex px-3 py-2 text-xs font-medium text-center text-black bg-gray-200 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300">
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



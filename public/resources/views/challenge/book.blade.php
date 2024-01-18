
<div class="container relative mx-auto grid h-full min-h-screen max-w-screen-xl mt-5 px-4 lg:gap-10 xl:px-12 ">

    <section class="container overflow-x-auto mx-auto w-full space-y-4 xl:space-y-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-md shadow-lg">
            <table class="table-fixed text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-lg" style="table-layout: fixed;width: 1180px;">
                <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    <div class="flex flex-column sm:flex-row flex-wrap items-center justify-between">
                        <p class="text-2xl">🏆 Challenges</p>
                        <div class="relative">
                           Create New Challenge
                        </div>
                    </div>
                    {{-- <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p> --}}
                </caption>

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col-2" class="px-6 py-3" style="width: 130px">
                            <div class="flex items-center">
                            <p class="ml-1"> Status </p>
                            </div>
                        </th>
                        <th scope="col-2" class="px-6 py-3" style="width: 150px">
                            <div class="flex items-center">
                            <p class="ml-1"> Book</p>
                            </div>
                        </th>
                        <th scope="col-2" class="px-6 py-3" style="width: 250px">
                            <div class="flex items-center">
                            <p class="ml-1"> Title </p>
                            </div>
                        </th>
                        <th scope="col-2" class="px-6 py-3" style="width: 150px">
                            <div class="flex items-center">
                            <p class="ml-1"> Date Started </p>
                            </div>
                        </th>
                        <th scope="col-2" class="px-6 py-3" style="width: 150px">
                            <div class="flex items-center">
                            <p class="ml-1"> Date Finish </p>
                            </div>
                        </th>
                        <th scope="col-2" class="px-6 py-3" style="width: 180px">
                            <div class="flex items-center">
                            <p class="ml-1"> Rating </p>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3" >
                            <div class="flex items-center">
                            <p class="ml-1">Progress </p>
                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($buku as $item)
                    @php
                    $page_end = 0;
                    if($item->buku->detail_buku->jumlah_halaman === 0 ){
                        $page_end = $item->challenge->page_end ?? 0;
                    }else{
                        $page_end = $item->buku->detail_buku->jumlah_halaman;
                    }

                    if(!empty($item->challenge)){
                        $is_status = $item->challenge->is_status;
                    }else{
                        if($item->status === '2'){
                            $is_status = 'reading';
                        }else{
                            $is_status = 'to_read';
                        }

                    }

                    @endphp
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" onclick="openEditModal({{$item->id}},
                        '{{$is_status}}',
                        '{{date('Y-m-d', strtotime($item->updated_at)) ?? date('Y-m-d')}}',
                        '{{$item->challenge->end_date ?? date('Y-m-d')}}',
                        {{$item->challenge->page_start ?? 0}},
                        {!!$page_end!!},
                        '{{$item->buku->judul}}'
                        )" data-modal-target="editModal" data-modal-toggle="editModal">
                            <td class="px-6 py-4">
                                {!! GeneralHelper::statusChalenge($is_status) !!}
                            </td>
                            <td class="px-6 py-4">
                                <div class="relative w-full">
                                    <img style="height: 100px; width: 70px;" data-src="{{$item->buku->image}}" alt="Book 5" src="{{$item->buku->image}}">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <h4 class="font-arvo text-lg leading-7 text-left leading-none">
                                    {{$item->buku->judul}}
                                </h4>

                                <p class="text-sm font-semibold">
                                    by
                                    @foreach ($item->buku->penulis_array as $key => $value)
                                        @if($key!==0)
                                            , &nbsp
                                        @endif
                                        <a class="hover:underline"
                                        href="{{ route('author',strtolower(str_replace(' ','-',$value['key']))) }}">
                                                {{ $value['text'] }}
                                        </a>
                                    @endforeach
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-green-800 text-md font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ !empty($item->challenge) ? date('d-M-Y',strtotime($item->challenge->start_date)) : date('Y-m-d', strtotime($item->updated_at)) }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-green-800 text-md font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ !empty($item->challenge) ? date('d-M-Y',strtotime($item->challenge->end_date)) : '-'}}</span>
                            </td>

                            <td class="px-6">
                                <div class="rating">
                                    <div class="review">Reviews ({{$item->buku->count_rating}} / 5)
                                    </div>
                                {{$item->buku->rating}}
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right" >
                                <p class="truncate text-xs leading-5 text-gray-500"> {{$item->challenge->page_start ?? '0'}}/{{$item->challenge->page_end ?? '0'}} </p>
                                @php
                                    $n1 = $item->challenge->page_start ?? 0;
                                    $n2 = $item->challenge->page_end ?? 0;
                                    if ($n2 != 0) {
                                        $percentage = ($n1 / $n2) * 100;
                                    }else{
                                        $percentage = 0;
                                    }
                                @endphp
                                <p class="truncate text-xs leading-5 text-gray-500"> {!! (int)$percentage !!} %</p>

                                <p class="truncate text-xs leading-5 text-gray-500"> </p>
                                <div class="w-full bg-gray-200 h-1.5  rounded dark:bg-gray-700 w-full">
                                <div class="bg-blue-600 text-xs h-1.5  font-medium text-blue-100 text-center p-0.5 leading-none rounded" style="width: {!! (int)$percentage !!}%"> </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
</div>


<div id="editModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="title-modal">
                    INFO
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <form id="formChanges" action="{{route('challenge.store')}}" method="post">
                @csrf
                <div class="space-y-4">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                            <tbody>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Status
                                    </th>
                                    <td class="px-6 py-4">
                                        <select name="status" onchange="updateFieldsBasedOnStatus()" id="status" class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" required>
                                            <option selected>Choose a Status</option>
                                            <option value="to_read">To Read</option>
                                            <option value="reading">Reading</option>
                                            <option value="reviewing">Review</option>
                                            <option value="read">Read</option>
                                            <option value="reviewed">Reviewed</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <td class="px-6 py-4">
                                       Date Started
                                        <div class="relative max-w-sm">
                                            {{-- <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                               <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                </svg>
                                            </div> --}}
                                            <input name="date_started" id="date_started" datepicker datepicker-format="dd/mm/yyyy" value="{!! date('d/m/Y') !!}" type="text" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Select date" required>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        Date Ended
                                        <div class="relative max-w-sm">
                                            {{-- <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                               <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                                </svg>
                                            </div> --}}
                                            <input name="date_ended" id="date_ended" datepicker datepicker-format="dd/mm/yyyy" value="{!! date('d/m/Y') !!}" type="text" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Select date" required>
                                          </div>
                                    </td>
                                </tr>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700" id="page">
                                    <td class="px-6 py-4">
                                        Page Started
                                        <input type="number" name="page_started" id="page_started" value="" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 " required>
                                    </td>

                                    <td class="px-6 py-4">
                                        Page Ended

                                        <input type="text" name="page_ended" id="page_ended" value="" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" required>
                                    </td>
                                </tr>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700" id="reviews_rating">

                                </tr>

                                <input type="hidden" id="id_want_read" name="id_want_read" value="">
                            </tbody>
                        </table>
                        <div class="px-6 py-4">
                            <div class="reviewsRatings">
                                <label for="">Rating</label>
                                <select name="rating" id="rating" class="block w-full p-2  mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" required>
                                    <option selected>Choose a Rating</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>

                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Review</label>
                                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="editModal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline</button>
                    <button type="button" onclick="submit_ajax()" class=" rounded-lg px-5 py-2.5 items-center justify-center bg-[#128C55] font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90 ">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

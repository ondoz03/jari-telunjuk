<div class="relative col-span-4 mt-5 lg:sticky lg:top-32 ">
    <div class="overflow-x-auto shadow-md sm:rounded-lg rounded-md shadow-lg" onclick="openEditModalDashboard({{ !empty($buku_dashboard[0]) ? $buku_dashboard[0]->target_challenge : '0'}}, {{ !empty($buku_dashboard[1]) ? $buku_dashboard[1]->target_challenge : '0'}})"  data-modal-target="editModalDasboard" data-modal-toggle="editModalDasboard">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-lg">
            <caption class="p-5 text-2xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                🎯 Goal
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Changes
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <p class="text-sm font-semibold leading-6 text-gray-900">📖   {{$total_book_read}} /{{ !empty($buku_dashboard[0]) ? $buku_dashboard[0]->target_challenge : '0'}} Books Read</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ (int)$persen_book}}%</p>

                        <div class="w-full bg-gray-200 h-1.5  rounded dark:bg-gray-700 w-full">
                          <div class="bg-blue-600 text-xs h-1.5  font-medium text-blue-100 text-center p-0.5 leading-none rounded" style="width: {{(int)$persen_book}}%"> </div>
                        </div>
                    </th>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <p class="text-sm font-semibold leading-6 text-gray-900">📖  {{$total_page_read}}/{{ !empty($buku_dashboard[1]) ? $buku_dashboard[1]->target_challenge : '0'}} Pages Read</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{(int)$persen_page}} %</p>
                        <div class="w-full bg-gray-200 h-1.5  rounded dark:bg-gray-700 w-full">
                          <div class="bg-blue-600 text-xs h-1.5  font-medium text-blue-100 text-center p-0.5 leading-none rounded" style="width: {{(int)$persen_page}}%"> </div>
                        </div>
                    </th>
                </tr>
                {{-- comingsoon --}}
                {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" style="filter: blur(5px); transition: filter 0.5s ease;">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <p class="text-sm font-semibold leading-6 text-gray-900">🏆  0/21 challenge finished</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500"> 45%</p>

                        <div class="w-full bg-gray-200 h-1.5  rounded dark:bg-gray-700 w-full">
                          <div class="bg-blue-600 text-xs h-1.5  font-medium text-blue-100 text-center p-0.5 leading-none rounded" style="width: 45%"> </div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <p class="text-sm font-semibold leading-6 text-gray-900">0/20</p>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</div>

<div id="editModalDasboard" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Goal Challenge
                </h4>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editModalDasboard">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <form id="formChangesDashboard" action="{{route('challenge.store_dashboard', ['type' => 1])}}" method="post">
                @csrf
                <div class="space-y-4">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Books Read
                                    </th>
                                    <td class="px-6 py-4">
                                        <input type="number" name="target_challange[]" id="target_book" value="" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" required>
                                    </td>
                                </tr>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Pages Read
                                    </th>
                                    <td class="px-6 py-4">
                                        <input type="number" name="target_challange[]" id="target_page" value="" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="editModalDasboard" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline</button>
                    <button type="button" onclick="submit_ajax_dashboard()" class=" rounded-lg px-5 py-2.5 items-center justify-center bg-[#128C55] font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90 ">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

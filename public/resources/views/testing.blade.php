@extends('layouts.layouts')
@section('content')
<main class="relative">
    <section class="astro-J7PV25F6 relative mt-20 overflow-hidden xl:mt-32">
        <div class="items-top relative flex justify-center bg-white sm:items-center sm:pt-0">
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block rounded-lg bg-[#128C55] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Toggle modal</button>


            <div id="default-modal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                <div class="relative max-h-full w-full max-w-2xl p-4">
                    <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                        <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5 dark:border-gray-600">
                            <div class="relative" style="width: 100%;">
                                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                            <input type="text" id="default-search" class="text-md focus:ring-none w-full p-2 ps-10 hover:border-none focus:border-none" placeholder="Search Mockups, Logos..." required style="padding-left: 40px !important;border: none; outline-offset: -2px;" onfocus="this.style.boxShadow='none';" />
                            </div>
                        </div>
                        <div class="space-y-4 p-4 md:p-5">
                            <ul class="mb-4 space-y-4" id="search-results">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('js')



@endsection


@extends('layouts.layouts')
@section('title')
    <title> Sorry, Sepertinya Anda typo atau asal nulis</title>
    <style>
        .checked {
            color: orange;
        }
    </style>
@endsection

@section('content')

<main class="relative">

    <div class="container relative mx-auto h-full max-w-screen-xl grid-cols-1 px-4 lg:grid-cols-12 lg:gap-10 xl:px-12">
        <section class="col mt-5 lg:col-span-9 lg:mt-28">
            <h1 class="mb-6 font-arvo text-[34px] leading-none"></h1>
            <article class="mb-6 text-center">
                <h3 class="font-arvo mb-3 text-2xl xl:text-[42px] font-bold leading-8">Jari Telunjuk Reading Tracker - Challenge</h3>
                <p>
                    Halo! Sebelum menggunakan template ini, lakukan setup Reading Challengemu terlebih dahulu, <br>
                    langkah pertama → @Tentukan Reading Goalmu
                </p>
                <div class="relative p-4 w-full max-w-2xl max-h-full" style="display: inline-block;">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Goal Challenge
                            </h4>
                        </div>

                        <form id="formChangesDashboard" action="{{route('challenge.store_dashboard')}}" method="post">
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
                                <button type="button" onclick="submit_ajax_dashboard()" class=" rounded-lg px-5 py-2.5 items-center justify-center bg-[#128C55] font-bold text-white transition-all duration-300 ease-out hover:bg-[#128C55]/90 ">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </article>

        </section>
    </div>

</main>
@endsection



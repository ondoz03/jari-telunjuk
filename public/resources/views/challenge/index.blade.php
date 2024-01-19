
@extends('layouts.layouts')
@section('title')
    <title> Sorry, Sepertinya Anda typo atau asal nulis</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>

    <style>
        .checked {
            color: orange;
        }

    </style>
@endsection

@section('content')

<main class="relative">
    {{-- header title --}}
    <div class="container relative mx-auto grid h-full max-w-screen-xl grid-cols-1 px-4 lg:grid-cols-12 lg:gap-10 xl:px-12">
        <section class="col-span-1 mt-5 lg:col-span-9 lg:mt-28">
            <h1 class="mb-6 font-arvo text-[34px] leading-none"></h1>
            <article class="mb-6">
                <h3 class="font-arvo mb-3 text-2xl xl:text-[42px] font-bold leading-8">Jari Telunjuk Reading Tracker - Challenge</h3>
                <p>
                    Halo! Sebelum menggunakan template ini, lakukan setup Reading Challengemu terlebih dahulu, <br>
                    langkah pertama → @Tentukan Reading Goalmu
                </p>
            </article>
        </section>
    </div>

    {{-- main body --}}
    <div class="container relative mx-auto grid h-full max-w-screen-xl grid-cols-1 px-4 lg:grid-cols-12 lg:gap-10 xl:px-12">
        @include('challenge.dashboard')

        <section class="col-span-8 mt-5 lg:col-span-8" >
            <p class="text-2xl text-center">Kategori 🏆 (Coming Soon)</p>
            <article class="mb-6" style="filter: blur(5px); transition: filter 0.5s ease;">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-md shadow-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-lg">
                        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            <div class="flex flex-column sm:flex-row flex-wrap items-center justify-between">
                                <p class="text-2xl">🏆 Challenges Item (Cooming Soon)</p>
                                <div class="relative">
                                   Create New Challenge
                                </div>
                            </div>
                            {{-- <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p> --}}
                        </caption>
                        <div style="filter: blur(5px); transition: filter 0.5s ease;">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Challenges
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Book
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex items-center">
                                            <svg fill="#2d9964" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>book</title> <path d="M27.75 2c-0-0.414-0.336-0.75-0.75-0.75h-19.8c-0.028-0.001-0.061-0.002-0.094-0.002-1.541 0-2.797 1.22-2.856 2.746l-0 0.005v24.389c0.113 1.331 1.221 2.367 2.572 2.367 0.063 0 0.125-0.002 0.187-0.007l-0.008 0h20c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-19.8c-0.023 0.001-0.050 0.002-0.077 0.002-0.717 0-1.306-0.547-1.373-1.247l-0-0.006v-1.223c0-0.459 0.584-0.861 1.248-0.861l20.002 0.057c0 0 0.001 0 0.001 0 0.207 0 0.394-0.084 0.529-0.22l0-0c0.017-0.017 0.025-0.041 0.040-0.060 0.047-0.051 0.087-0.11 0.118-0.173l0.002-0.004c0.016-0.049 0.029-0.105 0.034-0.164l0-0.003c0.011-0.035 0.020-0.077 0.025-0.121l0-0.003v-0.002zM26.25 24.471l-15.5-0.044v-21.677h15.5zM5.75 24.686v-20.686c0.067-0.705 0.657-1.252 1.374-1.252 0.027 0 0.054 0.001 0.080 0.002l-0.004-0h2.050v21.672l-2.25-0.006c-0.453 0.002-0.883 0.101-1.269 0.278l0.019-0.008zM14 7.75h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0zM23 10.25h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg>
                                            <p class="ml-1">Buku Best Seller International</p>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Sapiens</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex items-center">
                                            <svg fill="#2d9964" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>book</title> <path d="M27.75 2c-0-0.414-0.336-0.75-0.75-0.75h-19.8c-0.028-0.001-0.061-0.002-0.094-0.002-1.541 0-2.797 1.22-2.856 2.746l-0 0.005v24.389c0.113 1.331 1.221 2.367 2.572 2.367 0.063 0 0.125-0.002 0.187-0.007l-0.008 0h20c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-19.8c-0.023 0.001-0.050 0.002-0.077 0.002-0.717 0-1.306-0.547-1.373-1.247l-0-0.006v-1.223c0-0.459 0.584-0.861 1.248-0.861l20.002 0.057c0 0 0.001 0 0.001 0 0.207 0 0.394-0.084 0.529-0.22l0-0c0.017-0.017 0.025-0.041 0.040-0.060 0.047-0.051 0.087-0.11 0.118-0.173l0.002-0.004c0.016-0.049 0.029-0.105 0.034-0.164l0-0.003c0.011-0.035 0.020-0.077 0.025-0.121l0-0.003v-0.002zM26.25 24.471l-15.5-0.044v-21.677h15.5zM5.75 24.686v-20.686c0.067-0.705 0.657-1.252 1.374-1.252 0.027 0 0.054 0.001 0.080 0.002l-0.004-0h2.050v21.672l-2.25-0.006c-0.453 0.002-0.883 0.101-1.269 0.278l0.019-0.008zM14 7.75h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0zM23 10.25h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg>
                                            <p class="ml-1">Biography</p>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Sapiens</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex items-center">
                                            <svg fill="#2d9964" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>book</title> <path d="M27.75 2c-0-0.414-0.336-0.75-0.75-0.75h-19.8c-0.028-0.001-0.061-0.002-0.094-0.002-1.541 0-2.797 1.22-2.856 2.746l-0 0.005v24.389c0.113 1.331 1.221 2.367 2.572 2.367 0.063 0 0.125-0.002 0.187-0.007l-0.008 0h20c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-19.8c-0.023 0.001-0.050 0.002-0.077 0.002-0.717 0-1.306-0.547-1.373-1.247l-0-0.006v-1.223c0-0.459 0.584-0.861 1.248-0.861l20.002 0.057c0 0 0.001 0 0.001 0 0.207 0 0.394-0.084 0.529-0.22l0-0c0.017-0.017 0.025-0.041 0.040-0.060 0.047-0.051 0.087-0.11 0.118-0.173l0.002-0.004c0.016-0.049 0.029-0.105 0.034-0.164l0-0.003c0.011-0.035 0.020-0.077 0.025-0.121l0-0.003v-0.002zM26.25 24.471l-15.5-0.044v-21.677h15.5zM5.75 24.686v-20.686c0.067-0.705 0.657-1.252 1.374-1.252 0.027 0 0.054 0.001 0.080 0.002l-0.004-0h2.050v21.672l-2.25-0.006c-0.453 0.002-0.883 0.101-1.269 0.278l0.019-0.008zM14 7.75h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0zM23 10.25h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg>
                                            <p class="ml-1"> Buku Filfasafat Ringan</p>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Sapiens</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex items-center">
                                            <svg fill="#2d9964" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>book</title> <path d="M27.75 2c-0-0.414-0.336-0.75-0.75-0.75h-19.8c-0.028-0.001-0.061-0.002-0.094-0.002-1.541 0-2.797 1.22-2.856 2.746l-0 0.005v24.389c0.113 1.331 1.221 2.367 2.572 2.367 0.063 0 0.125-0.002 0.187-0.007l-0.008 0h20c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-19.8c-0.023 0.001-0.050 0.002-0.077 0.002-0.717 0-1.306-0.547-1.373-1.247l-0-0.006v-1.223c0-0.459 0.584-0.861 1.248-0.861l20.002 0.057c0 0 0.001 0 0.001 0 0.207 0 0.394-0.084 0.529-0.22l0-0c0.017-0.017 0.025-0.041 0.040-0.060 0.047-0.051 0.087-0.11 0.118-0.173l0.002-0.004c0.016-0.049 0.029-0.105 0.034-0.164l0-0.003c0.011-0.035 0.020-0.077 0.025-0.121l0-0.003v-0.002zM26.25 24.471l-15.5-0.044v-21.677h15.5zM5.75 24.686v-20.686c0.067-0.705 0.657-1.252 1.374-1.252 0.027 0 0.054 0.001 0.080 0.002l-0.004-0h2.050v21.672l-2.25-0.006c-0.453 0.002-0.883 0.101-1.269 0.278l0.019-0.008zM14 7.75h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0zM23 10.25h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg>
                                            <p class="ml-1">Buku motivasi susah move on</p>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Sapiens</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex items-center">
                                            <svg fill="#2d9964" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>book</title> <path d="M27.75 2c-0-0.414-0.336-0.75-0.75-0.75h-19.8c-0.028-0.001-0.061-0.002-0.094-0.002-1.541 0-2.797 1.22-2.856 2.746l-0 0.005v24.389c0.113 1.331 1.221 2.367 2.572 2.367 0.063 0 0.125-0.002 0.187-0.007l-0.008 0h20c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-19.8c-0.023 0.001-0.050 0.002-0.077 0.002-0.717 0-1.306-0.547-1.373-1.247l-0-0.006v-1.223c0-0.459 0.584-0.861 1.248-0.861l20.002 0.057c0 0 0.001 0 0.001 0 0.207 0 0.394-0.084 0.529-0.22l0-0c0.017-0.017 0.025-0.041 0.040-0.060 0.047-0.051 0.087-0.11 0.118-0.173l0.002-0.004c0.016-0.049 0.029-0.105 0.034-0.164l0-0.003c0.011-0.035 0.020-0.077 0.025-0.121l0-0.003v-0.002zM26.25 24.471l-15.5-0.044v-21.677h15.5zM5.75 24.686v-20.686c0.067-0.705 0.657-1.252 1.374-1.252 0.027 0 0.054 0.001 0.080 0.002l-0.004-0h2.050v21.672l-2.25-0.006c-0.453 0.002-0.883 0.101-1.269 0.278l0.019-0.008zM14 7.75h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0zM23 10.25h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg>
                                            <p class="ml-1">Hadiah dari orang terdekat</p>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Sapiens</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </div>

                    </table>
                </div>
            </article>
        </section>
    </div>

    @include('challenge.book');

</main>
@endsection

@section('js')
<script>

        function openEditModal(ids, status,start_date, end_date, jumlah_halaman_start, jumlah_halaman_end, title, rating, review) {
            // console.log(status)
            document.getElementById('title-modal').innerHTML = title;
            document.getElementById('id_want_read').value = ids;
            document.getElementById('status').value = status;
            document.getElementById('date_started').value = changeDateFormat(start_date);
            document.getElementById('date_ended').value = changeDateFormat(end_date);
            document.getElementById('page_started').value = jumlah_halaman_start;
            document.getElementById('page_ended').value = jumlah_halaman_end;
            document.getElementById('rating').value = rating;
            document.getElementById('review').value = review;

            updateFieldsBasedOnStatus();
        }

        function changeDateFormat(inputDate) {
            const parts = inputDate.split('-');
            const formattedDate = `${parts[2]}/${parts[1]}/${parts[0]}`;
            return formattedDate;
        }

        function submit_ajax(){
            // Get form data
            var formData = $('#formChanges').serialize();
            $.ajax({
                type: 'POST',
                url: $('#formChanges').attr('action'),
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

        function updateFieldsBasedOnStatus() {
            var status = document.getElementById('status').value;
            var page = document.getElementById('page');
            var reviews_rating =  $('.reviewsRatings');

            if (status === 'to_read') {
                page.style.display = 'none';
                reviews_rating.hide();
            } else {
                if(status === 'read' || status === 'reviewed'){
                    reviews_rating.show();
                }else{
                    reviews_rating.hide();
                }
                page.style.display = 'contents';
            }
        }


        function submit_ajax_dashboard(){
            // Get form data
            var formData = $('#formChangesDashboard').serialize();
            $.ajax({
                type: 'POST',
                url: $('#formChangesDashboard').attr('action'),
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

        function openEditModalDashboard(book, page) {
            // console.log(status)
            document.getElementById('target_book').value = book;
            document.getElementById('target_page').value = page;
        }

</script>

@endsection

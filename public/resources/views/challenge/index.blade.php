
@extends('layouts.layouts')
@section('title')
    <title> Sorry, Sepertinya Anda typo atau asal nulis</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

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
        <div class="relative col-span-4 mt-5 lg:sticky lg:top-32 ">
            <div class="overflow-x-auto shadow-md sm:rounded-lg rounded-md shadow-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-lg">
                    <caption class="p-5 text-2xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        🎯 Goal
                        {{-- <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p> --}}
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Changes
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <p class="text-sm font-semibold leading-6 text-gray-900">📖  0/20 books read</p>
                                <p class="mt-1 truncate text-xs leading-5 text-gray-500"> 45%</p>

                                <div class="w-full bg-gray-200 h-1.5  rounded dark:bg-gray-700 w-full">
                                  <div class="bg-blue-600 text-xs h-1.5  font-medium text-blue-100 text-center p-0.5 leading-none rounded" style="width: 45%"> </div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                <p class="text-sm font-semibold leading-6 text-gray-900">0/20</p>
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>

                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <section class="col-span-8 mt-5 lg:col-span-8" >
            <article class="mb-6">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-md shadow-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-lg">
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
                    </table>
                </div>
            </article>
        </section>
    </div>

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
                            <th scope="col-2" class="px-6 py-3" style="width: 100px">
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
                            <th scope="col-2" class="px-6 py-3" style="width: 100px">
                                <div class="flex items-center">
                                <p class="ml-1"> Date Started </p>
                                </div>
                            </th>
                            <th scope="col-2" class="px-6 py-3" style="width: 100px">
                                <div class="flex items-center">
                                <p class="ml-1"> Date Finish </p>
                                </div>
                            </th>
                            <th scope="col-2" class="px-6 py-3" style="width: 180px">
                                <div class="flex items-center">
                                <p class="ml-1"> Related Challeng </p>
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
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Reading</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="relative w-full">
                                    <img style="height: 160px;
                                    width: 100px;" data-src="https://cdn.jaritelunjuk.com/book/160/conversions/bstorbcwxli4w7nclbzzt5-thumb.jpg" alt="Book 5" src="https://cdn.jaritelunjuk.com/book/160/conversions/bstorbcwxli4w7nclbzzt5-thumb.jpg">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <h4 class="font-arvo text-xl leading-7 text-left leading-none">
                                    Amalan-Amalan Langit Pembuka Pintu Rezeki
                                </h4>
                                <div class="rating">
                                    <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    <div class="review">Reviews (0 / 5)
                                    </div>
                                </div>
                                <p class="text-sm font-semibold">
                                    by
                                                                                                            <a class="hover:underline" href="http://jaritelunjuk.test/author/profile/andi-luqmanul-qosim-dan-yanuar-arifin">
                                                Andi Luqmanul Qosim dan Yanuar Arifin
                                        </a>
                                                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-green-800 text-md font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">02/01/2024</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-green-800 text-md font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">02/02/2024</span>
                            </td>

                            <td class="px-6">
                                <div class="flex">
                                    <svg fill="#2d9964" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>book</title> <path d="M27.75 2c-0-0.414-0.336-0.75-0.75-0.75h-19.8c-0.028-0.001-0.061-0.002-0.094-0.002-1.541 0-2.797 1.22-2.856 2.746l-0 0.005v24.389c0.113 1.331 1.221 2.367 2.572 2.367 0.063 0 0.125-0.002 0.187-0.007l-0.008 0h20c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-19.8c-0.023 0.001-0.050 0.002-0.077 0.002-0.717 0-1.306-0.547-1.373-1.247l-0-0.006v-1.223c0-0.459 0.584-0.861 1.248-0.861l20.002 0.057c0 0 0.001 0 0.001 0 0.207 0 0.394-0.084 0.529-0.22l0-0c0.017-0.017 0.025-0.041 0.040-0.060 0.047-0.051 0.087-0.11 0.118-0.173l0.002-0.004c0.016-0.049 0.029-0.105 0.034-0.164l0-0.003c0.011-0.035 0.020-0.077 0.025-0.121l0-0.003v-0.002zM26.25 24.471l-15.5-0.044v-21.677h15.5zM5.75 24.686v-20.686c0.067-0.705 0.657-1.252 1.374-1.252 0.027 0 0.054 0.001 0.080 0.002l-0.004-0h2.050v21.672l-2.25-0.006c-0.453 0.002-0.883 0.101-1.269 0.278l0.019-0.008zM14 7.75h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0zM23 10.25h-9c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h9c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg>
                                    <p class="ml-1">Buku Best Seller International</p>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right" >
                                <p class="truncate text-xs leading-5 text-gray-500"> 45%</p>
                                <div class="w-full bg-gray-200 h-1.5  rounded dark:bg-gray-700 w-full">
                                  <div class="bg-blue-600 text-xs h-1.5  font-medium text-blue-100 text-center p-0.5 leading-none rounded" style="width: 45%"> </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

</main>
@endsection

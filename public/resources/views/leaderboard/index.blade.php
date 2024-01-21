@extends('layouts.layouts')
@section('title')
    <title>Reading Leaderboard Jari Telunjuk</title>

    <style>
        .checked {
            color: orange;
        }

    </style>
@endsection

@section('content')
<main class="relative text-center">

     {{-- header title --}}
     <div class="container relative mx-auto grid h-full w-full grid-cols-1 px-4 lg:grid-cols-12 lg:gap-12 xl:px-12">
        <section class="col-span-1 mt-5 lg:col-span-9 lg:mt-28" style="grid-column: span 12 / span 12;">
            <h1 class="mb-6 font-arvo text-[34px] leading-none"></h1>
            <article class="mb-6">
                <h3 class="font-arvo mb-3 text-2xl xl:text-[42px] font-bold leading-8">Jari Telunjuk Reading Tracker </h3>
            </article>
        </section>
    </div>

    {{-- main body --}}
    <div class="container relative mx-auto grid h-full min-h-screen max-w-screen-xl mt-5 px-4 lg:gap-10 xl:px-12 ">
        <section class="container overflow-x-auto mx-auto w-full space-y-4 xl:space-y-6">
            <div class="relative overflow-x-auto sm:rounded-lg rounded-md min-h-screen">
                <table class="table-fixed text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" style="table-layout: fixed;width: 1180px;">
                    <caption class="pb-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        <div class="flex flex-column sm:flex-row flex-wrap items-center justify-between">
                            <p class="text-2xl inline-flex">
                                <svg class="mr-2" width="34" height="34" viewBox="0 0 24 24" stroke="#128C55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23 11.6364V19.0974C23 19.1952 22.9256 19.2755 22.8317 19.2791L3.79365 20M23 11.6364L19.5325 10.5531C19.5162 10.548 19.4993 10.5455 19.4823 10.5455L16.5706 10.7758M23 11.6364L16.5396 12.0033M3.79365 20V12.7273M3.79365 20L3.59111 19.9209M3.79365 12.7273L10.0794 12.3702M3.79365 12.7273L3.59111 12.6482M16.5706 10.7758L16.5396 12.0033M16.5706 10.7758L16.7143 5.09091M16.3651 18.9091L16.5396 12.0033M16.5396 12.0033L10.0794 12.3702M16.7143 5.09091H10.0794M16.7143 5.09091L13.5983 4.00933C13.5805 4.00315 13.5619 4 13.5431 4H7.28571M10.0794 5.09091V12.3702M10.0794 5.09091L9.97129 5.04871M7.28571 4L6.93651 10.9091M7.28571 4L7.51316 4.08882M6.93651 10.9091L1 11.6364M6.93651 10.9091L7.19191 11.0278M10.0794 12.3702V19.2727M10.0794 12.3702L9.8033 12.2419M1 11.6364V18.7831C1 18.8589 1.04515 18.9267 1.1133 18.9533L1.26419 19.0123M1 11.6364L1.26419 11.7395M7.51316 4.08882L7.19191 11.0278M7.51316 4.08882L7.80313 4.20205M7.19191 11.0278L7.52376 11.1821M7.52376 11.1821L7.80313 4.20205M7.52376 11.1821L7.82176 11.3207M7.80313 4.20205L8.13679 4.33234M8.13679 4.33234L7.82176 11.3207M8.13679 4.33234L8.33333 4.40909M7.82176 11.3207L8.1127 11.4559M8.1127 11.4559L8.33333 4.40909M8.1127 11.4559L8.36348 11.5725M8.33333 4.40909L8.62937 4.52469M8.62937 4.52469L8.36348 11.5725M8.62937 4.52469L8.88403 4.62413M8.36348 11.5725L8.60883 11.6866M8.60883 11.6866L8.88403 4.62413M8.60883 11.6866L8.83057 11.7897M8.88403 4.62413L9.14815 4.72727M9.14815 4.72727L8.83057 11.7897M9.14815 4.72727L9.38095 4.81818M8.83057 11.7897L9.03175 11.8832M9.03175 11.8832L9.38095 4.81818M9.03175 11.8832L9.28299 12M9.38095 4.81818L9.64707 4.9221M9.64707 4.9221L9.28299 12M9.64707 4.9221L9.86322 5.0065M9.28299 12L9.52723 12.1136M9.52723 12.1136L9.86322 5.0065M9.52723 12.1136L9.8033 12.2419M9.86322 5.0065L9.97129 5.04871M9.97129 5.04871L9.8033 12.2419M3.59111 19.9209V12.6482M3.59111 19.9209L3.37525 19.8366M3.59111 12.6482L3.37525 12.5639M3.37525 12.5639V19.8366M3.37525 12.5639L3.09524 12.4545M3.37525 19.8366L3.09524 19.7273M3.09524 19.7273V12.4545M3.09524 19.7273L2.86243 19.6364M3.09524 12.4545L2.86243 12.3636M2.86243 12.3636V19.6364M2.86243 12.3636L2.56018 12.2456M2.86243 19.6364L2.56018 19.5183M2.56018 19.5183V12.2456M2.56018 19.5183L2.39683 19.4545M2.56018 12.2456L2.39683 12.1818M2.39683 12.1818V19.4545M2.39683 12.1818L2.13614 12.08M2.39683 19.4545L2.13614 19.3528M2.13614 19.3528V12.08M2.13614 19.3528L1.82016 19.2294M2.13614 12.08L1.82016 11.9566M1.82016 11.9566V19.2294M1.82016 11.9566L1.52839 11.8427M1.82016 19.2294L1.52839 19.1154M1.52839 19.1154V11.8427M1.52839 19.1154L1.26419 19.0123M1.52839 11.8427L1.26419 11.7395M1.26419 11.7395V19.0123"
                                    stroke="#128C55" stroke-linecap="round"/>
                                </svg>
                                    Ranking Leaderboard
                            </p>
                            <div class="relative">
                                <div>
                                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white  font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                                        <svg class="mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.76628 5.55544C5.27223 6.07091 5.98635 6.39216 6.77778 6.39216C8.3119 6.39216 9.55556 5.18508 9.55556 3.69608C9.55556 2.20708 8.3119 1 6.77778 1C5.76596 1 4.88049 1.52507 4.39484 2.3098C3.96827 2.99907 3.32843 3.69608 2.5 3.69608C1.67157 3.69608 1 4.3479 1 5.15196V21.5008C1 22.3288 1.69155 23 2.54462 23H21.4554C22.3084 23 23 22.3288 23 21.5008V5.19527C23 4.36729 22.3084 3.69608 21.4554 3.69608H20.1111M15.2108 5.55544C15.7168 6.07091 16.4309 6.39216 17.2223 6.39216C18.7565 6.39216 20.0001 5.18508 20.0001 3.69608C20.0001 2.20708 18.7565 1 17.2223 1C16.2265 1 15.353 1.50863 14.8627 2.27284C14.4117 2.97568 13.753 3.69608 12.8999 3.69608H9.66679M3.22221 9.41167H22.8889M8.87565 14.9006C8.94476 13.6649 11.3668 12.5168 11.735 14.5889C11.9605 15.858 10.698 17.2278 8.81816 18.3478C8.44403 18.5707 8.56717 19.1589 8.99835 19.1556L11.965 19.1324M13.727 14.3019L14.8462 13.1858C15.1039 12.9289 15.5461 13.0764 15.5415 13.4177L15.5415 19.1556" stroke="#128C55" stroke-linecap="round"/>
                                        </svg>
                                        <p id="select-title text-medium text-black text-bold" style="font-size: 17px; font-weight: 600;"> {{$title}} </p>
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                        <ul class="p-3 space-y-1 text-sm  text-right text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                                            <li>
                                                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <input data-value="month" {{$filter === 'month' ? 'checked' : ''  }} id="filter-radio-example-4" type="radio" value="This Month" onclick="dropdownRadio('filter-radio-example-4')" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">This Month</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <input data-value="3month" {{$filter === '3month' ? 'checked' : ''  }}  id="filter-radio-example-1" type="radio" value="3 Month"  onclick="dropdownRadio('filter-radio-example-1')" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">3 Month</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <input data-value="6month" {{$filter === '6month' ? 'checked' : ''  }}  id="filter-radio-example-2" type="radio" value="6 Month"  onclick="dropdownRadio('filter-radio-example-2')" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">6 Month</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <input data-value="12month" {{$filter === '12month' ? 'checked' : ''  }}  id="filter-radio-example-3" type="radio" value="Year"  onclick="dropdownRadio('filter-radio-example-3')" name="filter-radio" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Year</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p> --}}
                    </caption>
                    <div>
                        <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center" width="15%">
                                    <div class="inline-flex items-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.3966 2.15195L17.2806 1M17.4159 3.54862L21 1.50215M18.0282 5.43306H19.8642M5.88967 16.5V22.9114C5.88967 22.9858 5.97361 23.0269 6.0299 22.9802L9.57224 20.0376C9.60527 20.0101 9.65286 20.0115 9.68429 20.0409L11.4996 21.7353M13.1325 16.5V21.1417M16.8039 8.36575C16.8039 12.2794 13.7138 15.452 9.90197 15.452C6.09012 15.452 3 12.2794 3 8.36575C3 4.45213 6.09012 1.27952 9.90197 1.27952C13.7138 1.27952 16.8039 4.45213 16.8039 8.36575ZM10.9501 6.33578L13.3654 6.12305C13.6308 6.09966 13.7697 6.43163 13.5662 6.59518C12.6737 7.31233 11.6665 8.27365 11.8663 8.70932C12.1903 9.41563 13.3243 12.0054 12.5953 11.9269C11.8663 11.8485 10.0843 9.8865 9.59833 10.2004C9.11233 10.5143 7.16833 12.8687 6.76333 11.9269C6.35833 10.9852 8.22133 9.33715 7.57333 8.70932C6.92533 8.08149 5.06234 7.06127 6.19634 6.82583C6.97109 6.66498 7.80097 6.60716 8.26221 6.5937C8.38164 6.59022 8.48565 6.51455 8.51826 6.40537C8.83839 5.33369 9.47448 3.64364 9.84134 4.23604C10.1802 4.78329 10.5027 5.64856 10.6693 6.15616C10.7071 6.27124 10.8238 6.34691 10.9501 6.33578Z" stroke="black" stroke-linecap="round"/>
                                        </svg>
                                        <div class="ml-2" style="font-size: 18px">
                                            Ranking
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="inline-flex items-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.6747 19.0498V22.947C15.6747 22.9915 15.7233 23.0161 15.756 22.9881L17.8089 21.2269C17.828 21.2105 17.8556 21.2114 17.8738 21.2289L18.9259 22.243M19.8722 19.0498V21.8878M10.3034 9.40148C10.5053 9.37414 15.394 8.7794 15.1904 4.63217C15.1717 4.25113 15.1195 3.90451 15.0385 3.59029M10.3034 9.40148C12.9829 9.24001 14.3445 8.28275 14.9539 7.1355M10.3034 9.40148C9.97921 9.44538 9.64487 9.44188 9.31412 9.39412M15.0385 3.59029C14.9371 3.1969 14.7905 2.8543 14.6074 2.55856M15.0385 3.59029C15.4036 4.51244 15.5947 5.92903 14.9539 7.1355M14.6074 2.55856C13.1065 0.133973 9.15933 0.858312 7.65628 2.55856C7.0665 3.22629 5.83043 4.91967 6.4328 7.0364C6.8104 8.36328 8.03545 9.20948 9.31412 9.39412M14.6074 2.55856C15.1785 3.29024 16.0071 5.00372 15.2987 6.55765M14.9539 7.1355C15.0956 6.94695 15.2094 6.75356 15.2987 6.55765M9.31412 9.39412C11.005 9.66237 14.569 9.47062 15.2987 6.55765M13 12.6281H6.81996C5.05862 12.6281 3.44845 13.5357 2.66075 14.9725L2.48235 15.2979C1.9308 16.3039 1.79587 17.4917 2.37589 18.4843C4.14616 21.5139 7.207 22.8099 10.3034 22.8876M22 14.2412C22 16.5836 20.2091 18.4824 18 18.4824C15.7909 18.4824 14 16.5836 14 14.2412C14 11.8989 15.7909 10 18 10C20.2091 10 22 11.8989 22 14.2412ZM18.6074 13.0262L20.0072 12.8989C20.161 12.8849 20.2416 13.0836 20.1236 13.1815C19.6063 13.6107 19.0226 14.1861 19.1384 14.4468C19.3262 14.8696 19.9834 16.4196 19.5609 16.3726C19.1384 16.3257 18.1057 15.1514 17.824 15.3393C17.5424 15.5272 16.4157 16.9363 16.181 16.3726C15.9463 15.809 17.026 14.8226 16.6504 14.4468C16.2749 14.0711 15.1952 13.4605 15.8524 13.3195C16.3014 13.2233 16.7824 13.1887 17.0497 13.1806C17.1189 13.1785 17.1792 13.1332 17.1981 13.0679C17.3836 12.4265 17.7523 11.415 17.9649 11.7695C18.1613 12.0971 18.3482 12.6149 18.4447 12.9187C18.4666 12.9876 18.5342 13.0329 18.6074 13.0262Z" stroke="black" stroke-linecap="round"/>
                                        </svg>
                                        <div class="ml-2" style="font-size: 18px">
                                            User
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    <div class="inline-flex items-center">
                                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.00326 18.2696L7.22741 17.5103L6.82558 17.6729M7.00326 18.2696L6.94379 18.4711C6.98681 18.4962 7.03497 18.5247 7.08844 18.5557M7.00326 18.2696L6.82558 17.6729M7.00326 18.2696L7.01437 18.307M21.5539 19.2823L21.5502 19.3155C20.2498 19.5422 18.9989 19.6395 17.8762 19.659M21.5539 19.2823L21.6353 18.5585C21.6518 18.55 21.8034 18.5206 22 18.5097M21.5539 19.2823L21.7772 4.55322M21.5539 19.2823L21.5512 19.4608C21.5507 19.4939 21.5271 19.5211 21.4949 19.5235C20.6129 19.5892 19.259 19.656 17.8762 19.659M18.9695 7.90142C19.064 8.28964 19.0262 9.03697 18.1186 8.92051C17.211 8.80404 17.6081 7.1735 18.4306 7.37732M15.1122 5.36868C16.5208 5.51426 19.7011 5.67731 21.1532 5.16486M21.5503 4C18.6025 4.18341 15.4313 4.17502 14.1512 4.14695C14.1171 4.1462 14.0901 4.17369 14.0889 4.20868L13.554 19.2363C13.553 19.2657 13.5704 19.2918 13.598 19.2996C13.776 19.3498 13.9762 19.3938 14.1945 19.4321M15.5 17.968C16.5872 17.9777 18.9999 17.9506 19.9528 17.7642M7.01437 18.307C7.55172 16.2732 10.0509 8.29687 11.2263 4.58243L13.9491 5.54329M7.01437 18.307C6.99852 18.367 6.98438 18.4218 6.97203 18.4712C7.00566 18.4897 7.04187 18.509 7.08048 18.5289M7.01437 18.307L7.08048 18.5289M7.08048 18.5289C7.7907 18.896 9.31216 19.4782 10.5173 19.2573L13.8356 6.97001M7.08048 18.5289L7.08844 18.5557M9.38382 9.0077L7.93261 7.82707C7.92257 7.81891 7.9109 7.81445 7.89909 7.81344M1.49921 17.1895L7.84273 7.84065C7.8463 7.83539 7.8505 7.83085 7.85514 7.82707M7.89909 7.81344C7.8835 7.81212 7.86768 7.81684 7.85514 7.82707M7.89909 7.81344L7.85514 7.82707M7.89909 7.81344L10.4324 7.02803M1.24328 17.6557L3.23692 19.1259M3.23692 19.1259L3.25697 19.1407L3.27659 19.1098M3.23692 19.1259L3.20002 19.1408M3.23692 19.1259L3.27659 19.1098M3.27659 19.1098L9.49659 9.32828M3.27659 19.1098L3.50437 19.0176M22 18.5097L21.8994 19.6829M22 18.5097C22.0878 18.5049 22.1847 18.5037 22.2824 18.5097M21.8994 19.6829C21.9922 19.6685 22.0793 19.6536 22.1606 19.638M21.8994 19.6829C20.4375 19.9093 17.585 19.9926 14.2333 19.9995M22.5 18.5368L22.4577 19.5718M22.5 18.5368C22.4292 18.5228 22.3556 18.5142 22.2824 18.5097M22.5 18.5368C22.602 18.557 22.6981 18.5886 22.7783 18.6361M22.4577 19.5718C22.3697 19.595 22.2705 19.617 22.1606 19.638M22.4577 19.5718C22.5577 19.5454 22.6432 19.5177 22.7134 19.4884M22.1606 19.638L22.2824 18.5097M22.7783 18.6361C22.9715 18.7504 23.0723 18.9564 22.9399 19.3155C22.9168 19.3783 22.8397 19.4358 22.7134 19.4884M22.7783 18.6361L22.7134 19.4884M1.27415 18.722C0.895538 19.1168 0.792968 19.5599 1.73543 19.7504M1.27415 18.722C1.33972 19.0382 1.52377 19.6866 1.73543 19.7504M1.27415 18.722C1.37866 18.6131 1.5042 18.5078 1.63459 18.4125M1.73543 19.7504C1.83951 19.7715 1.95634 19.7894 2.08695 19.8039M1.89538 18.2382C1.80945 18.2907 1.72096 18.3494 1.63459 18.4125M1.89538 18.2382L2.40071 19.8302M1.89538 18.2382L2.37639 18.571M1.63459 18.4125L2.08695 19.8039M2.08695 19.8039C2.18381 19.8146 2.28826 19.8235 2.40071 19.8302M2.40071 19.8302L2.73859 19.8383M2.37639 18.571L2.73859 19.8383M2.37639 18.571L2.7882 18.8559M2.73859 19.8383L3.07692 19.8462M2.7882 18.8559L3.20002 19.1408M2.7882 18.8559L3.07692 19.8462M3.20002 19.1408L3.35933 19.8528M3.07692 19.8462L3.35933 19.8528M3.35933 19.8528L3.71376 19.8609M3.71376 19.8609L3.50437 19.0176M3.71376 19.8609L4.19228 19.8717M3.5 19L3.50437 19.0176M3.50437 19.0176L3.90376 18.8559M3.90376 18.8559L4.19228 19.8717M3.90376 18.8559L4.22796 18.7246M4.19228 19.8717L4.58294 19.8803M4.22796 18.7246L4.58294 19.8803M4.22796 18.7246L4.55703 18.5914M4.58294 19.8803L5 19.8892M4.55703 18.5914L5 19.8892M4.55703 18.5914L4.95629 18.4298M5 19.8892L5.45306 19.8987M4.95629 18.4298L5.45306 19.8987M4.95629 18.4298L5.34554 18.2722M5.45306 19.8987L5.93673 19.9085M5.34554 18.2722L5.93673 19.9085M5.34554 18.2722L5.71687 18.1218M5.93673 19.9085L6.39335 19.9175M5.71687 18.1218L6.39335 19.9175M5.71687 18.1218L6.09675 17.968M6.39335 19.9175L6.79346 19.925M6.09675 17.968L6.79346 19.925M6.09675 17.968L6.42374 17.8356M6.79346 19.925L7.1818 19.9321M6.42374 17.8356L7.1818 19.9321M6.42374 17.8356L6.82558 17.6729M7.1818 19.9321L7.5 19.9378M7.5 19.9378L7.08844 18.5557M7.5 19.9378L7.87385 19.9441M7.08844 18.5557C7.20142 18.6211 7.33809 18.6976 7.5 18.7766M7.5 18.7766L7.87385 19.9441M7.5 18.7766C7.6318 18.8409 7.78033 18.9068 7.94642 18.9698M7.87385 19.9441L8.25504 19.9504M7.94642 18.9698L8.25504 19.9504M7.94642 18.9698C8.07484 19.0185 8.21376 19.0655 8.36355 19.1086M8.25504 19.9504L8.65548 19.9566M8.36355 19.1086L8.65548 19.9566M8.36355 19.1086C8.50694 19.1498 8.6603 19.1874 8.82397 19.2197M8.65548 19.9566L9.03621 19.9622M8.82397 19.2197L9.03621 19.9622M8.82397 19.2197C8.93525 19.2416 9.0513 19.261 9.17223 19.2773M9.03621 19.9622L9.43994 19.9679M9.17223 19.2773L9.43994 19.9679M9.17223 19.2773C9.28975 19.2931 9.41187 19.306 9.53868 19.3155M9.43994 19.9679L9.79881 19.9725M9.53868 19.3155L9.79881 19.9725M9.53868 19.3155C9.65534 19.3242 9.77596 19.33 9.90064 19.3324M9.79881 19.9725L10.1611 19.977M9.90064 19.3324L10.1611 19.977M9.90064 19.3324C10.0336 19.335 10.1711 19.3337 10.3133 19.3282M10.1611 19.977L10.5173 19.981M10.3133 19.3282C10.3894 19.3252 10.4669 19.321 10.5458 19.3155M10.3133 19.3282L10.5173 19.981M10.5458 19.3155L10.7225 19.2197M10.5458 19.3155L10.7225 19.9831M10.5173 19.981L10.7225 19.9831M10.7225 19.2197L10.9614 19.9855M10.7225 19.2197L10.925 19.1098M10.9614 19.9855L11.1647 19.9874M10.9614 19.9855L10.7225 19.9831M11.1275 19L11.4187 19.9896M11.1275 19L11.3876 18.8589M11.1275 19L10.925 19.1098M11.4187 19.9896L11.7304 19.9921M11.4187 19.9896L11.1647 19.9874M11.5525 18.7695L11.9653 19.9937M11.5525 18.7695L11.3876 18.8589M11.5525 18.7695L11.8306 18.6187M11.9653 19.9937L11.7304 19.9921M11.9653 19.9937L12.321 19.9959M11.3876 18.8589L11.7304 19.9921M11.1647 19.9874L10.925 19.1098M11.8306 18.6187L12.321 19.9959M11.8306 18.6187L12.1675 18.4359M12.321 19.9959L12.715 19.9978M12.1675 18.4359L12.715 19.9978M12.1675 18.4359L12.5 18.2556M12.715 19.9978C12.8725 19.9984 13.0292 19.9989 13.185 19.9993M12.5 18.2556L13.185 19.9993M12.5 18.2556L12.8227 18.0806M13.185 19.9993C13.3985 19.9998 13.6103 20 13.8204 20M12.8227 18.0806L13.5 19.9679L13.2176 17.8664M12.8227 18.0806L13.2176 17.8664M13.2176 17.8664L13.5521 17.685V19.3155C13.632 19.3335 13.7216 19.352 13.8204 19.3706M13.8204 20V19.3706M13.8204 20C13.9588 20 14.0965 19.9998 14.2333 19.9995M13.8204 19.3706C13.9334 19.3919 14.0584 19.4134 14.1947 19.4346M14.1947 19.4346C14.2418 19.4419 14.2904 19.4492 14.3402 19.4564M14.1947 19.4346L14.1945 19.4321M14.1947 19.4346L14.2333 19.9995M14.3402 19.4564C14.6688 19.5039 15.0544 19.5487 15.4871 19.5843M14.3402 19.4564C14.4119 19.4677 14.4853 19.4785 14.5603 19.4888M14.3402 19.4564C14.2908 19.4485 14.2422 19.4404 14.1945 19.4321M15.4871 19.5843C16.1767 19.641 16.9861 19.6745 17.8762 19.659M15.4871 19.5843C16.2327 19.6403 17.0595 19.6608 17.8762 19.659M15.4871 19.5843C15.16 19.5597 14.8485 19.5282 14.5603 19.4888M14.5603 19.4888V19.9679" stroke="black" stroke-linecap="round"/>
                                        </svg>
                                        <div class="ml-2" style="font-size: 18px">
                                            Books Read
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    <div class="inline-flex items-center">
                                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.31895 8.59718L3.18854 17.0406M2.52796 18.7602C2.99559 18.886 3.16585 18.0246 3.07511 17.5702M2.52796 18.7602L1.54343 10.0351M2.52796 18.7602L2.5657 19.0947M3.41491 17.6076C6.77984 17.4941 11.3168 15.9418 13.6987 20.7124M4.70103 15.6282C7.0381 15.5416 9.24379 14.614 11.4683 16.3311M4.70103 13.633C7.0381 13.5465 8.97251 12.4077 11.1971 14.1248M7.78188 10.7484C9.16446 10.6944 9.82769 10.4592 11 11.3641M12.0341 20.3717C14.4539 17.2291 17.3651 18.63 22.8095 18.0999M12.9796 19.2362C12.9796 16.813 12.0722 11.55 12.0722 9.88408C12.2487 9.58118 12.7982 8.95266 13.5846 8.86179M12.0351 9.92155C11.5562 8.78567 9.78172 6.74108 6.51509 7.64979C3.3283 8.53629 2.94097 8.05345 2.18676 7.67779C2.16029 7.66461 2.12904 7.68383 2.12696 7.71337C2.10952 7.96075 1.99159 8.4179 1.61813 8.69671C1.607 8.70501 1.60056 8.71836 1.60142 8.73224L1.6744 9.90157C1.67519 9.91415 1.67003 9.92637 1.66047 9.93458L1.54343 10.0351M11.7054 21.6722L11.9477 21.9842C11.9553 21.994 11.967 21.9998 11.9794 21.9998M11.7054 21.6722C11.6988 21.6638 11.6891 21.6583 11.6785 21.657L11.3073 21.6114M11.7054 21.6722L22.6971 19.8401M11.9794 21.9998H13.741C13.7604 21.9998 13.7771 21.9858 13.7806 21.9667L13.8451 21.6114M11.9794 21.9998L13.8451 21.6114M13.8451 21.6114C13.8481 21.5946 13.8615 21.5815 13.8784 21.5788L22.6971 20.1883C22.7184 20.185 22.7332 20.1655 22.7308 20.1441L22.6971 19.8401M22.017 13.633L23 18.328M1.25822 10.0351H1.04023C1.01629 10.0351 0.997653 10.056 1.00024 10.0798L2.12619 20.4535C2.12821 20.4721 2.14275 20.4869 2.16129 20.4891L2.49547 20.5301M1.25822 10.0351L2.49547 20.5301M1.25822 10.0351H1.54343M2.49547 20.5301L2.73094 20.559M2.73094 20.559L11.0417 21.5788M2.73094 20.559L2.7098 20.3717M22.6971 19.8401L22.6613 19.5174M22.6613 19.5174L11.3073 21.6114M22.6613 19.5174L22.6251 19.1909M11.3073 21.6114L11.0417 21.5788M22.6251 19.1909L22.5889 18.8643C22.5862 18.8404 22.5632 18.8241 22.5398 18.8295L13.1356 21.0145C13.1331 21.015 13.1308 21.0158 13.1284 21.0168C13.0123 21.0672 12.7051 21.1353 12.3757 21.0153L2.5657 19.0947M22.6251 19.1909L12.6308 21.2512M11.0417 21.5788L11.4683 21.4909M2.7098 20.3717L11.4683 21.4909M2.7098 20.3717L2.67276 20.0434M11.4683 21.4909L11.8472 21.4128M11.8472 21.4128L2.67276 20.0434M11.8472 21.4128L12.3095 21.3175M2.67276 20.0434L2.63691 19.7257M2.63691 19.7257L12.3095 21.3175M2.63691 19.7257L2.59867 19.3869M12.3095 21.3175L12.6308 21.2512M12.6308 21.2512L2.59867 19.3869M2.59867 19.3869L2.5657 19.0947M4.33587 9.34158L4.50149 11.5364C4.5094 11.6412 4.5963 11.7227 4.70103 11.7157C5.23489 11.6802 6.29928 11.4708 6.32222 10.5035C6.34514 9.53648 5.37436 9.22124 4.54919 9.13035C4.42757 9.11695 4.32665 9.21939 4.33587 9.34158Z" stroke="black" stroke-opacity="0.3" stroke-linecap="round"/>
                                            <path d="M20.8521 9.88432C18.9763 11.0325 17.7221 8.92287 15.5 11.5M20.5 7.5C18.6242 8.64823 17.7221 6.42287 15.5 9M20 5C18.1242 6.14823 17.2221 4.42287 15 7M22.3164 10.9722C19.908 12.6022 17.4972 10.6824 14.6569 14.2651C14.6116 14.3222 14.5168 14.2987 14.5092 14.2262L13.7016 6.50566C13.6996 6.48704 13.7047 6.46755 13.7151 6.45197C16.4821 2.30283 19.355 4.47537 21.2451 2.03315C21.2907 1.97422 21.3888 1.99795 21.3968 2.07206L22.3515 10.897C22.3547 10.9264 22.3409 10.9556 22.3164 10.9722Z" stroke="black" stroke-linecap="round"/>
                                        </svg >
                                        <div class="ml-2" style="font-size: 18px">
                                            Pages Read
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getLeaderBoard as $key => $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="text-base text-center">
                                        {{$key + 1}}
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                        <div class="flex items-center">
                                            <p class="ml-1">{{$item->name}}</p>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        <span class="text-base me-2">{{$item->user_want_read->count()}}</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="#" class="font-medium text-black-600 dark:text-black-500 hover:underline">{{$item->user_want_read->sum('challenge.page_start')}}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </div>
                </table>
            </div>
        </section>
    </div>
@endsection

@section('js')
<script>

    function dropdownRadio(id_component)
    {
        $('#select-title').text($('#' + id_component).val());

        var currentUrl = '{!! route('leaderboard.index') !!}';
        var newUrl = '';

        // Navigate to the new URL

        if($('#' + id_component).attr('data-value') === 'month'){
            newUrl = currentUrl + '?type=month' ;
        } else if($('#' + id_component).attr('data-value') === '3month'){
            newUrl = currentUrl + '?type=3month' ;
        } else if($('#' + id_component).attr('data-value') === '6month'){
            newUrl = currentUrl + '?type=6month' ;
        } else if($('#' + id_component).attr('data-value') === '12month'){
            newUrl = currentUrl + '?type=12month' ;
        }

        location.href = newUrl;

    }
</script>

@endsection

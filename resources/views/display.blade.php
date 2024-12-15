<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('node_modules/jquery/dist/jquery.min.js')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('node_modules/apexcharts/dist/apexcharts.css')
    @vite('node_modules/lodash/lodash.min.js')
    @vite('node_modules/apexcharts/dist/apexcharts.min.js')
    @vite('node_modules/preline/dist/helper-apexcharts.js')
</head>

<body class="overflow-hidden h-screen flex flex-col" style="background-color: #ace1af; background-image: radial-gradient(at 40% 80%, #ace1af 0%, transparent 60%), radial-gradient(at 14% 21%, #b0ebb4 0%, transparent 50%), radial-gradient(at 22% 57%, #bff6c3 0%, transparent 40%), radial-gradient(at 85% 85%, #e0fbe2 0%, transparent 30%);">

    <!-- <button onclick="openFullscreen();">Open Fullscreen</button>
    <br>
    <button onclick="closeFullscreen();">Close Fullscreen</button> -->
    <div class="mb-3 flex flex-wrap z-50 w-full text-sm py-2 bg-gradient-to-r from-yellow-100 to-yellow-500">
        <nav class=" w-full mx-auto px-4 md:px-6 lg:px-8">
            <div class="relative md:flex md:items-center md:justify-between">
                <div class="flex items-center justify-between">
                    <a class="flex-none focus:outline-none focus:opacity-80" href="#">
                        <img src="{{ asset('/baznas-logo.png') }}" alt="" class="inline-block w-[62px] p-1">
                    </a>

                    <div class="md:hidden">
                        <button type="button"
                            class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            id="hs-navbar-page-demo-pricing-collapse" aria-expanded="false"
                            aria-controls="hs-navbar-page-demo-pricing" aria-label="Toggle navigation"
                            data-hs-collapse="#hs-navbar-page-demo-pricing">
                            <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" x2="21" y1="6" y2="6" />
                                <line x1="3" x2="21" y1="12" y2="12" />
                                <line x1="3" x2="21" y1="18" y2="18" />
                            </svg>
                            <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                    <h2 class="text-3xl font-bold ml-4" style="color: #3f6228">BAZNAS PROVINSI JAWA TENGAH</h2>
                </div>

                <div
                    class="font-extrabold text-3xl [text-wrap:balance] bg-clip-text text-transparent bg-gradient-to-r from-slate-200 to-slate-200">
                    Terima Kasih <span
                        class="text-green-800 inline-flex flex-col h-[calc(theme(fontSize.3xl)*theme(lineHeight.tight))] md:h-[calc(theme(fontSize.4xl)*theme(lineHeight.tight))] overflow-hidden">
                        <ul class="block animate-text-slide-2 text-left leading-tight [&_li]:block">
                            <li>Muzakki</li>
                            <li>Mustahik</li>
                            <li aria-hidden="true">Muzakki</li>
                        </ul>
                    </span></div>

            </div>
        </nav>
    </div>

    <!-- Leader Information -->
    <div class="w-full px-4 py-1 mx-auto">
        <div class="p-3 flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Title -->
            <div class="mx-auto text-center mb-2">
                <h2 class="text-lg font-bold text-gray-900 dark:text-neutral-200">
                    Informasi Pimpinan BAZNAS Provinsi Jawa Tengah
                </h2>
            </div>
            <!-- End Title -->

            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="align-middle">
                        <div
                            class="border-2 border-green-950 rounded-md shadow overflow-hidden dark:border-neutral-700 dark:shadow-gray-900">
                            <table class="min-w-full text-center divide-y divide-gray-200 dark:divide-neutral-700">
                                <tbody class="divide-y-2 divide-green-950 dark:divide-neutral-700">
                                    <tr
                                        class="divide-x-2 divide-green-950 font-bold text-lg bg-gradient-to-t from-slate-50 to-green-100">
                                        <td
                                            class="py-2 bg-gradient-to-t from-emerald-700 to-[#3f6228] bg-clip-text text-transparent">
                                            KETUA</td>
                                        <td
                                            class="py-2 bg-gradient-to-t from-emerald-700 to-[#3f6228] bg-clip-text text-transparent">
                                            WAKIL KETUA I</td>
                                        <td
                                            class="py-2 bg-gradient-to-t from-emerald-700 to-[#3f6228] bg-clip-text text-transparent">
                                            WAKIL KETUA II</td>
                                        <td
                                            class="py-2 bg-gradient-to-t from-emerald-700 to-[#3f6228] bg-clip-text text-transparent">
                                            WAKIL KETUA III</td>
                                        <td
                                            class="py-2 bg-gradient-to-t from-emerald-700 to-[#3f6228] bg-clip-text text-transparent">
                                            WAKIL KETUA IV</td>
                                        <td
                                            class="py-2 bg-gradient-to-t from-emerald-700 to-[#3f6228] bg-clip-text text-transparent">
                                            SEKRETARIS</td>
                                    </tr>
                                    <tr class="divide-x-2 divide-green-950 text-white font-bold text-lg">
                                        <td class="py-1 bg-gradient-to-t from-red-500 to-red-800">TIDAK ADA</td>
                                        <td class="py-1 bg-gradient-to-t from-red-500 to-red-800">TIDAK ADA</td>
                                        <td class="py-1 bg-gradient-to-t from-red-500 to-red-800">TIDAK ADA</td>
                                        <td class="py-1 bg-gradient-to-t from-red-500 to-red-800">TIDAK ADA</td>
                                        <td class="py-1 bg-gradient-to-t from-red-500 to-red-800">TIDAK ADA</td>
                                        <td class="py-1 bg-gradient-to-t from-green-500 to-green-700">ADA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <div class="w-full px-4 py-1 mx-auto flex justify-center gap-x-3">
        <!-- Card -->
        <div
            class="p-3 flex flex-col w-1/2 bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-bold text-gray-900 dark:text-neutral-500">
                        Penghimpunan 2024
                    </h2>
                </div>
               <p
                class="inline-flex items-center py-1.5 px-3 rounded-md text-2xl font-bold bg-yellow-100 text-yellow-800 dark:bg-teal-800/30 dark:text-teal-500"><span class="font-medium text-lg">Rp</span>80.000.000.000</p>
            </div>
            <!-- End Header -->

            <div id="chart"></div>
        </div>
        <!-- End Card -->
        <!-- Card -->
        <div
            class="p-3 flex flex-col w-1/2 bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-bold text-gray-900 dark:text-neutral-500">
                        Pendistribusian 2024
                    </h2>
                </div>
                <p
                    class="inline-flex items-center py-1.5 px-3 rounded-md text-2xl font-bold bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500"><span class="font-medium text-lg">Rp</span>80.000.000.000</p>
            </div>
            <!-- End Header -->

            <div id="chart2"></div>
        </div>
        <!-- End Card -->

    </div>

    <div class="w-full px-4 py-1 mx-auto flex justify-center overflow-auto gap-x-3">
        <div class="p-3 flex flex-col w-full bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="flex justify-center items-center p-1">
                <div>
                    <h2 class="text-lg font-bold text-gray-900 dark:text-neutral-500">
                       Detail Penghimpunan dan Pendistribusian Tahun 2024
                    </h2>
                </div>
            </div>
            <!-- End Header -->

            <div id="scroll-table" class="flex grow flex-row flex-auto overflow-auto [&::-webkit-scrollbar]:w-2
            [&::-webkit-scrollbar-track]:rounded-full
            [&::-webkit-scrollbar-track]:bg-gray-100
            [&::-webkit-scrollbar-thumb]:rounded-full
            [&::-webkit-scrollbar-thumb]:bg-gray-300
            dark:[&::-webkit-scrollbar-track]:bg-neutral-700
            dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead class="sticky top-[-1px] bg-gradient-to-r from-yellow-300 to-yellow-500">
                        <tr class="divide-x-2">
                            <th scope="col"
                                class="px-6 py-3 text-start text-md font-bold text-gray-900 dark:text-neutral-500 ">
                                Bulan</th>
                            <th scope="col"
                                class="px-6 py-3 text-end text-md font-bold text-gray-900 dark:text-neutral-500">
                                Penghimpunan</th>
                            <th scope="col"
                                class="px-6 py-3 text-end text-md font-bold text-gray-900 dark:text-neutral-500">
                                Pendistribusian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                        <tr class="
                        odd:bg-green-100
                        even:bg-green-50
                        [&:nth-child(2)]:*:odd:bg-yellow-100
                        [&:nth-child(2)]:*:even:bg-yellow-50
                        [&:nth-child(3)]:*:odd:bg-teal-100
                        [&:nth-child(3)]:*:even:bg-teal-50
                        dark:odd:bg-neutral-900
                        dark:even:bg-neutral-800">
                            <td
                                class="px-6 py-2 whitespace-nowrap text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Januari
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-yellow-900 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-lg text-end font-bold text-teal-800 dark:text-neutral-200">
                                <span class="font-normal text-sm">Rp</span>6.833.624.620
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="w-1/3 bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Slider -->
            <div data-hs-carousel='{
                "loadingClasses": "opacity-0",
                "isAutoHeight": true,
                "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500",
                "isAutoPlay": true
            }' class="relative">
                <div class="hs-carousel relative overflow-hidden w-full min-h-80 bg-white rounded-lg">
                    <div
                        class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-100 p-6 dark:bg-neutral-900">
                                <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">First
                                    slide</span>
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-200 p-6 dark:bg-neutral-800">
                                <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Second
                                    slide</span>
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-300 p-6 dark:bg-neutral-700">
                                <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Third
                                    slide</span>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button"
                    class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>
                <button type="button"
                    class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                    <span class="sr-only">Next</span>
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </span>
                </button>

                <div
                    class="hs-carousel-info inline-flex justify-center px-4 absolute bottom-3 start-[50%] -translate-x-[50%] bg-white rounded-lg">
                    <span class="hs-carousel-info-current me-1">0</span>
                    /
                    <span class="hs-carousel-info-total ms-1">0</span>
                </div>
            </div>
            <!-- End Slider -->
        </div>
    </div>

    <div class="mt-3 flex flex-row z-50 w-full text-sm py-1 bg-gradient-to-r from-yellow-100 to-yellow-500">
        <div class="w-1/3 bg-green-600 flex px-5 font-semibold text-yellow-400 z-50">
            09:10
        </div>
        <div id="running-text" class="[&_img]:max-w-none animate-infinite-scroll whitespace-nowrap items-center align-middle flex gap-x-3">
            <img src="{{ asset('favicon-32x32.png') }}" alt="divider" class="inline-block size-4 rounded-md bg-white mx-2">
            <span class="text-normal font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.   </span>
            <img src="{{ asset('favicon-32x32.png') }}" alt="divider" class="inline-block size-4 rounded-md bg-white mx-2">
            <span class="text-normal font-medium">Itaque sint fugiat amet! Itaque sint fugiat amet!Itaque sint fugiat amet!Itaque sint fugiat amet!Itaque sint fugiat amet!</span>
            <img src="{{ asset('favicon-32x32.png') }}" alt="divider" class="inline-block size-4 rounded-md bg-white mx-2">
            <span class="text-normal font-medium">Perferendis alias temporibus quo nihil officiis hic distinctio enim veritatis dolorem tempore iusto, repudiandae voluptatem quos minima in. </span>
        </div>
    </div>

    <script>

        var elem = document.documentElement;

        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) {
                /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                /* IE11 */
                elem.msRequestFullscreen();
            }
        }

        function closeFullscreen() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
                /* Safari */
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) {
                /* IE11 */
                document.msExitFullscreen();
            }
        }


    </script>

    <script type="module">
        var options = {
          series: [
          {
            name: "Penghimpunan 2024",
            data: [
            2300000000, 4400000000, 5500000000,
            5700000000, 5600000000, 6100000000,
            5800000000, 6300000000, 6000000000,
            6600000000, 3400000000, 7800000000,
            ]
          }
        ],
          chart: {
          height: 200,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: '#000',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#845020', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                fontWeight: 'bold',
                colors: ['#845020']
            },
            background: {
                enabled: true,
                foreColor: '#fff',
                padding: 4,
                borderRadius: 2,
                borderWidth: 1,
                borderColor: '#fff',
                opacity: 0.9,
                dropShadow: {
                    enabled: false,
                    top: 1,
                    left: 1,
                    blur: 1,
                    color: '#000',
                    opacity: 0.45
                }
            },
          formatter: (value) => (value >= 1000000000 ? `${value / 1000000000} M` : value),
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
          borderColor: '#e7e7e7',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
                categories: [
                  "Jan",
                  "Feb",
                  "Mar",
                  "Apr",
                  "Mei",
                  "Jun",
                  "Jul",
                  "Agu",
                  "Sep",
                  "Okt",
                  "Nov",
                  "Des",
                ],
                axisBorder: {
                  show: false,
                },
                axisTicks: {
                  show: false,
                },
                crosshairs: {
                  show: false,
                },
                labels: {
                  style: {
                    colors: "#9ca3af",
                    fontSize: "13px",
                    fontFamily: "Inter, ui-sans-serif",
                    fontWeight: 400,
                  },
                  offsetX: -2,
                },
              },
        yaxis: {
                labels: {
                  align: "left",
                  minWidth: 0,
                  maxWidth: 140,
                  style: {
                    colors: "#9ca3af",
                    fontSize: "13px",
                    fontFamily: "Inter, ui-sans-serif",
                    fontWeight: 400,
                  },
                  formatter: (value) => (value >= 1000000000 ? `${value / 1000000000} M` : value),
                },
              },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        var chart2 = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
        chart2.render();
    </script>

    <script type="module">

        const data = await fetchMonthlyCollections((new Date()).getFullYear());
        console.log(data)

        $(document).ready(function() {
            const $item = $('#running-text');
            const clone = $item.clone();
            clone.attr('aria-hidden', 'true');
            $item.after(clone);
        });

        picScroll("#scroll-table");
    </script>
</body>

</html>

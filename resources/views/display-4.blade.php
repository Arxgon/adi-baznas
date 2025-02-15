<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/js/jquery/dist/jquery.min.js')
    @vite('public/js/apexcharts/dist/apexcharts.css')
    @vite('public/js/lodash/lodash.min.js')
    @vite('public/js/apexcharts/dist/apexcharts.min.js')
    @vite('public/js/preline/dist/helper-apexcharts.js')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-hidden"
    style="background-color: #ace1af; background-image: radial-gradient(at 40% 80%, #ace1af 0%, transparent 60%), radial-gradient(at 14% 21%, #b0ebb4 0%, transparent 50%), radial-gradient(at 22% 57%, #bff6c3 0%, transparent 40%), radial-gradient(at 85% 85%, #e0fbe2 0%, transparent 30%);">

    <div class="min-h-screen flex flex-col">
        <header class="flex flex-wrap z-50 w-full py-2 bg-gradient-to-r from-yellow-300 to-yellow-500">
            <nav class="relative max-w-full w-full flex flex-wrap basis-full items-center px-4  mx-auto">
                <div class="md:col-span-3">
                    <!-- Logo -->
                    <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                        href="#" aria-label="Preline">
                        <img src="{{ asset('/baznas-logo.png') }}" alt="" class="inline-block w-[62px] p-1">
                    </a>
                    <!-- End Logo -->
                </div>

                <!-- Title -->
                <div class="flex items-center gap-x-1 md:gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">
                    <h2 class="font-extrabold text-3xl [text-wrap:balance]" style="color: #3f6228">BAZNAS PROVINSI JAWA
                        TENGAH</h2>
                </div>
                <!-- End Title -->

                <!-- Add Ons -->
                <div class="flex items-center gap-x-1 md:gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">
                    <div class="font-extrabold text-xl [text-wrap:balance] text-green-800">
                        Terima Kasih
                        <span
                            class="text-green-800 flex flex-col h-7 overflow-hidden text-center items-center justify-center">
                            <ul class="block animate-text-slide-2 text-left leading-tight [&_li]:block">
                                <li>Muzakki</li>
                                <li>Mustahik</li>
                                <li aria-hidden="true">Muzakki</li>
                            </ul>
                        </span>
                    </div>
                </div>
                <!-- End Add Ons -->
            </nav>
        </header>

        <main class="flex-grow flex flex-col">
            <section class="flex flex-row contain-scroll-table gap-1 p-1">
                <div class="w-full flex flex-col gap-1">
                    <div id="chartContainer" class="flex flex-row gap-1">

                    </div>
                    <div class="flex flex-row gap-1">
                        <div class="w-[30%]">
                            <div class="p-2 flex flex-col bg-white border shadow-sm rounded-xl ">
                                <!-- Title -->
                                <div class="mx-auto text-center">
                                    <h2 class="text-sm font-bold text-gray-900 dark:text-neutral-200">
                                        Pimpinan BAZNAS Prov. Jawa Tengah
                                    </h2>
                                    <h2 id="date-now" class="text-base font-bold text-gray-900 dark:text-neutral-200">
                                        Selasa, 5 November {{ date('Y') }}
                                    </h2>
                                </div>
                                <!-- End Title -->

                                <div class="flex flex-col">
                                    <div class="overflow-x-auto">
                                        <div class="align-middle">
                                            <div class="border-2 border-green-950 rounded-md shadow overflow-hidden">
                                                <table id="attendanceTable"
                                                    class="min-w-full text-center divide-y divide-gray-200">
                                                    <tbody class="divide-y-2 divide-green-950">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grow">
                            <div id="carousel-container"
                                class="bg-white border h-full shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <div class="p-3 flex flex-col bg-white border shadow-sm rounded-xl">
                        <!-- Header -->
                        <div class="flex justify-center items-center p-1">
                            <div>
                                <h2 class="text-normal font-bold text-gray-900">
                                    Detail Penghimpunan dan Pendistribusian Tahun {{ date('Y') }}
                                </h2>
                            </div>
                        </div>
                        <!-- End Header -->

                        <div id="scroll-table" class="
                                                    flex grow flex-row flex-auto overflow-auto
                                                    [&::-webkit-scrollbar]:w-2
                                                    [&::-webkit-scrollbar-track]:rounded-full
                                                    [&::-webkit-scrollbar-track]:bg-gray-100
                                                    [&::-webkit-scrollbar-thumb]:rounded-full
                                                    [&::-webkit-scrollbar-thumb]:bg-gray-300
                                                    ">
                            <table id="monthlyDataTable" class="grow divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead class="sticky top-[-1px] bg-gradient-to-r from-yellow-300 to-yellow-500">
                                    <tr class="divide-x-2">
                                        <th scope="col" class="px-6 py-3 text-start text-normal font-bold text-gray-900 ">
                                            Bulan</th>
                                        <th scope="col" class="px-6 py-3 text-end text-normal font-bold text-gray-900">
                                            Penghimpunan</th>
                                        <th scope="col" class="px-6 py-3 text-end text-normal font-bold text-gray-900">
                                            Pendistribusian</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Social Media Section --}}
                    <div class="p-2 flex h-full flex-col bg-white border shadow-sm rounded-xl justify-center items-center">
                        <!-- List -->
                        <div class="space-y-1">
                            <dl class="flex flex-col sm:flex-row gap-1">
                                <dt class="min-w-32 flex flex-row items-center">
                                    <span
                                        class="inline-flex justify-center items-center w-[40px] rounded-full text-green-800 dark:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-phone">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                        </svg>
                                    </span>
                                    <span class="block text-sm text-gray-500 dark:text-neutral-500">Telp.</span>
                                </dt>
                                <dd class="flex flex-row items-center">
                                    <ul>
                                        <li
                                            class="me-1inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                            :
                                            024-76444206
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="flex flex-col sm:flex-row gap-1">
                                <dt class="min-w-32 flex flex-row items-center">
                                    <span
                                        class="inline-flex justify-center items-center w-[40px] rounded-full text-green-800 dark:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-printer-check">
                                            <path d="M13.5 22H7a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v.5" />
                                            <path d="m16 19 2 2 4-4" />
                                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v2" />
                                            <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
                                        </svg>
                                    </span>
                                    <span class="block text-sm text-gray-500 dark:text-neutral-500">Fax</span>
                                </dt>
                                <dd class="flex flex-row items-center">
                                    <ul>
                                        <li
                                            class="me-1inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                            :
                                            024-76440191
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="flex flex-col sm:flex-row gap-1">
                                <dt class="min-w-32 flex flex-row items-center">
                                    <span
                                        class="inline-flex justify-center items-center w-[40px] rounded-full text-green-800 dark:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-mail">
                                            <rect width="20" height="16" x="2" y="4" rx="2" />
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                        </svg>
                                    </span>
                                    <span class="block text-sm text-gray-500 dark:text-neutral-500">E-mail</span>
                                </dt>
                                <dd class="flex flex-row items-center">
                                    <ul>
                                        <li
                                            class="me-1inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                            :
                                            baznasprov.jateng@baznas.go.id
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="flex flex-col sm:flex-row gap-1">
                                <dt class="min-w-32 flex flex-row items-center">
                                    <span
                                        class="inline-flex justify-center items-center w-[40px] rounded-full text-green-800 dark:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                        </svg>
                                    </span>
                                    <span class="block text-sm text-gray-500 dark:text-neutral-500">Whats App</span>
                                </dt>
                                <dd class="flex flex-row items-center">
                                    <ul>
                                        <li
                                            class="me-1inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                            :
                                            082250004491
                                        </li>
                                    </ul>
                                </dd>
                            </dl>


                        </div>
                        <!-- End List -->
                    </div>
                </div>
            </section>
        </main>

        {{-- Button (hidden) for Video Modals --}}
        <button type="button"
            class="py-3 hidden px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
            aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-full-screen-modal"
            data-hs-overlay="#hs-full-screen-modal">
            Full screen
        </button>
        <button type="button"
            class="py-3 hidden px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
            aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-splash-screen-modal"
            data-hs-overlay="#hs-splash-screen-modal">
            Full screen
        </button>

        <footer class="flex flex-row z-50 w-full text-sm py-1 bg-gradient-to-r from-yellow-100 to-yellow-500">
            <div id="time-now"
                class="w-1/12 text-center items-center justify-center bg-green-600 flex px-5 font-semibold text-yellow-400 z-50">
                09:10
            </div>
            <marquee id="running-text" class="w-full">

            </marquee>
            {{-- <div id="running-text"
                class="[&_img]:max-w-none animate-infinite-scroll whitespace-nowrap items-center align-middle flex gap-x-3">

            </div> --}}
        </footer>
    </div>

    {{-- Modals --}}
    <div id="hs-full-screen-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-full-screen-label">
        <div
            class="hs-overlay-open:mt-0 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-10 opacity-0 transition-all max-w-full max-h-full h-full">
            <div class="flex flex-col bg-white pointer-events-auto max-w-full max-h-full h-full">
                {{-- video --}}
                <video id="fullscreen-video" class="w-full h-full object-cover">
                    <source src="{{ asset('/example.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <div id="hs-splash-screen-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-splash-screen-label">
        <div
            class="hs-overlay-open:mt-0 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-10 opacity-0 transition-all max-w-full max-h-full h-full">
            <div class="flex flex-col bg-white pointer-events-auto max-w-full max-h-full h-full">
                <div id="splash-screen" class="h-full flex flex-col items-center justify-center bg-gray-800 text-white">
                    <h1 class="text-4xl font-bold mb-4">Selamat Datang!</h1>
                    <p class="text-lg mb-8">Tekan tombol di bawah untuk mulai.</p>
                    <button id="start-button"
                        class="px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow-lg transition duration-300">
                        Mulai Tampilkan Layar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        // Todo: beberapa fungsi belum ada error handle/ missing data handler
        // Slider control
        const adsContainer = 'carousel-container';
        const videoId = 'fullscreen-video';

        const image = await fetchAds();
        const videoData = await fetchVid();

        await populateAds(image, adsContainer);
        await changeVideoSource(videoData, videoId);

        // modal control
        const video = document.getElementById(videoId);
        const modal = document.getElementById('hs-full-screen-modal');
        const splash = document.getElementById('hs-splash-screen-modal');

        HSOverlay.open(splash);

        $(`#${videoId}`).trigger('click');

        video.addEventListener('ended', function() {
            HSOverlay.close(modal);
        });

        function openModal() {
            HSOverlay.open(modal);
            document.getElementById(videoId).click();
            // video.muted = true;
            video.play();

        }

        if(videoData !== null){
            setInterval(openModal, 1000 * (60 * videoData.break));
        } else {
            setInterval(openModal, 1000 * (60));
        }

        $(document).ready(async function () {
            destroyAllCharts();

            const year = (new Date()).getFullYear();
            const tableId = 'monthlyDataTable';
            const chartElementId = 'chartContainer';
            const attendanceTableId = 'attendanceTable';
            const runningTextContainer = 'running-text';

            function populateTime() {
                $('#time-now').text('');
                $('#time-now').text(getCurrentTimeShort());
            }

            function populateDate() {
                $('#date-now').text('');
                $('#date-now').text(getFormattedDate());
            }

            async function fetchMoneyData() {
                try {
                    const data = await fetchMonthlyData(year);
                    const attendanceData = await fetchAttendanceLeaders();
                    const news = await fetchRunningText();

                    await populateTable(data, tableId);
                    destroyAllCharts();
                    await populateChart(chartElementId, data.accumulatedCollections, data.accumulatedDistributions);
                    await populateAttendance(attendanceData, attendanceTableId);
                    await populateRunningText(news, runningTextContainer);
                    populateDate();
                    populateTime();

                    console.log('data refreshed in: ' + getCurrentTimeShort());

                } catch (error) {
                    console.error("Error fetching and displaying data:", error);
                }
            }

            await fetchMoneyData();

            // interval use ms, 1 minutes = 10000
            setInterval(fetchMoneyData, 1000 * 60);
            setInterval(populateTime, 1000 * 30);

            document.getElementById('start-button').addEventListener('click', function() {
                HSOverlay.close(splash);

                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) { // Firefox
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari, and Opera
                    document.documentElement.webkitRequestFullscreen();
                } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
                    document.documentElement.msRequestFullscreen();
                }
            });


            // listener
            window.Echo.channel('attendance')
            .listen('ChangeAttendanceEvent', (event) => {
                console.log(event);
                console.log('Attendance data updated:', event.attendanceData);
                populateAttendance(event.attendanceData, attendanceTableId)
            });


        });
    </script>
</body>

</html>

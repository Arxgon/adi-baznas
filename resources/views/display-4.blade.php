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
                                        Selasa, 5 November 2024
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
                                    Detail Penghimpunan dan Pendistribusian Tahun 2024
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
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-normal font-bold text-gray-900 ">
                                            Bulan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-normal font-bold text-gray-900">
                                            Penghimpunan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-normal font-bold text-gray-900">
                                            Pendistribusian</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Social Media Section --}}
                    <div class="p-3 flex h-full flex-col bg-white border shadow-sm rounded-xl">
                        <!-- List -->
                        <div class="space-y-3">
                            <dl class="flex flex-col sm:flex-row gap-1">
                                <dt class="min-w-40">
                                    <span class="block text-sm text-gray-500 dark:text-neutral-500">Website</span>
                                </dt>
                                <dd>
                                    <ul>
                                        <li
                                            class="me-1inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                            :
                                            jateng.baznas.go.id
                                        </li>
                                    </ul>
                                </dd>
                            </dl>

                            <dl class="flex flex-col sm:flex-row gap-1">
                                <dt class="min-w-40">
                                    <span class="block text-sm text-gray-500 dark:text-neutral-500">Kontak</span>
                                </dt>
                                <dd>
                                    <ul>
                                        <li
                                            class="me-1 inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                            :
                                            0822-5000-4491
                                        </li>

                                    </ul>
                                </dd>
                            </dl>

                            <dl class="flex flex-col sm:flex-row gap-1">
                                <dt class="min-w-40">
                                    <span class="block text-sm text-gray-500 dark:text-neutral-500">Instagram</span>
                                </dt>
                                <dd>
                                    <ul>
                                        <li
                                            class="me-1 inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
                                            :
                                            baznasjateng
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

        $(`#${videoId}`).trigger('click');

        video.addEventListener('ended', function() {
            HSOverlay.close(modal);
        });

        function openModal() {
            HSOverlay.open(modal);
            document.getElementById(videoId).click();
            video.muted = true;
            video.play();

        }

        setInterval(openModal, 1000 * (60 * videoData.break));

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
                    await populateChart(chartElementId, data.collections, data.distributions);
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

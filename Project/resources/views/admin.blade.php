<x-app-layout>
    <div class="px-20">
        <div class="w-full min-h-screen bg-gray-50 rounded-md shadow-md py-20 px-10">
            <h1 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mb-10">
                Панель администратора
            </h1>
            <div class="flex gap-10 mb-10">
                <div class="w-1/2">
                    <h2 class="text-xl font-bold text-center mb-10">
                        Добавить товар
                    </h2>

                    <form action="{{ route('model.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Добавить изображение</label>
                            <input name="photo"
                                class="block w-full text-sm text-gray-900 border border-purple-700 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                aria-describedby="file_input_help" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG
                                or GIF (1024х768).</p>
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название</label>
                            <input type="text" name="name"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Цена</label>
                            <input type="number" name="price"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Марка</label>
                            <select name="mark" id="mark"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                                @foreach ($marks as $item)
                                    <option value="{{ $item->id }}"
                                        class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Пробег</label>
                            <input type="text" name="mileage"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Год
                                выпуска</label>
                            <input type="text" name="year"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Тип
                                двигателя</label>
                            <select name="engine" id="engine"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                                <option value="gasoline"
                                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                                    Бензин</option>
                                <option value="diesel"
                                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                                    Дизель</option>
                                <option value="electro"
                                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                                    Электро</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Объем
                                двигателя</label>
                            <input type="text" name="volume"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Мощность</label>
                            <input type="text" name="power"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <button type="submit"
                            class="w-full py-2 bg-purple-700 transition-all hover:bg-purple-600 text-white font-semibold rounded-md">
                            Добавить
                        </button>
                    </form>
                </div>
                <div class="w-1/2">
                    <h2 class="text-xl font-bold text-center mb-10">
                        Заявки
                    </h2>
                    <ul class="flex flex-col gap-5">
                        <li>
                            <a href="НОМЕР ТЕЛЕФОНА ЗАКАЗЧИКА">
                                <div
                                    class="w-full h-14 border border-gray-200 rounded-md flex items-center px-4 transition-all hover:border-purple-700">
                                    <h3 class="text-lg font-semibold mr-2">
                                        Имя дебила | +79995225252 |
                                    </h3>
                                    <p class="text-lg font-semibold text-purple-700">
                                        BMW 8 серии II (G14/G15/G16) Рестайлинг
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-center mb-10">
                    Статистика
                </h2>

                <div class="w-1/2 mx-auto my-0 flex gap-10 mb-10">
                    <!-- Диаграмма заказов за месяц -->
                    <div class="w-full flex gap-10">
                        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                            <div class="flex justify-between">
                                <div>
                                    <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">10
                                    </h5>
                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Заказов за месяц
                                    </p>
                                </div>
                            </div>
                            <div id="area-chart"></div>
                            <div
                                class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                                <div class="flex justify-between items-center pt-5">
                                    <!-- Button -->
                                    <p>
                                        Последние 30 дней
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Диаграмма пользователей за месяц -->
                    <div class="w-full flex gap-10">
                        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                            <div class="flex justify-between">
                                <div>
                                    <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">
                                        {{ $newUsersCount }}</h5>
                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Пользователей за
                                        месяц</p>
                                </div>
                            </div>
                            <div id="area-chart-users"></div>
                            <div
                                class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                                <div class="flex justify-between items-center pt-5">
                                    <!-- Button -->
                                    <p>
                                        Последние 30 дней
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a href="#!">
                <button
                    class="px-4 py-2 bg-purple-700 transition-all hover:bg-purple-600 text-white rounded-md block mx-auto my-0">Скачать
                    отчёт в Excel</button>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
        const options = {
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "area",
                fontFamily: "Inter, sans-serif",
                dropShadow: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            fill: {
                type: "gradient",
                gradient: {
                    opacityFrom: 0.55,
                    opacityTo: 0,
                    shade: "#1C64F2",
                    gradientToColors: ["#1C64F2"],
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 6,
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: 0
                },
            },
            series: [{
                name: "New users",
                data: [6500, 6418, 6456, 6526, 6356, 6456],
                color: "#1A56DB",
            }, ],
            xaxis: {
                categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February',
                    '07 February'
                ],
                labels: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                show: false,
            },
        }

        const options_users = {
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "area",
                fontFamily: "Inter, sans-serif",
                dropShadow: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            fill: {
                type: "gradient",
                gradient: {
                    opacityFrom: 0.55,
                    opacityTo: 0,
                    shade: "#1C64F2",
                    gradientToColors: ["#1C64F2"],
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 6,
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: 0
                },
            },
            series: [{
                name: "New users",
                data: @json($newUsersData->pluck('count')), // Данные о количестве пользователей
                color: "#1A56DB",
            }],
            xaxis: {
                categories: @json($newUsersData->pluck('date')), // Даты регистрации
                labels: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                show: false,
            },
        };


        if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("area-chart"), options);
            chart.render();
        }

        if (document.getElementById("area-chart-users") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("area-chart-users"), options_users);
            chart.render();
        }
    </script>
</x-app-layout>

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

                    <form>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Добавить изображение</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-purple-700 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                aria-describedby="file_input_help" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG
                                or GIF (1024х768).</p>
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название</label>
                            <input type="text"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Пробег</label>
                            <input type="text"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Год
                                выпуска</label>
                            <input type="text"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Тип
                                двигателя</label>
                            <input type="text"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Объем
                                двигателя</label>
                            <input type="text"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Мощность</label>
                            <input type="text"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

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
                                    <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">20
                                    </h5>
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
</x-app-layout>

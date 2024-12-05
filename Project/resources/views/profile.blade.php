<x-app-layout>
    <div class="px-20">
        <div class="w-full min-h-screen bg-gray-50 rounded-md shadow-md py-20 px-10">
            <h1 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mb-10">
                Личный кабинет
            </h1>
            <div class="flex justify-center gap-10">
                <div class="w-1/3">
                    <div class="w-full !h-64 border border-gray-200 rounded-md p-5 mb-10">
                        <p class="text-2xl font-semibold mb-2">
                            {{ Auth::user()->name }}
                        </p>
                        <p class="text-2xl font-semibold mb-4">
                            {{ Auth::user()->email }}
                        </p>
                        <div class="mb-2">
                            <a href="{{ route('profile.edit') }}">
                                <button
                                    class="text-lg px-4 py-2 bg-purple-700 transition-all hover:bg-purple-600 text-white font-semibold rounded-md">
                                    Редактировать
                                </button>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <button
                                    class="text-lg px-4 py-2 bg-purple-700 transition-all hover:bg-purple-600 text-white font-semibold rounded-md"
                                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                    Выйти
                                </button>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @if ($delivered_orders->count())
                        <div class="border border-gray-200 rounded-md p-5 mb-10">
                            <h2 class="text-2xl font-semibold mb-5">
                                Завершённые заказы
                            </h2>
                            <ul class="flex flex-col gap-5">
                                @foreach ($delivered_orders as $item)
                                    <li>
                                        <div class="p-4 border border-gray-200 rounded-md">
                                            <div class="flex items-center gap-5 mb-5">
                                                <div class="w-1/3">
                                                    <img src="{{ asset('storage/' . $item->car->photo) }}"
                                                        alt=""
                                                        class="w-full rounded-md shadow-md border border-black/40">
                                                </div>
                                                <div class="break-words w-2/3">
                                                    <h3 class="font-semibold">
                                                        {{ $item->car->name }}
                                                    </h3>
                                                    <p class="font-semibold text-purple-700 mb-5">
                                                        {{ $item->car->price }} ₽
                                                    </p>
                                                    <p class="font-medium text-black/70">
                                                        Дата доставки: {{ $item->updated_at->format('Y-m-d') }}
                                                    </p>
                                                </div>
                                            </div>
                                            <button data-modal-target="default-modal-{{ $item->id }}"
                                                data-modal-toggle="default-modal-{{ $item->id }}"
                                                class="w-full py-2 bg-purple-700 text-white rounded-md transition-all hover:bg-purple-600">
                                                Оставить отзыв
                                            </button>
                                            {{-- <p class="text-purple-700 font-bold text-xl">
                                            Оценка: 4/5
                                        </p> --}}
                                            <!-- Modal -->
                                            <div id="default-modal-{{ $item->id }}" tabindex="-1"
                                                aria-hidden="true"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                            <h3
                                                                class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                Terms of Service
                                                            </h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                data-modal-hide="default-modal">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="p-4 md:p-5 space-y-4">
                                                            <form class="flex flex-col"
                                                                action="{{ route('comment.upload') }}" method="POST">
                                                                @csrf
                                                                <label>Оцените заказ</label>
                                                                <select name="point"
                                                                    class="mb-5 focus:!ring-purple-700 focus:!ring-2 focus:border-purple-700 rounded-md">
                                                                    <option selected>Выберите оценку</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                                <label>Ваш отзыв</label>
                                                                <textarea name="comment"
                                                                    class="w-full h-24 focus:!ring-purple-700 focus:!ring-2 focus:border-purple-700 rounded-md mb-5"></textarea>
                                                                <input type="text" name="order_id"
                                                                    value="{{ $item->id }}" class="hidden">
                                                                <button type="submit"
                                                                    class="w-full py-2 font-medium text-lg bg-purple-700 text-white hover:bg-purple-600 rounded-md mb-2">
                                                                    Отправить
                                                                </button>
                                                                <button data-modal-hide="default-modal" type="button"
                                                                    class="py-2 text-lg font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-purple-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                                    Отмена
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="w-1/3 border border-gray-200 rounded-md p-5">
                    <h2 class="text-2xl font-semibold mb-5">
                        Ваши заказы
                    </h2>
                    <ul class="flex flex-col gap-5">
                        @if ($orders->count())
                            @foreach ($orders as $item)
                                <li>
                                    <div class="p-4 border border-gray-200 rounded-md flex items-center gap-5">
                                        <div class="w-1/3">
                                            <img src="{{ asset('storage/' . $item->car->photo) }}" alt=""
                                                class="w-full rounded-md shadow-md border border-black/40">
                                        </div>
                                        <div class="break-words w-2/3">
                                            <h3 class="font-semibold">
                                                {{ $item->car->name }}
                                            </h3>
                                            <p class="font-semibold text-purple-700 mb-5">
                                                {{ $item->car->price }} ₽
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <div>
                                    <p class="text-black/70 font-bold text-xl text-center">
                                        У вас ещё не было заказов
                                    </p>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</x-app-layout>

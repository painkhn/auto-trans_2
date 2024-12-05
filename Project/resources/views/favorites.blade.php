<x-app-layout>
    <div class="px-20">
        <div class="w-full min-h-screen bg-gray-50 rounded-md shadow-md py-20 px-10">
            <h1 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mb-10">
                Избранное
            </h1>
            <ul class="grid grid-cols-3 gap-10">
                @foreach ($favourites as $car)
                    <li>
                        <a href="{{ route('cars.show', $car->id) }}">
                            <div class="p-5 border border-transparent transition-all hover:border-gray-200 rounded-md">
                                <img src="{{ asset('storage/' . $car->photo) }}" alt="{{ $car->name }}"
                                    class="w-full mb-2">
                                <h2 class="text-2xl text-gray-800 font-bold mb-4">
                                    {{ $car->name }}
                                </h2>
                                <p class="text-2xl text-purple-700 font-bold mb-4">
                                    {{ number_format($car->price, 0, ',', ' ') }} ₽
                                </p>
                            </div>
                        </a>
                        <button type="button" data-modal-target="default-modal-{{ $car->id }}"
                            data-modal-toggle="default-modal-{{ $car->id }}"
                            class="w-full py-4 bg-purple-700 transition-all hover:bg-purple-600 text-white font-semibold rounded-md mt-5">
                            Заказать
                        </button>
                    </li>
                    <div id="default-modal-{{ $car->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Заполните форму и мы вам перезвоним
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <div class="p-4 md:p-5 space-y-4">
                                    <form class="max-w-xl mx-auto my-0 flex flex-col gap-5" method="POST"
                                        action="{{ route('order.upload') }}">
                                        @csrf
                                        <input type="text" value="{{ $car->id }}" name="car_id" class="hidden">
                                        <div class="flex flex-col gap-1">
                                            <label>Номер телефона</label>
                                            <input type="text" name="phone" id="phone-{{ $car->id }}"
                                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base"
                                                placeholder="+7 (___) ___-__-__">
                                        </div>
                                        <button type="submit"
                                            class="w-full h-10 bg-purple-700 text-white rounded-md transition-all hover:bg-purple-600 font-semibold">
                                            Отправить
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
        document.querySelectorAll('[id^="phone-"]').forEach(input => {
            input.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }

                if (value.length <= 1) {
                    value = value.replace(/^(\d{1})/, '+7');
                } else if (value.length <= 4) {
                    value = value.replace(/^(\d{1})(\d{0,3})/, '+7 ($2');
                } else if (value.length <= 7) {
                    value = value.replace(/^(\d{1})(\d{3})(\d{0,3})/, '+7 ($2) $3');
                } else if (value.length <= 9) {
                    value = value.replace(/^(\d{1})(\d{3})(\d{3})(\d{0,2})/, '+7 ($2) $3-$4');
                } else {
                    value = value.replace(/^(\d{1})(\d{3})(\d{3})(\d{2})(\d{0,2})/, '+7 ($2) $3-$4-$5');
                }
                e.target.value = value;
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</x-app-layout>

<x-app-layout>
    <div class="px-20">
        <div class="w-full min-h-screen bg-gray-50 rounded-md shadow-md py-20 px-10">
            <div class="flex items-center gap-10">
                <img src="{{ asset('storage/' . $car->photo) }}" alt="" class="w-1/2">
                <div class="flex flex-col gap-5">
                    <h2 class="text-4xl font-bold">
                        {{ $car->name }}
                    </h2>
                    <p class="text-4xl font-black text-purple-700">
                        {{ $car->price }} ₽
                    </p>
                    <ul>
                        <li class="py-8 border-b border-gray-400">
                            <div class="flex px-4 text-xl">
                                <p class="w-1/2 font-semibold">
                                    Пробег
                                </p>
                                <p class="w-1/2 font-bold text-purple-700">
                                    {{ $car->mileage }} км
                                </p>
                            </div>
                        </li>
                        <li class="py-8 border-b border-gray-400">
                            <div class="flex px-4 text-xl">
                                <p class="w-1/2 font-semibold">
                                    Год выпуска
                                </p>
                                <p class="w-1/2 font-bold text-purple-700">
                                    {{ $car->year }}
                                </p>
                            </div>
                        </li>
                        <li class="py-8 border-b border-gray-400">
                            <div class="flex px-4 text-xl">
                                <p class="w-1/2 font-semibold">
                                    Тип двигателя
                                </p>
                                <p class="w-1/2 font-bold text-purple-700">
                                    @switch($car->engine)
                                        @case('gasoline')
                                            Бензин
                                        @break

                                        @case('diesel')
                                            Дизель
                                        @break

                                        @case('electro')
                                            Электро
                                        @break
                                    @endswitch
                                </p>
                            </div>
                        </li>
                        <li class="py-8 border-b border-gray-400">
                            <div class="flex px-4 text-xl">
                                <p class="w-1/2 font-semibold">
                                    Объем двигателя
                                </p>
                                <p class="w-1/2 font-bold text-purple-700">
                                    {{ $car->volume }} л
                                </p>
                            </div>
                        </li>
                        <li class="py-8 border-b border-gray-400">
                            <div class="flex px-4 text-xl">
                                <p class="w-1/2 font-semibold">
                                    Мощность
                                </p>
                                <p class="w-1/2 font-bold text-purple-700">
                                    {{ $car->power }} л.с.
                                </p>
                            </div>
                        </li>
                    </ul>
                    @auth
                        @if ($isFavourite)
                            <form action="{{ route('favourites.remove', $car->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-full py-4 bg-purple-700 transition-all hover:bg-purple-600 text-white font-semibold text-lg rounded-md">
                                    Удалить из избранного
                                </button>
                            </form>
                        @else
                            <form action="{{ route('favourites.add', $car->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full py-4 bg-purple-700 transition-all hover:bg-purple-600 text-white font-semibold text-lg rounded-md">
                                    Добавить в избранное
                                </button>
                            </form>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

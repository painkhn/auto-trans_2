<x-app-layout>
    <div class="px-20">
        <div class="w-full min-h-screen bg-gray-50 rounded-md shadow-md py-20 px-10">
            <h1 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mb-10">
                КУПИТЬ АВТО
            </h1>
            <ul class="grid grid-cols-5 items-center gap-x-5 gap-y-10 mb-20">
                @foreach ($marks as $mark)
                    <li>
                        <a href="{{ route('cars.index', [$mark->name]) }}">
                            <div
                                class="w-full text-center transition-all opacity-70 hover:opacity-100 py-3 border-x-2 border-gray-200 hover:bg-gray-200">
                                <p class="font-bold text-2xl">
                                    {{ $mark->name }}
                                </p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="grid grid-cols-3 gap-x-5 gap-y-10">
                @foreach ($cars as $item)
                    <li>
                        <a href="{{ route('cars.show', [$item->id]) }}">
                            <div
                                class="p-5 border border-transparent transition-all hover:border-gray-200 hover:scale-105 rounded-md">
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="" class="w-full mb-2">
                                <h2 class="text-2xl text-gray-800 font-bold mb-4">
                                    {{ $item->name }}
                                </h2>
                                <p class="text-2xl text-purple-700 font-bold">
                                    {{ $item->price }} ₽
                                </p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>

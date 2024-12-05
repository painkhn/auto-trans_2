<x-app-layout>
    <div class="px-20">
        <div class="w-full min-h-screen bg-gray-50 rounded-md shadow-md py-20 px-10">
            <h1 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mb-10">
                Отзывы
            </h1>
            <ul class="grid grid-cols-3 gap-x-5 gap-y-10">
                @foreach ($reviews as $item)
                    <li>
                        <div class="w-full min-h-64 border border-gray-200 rounded-md p-5">
                            <h2 class="text-xl font-bold mb-2">
                                {{ $item->user->name }}
                            </h2>
                            <p class="font-medium text-black/80 mb-4">
                                {{ $item->comment }}
                            </p>
                            <p class="text-purple-700 font-bold text-xl mb-4">
                                Оценка: {{ $item->point }}/5
                            </p>
                            <p class="text-black/60 font-bold mb-4">
                                {{ $item->created_at->format('Y-m-d') }}
                            </p>
                            @auth
                                @if ($item->user->id == Auth::id())
                                    <button
                                        class="px-4 py-2 bg-purple-700 transition-all hover:bg-purple-600 text-white font-semibold rounded-md">
                                        Удалить
                                    </button>
                                @endif
                            @endauth
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>

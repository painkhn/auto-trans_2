<x-app-layout>
    <div class="px-20">
        <div class="w-full min-h-screen bg-gray-50 rounded-md shadow-md py-20 px-10">
            <div class="flex gap-10 mb-10">
                <div class="w-full">
                    <h2 class="text-xl font-bold text-center mb-10">
                        Редактирование товар
                    </h2>

                    <form action="{{ route('model.edit.save', [$model->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
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
                            <input type="text" name="name" value="{{ $model->name }}"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Цена</label>
                            <input type="number" name="price" value="{{ $model->price }}"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Пробег</label>
                            <input type="text" name="mileage" value="{{ $model->mileage }}"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Год
                                выпуска</label>
                            <input type="text" name="year" value="{{ $model->year }}"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Тип
                                двигателя</label>
                            <select name="engine" id="engine"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                                <option value="gasoline"
                                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base"
                                    {{ $model->engine == 'gasoline' ? 'selected' : '' }}>
                                    Бензин
                                </option>
                                <option value="diesel"
                                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base"
                                    {{ $model->engine == 'diesel' ? 'selected' : '' }}>
                                    Дизель
                                </option>
                                <option value="electro"
                                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base"
                                    {{ $model->engine == 'electro' ? 'selected' : '' }}>
                                    Электро
                                </option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Объем
                                двигателя</label>
                            <input type="text" name="volume" value="{{ $model->volume }}"
                                class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Мощность</label>
                            <input type="text" name="power" value="{{ $model->power }}"
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
            </div>
        </div>
    </div>
</x-app-layout>

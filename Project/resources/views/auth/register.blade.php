<x-guest-layout>
    <div class="max-w-xl bg-white h-auto w-full p-10 rounded-xl shadow-xl">
        <a href="{{ route('index') }}" class="block mb-10 pb-10 border-b border-gray-400">
            <img src="{{ asset('img/logo.svg') }}" alt="" class="mx-auto my-0 transition-all hover:opacity-70">
        </a>
        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
            @csrf
            <div class="flex flex-col gap-1">
                <label>Имя</label>
                <input type="text" name="name"
                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="flex flex-col gap-1">
                <label>Электронная почта</label>
                <input type="text" name="email"
                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="flex flex-col gap-1">
                <label>Пароль</label>
                <input type="password" name="password"
                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="flex flex-col gap-1">
                <label>Повторить пароль</label>
                <input type="password" name="password_confirmation"
                    class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <button type="submit"
                class="w-full py-2 bg-purple-700 transition-all hover:bg-purple-600 text-white font-semibold rounded-md">
                Зарегистрироваться
            </button>
        </form>
        <div class="block text-center mt-5">
            <a href="{{ route('login') }}"
                class="block mx-auto my-0 font-semibold opacity-70 transition-all hover:opacity-100 hover:text-purple-700">У
                меня уже есть аккаунт</a>
        </div>
    </div>
</x-guest-layout>

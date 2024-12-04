<header class="w-full min-h-24 px-20 flex items-center bg-white border-b border-gray-200">
    <ul class="grid grid-cols-3 w-full items-center">
        <li>
            <a href="tel:+7(924)555-52-52"
                class="flex flex-col text-xl gap-1 font-semibold justify-self-start transition-all hover:opacity-80 outline-none">
                <span class="text-3xl text-purple-700 font-black">+7(924)555-52-52</span>
                Свяжитесь с нами!
            </a>
        </li>
        <li>
            <a href="{{ route('index') }}" class="justify-self-center outline-none">
                <img src="{{ asset('img/logo.svg') }}" alt=""
                    class="justify-self-center transition-all hover:opacity-80">
            </a>
        </li>
        <li>
            @auth
                <div class="flex gap-5 justify-end">
                    @if (Auth::user() && Auth::user()->is_admin == 1)
                        <a href="{{ route('admin.index') }}"
                            class="block justify-self-end text-lg font-semibold px-4 py-2 transition-all hover:bg-gray-100 rounded-md">
                            Админка
                        </a>
                    @endif
                    <a href="{{ route('profile.index') }}"
                        class="block justify-self-end text-lg font-semibold px-4 py-2 transition-all hover:bg-gray-100 rounded-md">
                        Профиль
                    </a>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="block justify-self-end text-lg font-semibold px-4 py-2 transition-all hover:bg-gray-100 rounded-md">
                    Войти
                </a>
            @endauth
        </li>
    </ul>
</header>

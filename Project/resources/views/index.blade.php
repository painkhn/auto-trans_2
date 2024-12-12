<x-app-layout>
    <div class="px-20">
        <div class="w-full min-h-screen bg-gray-50 rounded-md shadow-md py-20 px-10 relative">
            <img src="{{ asset('img/example-car.jpg') }}" alt="" class="top-0 left-0 mx-auto my-0 absolute -z-10 blur-sm">
            <h1 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mb-5 z-10 relative">
                Добро пожаловать на сайт компании <span class="text-purple-700 z-10 relative">AutoTrans</span>
            </h1>
            <p class="text-center font-semibold text-2xl max-w-5xl mx-auto my-0 text-black mb-10 z-10 relative">
                Мы предлагаем широкий спектр услуг, связанных с импортом автомобилей, грузовых и коммерческих
                транспортных средств, обеспечивая высокое качество и профессионализм на каждом этапе.
            </p>
            <a href="#why-us" class="mb-10 outline-none block z-10 relative">
                <button
                    class="w-full text-center py-4 bg-gray-100 rounded-md transition-all hover:shadow-md border border-transparent hover:border-gray-200 hover:bg-gray-200">
                    <svg class="w-6 h-6 text-gray-800 mx-auto my-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>
            </a>
            <h2 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-black p-4 rounded-md bg-white mt-40 mb-20 z-10 relative" id="why-us">
                Почему выбирают нас?
            </h2>
            <ul class="grid grid-cols-3 gap-5 mb-20 z-10 relative">
                <li>
                    <div class="w-full border border-gray-200 bg-white p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700">
                            Опыт и надежность
                        </h3>
                        <p class="text-lg">
                            Наша команда имеет многолетний опыт работы в сфере автомобильного транспорта и импорта,
                            что позволяет нам эффективно решать любые задачи клиентов
                        </p>
                    </div>
                </li>
                <li>
                    <div class="w-full border border-gray-200 bg-white p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700">
                            Полный спектр услуг
                        </h3>
                        <p class="text-lg">
                            Мы предлагаем услуги по подбору, доставке и оформлению документов для импорта
                            автомобилей из различных стран
                        </p>
                    </div>
                </li>
                <li>
                    <div class="w-full border border-gray-200 bg-white p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700">
                            Индивидуальный подход
                        </h3>
                        <p class="text-lg">
                            Каждому клиенту мы предлагаем персонализированные решения, учитывающие его потребности и
                            бюджет
                        </p>
                    </div>
                </li>
            </ul>
            <h2 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mt-40 mb-20">
                Наши услуги
            </h2>
            <ul class="grid grid-cols-3 gap-5 mb-20">
                <li>
                    <div class="w-full border border-gray-200 p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700">
                            Импорт легковых автомобилей
                        </h3>
                        <p class="text-lg">
                            Мы помогаем вам выбрать и импортировать легковые автомобили от лучших производителей
                        </p>
                    </div>
                </li>
                <li>
                    <div class="w-full border border-gray-200 p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700">
                            Импорт коммерческого транспорта
                        </h3>
                        <p class="text-lg">
                            Специализируемся на импорте грузовых автомобилей и специализированной техники для
                            бизнеса
                        </p>
                    </div>
                </li>
                <li>
                    <div class="w-full border border-gray-200 p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700">
                            Оформление документов
                        </h3>
                        <p class="text-lg">
                            Обеспечиваем полное сопровождение всех необходимых документов для успешного импорта
                            транспортных средств
                        </p>
                    </div>
                </li>
            </ul>
            <h2 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mt-40 mb-20">
                Как мы работаем?
            </h2>
            <ul class="grid grid-cols-4 gap-5 mb-20">
                <li>
                    <div class="w-full border border-gray-200 p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700 flex items-center justify-center gap-2">
                            <span class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">1</span>
                            Консультация
                        </h3>
                        <p class="text-lg">
                            Свяжитесь с нами для получения бесплатной консультации по вопросам импорта
                        </p>
                    </div>
                </li>
                <li>
                    <div class="w-full border border-gray-200 p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700 flex items-center justify-center gap-2">
                            <span class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">2</span>
                            Выбор автомобиля
                        </h3>
                        <p class="text-lg">
                            Мы поможем вам выбрать подходящий автомобиль в соответствии с вашими требованиями
                        </p>
                    </div>
                </li>
                <li>
                    <div class="w-full border border-gray-200 p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700 flex items-center justify-center gap-2">
                            <span class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">3</span>
                            Оформление заказа
                        </h3>
                        <p class="text-lg">
                            После выбора мы займемся всеми формальностями, включая оформление документов и логистику
                        </p>
                    </div>
                </li>
                <li>
                    <div class="w-full border border-gray-200 p-5 text-center rounded-md min-h-52">
                        <h3 class="text-2xl font-semibold mb-4 text-purple-700 flex items-center justify-center gap-2">
                            <span class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">4</span>
                            Доставка
                        </h3>
                        <p class="text-lg">
                            Ваш автомобиль будет доставлен в указанные сроки в любое место
                        </p>
                    </div>
                </li>
            </ul>
            <div>
                <h2 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mt-40 mb-10">
                    Как нас найти
                </h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d444.72060371505194!2d104.28680612490751!3d52.223366487453426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5da83ce19e66fddf%3A0x2d44f9268ebeb3c8!2z0J_RgdC40YXQuNCw0YLRgNC40YfQtdGB0LrQsNGPINCR0L7Qu9GM0L3QuNGG0LA!5e0!3m2!1sru!2sru!4v1733980703366!5m2!1sru!2sru"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
            </div>
            <h2 class="text-center font-black text-5xl max-w-3xl mx-auto my-0 text-gray-800 mt-40 mb-10">
                Контактная информация
            </h2>
            <p class="text-center font-semibold text-2xl max-w-5xl mx-auto my-0 text-gray-700 mb-10">
                Свяжитесь с нами через форму обратной связи или по телефону, чтобы узнать больше о наших услугах и
                получить индивидуальное предложение. Мы готовы помочь вам сделать правильный выбор и обеспечить
                успешный импорт вашего транспортного средства. AutoTrans — ваш надежный партнер в мире
                автомобильного импорта!
            </p>
            {{-- <form class="max-w-xl mx-auto my-0 flex flex-col gap-5">
                <div class="flex flex-col gap-1">
                    <label>Ваше имя</label>
                    <input type="text"
                        class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                </div>
                <div class="flex flex-col gap-1">
                    <label>Номер телефона</label>
                    <input type="text"
                        class="w-full h-10 border border-purple-700 rounded-md focus:ring-2 focus:ring-purple-700 outline-none transition-all px-4 text-base">
                </div>
                <button type="submit"
                    class="w-full h-10 bg-purple-700 text-white rounded-md transition-all hover:bg-purple-600 font-semibold">
                    Отправить
                </button>
            </form> --}}
        </div>
    </div>
</x-app-layout>

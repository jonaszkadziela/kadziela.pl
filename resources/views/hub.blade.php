<x-main-layout title="{{ Lang::get('main.titles.hub') }}"
               body-class="bg-black flex flex-col min-h-screen"
               with-actions
               with-analytics
               with-footer
>
    <main class="flex flex-1 flex-col items-center justify-center my-12 w-full">
        <div class="flex flex-col gap-4 items-center mb-8 md:mb-12 mx-8 text-center">
            <img class="h-24 w-24"
                src="{{ Vite::asset('resources/images/brand/logo.svg') }}"
                alt="Logo">
            <h1 class="text-white text-3xl md:text-5xl lg:text-6xl">
                {!! Lang::get('hub.welcome') !!}!
            </h1>
        </div>
        <div class="bg-white border hover:shadow-xl max-w-3xl md:p-12 mx-8 p-8 shadow-md text-center transition-shadow">
            <p class="mb-4 md:mb-8 md:text-2xl text-gray-700 text-lg">
                {{ Lang::get('hub.choose-website') }}
            </p>
            <div class="flex flex-col items-center justify-center md:flex-row gap-4">
                <x-button.website name="bartosz.kadziela.pl"
                                  link="https://bartosz.kadziela.pl"
                />
                <x-button.website name="jonasz.kadziela.pl"
                                  link="https://jonasz.kadziela.pl"
                />
                <x-button.website name="milosz.kadziela.pl"
                                  link="https://milosz.kadziela.pl"
                />
            </div>
        </div>
    </main>
    <canvas id="point-waves-background" class="absolute inset-0" style="z-index: -1;"></canvas>
    @vite('resources/js/point-waves-background.js')
</x-main-layout>

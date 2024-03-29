<x-main-layout title="{{ Lang::get('main.titles.hub') }}"
               body-class="bg-dotted flex flex-col min-h-screen"
               with-analytics
               with-language-dropdown
               with-footer
>
    <main class="flex flex-1 items-center justify-center my-12 w-full">
        <div class="bg-white border hover:shadow-xl max-w-3xl md:p-12 mx-8 p-8 shadow-md text-center transition-shadow">
            <h1 class="mb-8 md:mb-12 md:text-4xl text-3xl">
                {!! Lang::get('hub.welcome') !!}!
            </h1>
            <div class="bg-slate-100 border md:p-8 p-4">
                <p class="mb-4 md:mb-8 md:text-2xl text-gray-700 text-lg">
                    {{ Lang::get('hub.choose-website') }}
                </p>
                <div class="flex flex-col items-center justify-center md:flex-row gap-4">
                    <x-website-button name="bartosz.kadziela.pl"
                                      link="https://bartosz.kadziela.pl"
                    />
                    <x-website-button name="jonasz.kadziela.pl"
                                      link="https://jonasz.kadziela.pl"
                    />
                    <x-website-button name="milosz.kadziela.pl"
                                      link="https://milosz.kadziela.pl"
                    />
                </div>
            </div>
        </div>
    </main>
</x-main-layout>

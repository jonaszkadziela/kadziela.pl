<x-main-layout title="{{ Lang::get('main.titles.hub') }}"
               body-class="bg-dotted flex flex-col min-h-screen"
               with-footer
>
    <main class="flex flex-1 items-center justify-center my-12 w-full">
        <div class="bg-white border max-w-xl md:w-2/3 mx-8 p-8 shadow-xl text-center w-full">
            <h1 class="mb-6 text-3xl">
                {!! Lang::get('hub.welcome') !!}!
            </h1>
            <div class="bg-slate-50 border p-4">
                <p class="mb-4 text-gray-700">
                    {{ Lang::get('hub.choose-website') }}
                </p>
                <div class="flex flex-col items-center justify-center md:flex-row gap-4">
                    <x-website-button name="jonasz.kadziela.pl"
                                      link="https://jonasz.kadziela.pl"
                    />
                </div>
            </div>
        </div>
    </main>
</x-main-layout>

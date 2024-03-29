<x-main-layout title="{{ Lang::get('main.titles.privacy') }}"
               body-class="bg-dotted flex flex-col min-h-screen"
               with-language-dropdown
               with-footer
>
    <main class="flex flex-1 items-center justify-center my-12 w-full">
        <div class="bg-white border hover:shadow-xl max-w-8xl md:p-12 mx-8 p-8 shadow-md text-center transition-shadow">
            <h1 class="mb-8 md:text-4xl text-3xl">
                {{ Lang::get('privacy.title') }}
            </h1>
            <div class="text-gray-500">
                <p>
                    {{ Lang::get('privacy.description') }}.
                </p>
                <p>
                    {{ Lang::get('privacy.contact') }}
                    <a href="mailto:kontakt@jonaszkadziela.pl" class="hover:text-gray-900 hover:underline text-gray-700">kontakt@jonaszkadziela.pl</a>.
                </p>
            </div>
        </div>
    </main>
</x-main-layout>

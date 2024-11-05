<x-main-layout title="{{ Lang::get('main.titles.privacy') }}"
               body-class="bg-dotted flex flex-col min-h-screen"
               with-actions
               with-analytics
               with-footer
>
    <main class="flex flex-1 items-center justify-center my-12 w-full">
        <div class="bg-white border hover:shadow-xl max-w-screen-2xl md:p-12 mx-8 p-8 shadow-md text-center transition-shadow">
            <h1 class="mb-8 md:text-4xl text-3xl">
                {{ Lang::get('privacy.title') }}
            </h1>
            <div class="mb-8 text-gray-500">
                <p>
                    {{ Lang::get('privacy.description') }}.
                </p>
                <p>
                    {{ Lang::get('privacy.contact') }}
                    <x-link.primary href="mailto:{{ Lang::get('main.contact-email') }}">
                        {{ Lang::get('main.contact-email') }}.
                    </x-link.primary>
                </p>
            </div>
            <x-privacy-policy />
        </div>
    </main>
</x-main-layout>

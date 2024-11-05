<footer class="bg-white border-t dark:bg-gray-800 dark:border-gray-200 dark:text-gray-300 flex flex-col items-center p-8 shadow-inner text-center">
    <div class="border flex flex-col mb-4 md:flex-row md:w-auto text-gray-700 w-full">
        @foreach ($links as $name => $link)
            <a href="{{ $link }}" class="{{ Route::is($name) ? 'bg-gray-700' : 'bg-gray-500' }} flex hover:bg-gray-800 items-center justify-center px-4 py-2 text-white {{ $loop->last ? '' : 'border-b md:border-b-0 md:border-r' }}">
                {{ Lang::get('main.titles.' . $name) }}
            </a>
        @endforeach
    </div>
    <p>
        {{ Lang::get('main.footer.programmed-with') }}
        <i class="fa-heart fa-solid text-red-600"></i>
        {{ Lang::get('main.footer.by') }}
        <x-link.primary href="https://jonaszkadziela.pl" target="_blank" rel="noopener noreferrer">
            {{ Lang::get('main.footer.author') }}
        </x-link.primary>
    </p>
</footer>

<footer class="bg-slate-100 flex flex-col items-center p-8 shadow-inner text-center">
    <div class="border flex flex-col mb-4 md:flex-row md:w-auto text-gray-700 w-full">
        @foreach ($links as $name => $link)
            <a href="{{ $link }}" class="{{ Route::is($name) ? 'bg-gray-700 hover:bg-gray-800 text-white' : 'bg-white hover:bg-gray-400 hover:text-white' }} flex items-center justify-center px-4 py-2 {{ $loop->last ? '' : 'border-b md:border-b-0 md:border-r' }}">
                {{ Lang::get('main.titles.' . $name) }}
            </a>
        @endforeach
    </div>
    <p>
        {{ Lang::get('main.footer.programmed-with') }}
        <i class="fa-heart fa-solid text-red-600"></i>
        {{ Lang::get('main.footer.by') }}
        <a href="https://jonaszkadziela.pl" class="hover:text-gray-900 hover:underline text-gray-700" target="_blank" rel="noopener noreferrer">
            {{ Lang::get('main.footer.author') }}
        </a>
    </p>
</footer>

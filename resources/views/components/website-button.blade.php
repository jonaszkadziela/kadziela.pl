<a href="{{ $link }}"
   rel="noopener noreferrer"
   x-data="{ loading: false }"
   @click="loading = true"
>
    <div class="bg-gray-700 cursor-pointer duration-150 ease-in-out flex flex-col h-24 hover:-translate-y-1 hover:bg-gray-800 justify-center p-2 text-white transform-all w-36">
        <i x-bind:class="loading ? 'fa-circle-notch fa-solid fa-spin text-4xl' : '{{ $icon }}'"></i>
        <p class="font-light mt-1">
            {{ $name }}
        </p>
    </div>
</a>

@props([
    'link',
    'name',
    'icon' => 'fa-solid fa-earth-americas text-4xl',
])

<a href="{{ $link }}"
   rel="noopener noreferrer"
   x-data="{ loading: false }"
   @click="loading = true"
   @pageshow.window="loading = false"
>
    <div class="bg-gray-700 cursor-pointer dark:hover:bg-gray-600 duration-150 ease-in-out flex flex-col h-24 hover:-translate-y-1 hover:bg-gray-800 justify-center p-2 text-white transform-all w-36">
        <i class="{{ $icon }}" x-bind:class="{ '{{ $icon }}': !loading, 'fa-circle-notch fa-solid fa-spin text-4xl': loading }"></i>
        <p class="font-light mt-1">
            {{ $name }}
        </p>
    </div>
</a>

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-gray-700 dark:hover:bg-gray-600 hover:bg-gray-800 px-2 py-1.5 text-white transition-colors']) }}>
    {{ $slot }}
</button>

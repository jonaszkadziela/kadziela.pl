<div id="privacy-warning"
     class="bg-white border duration-300 hidden hover:shadow-xl max-w-md opacity-0 p-4 shadow-md transition-all"
     role="alert"
     aria-live="assertive"
     aria-atomic="true"
>
    <div class="text-sm">
        <p>
            {{ Lang::get('main.cookies.description') }}
            <a href="{{ route('privacy') }}" class="hover:text-gray-900 hover:underline text-gray-700">{{ Lang::get('main.cookies.privacy-policy') }}</a>.
        </p>
        <div class="border-t flex gap-4 items-center justify-end mt-4 pt-4">
            <a href="{{ route('privacy') }}" class="hover:text-gray-900 hover:underline text-gray-700">
                {{ Lang::get('main.cookies.learn-more') }}
            </a>
            <button type="button" class="bg-gray-700 hover:bg-gray-800 px-2 py-1.5 text-white transition-colors" data-dismiss="#privacy-warning">
                {{ Lang::get('main.cookies.acknowledge') }}
            </button>
        </div>
    </div>
</div>
@vite('resources/js/cookies.js')

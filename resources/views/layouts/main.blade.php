<!doctype html>
<html lang="{{ App::getLocale() }}">
    <head>
        <title>
            {{ (isset($title) ? $title . ' - ' : '') . config('app.name') }}
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ Lang::get('main.description') }}">
        <meta name="keywords" content="kadziela, hub, website">
        <meta name="author" content="Jonasz Kądziela">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:locale" content="{{ App::getLocale() }}">
        <meta property="og:locale:alternate" content="{{ App::getFallbackLocale() }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:title" content="{{ (isset($title) ? $title . ' - ' : '') . config('app.name') }}">
        <meta property="og:description" content="{{ Lang::get('main.description') }}">
        <meta property="og:url" content="{{ config('app.url') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="{{ $bodyClass }}">
        @isset($withLanguageDropdown)
            <div class="fixed mr-4 mt-4 right-0 top-0">
                <x-language-dropdown class="bg-white border hover:shadow-xl px-4 shadow-md" />
            </div>
        @endisset
        {{ $slot }}
        @isset($withFooter)
            <x-footer encoded-links="{!! json_encode([
                'hub' => route('hub'),
                'contact' => 'mailto:contact@jonaszkadziela.pl',
            ]) !!}" />
        @endisset
    </body>
</html>

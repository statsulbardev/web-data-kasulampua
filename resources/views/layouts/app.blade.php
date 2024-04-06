<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Website Resmi BPS se-Kasulampua (Kalimantan, Sulawesi, Maluku, dan Papua)" name="description">
    <meta content="data, statistik, konreg, kasulampua, kalimantan, sulawesi, maluku, papua" name="keywords">

    <title>{{ $title ?? 'Konreg Kasulampua' }}</title>

    <link href="{{ secure_asset('assets/img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/nichestyle.css') }}">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">

    @vite('resources/js/app.js')

    @livewireStyles
<body>
    @guest
        {{ $slot }}
    @endguest

    @auth
        <x-pages.backend.flash />

        <x-pages.backend.header />

        <x-pages.backend.sidebar />

        {{ $slot }}

        <x-pages.backend.arrow-up />

        <x-pages.backend.footer />

        <script src="{{ secure_asset('assets/vendor/apexcharts/apexcharts.min.js') }}" data-navigate-once></script>
        <script src="{{ secure_asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" data-navigate-once></script>
        <script src="{{ secure_asset('assets/vendor/quill/quill.min.js') }}" data-navigate-once></script>
        <script src="{{ secure_asset('assets/vendor/simple-datatables/simple-datatables.js') }}" data-navigate-once></script>
        <script src="{{ secure_asset('assets/vendor/tinymce/tinymce.min.js') }}" data-navigate-once></script>
        <script src="{{ secure_asset('assets/js/nichescript.js') }}" data-navigate-once></script>
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js" data-navigate-once></script>
        <script data-navigate-once>
            window.addEventListener('notification', event => {
                    window.dispatchEvent(new CustomEvent('notify', {
                        detail: event.detail.message
                    }));
                })
        </script>
    @endauth

    @livewireScriptConfig

    @stack('scripts')
</body>
</html>

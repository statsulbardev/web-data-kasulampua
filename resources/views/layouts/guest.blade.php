<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Website Resmi BPS se-Kasulampua (Kalimantan, Sulawesi, Maluku, dan Papua)" name="description">
    <meta content="data, statistik, konreg, kasulampua, kalimantan, sulawesi, maluku, papua" name="keywords">

    <title>{{ $title ?? 'Statistik Kasulampua' }}</title>

    <link href="{{ secure_asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ secure_asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href={{ secure_asset('assets/css/style.css') }}>
    <link rel="stylesheet" href={{ secure_asset('assets/css/chart.css') }}>
    <link rel="stylesheet" href={{ secure_asset('assets/css/owl.css') }}>
    <link rel="stylesheet" href={{ secure_asset('assets/css/animate.css') }}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/v4-shims.css">
    <link rel="stylesheet" href="ttps://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href={{ secure_asset('assets/css/pagination.css') }}>

    <script>
        window.Promise ||
                  document.write(
                    '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
                  )
                window.Promise ||
                  document.write(
                    '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
                  )
                window.Promise ||
                  document.write(
                    '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
                  )
    </script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
                // Based on https://gist.github.com/blixt/f17b47c62508be59987b
                var _seed = 42;
                Math.random = function() {
                  _seed = _seed * 16807 % 2147483647;
                  return (_seed - 1) / 2147483646;
                };
    </script>

    <!-- Scripts -->
    @vite('resources/js/app.js')
</head>

<body>
    @include('frontend.partials.header')

    <main>
        {{ $slot }}
    </main>

    @include('frontend.partials.footer')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        // $('#myTable').dataTable( {
            //     "paging": true
            // } );
            let table = new DataTable('#myTable', {
                // options
                pageLength: 5,
                // searching: false,
                bLengthChange: false,
                info: false
            });
            let table2 = new DataTable('#myTable2', {
                // options
                pageLength: 5,
                // searching: false,
                bLengthChange: false,
                info: false
            });
            let table3 = new DataTable('#myTable3', {
                // options
                pageLength: 5,
                // searching: false,
                bLengthChange: false,
                info: false
            });
            // $('#myTable').removeClass( 'display' ).addClass('table table-striped table-bordered');
            // $('#myTable_paginate').removeClass( 'display' ).addClass('pagination justify-content-center');

            $('#all-search').keyup(function(){
                table.search($(this).val()).draw();
                table2.search($(this).val()).draw() ;
                table3.search($(this).val()).draw() ;
            });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="./admin/img/favicon.png" rel="apple-touch-icon">
    <link href="./admin/img/favicon.png" rel="icon">
    <title>Cheffemi Admin</title>
    <link href="../../../css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Linearicons/Font/demo-files/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/apexcharts-bundle/dist/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>
<body>
    <main class="ps-main">
      @livewire('navigation-menu')
        <div class="ps-main__wrapper">
        {{ $slot }}
        </div>
    </main>

    @stack('modals')

    @livewireScripts
    <script src="{{ asset('admin/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/apexcharts-bundle/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/js/chart.js') }}"></script>
    <!-- custom code-->
    <script src="{{ asset('admin/js/main.js') }}"></script>
</body>

</html>

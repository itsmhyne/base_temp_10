<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Laravel 10 Dashboard &mdash; Qyumh</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ 'assets/plugins/bootstrap/dist/css/bootstrap.min.css' }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ 'assets/plugins/jqvmap/dist/jqvmap.min.css' }}">
    <link rel="stylesheet" href="{{ 'assets/plugins/summernote/dist/summernote-bs4.css' }}">
    <link rel="stylesheet" href="{{ 'assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css' }}">
    <link rel="stylesheet" href="{{ 'assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css' }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/components.css' }}">

    {{-- General Script Js --}}
    <script src="{{ 'assets/plugins/jquery/dist/jquery.min.js' }}"></script>

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('components/header')
            <div class="main-sidebar">
                @include('components/sidebar')
            </div>
            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                @include('components/footer')
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ 'assets/plugins/popper.js/dist/popper.min.js' }}"></script>
    <script src="{{ 'assets/plugins/bootstrap/dist/js/bootstrap.min.js' }}"></script>
    <script src="{{ 'assets/plugins/jquery.nicescroll/dist/jquery.nicescroll.min.js' }}"></script>
    <script src="{{ 'assets/plugins/moment/min/moment.min.js' }}"></script>
    <script src="{{ 'assets/js/stisla.js' }}"></script>
    <script src="https://kit.fontawesome.com/8f476edf0c.js" crossorigin="anonymous"></script>

    <!-- JS Libraies -->
    <script src="{{ 'assets/plugins/jquery-sparkline/jquery.sparkline.min.js' }}"></script>
    <script src="{{ 'assets/plugins/chart.js/dist/Chart.min.js' }}"></script>
    <script src="{{ 'assets/plugins/owl.carousel/dist/owl.carousel.min.js' }}"></script>
    <script src="{{ 'assets/plugins/summernote/dist/summernote-bs4.js' }}"></script>
    <script src="{{ 'assets/plugins/chocolat/dist/js/jquery.chocolat.min.js' }}"></script>

    <!-- Template JS File -->
    <script src="{{ 'assets/js/scripts.js' }}"></script>
    <script src="{{ 'assets/js/custom.js' }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ 'assets/js/page/index.js' }}"></script>
</body>

</html>

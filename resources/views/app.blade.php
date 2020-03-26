<!DOCTYPE html>
<html lang="ja-JP">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta name="robots" content="all">
    <meta name="author" content="株式会社スカラネクスト">
    <meta name="copyright" content="株式会社スカラネクスト">
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/css/common_01.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/inquiry_01.css') }}">
    @stack('styles')
</head>

<body>
    <a name="pagetop"></a>
    <div id="wrap" class="inquiry">

        <!-- header -->
        @include('partials.header')
        <!-- /#header -->

        <!-- content -->
        @yield('content')
        <!-- /.content -->

        <!-- footer -->
        @include('partials.footer')
        <!-- /#footer -->

    </div>
    <!-- /#wrap -->

    <script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/inquiry-common.js') }}"></script>
    @stack('scripts')
</body>

</html>
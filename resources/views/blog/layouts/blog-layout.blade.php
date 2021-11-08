<!DOCTYPE html>
<html lang="ar">

<head>
    <title>DevBlog - Bootstrap 5 Blog Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('js/all.min.js') }}"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/theme-1.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        .header {
        overflow-y: auto;
        }
        .header::-webkit-scrollbar, body::-webkit-scrollbar {
        width: 15px;
        }
        .header::-webkit-scrollbar-track {
        background-color: #5fcb71;
        }
        body::-webkit-scrollbar-track{
            background-color: #ffffff;
        }
        .header::-webkit-scrollbar-thumb {
        background-color:  #ffffff;
        }
        body::-webkit-scrollbar-thumb{
            box-shadow:inset 0 0 6px #5fcb71;
        }
        input[type=email] {
            direction: ltr;
            text-align: right;
        }
    </style>
    @yield('styles')
</head>
<body dir="rtl">
    @yield('sidebar')

    @yield('content')

    @stack('scripts')
</body>

</body>

</html>

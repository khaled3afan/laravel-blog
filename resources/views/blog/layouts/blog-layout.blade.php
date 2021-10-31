<!DOCTYPE html>
<html lang="en">

<head>
    <title>DevBlog - Bootstrap 5 Blog Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('js/all.min.js') }}"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/theme-1.css') }}">
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('blog.layouts.sidebar')

    @yield('content')

    @stack('scripts')
</body>

</body>

</html>

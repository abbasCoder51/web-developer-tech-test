<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') }} - @yield('title', 'Home')</title>

        <link rel="stylesheet" href="{{ asset("/vendor/bootstrap/css/bootstrap.min.css") }}">
        @stack('styles')

        <script type="text/javascript" src="{{ asset("/vendor/jquery/jquery.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
        @stack('scripts_top')
    </head>
    <body class="@yield('page_class')">
        @yield('body')

        @stack('scripts_bottom')
    </body>
</html>
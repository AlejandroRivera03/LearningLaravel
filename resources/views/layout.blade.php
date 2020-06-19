<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'default title')</title>
    </head>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
    <body>
        @include('partials.nav')
        @yield('content')
    </body>
</html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @for ($i = 0; $i < 10; $i++)
            The current value is {{ $i }} <br>
        @endfor
    </body>
</html>

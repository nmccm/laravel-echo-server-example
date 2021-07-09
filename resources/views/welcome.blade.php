<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ url('/js/app.js') }}" type="text/javascript"></script>
        <script src="//{{ Request::getHost() }}:{{env('LARAVEL_ECHO_PORT')}}/socket.io/socket.io.js"></script>
        <script src="{{ url('/js/laravel-echo.js') }}" type="text/javascript"></script>
        <script>
            window.laravel_echo_port='{{env("LARAVEL_ECHO_PORT")}}';
            window.Echo.channel('site-message').listen('SiteMessage', (data) => {
                console.log(data);
            });
        </script>
    </head>
    <body class="antialiased">
        welcome laravel
    </body>
</html>


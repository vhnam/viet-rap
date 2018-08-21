<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    
    @yield('stylesheets')
</head>
<body>
    @yield('page')
    <div id="header"></div>

    @yield('content')

    <div id="footer"></div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/components.js') }}"></script>

    @yield('scripts')
</body>
</html>
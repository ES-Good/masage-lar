<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Админ Панель</title>
    <!-- Scripts -->
    <script src="{{ asset('js/admin-app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>

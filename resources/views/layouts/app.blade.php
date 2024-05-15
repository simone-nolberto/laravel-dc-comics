<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'DC-comics')</title>
    <script src="https://kit.fontawesome.com/35c3fc4174.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>Header</header>

    <main>
        @yield('content')
    </main>

    <footer>Footer</footer>

</body>

</html>
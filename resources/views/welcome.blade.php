<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel + Vue</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <navbar></navbar>

        <!-- The page content will be injected here (via Vue Router) -->
        <router-view></router-view> <!-- This will show the route component (Home, About, etc.) -->

        <!-- Footer -->
        <footers></footers> <!-- This will render the Footer component -->
    </div>
</body>
</html>

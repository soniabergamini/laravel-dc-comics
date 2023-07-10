<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'DC COMICS')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body class="max-w-screen-2xl box-border">
    <!--  Includo l'header del sito web con il menu tramite un partial -->
    @include('partials.header')

    <!--  Includo il Contenuto Specifico della pagina tramite Yield -->
    @yield('content')

    <!-- Includo il footer del sito web tramite un partial -->
    @include('partials.footer')

    <!-- Assets JS/CSS -->
    @vite('resources/js/app.js')
</body>

</html>

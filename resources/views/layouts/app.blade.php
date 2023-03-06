<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CANIBALES 79 NIORT - Canicross canivtt canimarche Deux-Sèvres</title>

    <!-- Banque d'icônes -->
    <script src="https://kit.fontawesome.com/cfc69e35cf.js" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="vw-100 min-vh-100">
    <div id="app">

        {{-- Header ------------------------------------- --}}
        @include('Composants.ComposantsCommuns.Header')

        {{-- Corps de la page selon la route ------------------------------------- --}}
        <main>
            @yield('content')
        </main>

        {{-- Header ------------------------------------- --}}
        @include('Composants.ComposantsCommuns.Footer')
    </div>
</body>

</html>

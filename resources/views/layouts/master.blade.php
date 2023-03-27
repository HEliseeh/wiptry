<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wip_try</title>

    </head>
    <body >
        
    <h1>WIP TRY</h1>
        <a href="/">Accueil</a>
        <a href="/campagne">Campagne</a>
        <a href="/chefPlateau">Chef Plateau</a>
        <a href="/superviseur">Superviseur</a>
        @yield('content')
        
    </body>
</html>

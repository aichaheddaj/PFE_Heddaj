<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<style>
    body{
        font-family: 'Nunito', sans-serif;
    }
</style>
<body class="antialiased">
    <div id="app">
        <li class="nav-item">
        <router-link to="/tasks" class="nav-link d-flex justify-content-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <button class="btn btn-primary animate-pulse">Liste de taches</button>
</router-link>

        </li>
        <div class="container pt-3">
<router-view></router-view>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
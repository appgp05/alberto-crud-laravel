<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-layouts.header></x-layouts.header>
    @auth
        <x-layouts.nav></x-layouts.nav>
        <div class="w-full min-h-30 flex items-center justify-center">
            {{$slot}}
        </div>
    @endauth
    @guest
        <div class="w-full h-30 flex items-center justify-center text-xl text-red-500">
            Por favor inicia sesión o registrate para poder acceder al contenido de la página
        </div>
    @endguest
</body>
</html>

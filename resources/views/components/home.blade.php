<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veterinaria</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-[#93B4FF]">
    <div class="px-10">
        <nav class="flex justify-between items-center py-6 border-b border-cyan-500">

            <div>
                <a href="/" class="flex justify-between items-center">
                    <img src=" {{ Vite::asset('resources/images/logo.png') }}" height="20px" width="20px">
                    Happy<span class="font-bold text-cyan-900">Pets.</span>
                </a>
            </div>

            <div class="font-bold">
                <x-nav href="/medic">Historial</x-nav>
                <x-nav href="/medic/crear">Crear</x-nav>
                <x-nav href="/medic/usuarios">Usuarios</x-nav>
                <x-nav href="/medic/configuracion">Configuracion</x-nav>
            </div>

            <div>

                <x-buttom href="/index">Log Out</x-buttom>
            </a>
            </div>
        </nav>

        <main class="pr-25">
            {{ $slot }}
        </main>
    </div>
</body>

</html>

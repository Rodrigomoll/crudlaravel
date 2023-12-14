<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans flex h-screen items-center justify-center">
    <div class="container p-4 bg-slate-300 w-96">
        <h1 class="text-3xl font-bold underline mb-4">Editar Equipo</h1>

        <form method="post" action="{{ route('equipos.update', $equipos->id) }}" class="max-w-md">
            @csrf
            @method('put')

            <div class="mb-4">
                <label for="nombre" class="text-sm font-medium text-gray-600">Nombre:</label>
                <input type="text" name="nombre" value="{{ $equipos->nombre }}" required
                    class="mt-1 p-2 border rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="ciudad" class=" text-sm font-medium text-gray-600">Ciudad:</label>
                <input type="text" name="ciudad" value="{{ $equipos->ciudad }}" required
                    class="mt-1 p-2 border rounded-md w-full">
            </div>

            <div class="mb-4">
                <label for="pais" class=" text-sm font-medium text-gray-600">País:</label>
                <input type="text" name="pais" value="{{ $equipos->pais }}" required
                    class="mt-1 p-2 border rounded-md w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Guardar Cambios</button>
        </form>
    </div>

    <!-- Script de Tailwind CSS (no es necesario cargarlo desde CDN en este caso) -->
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>

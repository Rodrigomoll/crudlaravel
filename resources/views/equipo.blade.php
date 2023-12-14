<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título</title>

    <!-- Enlace CDN de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

<a href="{{ route('equipos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Agregar Equipos</a>
    <!-- Contenido de tu página -->
    <div class="p-4 bg-gray-100">
        <h1 class="text-2xl font-bold mb-4">Lista de equipos</h1>

        @foreach($equipos as $equipo)
        <div class="mb-4 border p-4 rounded">
            <strong class="block text-lg mb-2">Nombre:</strong>
            {{ $equipo->nombre }} <br>

            <strong class="block text-lg mb-2">Ciudad:</strong>
            {{ $equipo->ciudad }} <br>

            <strong class="block text-lg mb-2">País:</strong>
            {{ $equipo->pais }}

            <!-- Enlace para ir a la página de edición -->
            <a href="{{ route('equipos.edit', $equipo->id) }}" class="text-blue-500 hover:underline">Editar</a>
        </div>
        @endforeach
    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>

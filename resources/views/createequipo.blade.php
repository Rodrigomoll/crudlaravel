<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Equipo</title>
    <!-- Enlace CDN de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Contenido de tu página -->
    <div class="p-4 bg-gray-100">
        <h1 class="text-2xl font-bold mb-4">Agregar Equipo</h1>

        <!-- Formulario para agregar equipo -->
        <form action="{{ route('equipos.store') }}" method="post">
            @csrf <!-- Agrega el token CSRF para protección contra ataques CSRF -->
            
            <!-- Campos del formulario (nombre, ciudad, país, etc.) -->
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required class="border p-2 mb-2">

            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" id="ciudad" required class="border p-2 mb-2">

            <label for="pais">País:</label>
            <input type="text" name="pais" id="pais" required class="border p-2 mb-2">

            <!-- Otros campos del equipo según tus necesidades -->

            <!-- Botón para enviar el formulario -->
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Agregar Equipo</button>
        </form>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>

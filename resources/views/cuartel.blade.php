<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inserción de Cuartel</title>
</head>
<body>

<form action="{{ route('cuarteles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="denominacion">Ubicacion del cuartel:</label><br>
    <input type="text" id="ubicacion" name="ubicacion" required><br><br>

    <button type="submit">Guardar Cuartel</button>
</form>

</body>
</html>

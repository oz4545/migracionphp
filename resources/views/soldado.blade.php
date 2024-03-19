<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inserción de Soldado</title>
</head>
<body>

<form action="{{ route('soldados.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellido">Apellido:</label><br>
    <input type="text" id="apellido" name="apellido" required><br><br>

    <label for="grado">Grado:</label><br>
    <input type="text" id="grado" name="grado" required><br><br>

    <button type="submit">Guardar Soldado</button>
</form>

</body>
</html>

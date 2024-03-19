<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inserción de Compañía</title>
</head>
<body>

<form action="{{ route('companias.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="actividad">Actividad de la compañía:</label><br>
    <input type="text" id="actividad" name="actividad" required><br><br>

    <button type="submit">Guardar Compañía</button>
</form>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inserción de Cuerpo de Ejército</title>
</head>
<body>

<form action="{{ route('cuerpos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="denominacion">Denominación del cuerpo de ejército:</label><br>
    <input type="text" id="denominacion" name="denominacion" required><br><br>

    <button type="submit">Guardar Cuerpo de Ejército</button>
</form>

</body>
</html>

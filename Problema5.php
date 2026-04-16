<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Validación de Usuario</h2>

<form method="post">
<input type="text" name="nombre" placeholder="Nombre" required>
<input type="number" name="edad" placeholder="Edad" required>
<button type="submit">Confirmar</button>
</form>

<?php
if ($_POST) {
    $nombre = trim($_POST['nombre']);
    $nombre = strtolower($nombre);
    $nombre = htmlspecialchars($nombre);

    $edad = $_POST['edad'];

    echo "<div class='resultado'>";
    echo "Nombre: $nombre <br>";

    if ($edad > 18) {
        echo "Puede votar";
    } else {
        echo "No es mayor de edad";
    }

    echo "</div>";
}
?>

</div>

</body>
</html>
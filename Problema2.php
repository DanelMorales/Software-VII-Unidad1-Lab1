<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Conversión de Pulgadas</h2>

<form method="post">
<input type="number" name="pulgada" placeholder="Ingrese pulgadas" step="any" required>
<button type="submit">Convertir</button>
</form>

<?php
if ($_POST) {
    $pulgada = $_POST['pulgada'];
    $ctm = $pulgada * 2.54;

    echo "<div class='resultado'>";
    echo "$pulgada pulgada(s) = $ctm cm";
    echo "</div>";
}
?>
</div>

</body>
</html>
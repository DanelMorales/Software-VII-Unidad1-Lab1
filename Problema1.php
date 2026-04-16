<div class="container">
<h2>Área y Perímetro del Círculo</h2>
<link rel="stylesheet" href="style.css">
<form method="post">
<input type="number" name="radio" placeholder="Ingrese el radio" step="any" required>
<button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
    $radio = $_POST['radio'];
    $area = pi() * pow($radio, 2);
    $perimetro = 2 * pi() * $radio;

    echo "<div class='resultado'>";
    echo "Área: $area <br>";
    echo "Perímetro: $perimetro";
    echo "</div>";
}
?>
</div>
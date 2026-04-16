<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
<style>
body {
font-family: Arial;
background: #1e1e2f;
color: white;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}
.container {
background: #2c2c3e;
padding: 20px;
border-radius: 15px;
box-shadow: 0 0 20px rgba(0,0,0,0.5);
text-align: center;
}
input, select, button {
padding: 10px;
margin: 10px;
border-radius: 8px;
border: none;
font-size: 16px;
}
button {
background: #4CAF50;
color: white;
cursor: pointer;
}
button:hover {
background: #45a049;
}
.resultado {
margin-top: 15px;
font-size: 18px;
color: #00ffcc;
}
</style>
</head>
<body>
<div class="container">
<h2>Calculadora</h2>
<form method="post">
<input type="number" name="num1" placeholder="Número 1" required>
<input type="number" name="num2" placeholder="Número 2" required>
<br>
<select name="operacion">
<option value="suma">Suma</option>
<option value="resta">Resta</option>
<option value="multiplicacion">Multiplicación</option>
</select>
<br>
<button type="submit">Calcular</button>
</form>
<?php
if ($_POST) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];
$resultado = 0;
if ($operacion == "suma") {
$resultado = $num1 + $num2;
} elseif ($operacion == "resta") {
$resultado = $num1 - $num2;
} elseif ($operacion == "multiplicacion") {
$resultado = $num1 * $num2;
}
echo "<div class='resultado'>Resultado: $resultado</div>";
}
?>
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<h1>Contenido del archivo!</h1>

<?php
$ar = fopen("datos.txt", "r") or die("No se pudo abrir el archivo");
while(!feof($ar)) {
$linea = fgets($ar);
$saltolinea = nl2br($linea);
echo $saltolinea;
}
fclose($ar);
echo "<div class='d-grid gap-2'>
<a href='formulario_esc_leer.html' class='btn btn-primary' type='button'>volver a formuario</a>
</div>";


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

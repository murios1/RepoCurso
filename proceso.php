<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<h1>Comentarios!</h1>
<div class="d-grid gap-2">
<a href="formulario_esc_leer.html" class="btn btn-primary" type="button">volver a formuario</a>
</div>

<?php
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];
$ar = fopen("datos.txt", "a") or die("No se pudo abrir el archivo");
fputs($ar, $nombre);
fputs($ar, "\n");
fputs($ar, $comentario);
fputs($ar, "\n");
fputs($ar, "-----------------------------------------------------------------");
fputs($ar, "\n");
fclose($ar);
echo "<h1>Gracias por comentar</h1>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
        
        crossorigin="anonymous"></script>
</body>
</html>

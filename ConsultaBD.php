<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$codigo = $_POST['codigo'];
$conexion = mysqli_connect("localhost", "root", "bitnamijun22", "base1") or die("No se pudo conectar a la base de datos para consultar");
$registros = mysqli_query($conexion, "select * from alumno") or die("No se pudo insertar" . mysqli_error($conexion));
if ($registros) {
    echo "Usuarios consultado correctamente" . "<br>";
 } else {
         echo "Usuarios no consultado" . "<br>";
 }
/*Recuperamos las filas de la tabla*/
 while ($reg = mysqli_fetch_array($registros)) {
    echo $reg['Nombre'] . " " . $reg['Mail'] . " " . $reg['Codigocurso'] . "<br>";
}
mysqli_close($conexion); 
?>
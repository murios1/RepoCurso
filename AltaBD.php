<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$codigo = $_POST['codigo'];
  $conexion = mysqli_connect("localhost", "root", "bitnamijun22", "base1") or die("No se pudo conectar a la base de datos");
    $estadoBD = mysqli_query($conexion, "insert into alumno (nombre, mail, codigocurso) values('$nombre', '$email', $codigo)") or die("No se pudo insertar" . mysqli_error($conexion));
mysqli_close($conexion);
if ($estadoBD) {
   echo "Usuario insertado correctamente";  
} else {
        echo "Usuario no insertado";
}
?>
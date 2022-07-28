<?php
$nombreold = $_POST['nombreold'];
$nombrenew = $_POST['nombrenew'];
$email = $_POST['email'];
$codigo = $_POST['codigo'];
   $conexion = mysqli_connect("localhost", "root", "bitnamijun22", "base1") or die("No se pudo conectar a la base de datos para modificar2");
   $registros = mysqli_query($conexion, "update alumno set nombre='$nombrenew', mail='$email', codigocurso=$codigo where nombre='$nombreold'") or die("No se pudo modificar" . mysqli_error($conexion));
    mysqli_close($conexion);
    if($registros){
      echo "Registro modificado correctamente";
    }else{
        echo "Usuario no se ha modficado";
        }

?>
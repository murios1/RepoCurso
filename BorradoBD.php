<?php 
$nombre = $_POST['nombre'];
$conexion = mysqli_connect("localhost", "root", "bitnamijun22", "base1") or die("No se pudo conectar a la base de datos para eliminar");
$registros = mysqli_query($conexion, "select * from alumno where Nombre='$nombre'") or die("No se pudo obtener los datos para eliminar");
if(mysqli_fetch_array($registros)){
   mysqli_query($conexion, "delete from alumno where Nombre='$nombre'") or die("No se pudo eliminar el alumno");
   echo "<h1>Alumno eliminado correctamente</h1>";
}
else {
      echo "<h1>No existe el Alumno a eliminar</h1>";
}
echo "<a href ='FormularioconBD.html'>Volver al menú principal</a>";
?>

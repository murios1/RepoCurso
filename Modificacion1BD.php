<?php 
$nombre = $_POST['nombre'];
   $conexion = mysqli_connect("localhost", "root", "bitnamijun22", "base1") or die("No se pudo conectar a la base de datos para modificar");
   $registros = mysqli_query($conexion, "select * from alumno where Nombre='$nombre'") or die("No se pudo obtener los datos para modificar");
   if(mysqli_fetch_array($registros)){
   
    ?>
    <form action="Modificacion2BD.php" method="post">
      <input type="hidden" name="nombreold" value="<?php echo $nombre; ?>">
      <label for="nombre">Nombre Actual:</label>
      <input type="text" name="nombrenew" value="<?php echo $nombre; ?>">
      <label for="email">Email:</label>
      <input type="text" name="email" value="<?php echo $reg['mail']; ?>">
      <label for="codigo">Codigo de curso:</label>
      <input type="text" name="codigo" value="<?php echo $reg['codigocurso']; ?>">
      <input type="submit" value="Modificar">
    </form>



      <?php
    }else{
      echo "No existe el alumno";
    }


?>
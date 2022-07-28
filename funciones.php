<!doctype html> 
<html lang="es"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Funciones</title> 
  </head> 
  <body> 
    <?php
        function saludar($nombre) {
            echo "Hola $nombre";
        }
        saludar("Juan");
        echo "<br>";
        
        function suma($num1, $num2){
            echo "La suma de $num1 y $num2 es: ";
            return $num1+$num2;
        }
        $total = suma(23,45);
        echo "$total";

    ?>
  </body>
</html>

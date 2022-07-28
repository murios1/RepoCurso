<!--
Este actividad recibe un número aleatorio del 1 al 10, lo muestra en la pantalla
Indica si ese numero es <=5 o si es > 5
Suma 2 numeros mediante una función, y devuelve el resultado de la suma, indicando los 2 numeros que suma
-->
<?php

$valor = rand(1, 10); // Devuelve un número aleatorio entre 1 y 10
echo "El valor aleatorio devuelto es: " . $valor; // Mediante el . concatenamos
echo "<br>"; // hacemos salto de linea
if ($valor <=5) {
    echo "El valor aleatorio devuelto es <= 5";
}
else {
    echo "El valor aleatorio devuelto es > 5";
}

function suma($v1, $v2){
    $resultado = $v1 + $v2;
    return $resultado;

}

$sumando1 = 25;
$sumando2 = 31;
$valor2 = suma($sumando1, $sumando2);
echo "<br>";
echo "El resultado de la suma de $sumando1 y $sumando2 es: " . $valor2; /* Aqui vemos que podemos concatenar 
                                                                           sin poner el . (solo si utilizamos
                                                                           comillas dobles)
                                                                        */
?>

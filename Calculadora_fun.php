<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
<?php

$valor1 = $_POST['numero1'];
$valor2 = $_POST['numero2'];
$opSumar = $_POST['check1'];
$opRestar = $_POST['check2'];
$opMultiplicar = $_POST['check3'];
$opDividir = $_POST['check4'];

if(isset($opSumar)){
   sumar($valor1, $valor2);
}

if(isset($opRestar)){
   restar($valor1, $valor2);
}
    
if(isset($opMultiplicar)){
   multiplicar($valor1, $valor2);
}

if(isset($opDividir)){
   dividir($valor1, $valor2);
}

function sumar($v1, $v2){
$resultado = $v1 + $v2;
echo "El resultado de la suma de $v1 y $v2 es: $resultado <br>";
}

function restar($v1, $v2){
    $resultado = $v1 - $v2;
    echo "El resultado de la resta de $v1 y $v2 es: $resultado <br>";
    }
    
function multiplicar($v1, $v2){
    $resultado = $v1 * $v2;
    echo "El resultado de la multiplicación de $v1 y $v2 es: $resultado <br>";
    }
        
function dividir($v1, $v2){
    $resultado = $v1 / $v2;
    echo "El resultado de la división de $v1 y $v2 es: $resultado <br>";
    }
    
?>
</body>
</html>
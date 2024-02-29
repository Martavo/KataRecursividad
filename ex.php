<?php
function restaRecursiva($n) {
    $resultado = [];

    if ($n < 0) {
        
    } else {
        $resultado[] = $n;
        $resultado = array_merge($resultado, restaRecursiva($n - 1));
    }

    return $resultado;
}

$n = 8;
$resultado = restaRecursiva($n);

echo "La resta recursiva de $n es: ".implode(',', $resultado);
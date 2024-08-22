<?php

$notas = [];
$numero_estudiantes = 5; 

for ($i = 0; $i < $numero_estudiantes; $i++) {
    $notas[$i] = readline("Ingrese la nota del estudiante " . ($i + 1) . ": ");
}


$nota_mayor = $notas[0];
$nota_menor = $notas[0];
$suma_notas = 0;
$aprobados = 0;
$reprobados = 0;


foreach ($notas as $nota) {
    
    $suma_notas += $nota;

    
    if ($nota > $nota_mayor) {
        $nota_mayor = $nota;
    }

    if ($nota < $nota_menor) {
        $nota_menor = $nota;
    }

    if ($nota >= 3) {
        $aprobados++;
    } else {
        $reprobados++;
    }
}

$promedio = $suma_notas / $numero_estudiantes;


echo "Nota mayor: " . $nota_mayor . PHP_EOL;
echo "Nota menor: " . $nota_menor . PHP_EOL;
echo "Promedio de las notas: " . $promedio . PHP_EOL;
echo "Número de aprobados: " . $aprobados . PHP_EOL;
echo "Número de reprobados: " . $reprobados . PHP_EOL;

?>

<?php

//Entradas

$estudiantes = readline("Ingrese la cantidad de estudiantes");

$notaMayor = 0;
$notaMenor = 5;
$sumaNotas = 0;
$contador = 0;

//Proceso
for($i = 0; $i < $estudiantes; $i++){

    $notas = readline("Ingrese la nota del estudiante: " .($i=1) . " :");

    if ($notas > $notaMayor) {
        $notaMayor = $notas;
    }

    if($notas < $notaMenor){
        $notaMenor = $notas;
    }
    $sumaNotas = $sumaNotas + $notas;
    $contador = $contador + 1;
}

//salidas

if ($notaMayor >= 3.5){
    echo "Nota mayor aprobada" . "\n";
}else{
    echo "Nota mayor reprobada" . "\n";
}
if ($notaMenor < 3.5) {
    echo "Nota menor aprobada" . "\n";
}else {
    echo "Nota menor reprobada" . "\n";
}

echo "La nota mayor es: " . $notaMayor . "\n";
echo "La nota menor es: " . $notaMenor . "\n";
echo "El promedio de las notas es: " . $sumaNotas / $contador . "\n";


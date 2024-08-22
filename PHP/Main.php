<?php
#Tipos de variables más usadas
$nombrevariable = "Hola mundo"; 
$numero = 10;
$decimal = 10.5;
$bool = true;
$array = [1, 2 ,3];

#Estructuras de control

#Si SIMPLE
if ($numero > 5) {  # Ejemplo de condición que tiene sentido
    echo "El número es mayor que 5";
} 

#si DOBLE
if ($numero < 5) {
    echo "El número es menor que 5";
} else {
    echo "El número es mayor o igual que 5";
}

#si ANIDADO 
$anidar = "Esta es una variable anidada";
if ($numero == 10) {
    echo "El número es 10";
} else if ($numero == 20) {
    echo "El número es 20";
} else {
    echo "No es 10 ni 20. " . $anidar;  # Usando concatenación
}

#CICLOS
#ciclo FOR
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

#ciclo WHILE 
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

#ciclo FOREACH
$array = [1, 2, 3, 4, 5];
foreach ($array as $value) {
    echo $value;
}

#Funciones
function sumar($a, $b) {
    return $a + $b;
}
echo sumar(10, 20);
?>

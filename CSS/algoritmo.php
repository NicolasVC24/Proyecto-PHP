<?php
#Tipos de variables mas usadas
$nombrevariable = "Hola mundo"; 
$numero = 10;
$decimal = 10.5;
$bool = true;
$array = [1, 2 ,3];

#Estructuras de control

#Si SIMPLE
if ("condicion"){

} 

#si DOBLE
if ("condicion"){
    echo "si";
}else{
    echo "no";
}

#si ANIDADO 
if ("condicion"){
    echo "si";
}else if ("condicion"){
    echo "si";
}else{
    echo "no . $anidar";
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
function sumar ($a, $b) {
    return $a + $b;
}
echo sumar(10,20);
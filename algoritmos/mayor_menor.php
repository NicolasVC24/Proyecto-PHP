<?php

//Realizar un algoritmo que digitados 3 numeros se halle el numero mayor y el numero menor sin usar el if



$numero_uno = readline ("Ingrese el primer numero");
$numero_dos = readline ("Ingrese el segundo numero");
$numero_tres = readline ("Ingrese el tercer numero");



if ($numero_uno > $numero_dos and $numero_uno > $numero_tres ) {
    echo "Este es el numero mayor" . $numero_uno;
}
elseif ($numero_uno < $numero_dos and $numero_uno < $numero_tres) {
    echo "Este es el numero menor" . $numero_uno;
}

if ($numero_dos > $numero_uno and $numero_dos > $numero_tres ) {
    echo "Este es el numero mayor" . $numero_dos;
}
elseif ($numero_dos < $numero_uno and $numero_dos < $numero_tres) {
    echo "Este es el numero menor" . $numero_dos;
}
if ($numero_tres > $numero_uno and $numero_tres > $numero_dos ) {
    echo "Este es el numero mayor" . $numero_tres;
}
elseif ($numero_tres < $numero_uno and $numero_tres < $numero_dos) {
    echo "Este es el numero menor" . $numero_tres;
}




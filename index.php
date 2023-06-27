<?php
    //ARREGLOS
    /*son estructuras de datos que permiten almacenar múltiples valores en una sola variable*/

    //Formas para declarar arreglos
    //ambas formas de representar un arreglo son correctas

    //Primera forma
    $edades = [20,18,17];

    //Segunda forma
    $numeros = array(1,2,3,4);

    //Util para ver contenidos de un array
    echo "<pre>";
    var_dump($edades);
    echo "</pre>";

    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    //Para acceder a un elemento del array
    echo $edades[1];
    echo "\n";
    echo $numeros[2];
    echo "\n";

    //Anadir un elemento en el indice 3 de un arreglo
    $edades[2] = '34';
    $numeros[2] = '20';

    echo 'Una de las edades es ' . $edades[1];
    echo "\n";
    echo 'Un numero es ' . $numeros[3];
?> 
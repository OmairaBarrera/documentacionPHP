<?php
    //ESTRUCTURAS REPETITIVAS
    /*Las estructuras repetitivas, también conocidas como estructuras de control de bucle, son 
    herramientas fundamentales en la programación que permiten repetir la ejecución de un bloque 
    de código varias veces 
    */

    //BUCLE FOR
    /*permite repetir la ejecución de un bloque de código un número fijo de veces, controlando el 
    número de iteraciones mediante un contador.*/

    //SINTAXIS
    /*
        for(inicializacion; condicion; incremento/decremento){
            codigo a ejecutar en cada iteracion
        }
    */

    $numeroTienda = readline('Ingresa el numero de tienda = ');
    $anterior = 0;
    $actual = 1;
    for($i=2;$i<=$numeroTienda;$i++){
        $caminos = $anterior + $actual;
        $anterior = $actual;
        $actual = $caminos; 
    }
    echo "Los caminos a recorer $numeroTienda son = $caminos";
?> 
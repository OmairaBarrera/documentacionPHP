<?php
    //ESTRUCTURAS REPETITIVAS
    /*Las estructuras repetitivas, también conocidas como estructuras de control de bucle, son 
    herramientas fundamentales en la programación que permiten repetir la ejecución de un bloque 
    de código varias veces 
    */

    //BUCLE WHILE
    /*permite repetir la ejecución de un bloque de código mientras se cumpla una condición.*/

    //SINTAXIS
    /*
        while(condicion){
            codigo a ejecutar mientras la condicion sea verdadera
        }
    */

    /* Crea un programa en el que imprima los numero de 1 al 10 */
    $cont = 1;
    while($cont <= 10){
        echo $cont;
        echo "\n";
        $cont++;
    }
?> 
<?php
    //ESTRUCTURAS REPETITIVAS
    /*Las estructuras repetitivas, también conocidas como estructuras de control de bucle, son 
    herramientas fundamentales en la programación que permiten repetir la ejecución de un bloque 
    de código varias veces 
    */

    //BUCLE DO WHILE
    /*permite repetir la ejecución de un bloque de código mientras se cumpla una condición.*/

    //SINTAXIS
    /*
        do{
            codigo a ejecutar almeno una vez
        }while(condicion)
    */

    $users = ["Ana","Juan","Andres","Diego"];
    do {
        $user = readline("Ingresa tu usuario: ");
        echo "\n";
    } while(in_array($user,$users));
?> 
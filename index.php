<?php
    //CONTANTES
    /*Una constante es un identificador (nombre) para un valor simple. Como el nombre sugiere, 
    este valor no puede variar durante la ejecución del script */

    // Declaracion de una constante:
    /* 
        1. Utilizamos la funcion define()
        2. Se declara el nombre de la variables que por convención, los identificadores de 
        constantes siempre se declaran en mayúsculas
        3. Seguido de una coma
        4. Por ultimo se declara el valor de la constante.
    */
    define("FINANZA", "mejorar");

    // Nombres de constantes correctos
    define("FOO", "something");
    define("FOO2", "something else");
    define("FOO_BAR", "something more");

    // Nombres de constantes incorrectos
    define("2FOO",    "something");

    // Esto es válido, pero debe evitarse:
    // PHP podría cualquier día proporcionar una constante mágica 
    // que rompiera el script
    define("__FOO__", "something"); 
?> 
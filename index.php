<?php
    //ESTRUCTURAS DE CONDICIONALES
    /*Las estructuras condicionales son una estructura de control de flujo en programación que 
    permite que el programa tome decisiones basadas en si se cumple o no una condición */

    //SWITCH
    /*permite ejecutar diferentes bloques de código dependiendo del valor de una variable.*/

    //SINTAXIS
    /*
        switch (expresion) {
            case valor1:
                bloque de código si la expresión es igual a valor1
                break;
            case valor2:
                bloque de código si la expresión es igual a valor2
                break;
            default:
                bloque de código si la expresión no coincide con ninguno de los valores anteriores
                break;
            }
    */

    $tecnologia = "HTML";

    switch ($tecnologia) {
        case 'PHP':
            echo "PHP, excelente lennguaje!";
            break;
        case 'JavaScritp':
            echo "Genial, el lenguaje de la web!";
            break;
        case 'HTML':
            echo "Emmmm........";
            break;
        default:
            echo "Algun lenguaje que no se cual es";
            break;
    }
?> 
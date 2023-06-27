<?php
    //OPERADORES BIT A BIT
    /* Los operadores bit a bit permiten la evaluación y la manipulación de bits específicos dentro 
    de un integer. */

    /*  $a & $b	- And (y)	Los bits que están activos en ambos $a y $b son activados.
        $a | $b	- Or (o inclusivo)	Los bits que están activos ya sea en $a o en $b son activados.
        $a ^ $b	- Xor (o exclusivo)	Los bits que están activos en $a o en $b, pero no en ambos, 
        son activados.
        ~ $a - Not (no)	Los bits que están activos en $a son desactivados, y viceversa.
        $a << $b - Shift left(desplazamiento a izquierda). Desplaza los bits de $a, $b pasos a la 
        izquierda (cada paso quiere decir "multiplicar por dos").
        $a >> $b - Shift right (desplazamiento a derecha). Desplaza los bits de $a, $b pasos a la 
        derecha (cada paso quiere decir "dividir por dos").
    */

    //OPERADOR BIT A BIT AND
    /*El operador AND toma el valor de los bits que $x e $y tienen en común: El único bit que 
    comparten estas variables está en segunda posición, y su valor es 2. */
    $a = 10;
    $b = 34;
    echo $a & $b; // El valor es: 2
    echo "\n";

    //OPERADOR BIT A BIT OR
    /*El valor que tomará esta vez será la sumar de los bits de cualquiera de los dos, coincidan 
    o no */
    $c = 7;
    $d = 14;
    echo $c | $d; // El valor será: 15
    echo "\n";

    //OPERADOR BIT A BIT XOR
    /*realiza una comparación bit a bit entre dos expresiones numéricas y establece el correspondiente
    bit en el resultado. Cuando sólo una expresión es true el resultado es true. */
    $e = 14;
    $f = 8;
    echo $e ^ $f; // El valor será: 6
    echo "\n";

    //OPERADOR BIT A BIT NOT
    /*El operador NOT (~) devuelve true cuando el bit de una expresión no está establecido en otra 
    expresión. */
    //NOT usando AND después
    $g = 11;
    $h = 14;
    echo $h & ~ $g; // El valor será: 4
    //NOT usando AND antes
    $i = 14;
    $j = 11;
    echo ~ $i & $j; // El valor será : 1

    //OPERADORES BIT A BIT DE DESPLAZAMIENTO
    /*Si a y b son dos números, el desplazamiento de bits (bit shifting) desplaza a bits un número b 
    de posiciones. Cada posición es multiplicar por dos si es desplazamiento a la izquierda (bit 
    shift left). Si es desplazamiento a la derecha es (bit shift right), cada posición se refiere a 
    dividir por dos. */

    //DESPLAZAMIENTO A LA IZQUIERDA <<
    /*En este ejemplo, un valor de $x de 8 se tiene que mover un número $y de posiciones, en este 
    caso dos, lo que resulta en multiplicar 2 veces por 2, resultando 16. */
    $x = 4;
    $y = 2;
    echo $x << $y; // El valor será: 16

    //DESPLAZAMIENTO A LA DERECHA >>
    /*El valor de $x es 16, desplazamos a la derecha un número $y de veces, dividiendo dos veces para
    2, resultando así un valor de 4. */
    $x = 16;
    $y = 2;
    echo $x >> $y; // El valor será: 4
?> 
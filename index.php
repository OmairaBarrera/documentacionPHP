<?php
    //OPERADORES DE ASIGNACION
    //El operador básico de asignación es "=".

    $a = ($b = 4) + 5; // ahora $a es igual a 9 y $b se ha establecido en 4.
    $a = 3;

    //Operadores combinados con el de asignacion
    $a += 5; // establece $a en 8, como si se hubiera dicho: $a = $a + 5;
    $b = "Hola ";
    $b .= "ahí!"; // establece $b en "Hola ahí!", al igual que $b = $b . "ahí!";

    //Asignacion por referencia
    /*Asignación por referencia significa que ambas variables terminan apuntando a los mismos 
    datos y nada es copiado en ninguna parte. */
    $a = 3;
    $b = &$a; // $b es una referencia para $a

    print "$a\n"; // muestra 3
    print "$b\n"; // muestra 3

    $a = 4; // cambia $a

    print "$a\n"; // muestra 4
    print "$b\n"; // muestra 4 también, dado que $b es una referencia para $a, la cual ha sido cambiada
?> 
<?php
    //OPERADORES DE COMPARACION
    /*  $a and $b	And (y)	true si tanto $a como $b son true.
        $a or $b	Or (o inclusivo)	true si cualquiera de $a o $b es true.
        $a xor $b	Xor (o exclusivo)	true si $a o $b es true, pero no ambos.
        ! $a	Not (no)	true si $a no es true.
        $a && $b	And (y)	true si tanto $a como $b son true.
        $a || $b	Or (o inclusivo)	true si cualquiera de $a o $b es true. 
    */

    // --------------------
    // foo() nunca será llamado ya que los operadores están en cortocircuito

    $a = (false && foo());
    $b = (true  || foo());
    $c = (false and foo());
    $d = (true  or  foo());

    // --------------------
    // "||" tiene una precedencia mayor que "or"

    // El resultado de la expresión (false || true) es asignado a $e
    // Actúa como: ($e = (false || true))
    $e = false || true;

    // La constante false es asignada a $f y entonces true es ignorado
    // Actúa como: (($f = false) or true)
    $f = false or true;

    var_dump($e, $f);

    // --------------------
    // "&&" tiene una precedencia mayor que "and"

    // El resultado de la expresión (true && false) es asignado a $g
    // Actúa como: ($g = (true && false))
    $g = true && false;

    // La constante true es asignada a $h y entonces false es ignorado
    // Actúa como: (($h = true) and false)
    $h = true and false;

    var_dump($g, $h);
?> 
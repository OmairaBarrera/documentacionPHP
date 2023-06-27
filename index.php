<?php
    //OPERADORES DE COMPARACION
    //permiten comparar dos valores

    //IGUAL: $z == $y, Igual true si $z es igual a $y después de la manipulación de tipos.
    $z = 10;
	$y = 10;

	if ($z == $y) {
		echo "Los valores son iguales.";
	}

    //DIFERENTE: $x != $w, Diferente true si $x no es igual a $w después de la manipulación de tipos.
    //Tambien; $a <> $b	Diferente true si $a no es igual a $b después de la manipulación de tipos.
    $x = 10;
	$w = 20;

	if ($x != $w) {
		echo "Los valores son diferentes.";
    }

    //IDENTICO: $v === $u	Idéntico	true si $v es igual a $u, y son del mismo tipo.
    $v = 10;
	$u = 10;

	if ($v === $u) {
		echo "Los valores son idénticos";
	}

    //NO IDENTICO: $s !== $t	No idéntico	true si $s no es igual a $t, o si no son del mismo tipo.
    $s = 10;
	$t = "10";

	if ($s !== $t) {
		echo "Los valores no son idénticos.";
	}

    //MAYOR QUE: $a > $b, Mayor que	true si $a es estrictamente mayor que $b
    $a = 15;
	$b = 2;

	if ($a > $b) {
		echo "El valor 1 es mayor que el valor 2.";
	}

    //MENOR QUE: $c < $d, Menor que	true si $c es estrictamente menor que $d.
    $c = 17;
	$d = 50;

	if ($c < $d) {
		echo "El valor 1 es menor que el valor 2.";
	}

    //MAYOR O IGUAL QUE: $e >= $f, Mayor o igual que true si $e es mayor o igual que $f.
    $e = 10;
	$f = 10;

	if ($e >= $f) {
		echo "El valor 1 es mayor o igual que el valor 2.";
	}

    //MENOR O IGUAL QUE: $g <= $h, Menor o igual que true si $g es menor o igual que $h.
    $g = 10;
	$h = 10;

	if ($g <= $h) {
		echo "El valor 1 es menor o igual que el valor 2.";
	}

    //NAVE ESPACIAL: $a <=> $b	Nave espacial	Un integer menor que, igual a, o mayor que cero cuando $a es 
    //respectivamente menor que, igual a, o mayor que $b. Disponible a partir de PHP 7.
    // Números enteros
    echo 1 <=> 1; // 0
    echo 1 <=> 2; // -1
    echo 2 <=> 1; // 1

    // Numeros decimales
    echo 1.5 <=> 1.5; // 0
    echo 1.5 <=> 2.5; // -1
    echo 2.5 <=> 1.5; // 1

    // Cadenas de caracteres
    echo "a" <=> "a"; // 0
    echo "a" <=> "b"; // -1
    echo "b" <=> "a"; // 1

    // FUSION DE NULL: $a ?? $b ?? $c	Fusión de null	El primer operando de izquierda a derecha que exista y no sea 
    //null. null si no hay valores definidos y no son null. Disponible a partir de PHP 7.
    // Obntener el valor de $_GET['usuario'] y devolver 'nadie'
    // si no existe.
    $nombre_usuario = $_GET['usuario'] ?? 'nadie';
    // Esto equivale a:
    $nombre_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'nadie';

    // La fusión se puede encadenar: esto devolverá el primer
    // valor definido de $_GET['usuario'], $_POST['usuario'],
    // y 'nadie'.
    $nombre_usuario = $_GET['usuario'] ?? $_POST['usuario'] ?? 'nadie';
?> 
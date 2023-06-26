<?php
    //Funciones de salida en PHP

    /* ECHO()
    Esta es la función más común para imprimir en PHP. Se utiliza para mostrar una o varias 
    cadenas de texto en la salida del servidor web. La sintaxis básica es la siguiente:
    */
    echo "Hola Mundo";
    echo "Esto abarca
    multiple líneas. Los saltos de línea también
    se mostrarán";
    echo "Esto abarca\nmúltiples líneas. Los saltos de línea también\nse mostrarán.";
    echo "Para escapar caracteres se hace \"así\".";
    // Se pueden usar variables dentro de una sentencia echo
    $foo = "foobar";
    $bar = "barbaz";
    echo "foo es $foo"; // foo es foobar
    // También se pueden usar arrays
    $baz = array("valor" => "foo");
    echo "Esto es {$baz['valor']} !"; // Esto es foo !
    // Si se utilizan comillas simples, se mostrará el nombre de la variable, no su valor
    echo 'foo es $foo'; // foo es $foo
    // Si no usan otros caracteres, se puede utilizar echo para mostrar el valor de las variables.
    echo $foo;          // foobar
    echo $foo,$bar;     // foobarbarbaz
    // Las cadenas pueden ser pasadas individualmente como varios argumentos o
    // concatenadas como un único argumento
    echo 'Esta ', 'cadena ', 'está ', 'hecha ', 'con múltiple parámetros.', chr(10);
    echo 'Esta ' . 'cadena ' . 'está ' . 'hecha ' . 'con concatenación.' . "\n";

    echo <<<END
    Aquí se utiliza la sintaxis de "here document" para mostrar
    múltiples líneas con interpolación de $variable. Nótese
    que el finalizador de here document debe aparecer en una 
    línea con solamente un punto y coma. ¡Nada de espacios extra!
    END;

    /* PRINT()
    Para mostrar una cadena
    */
    print("Hola mundo");
    print "print() también funciona sin paréntesis.";
    print "Esto separa
    múltiples líneas. Los saltos de línea también
    se mostrarán";
    print "Esto separa\nmúltiples líneas. Los salos de línea también\nse mostrarán.";
    print "para escapar caracteres se \"hace así\".";
    // También se puede usar variables usando print
    $foo = "foobar";
    $bar = "barbaz";
    print "foo es $foo"; // foo es foobar
    // También se pueden usar arrays
    $bar = array("value" => "foo");
    print "Esto es {$bar['value']} !"; // Esto es foo !
    // Al usar comillas simples se mostrará el nombre de la variable, no su valor
    print 'foo is $foo'; // foo is $foo
    // Si no se necesita mostrar otros caracteres, se puede simplemente mostrar variables
    print $foo;          // foobar

    print <<<END
    Este párrafo utiliza la sintaxis "here document" para mostrar
    múltiples líneas con la interpolación de $variable. Nótese
    que el terminador de here document debe aparecer al final
    de la línea con punto y coma y ¡ningún espacio en blanco extra!
    END;

    /* PRINTF(): Imprimir una cadena con formato
    Esta función es similar a echo(), pero solo puede imprimir una cadena de texto a la vez. 
    La sintaxis básica es la siguiente:
    */
    $texto ="Mundo";
    printf("Hola %s",$texto);

    $n =  43951789;
    $u = -43951789;
    $c = 65; // ASCII 65 es 'A'
    // observar el doble %%, esto muestra un carácter '%' literal
    printf("%%b = '%b'\n", $n); // representación binaria
    printf("%%c = '%c'\n", $c); // muestra el carácter ascii, igual que la función chr()
    printf("%%d = '%d'\n", $n); // representación estándar de un entero
    printf("%%e = '%e'\n", $n); // notación científica
    printf("%%u = '%u'\n", $n); // representación sin signo de un entero positivo
    printf("%%u = '%u'\n", $u); // representación sin signo de un entero negativo
    printf("%%f = '%f'\n", $n); // representación de punto flotante
    printf("%%o = '%o'\n", $n); // representación octal
    printf("%%s = '%s'\n", $n); // representación en una cadena
    printf("%%x = '%x'\n", $n); // representación hexadecimal (minúsculas)
    printf("%%X = '%X'\n", $n); // representación hexadecimal (mayúsculas)

    printf("%%+d = '%+d'\n", $n); // especificador de signo sobre un entero positivo
    printf("%%+d = '%+d'\n", $u); // especificador de signo sobre un entero negativo

    /* SPRINTF(): Devuelve un string formateado
    Esta función es similar a printf(), pero en lugar de imprimir la cadena formateada en la 
    salida estándar, devuelve la cadena formateada como resultado. La sintaxis básica es la 
    siguiente:
    */
    $mensaje = sprintf("Hola %s", $texto);
    echo $mensaje;
    $formato1 = 'El %s contiene %d monos';
    echo sprintf($formato, $num, $ubicación);
    $formato2 = 'El %2$s contiene %1$d monos.
                Es un bonito %2$s con %1$d monos.';
    echo sprintf($formato, $num, $ubicación);

    /* PRINT_R()
     imprimen los detalles de una variable, incluyendo su valor, en un formato legible por el humano
    */
    $a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
    print_r ($a);
    $b = array ('m' => 'mono', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
    $resultados = print_r($b, true); // $resultados contiene ahora la salida de print_r
    
    /* VAR_DUMP()
    proporciona información sobre el tamaño y tipo de datos de la variable y, en el caso de arrays y
    objetos, de los elementos que la componen.
    */
    $c = array(1, 2, array("a", "b", "c"));
    var_dump($a);
    $d = 3.1;
    $e = true;
    var_dump($b, $c);
?> 
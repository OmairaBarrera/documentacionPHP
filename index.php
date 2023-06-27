<?php
    //FUNCIONES PARA MANIPULAR ARREGLOS
    
    //Para manipular arrelgos se usan funciones
    $edades = array(18, 20, 25);

    //count: para contar el array, lo que se entiende por cuantos elementos tengo en el array
    echo count($edades);
    echo "\n";

    //array_flip: Intercambia las claves con sus valores correspondientes en un array.
    $entrada = array("naranjas", "manzanas", "peras");
    $intercambio = array_flip($entrada);

    print_r($intercambio);

    //array_fill(): Rellena un array con un valor especificado.
    $a = array_fill(5, 6, 'banana');
    $b = array_fill(-2, 4, 'pear');
    print_r($a);
    print_r($b);

    //array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
    $entrada = [
        0 => 'foo',
        1 => false,
        2 => -1,
        3 => null,
        4 => '',
        5 => '0',
        6 => 0,
    ];
    
    print_r(array_filter($entrada));

    //array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
    $func = function($valor) {
        return $valor * 2;
    };
    
    print_r(array_map($func, range(1, 5)));

    //array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
    function suma($carry, $item)
    {
        $carry += $item;
        return $carry;
    }
    $a = array(1, 2, 3, 4, 5);
    var_dump(array_reduce($a, "suma")); // int(15)

    //array_key_exists(): Comprueba si una clave existe en un array.
    $search_array = array('first' => 1, 'second' => 4);
    if (array_key_exists('first', $search_array)) {
        echo "The 'first' element is in the array";
    }

    //in_array(): Comprueba si un valor existe en un array.
    $os = array("Mac", "NT", "Irix", "Linux");
    if (in_array("Irix", $os)) {
        echo "Existe Irix";
    }
    if (in_array("mac", $os)) {
        echo "Existe mac";
    }

    //array_rand(): Devuelve una o varias claves aleatorias de un array.
    $entrada = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
    $claves_aleatorias = array_rand($entrada, 2);
    echo $entrada[$claves_aleatorias[0]] . "\n";
    echo $entrada[$claves_aleatorias[1]] . "\n";

    //array_unique(): Elimina los valores duplicados de un array.
    $entrada = array("a" => "verde", "rojo", "b" => "verde", "azul", "rojo");
    $resultado = array_unique($entrada);
    print_r($resultado);

    //array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
    $array1 = array("a" => "green", "red", "blue");
    $array2 = array("b" => "green", "yellow", "red");
    $result = array_intersect($array1, $array2);
    print_r($result);

    //array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
    $array1    = array("a" => "green", "red", "blue", "red");
    $array2    = array("b" => "green", "yellow", "red");
    $resultado = array_diff($array1, $array2);

    print_r($resultado);

    //array_pop(): Extrae y elimina el último elemento de un array.
    $stack = array("naranja", "plátano", "manzana", "frambuesa");
    $fruit = array_pop($stack);
    print_r($stack);

    //array_reverse(): Revierte el orden de los elementos en un array.
    $input  = array("php", 4.0, array("verde", "rojo"));
    $reversed = array_reverse($input);
    $preserved = array_reverse($input, true);

    print_r($input);
    print_r($reversed);
    print_r($preserved);

    //array_sum(): Devuelve la suma de todos los valores de un array numérico.
    $a = array(2, 4, 6, 8);
    echo "sum(a) = " . array_sum($a) . "\n";

    $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
    echo "sum(b) = " . array_sum($b) . "\n";

    //array_product(): Devuelve el producto de todos los valores de un array numérico.
    $a = array(2, 4, 6, 8);
    echo "producto(a) = " . array_product($a) . "\n";
    echo "producto(array()) = " . array_product(array()) . "\n";

    //array_chunk(): Divide un array en fragmentos más pequeños.
    $input_array = array('a', 'b', 'c', 'd', 'e');
    print_r(array_chunk($input_array, 2));
    print_r(array_chunk($input_array, 2, true));

    //array_keys(): Devuelve todas las claves de un array.
    $array = array(0 => 100, "color" => "red");
    print_r(array_keys($array));

    $array = array("blue", "red", "green", "blue", "blue");
    print_r(array_keys($array, "blue"));

    $array = array("color" => array("blue", "red", "green"),
                "size"  => array("small", "medium", "large"));
    print_r(array_keys($array));

    //array_values(): Devuelve todos los valores de un array.
    $array = array("size" => "XL", "color" => "gold");
    print_r(array_values($array));
    
    //array_unshift: Permite añadir un numero al inicio del array
    array_unshift($edades, 24);
    var_dump($edades);

    //array_push: Permite agregar uno o más elementos al final de un array.
    array_push($edades, 13);
    var_dump($edades);

    //is_array: Sirve para definir o ver si alguna variable es realmente un arreglo, devuelve un
    //valor boolean false o verdadero
    $no_array = "";
    var_dump(is_array($no_array));
    var_dump(is_array($edades));

    //explode: Convertir un string a un arreglo
    $frutas = "Manzana,Fresa,Mango";
    $array_frutas = explode(",",$frutas);
    var_dump($frutas);
    var_dump($array_frutas);

    //implode: Convierte un arreglo a un string
    $array_papeleria = array("lapiz","tijeras","borradores");
    $papeleria = implode(",",$array_papeleria);
    var_dump($array_papeleria);
    var_dump($papeleria);
?> 
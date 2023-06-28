<?php
    //FUNCION ISSET
    /*comprueba si una variable o un elemento de un array está definido y no es null. Esta función 
    devuelve true si la variable o el elemento de array existe y tiene un valor, y false en caso 
    contrario.
    */

    $miVariable = "Hola";
    if(isset($miVariable)){
        echo "La variable esta defiinida y tiene un valor";
    } else {
        echo "La Variable no esta definida o no tiene valor";
    }
    
    //FUNCION
    /*función empty() comprueba si una variable o un elemento de un array está vacío. Esta función 
    devuelve true si la variable o el elemento de array no tiene un valor definido, o si tiene un 
    valor que se considera vacío (por ejemplo, una cadena vacía, 0, false, null, un array vacío, 
    entre otros), y false en caso contrario. 
    */

    $miVariable2 = "";
    if(empty($miVariable2)){
        echo "La variable esta vacia o no esta definida";
    } else {
        echo "La Variable tiene valor";
    }

    //MAS EJEMPLOS
    $clientes =[];
    $clientes2 = array();
    $clientes3 = array('pedro', 'jose', 'Karen');
    $cliente = [
        'nombre' => 'juan',
        'saldo' => 200,
    ];

    //Empty - Revisa si un arreglo esta vacio
    var_dump(empty($clientes));
    var_dump(empty($clientes2));
    var_dump(empty($clientes3));

    //Isset - Revisar si un arreglo esta creado o una propiedad esta definida
    echo "<br>";
    var_dump(isset($clientes));
    var_dump(isset($clientes2));
    var_dump(isset($clientes3));
    var_dump(isset($cliente));

    //Isset - permite revisar si una propiedad de un arreglo asociativo, existe!
    var_dump(isset($cliente['nombre']));
    var_dump(isset($cliente['codigo']));
?> 
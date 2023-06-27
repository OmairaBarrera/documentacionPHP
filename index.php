<?php
    //ARREGLOS ASOCIATIVOS
    //arreglo asociativo simple
    $edades = array(
        "carlos" => 20,
        "ana" => 25,
        "juan" => 40,
    );

    //Se tiene en cuenta que las dos formas de imprimir los arreglos son validos pero distintos
    //Impresion del dato con concatenacion
    //Para acceder a un valor de un array asociativo, se utiliza su clave correspondiente
    echo 'La edad de carlos es '.$edades["carlos"];
    echo "\n";

    //Impresion del dato con las comillas dobles
    echo "La edad de juan es {$edades["juan"]} \n";

    //Arreglo asociativo con mas arreglos
    $personas = array(
        "Juan" => array(
            "Apellido" => "Perez",
            "Edad" => 25,
            "Identificacion" => 1887293002,
            "Estudios" => array(
                "Java" => "Avanzado",
                "Git" => "Experto",
            ),
        ),
        "Marta" => array(
            "Apellido" => "Martinez",
            "Edad" => 20,
            "Identificacion" => 27283902,
            "Estudios" => array(
                "Fluter" => "Experto",
                "Git" => "Basico",
            ),
        ),
        "Diego" => array(
            "Apellido" => "Cerecirga",
            "Edad" => 30,
            "Identificacion" => 37384933029,
            "Estudios" => array(
                "Python" => "Avanzado",
                "Git" => "Intermedio",
            ),
        ),
    );

    echo "La informacion de Marta es: \n Nombre Completo: Marta {$personas["Marta"]["Apellido"]} \n Edad: {$personas["Marta"]["Edad"]}";

    //Los arrays asociativos utilizando un bucle foreach de la siguiente manera:
    foreach($edades as $clave => $valor){
        echo "Clave: " . $clave . ", Valor: " . $valor;
    }
?> 
<?php
    //TIPOS DE DATOS
    
    /*1. Integer. Es un numero
        Enteros (int): se utilizan para almacenar números enteros sin decimales.
    */
    $numero = 5;
    $precio = 45000;

    /*2. Floating point number - floats - doubles - real numbers
        Punto flotante (float): se utilizan para almacenar números con decimales.
    */
    $porcentaje = 0.5;
    $tasa = 7.5;

    /*3. String. serie de caracteres
        Cadenas de texto (string): se utilizan para almacenar texto y caracteres.
    */
    $texto = "Bienvenidos a php";
    $comida = "Arroz con pollo";
    echo "$texto la comida favorita de php es $comida \n";

    /*4. Boolean. Tiene dos valores True or False
        Booleanos (bool): se utilizan para almacenar valores de verdad o falsedad, que se representan 
        por true o false.
    */
    $state = true;

    /*5. Arrays
        Arreglos (array): se utilizan para almacenar una colección de datos, que pueden ser de 
        diferentes tipos.
     */
    //ambas formas de representar un arreglo son correctas
    //Primera forma
    $edades = [20,18,17];
    //Segunda forma
    $numeros = array(1,2,3,4);

    /*6. Objetos (object): se utilizan para almacenar instancias de clases, que son definiciones 
        de objetos.
    */
    class foo
    {
        function hacer_algo()
        {
            echo "Haciendo algo."; 
        }
    }

    $bar = new foo;
    $bar->hacer_algo();

    /*7. Recursos (resource): se utilizan para almacenar referencias a recursos externos, como 
        conexiones a bases de datos o archivos abiertos.
        Un valor tipo resource es una variable especial, que contiene una referencia a un recurso 
        externo
    */
    
    /*8. Nulos (null): se utilizan para representar una variable sin valor o sin definir.*/
    $var = NULL;  
?> 
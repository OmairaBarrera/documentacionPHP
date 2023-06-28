<?php
    //FUNCIONES
    /*son bloques de código que se pueden llamar y ejecutar en cualquier parte de un programa 
    para realizar una tarea específica */

    //SINTAXIS
    /*
        function Identificador (parametros) : void{
            Expresiones ......
        }
    */

    //FUNCIONES QUE NO RETORNAN UN VALOR
    //Funcion sin parametros
    function get_comida() {
        $numero = rand(1, 6);
        switch ($numero) {
            case 1:
                echo 'Pasta';
                break;
            case 2:
                echo 'Arroz';
                break;
            case 3:
                echo 'Carne';
                break;
            case 4:
                echo 'Atun';
                break;
            case 5:
                echo 'Huevo';
                break;
            case 6:
                echo 'Maiz';
                break;
        }
    }
    get_comida();

    //Funcion con parametros
    function suma($num1, $num2){
        $res = $num1 + $num2;
        echo "La suma es = $res";
    }
    suma(3,6);
    //Funcion con parametros por defecto
    function resta($num1 = 3, $num2 = 8){
        $res = $num1 - $num2;
        echo "La rest es = $res";
    }
    resta();
    //Funcion con un array desempaquetado
    function suma_array(...$numeros){
        $res = array_sum($numeros);
        echo "La suma es = $res";
    }
    suma_array(3,4,6,7,8,6.5,56);
    //Funcion con un array que se le asigna los valores a los parametros de una funcion
    function multiplicar($n1,$n2){
        $res = $n1 * $n2;
        echo "La multiplicacion es = $res";
    }
    $num=[4,6];
    multiplicar(...$num);
    
    //La funciones que no retornan ningun valor por buena practica siempre deben llevar la palabra void 

    //FUNCIONES QUE RETORNAN UN VALOR
    function mul($n1,$n2){
        $res = $n1 * $n2;
        return "La multiplicacion es = $res";
    }
    $num=[4,6];
    $respuesta = mul(...$num);
?> 
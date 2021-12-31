<?php
    //require("C:/wamp/www/Ejer_8.4_html.html");
    $numero = $_POST['numero'];


    function cuadrado($numero){
        $result=pow($numero, 2);
        return $result;
    }
    $result=cuadrado($numero);
    echo "Tu número al cuadrado es: ".$result. "</br>";


    function cubo($numero){
        $result2=pow($numero, 3);
        return $result2;

    }
    $result2=cubo($numero);
    echo "Tu número al cuadrado es: ".$result2;


?>
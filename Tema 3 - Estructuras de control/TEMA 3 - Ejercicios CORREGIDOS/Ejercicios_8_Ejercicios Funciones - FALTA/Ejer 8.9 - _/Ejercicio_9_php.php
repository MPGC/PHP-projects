<?php
    $caracter = $_GET['caracter'];
    $numero = $_GET['numero'];

    function pluses($caracter, $numero){
        for ($i=0; $i < $numero ; $i++) { 
            for ($j=$i; $j <$numero ; $j++) {
                echo $caracter;
            }
            echo $caracter. "<br>";
        }


    }
    pluses($caracter,$numero);
    ?>
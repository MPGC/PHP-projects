<?php
/*Dada la cadena "El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito”,
indicar qué consonantes son las que aparecen y cuántas veces aparecen usando funciones para cadenas PHP.*/

$cadena='El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito';
$vocales=["b","c","d","f","g","h","j","k","l","m","n","ñ","p","q","r","s","t","v","w","y","z"];

    function ejer($con){
        
        $x=$GLOBALS['cadena'];

    //for($i=0;$i<sizeof($vocales);$i++){ // OJO CON VOCALES SON LOS INDICES!
        
        for($i=0;$i<21;$i++){ 
            echo "El numero".$con[$i]." ".substr_count($x,$con[$i]);
            echo'<br>';

        }
    }
    ejer($consonantes);



?>
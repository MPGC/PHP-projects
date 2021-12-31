
<?php

//Dada la cadena "El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito”,
 //indicar cuántas veces aparece cada vocal usando funciones para cadenas PHP.


$cadena='El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito';
$vocales=["a","e","i","o","u"];

    function ejer($voc){
        
        $x=$GLOBALS['cadena'];

    //for($i=0;$i<sizeof($vocales);$i++){ // OJO CON VOCALES SON LOS INDICES!
        
        for($i=0;$i<5;$i++){ 
            echo "El numero".$voc[$i]. "".substr_count($x,$voc[$i]);
            echo'<br>';

        }
    }
    ejer($vocales);

    /*  OTRA SOLUCIÓN - HECHA POR SANDRA
    $vocales = array("a","e","i","o","u");

    function vocales($vocal){
        global $cadena;
        $veces = substr_count($cadena, $vocal);
        echo "La letra ". strtoupper($vocal). " se encuentra ". $veces . " veces"."</br>";
    }

    for ($i=0; $i < count($vocales); $i++) { 
        vocales($vocales[$i]);
    }*/





?>

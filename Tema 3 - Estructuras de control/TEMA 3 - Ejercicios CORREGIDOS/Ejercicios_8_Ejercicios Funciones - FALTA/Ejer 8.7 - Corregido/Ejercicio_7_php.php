
<?php
//Crea una función que recibe 4 números como parámetros de entrada y devuelve un valor, la media de esos números.

    $num1 = $_POST['num1'];
 	$num2 = $_POST['num2'];
 	$num3 = $_POST['num3'];
 	$num4 = $_POST['num4'];


    function numeros($num1,$num2,$num3,$num4){
    	$media=($num1+$num2+$num3+$num4)/2;
    	return $media;

    }
    $media=numeros($num1,$num2,$num3,$num4);
    echo "La media de los cuatro números es: ".$media;




?>
<?php

$a = $_POST['base'];
$b = $_POST['exponente'];

function tabla($a,$b){

    if(!is_integer($b) || !is_integer($a)){

        echo "<table>";   
        for($i=1,$i<=$a,$i++) { //filas
            echo "<tr>";
            for($j=1;$j<=$b,$j++){//columnas
                echo"<tr>";
                echo pow($i,$j);
                echo "</tr>";
            }
            echo "</tr>";   
        }
        echo "</table>";         
    }
}
tabla($a,$b);
<?php

$numerointro=$_POST['numerointro'];
$alum=0;

function sumatorio(){
    $a=$GLOBALS['numerointro'];
    while($a>=1){
          $v=f($a);
          $a--;      
    }
    echo $v;
}

function f($a){
    static $alum=0;// PARA MANTENER EL VALOR se usa static
    $alum=$alum+$a;
    return $alum;
}


?>

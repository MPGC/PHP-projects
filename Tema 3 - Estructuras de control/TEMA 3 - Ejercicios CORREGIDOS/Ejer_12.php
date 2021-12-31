<?php
/*Práctica 3.2 
Implementar un juego donde se debe acertar un código secreto de 4 cifras. En el formulario indicaremos 4 números diferentes (entre 0 y 9)
y nos deberá indicar si alguno está o no en la posición correcta. 
Todo lo referente al diseño, lógica, etc. queda libre, es decir, se pide lo mínimo y se podrán añadir todos los elementos que se desee. 
Números obtenidos al azar: 7, 3, 1, 4
Resultado:*/

$ns;
$temp;


for($x=0;$x<4;$x++)$ns[$x]=-1;
for($i=0;$i<4;$i++){
    $temp=rand(0,9);
    for($x=0;($x<$i)&&($temp!=$ns[$x]);$x++); //Se pone ; porque no pregunta nada mas, sale y ya esta
    if($temp==$ns[$x])$i--;
    else $ns[$i]=$temp;
}


?>
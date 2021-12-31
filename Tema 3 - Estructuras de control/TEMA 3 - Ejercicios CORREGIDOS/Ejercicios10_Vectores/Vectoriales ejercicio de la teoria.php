<?php
//Crear un vector de 10 elementos con números enteros, visualizar su contenido.

//1ºForma:
$enteros= array(1,2,3,4,5,6,7,8,9,10);

//2ºForma:
$enteros[0]=1;
$enteros[1]=2;
$enteros[2]=3;
$enteros[3]=4;
$enteros[4]=5;
$enteros[5]=6;
$enteros[6]=7;
$enteros[7]=8;
$enteros[8]=9;
$enteros[9]=10;


//3º Forma:
$enteros=["1","2","3","4","5","6","7","8","9","10"];


//2.- Visualizar el vector anterior comenzando por el último elemento hasta el primer elemento del vector. 
//NO SE HACE FOREACH !!!

    for($i=6;$i>=0;$i--){
        echo "El resultado es ".$enteros[$i]."<br>";
    }

//3.- Visualizar la primera mitad del vector.

    for($i=0;$i<5;$i++){
        echo "El resultado es ".$enteros[$i]."<br>";
}   

//4.- Visualizar la segunda mitad del vector.

    for($i=5;$i<10;$i++){
       echo "El resultado es ".$enteros[$i]."<br>";
}   

//5. -Crear un vector  que almacene las claves de acceso de 5 usuarios de un sistema.
// El índice del vector será el nombre de cada usuario. Visualizar la clave de acceso de uno de los usuarios.

    //$almacenar= array('Maria'=>"1AA", "Juan"=>"2BB","Pedro"=>"3CC", "Luis"=>"6EE");

    $almacenar ["Maria"]   = "1AA";
    $almacenar ["Juan"]    = "2BB";   
    $almacenar ["Pedro"]   = "3CC";
    $almacenar ["Pepito"]  = "4DD";
    $almacenar ["Luis"]    = "6EE";

    for($e=0;$e<4;$e++){
        echo "Las claves son: ".$almacenar[i]."<br>";
    }

// 6.- Visualizar la clave de acceso de todos los usuarios.

    foreach($almacenar as $usuarios=> $result);
         echo "El usuario ".$usuario."tiene la clave: ".$almacenar;                                  

?>
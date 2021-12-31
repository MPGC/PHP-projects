
<?php

//Para buscar todos los ficheros de una ruta expecifica. Crea un array con todos los ficheros .php
//glob("*.php"); busca archivos.php	
foreach(glob("*.php") as $indice =>$valor){
    echo $indice.'  ';
    echo $valor;
    echo '<br><br>';
}


//Tambien se puede crear un array 
$array = glob("*.php");

foreach($array as $indice =>$valor){
    echo $indice.'  ';
    echo $valor;
    echo '<br><br>';
}


//Para Elimiar
//Crea un array con glob y hasta que no hace el unlink no lo borra y rmdir para borrar la carpeta

$carpeta=" *la ruta* ";
    foreach(glob($carpeta."*.*") as $indice =>$a){  
    unlink($a);// Eliminamos todos los archivos de la carpeta hasta dejarla vacia  
}  
rmdir($directorio1);         // Eliminamos la carpeta vacia  
echo "Borrado";




//Para saber/preguntar si es una carpeta o archivo is_dir(directorio): ///  CORREGIDO  ///

 //NO *.* Porque asi te coge todo, no solo los archivos

//$valor cada nombre de los ficheros del array, lo mismo que [$i]
function repetir($ar){
    foreach(glob("ar/*") as $valor){//NO *.* Porque asi te coge todo, no solo los archivos
        if(is_dir($valor)repetir($valor);
        else unlink($valor);
    }
    rmdir($ar);
}
repetir("directorio10");

?>










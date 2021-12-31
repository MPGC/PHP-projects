<?php
    //Para leer el archivo anteriormente creado y visualizar su contenido:
    //header('Content-Type: text/html; charset=UTF-8');
    include_once("Ejerpizzas1.php");
    $archivoLeido = fopen('Pedidospizza.txt','r') or die('ERROR: No ha sido posible leer el archivo. Revisa su nombre y sus permisos.');

    $line = fgets($archivoLeido); // guardamos toda la línea en $line como un string. Leemos el primer registro del fichero hasta el final de fichero o el intro.
    while (!feof($archivoLeido)) { // loop hasta que se llegue al final del archivo
    
    $field[]=$line; // dividimos $line en sus celdas, separadas por el caracter |  e incorporamos la línea a la matriz $field 
    
    $line = fgets($archivoLeido);//leemos del registro segundo al último.

 
    var_dump($field);


    }

    fclose($archivoLeido);// generamos la salida HTML 
    echo '</br>';  

    //NO SE PUEDE FOREACH POR QUE NECESITAMOS UN ARRAY BIDIMENSIONAL
    //foreach($field as $infor){ //$field es un array bidimensional
    //echo '<div> Nombre: '.$infor[0].'</div>';

    for ($i=0;$i=sizeof($field);$i++){
        echo $field[$i].'<br>';
    }
    

 
?>
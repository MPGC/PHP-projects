<?php
    //Para leer el archivo anteriormente creado y visualizar su contenido:
    //header('Content-Type: text/html; charset=UTF-8');
    $fp = fopen('Nuevo.txt','r') or die('ERROR: No ha sido posible leer el archivo. Revisa su nombre y sus permisos.');

    $nombre;
    $asignatura;
    $nota;

    while (!feof($fp)) { // loop hasta que se llegue al final del archivo
    $line = fgets($fp); // guardamos toda la línea en $line como un string. Leemos el primer registro del fichero hasta el final de fichero o el intro.
    $field[]=$line; //e incorporamos la línea a la matriz $field 
    $line = fgets($fp);//leemos del registro segundo al último.

        if($field[$asignatura]<5){
            foreach($field as $line=>$asignatura);        
            echo $asignatura;
        }else{
            echo "No hay asignaturas suspendidas";
        }

    echo '</br>';
    echo '************';   


    var_dump($field);

    }

    fclose($fp);// generamos la salida HTML 

?>
<?php
 $nombre = $_POST['nombre'];
 echo "$nombre".'<br>';

$apellido = $_POST['apellidos'];
 echo "$apellido".'<br>';

 $email = $_POST['email'];
 echo "$email".'<br>';

$domicilio = $_POST['domicilio'];
 echo "$domicilio".'<br>';

if(isset($_POST['musica'])){
    echo "musica <br>";
}

if(isset($_POST['libros'])){
    echo "libros <br>";
}

if(isset($_POST['deportes'])){
    echo "deportes <br>";
}

if(isset($_POST['cine'])){
    echo "cine <br>";
}


if ($_POST['sexo']== "m") {
    echo "Eres mujer <br>";
}elseif($_POST['sexo']=="h"){
    echo "Eres hombre <br>";
}

$dia=$_POST['dias'];
    switch ($dia) {
        case '1':
            echo "Lo recibirá el dia Lunes";
            break;
        case '2':
            echo "Lo recibirá el dia Martes";
            break;
        case '3':
            echo "Lo recibirá el dia Miercoles";
            break;
        case '4':

            echo "Lo recibirá el dia Jueves";
            break;
        case '5':

            echo "Lo recibirá el dia Viernes";
            break;


        default:
        echo "Lo recibirás en fin de semana";


    }

    $opinion=$_POST['opinion'];
    echo " <br> Este cliente opina: $opinion";



    ?>
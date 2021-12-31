<?php

$conexion=mysqli_connect("localhost","root","", "transporte") or die("Error en la conexion"); 

mysqli_query($conexion ,"insert into  recorridos  values ($_POST[numero_tren],$_POST[numero_estacion])") or die("Problemas en el select"); 

echo "Datos insertados correctamente";


mysqli_close($conexion); 


?>
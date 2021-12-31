<?php

$conexion=mysqli_connect("localhost","root","", "transporte") or die("Error en la conexion"); 

mysqli_query($conexion ,"insert into estaciones values ($_POST[cod_estacion],'$_POST[nombre]','$_POST[poblacion]')") or die("Problemas en el select"); 

echo "Datos insertados correctamente";


mysqli_close($conexion); 


?>
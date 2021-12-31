<?php

$conexion=mysqli_connect("localhost","root","", "transporte") or die("Error en la conexion"); 

mysqli_query($conexion ,"insert into  trenes  values ($_POST[numero],'$_POST[fecha_compra]',$_POST[km_recorridos])") or die("Problemas en el select"); 

echo "Datos insertados correctamente";


mysqli_close($conexion); 


?>e
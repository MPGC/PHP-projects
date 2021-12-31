<?php
//Para subir al servidor esta sentencia.El fichero destino se llama igual que el fichero origen
copy ($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);

//el fichero dstino se llamará: imagen.jpg
copy($_FILES['archivo']['tmp_name'],'present.pptx');

echo "El archivo se registro en el servidor.<br />";
$nom=$_FILES['archivo']['name'];
//echo "<input type='file' name="$nom\" />"; //poner el archivo
?>

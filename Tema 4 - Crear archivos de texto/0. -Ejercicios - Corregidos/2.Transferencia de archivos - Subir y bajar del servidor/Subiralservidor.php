<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />  <title>Subir archivo al servidor</title>
</head>
<body>
    <h2>Seleccionar un archivo para enviar al servidor</h2>
    <form action="Subiralservidor2.php" method="post" enctype="multipart/form-data">
        Seleccione el archivo:
        <input type="file" name="archivo"><br />
        <input type="submit" value="Enviar">
        <!--se puede incluir una etiqueta de tipo hidden con el nombre ‘max_file_size’ //para indicar (value) la cantidad maxima de bytes que se pueden subir
        <INPUT type='hidden' name='max_file_size' value='2500000'> -->
    </form>
 
</body>
</html>
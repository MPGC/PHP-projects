<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_dictado</title>
</head>
<body>

    <?php
        if (!$_GET){
            echo
            '<form method=GET action="">
                teclea un numero:
                <input type="text" name="numero">
                </br>
                <input type="submit" value="aceptar" name="boton">
            </form>'
                
        }else{
            $numero=$_GET['numero'];

            function crearNumero($num){
                for(i=0;$i<10;i++){
                echo ($num . "x". ($1+1). "-".($num*($1+1)). "</br>");
                }
            }
          crearNumero($numero);

      }

    ?>
     
</body>
</html>

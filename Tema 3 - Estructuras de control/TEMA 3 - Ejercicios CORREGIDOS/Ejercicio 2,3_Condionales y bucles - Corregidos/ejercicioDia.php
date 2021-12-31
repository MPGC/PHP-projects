<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title here!</title>
    </head>
    <body>
        <?php
            $dia=1;
            do{
                echo"Dia $dia";
                echo'</br>';
                $dia++;
            }while($dia<=date("d"));

        ?>
    </body>
</html>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title here!</title>
    </head>
    <body>
        <?php
            $numA=rand(1,100);
            $numero=1;
            do{
                echo"$numero";
                $numero++;
                echo'<br>';
            }while($numero<=$numA);
        ?>
    </body>
</html>
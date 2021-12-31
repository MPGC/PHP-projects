<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title here!</title>
    </head>
    <body>
        <?php
            $num=1;
            $numFinal;
            do{
                $numFinal=$num*2;
                echo"$numFinal";
                echo'<br>';
                $num++;
            }while($numFinal<28);
        ?>
    </body>
</html>
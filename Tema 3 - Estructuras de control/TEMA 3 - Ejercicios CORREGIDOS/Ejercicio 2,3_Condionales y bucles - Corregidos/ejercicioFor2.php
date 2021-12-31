<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title here!</title>
    </head>
    <body>
        <?php
        $numFinal;
        echo date("d|m|Y");
        echo'<br><br>';
        for($i=1;$i<28;$i++){
            $numFinal=$i*2;
            echo"$numFinal";
            echo'<br>';
            if($numFinal==28){
                $i=27;
            }
        }
        ?>
    </body>
</html>
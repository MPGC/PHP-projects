<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title here!</title>
    </head>
    <body>
        <?php
           
            for($hora=0;$hora<24;$hora++){
                for($min=0;$min<60;$min++){
                    for($seg=0;$seg<60;$seg++){
                        echo"$hora:$min:$seg";
                        echo'<br>';
                    }
                }
            }
        ?>
    </body>
</html>
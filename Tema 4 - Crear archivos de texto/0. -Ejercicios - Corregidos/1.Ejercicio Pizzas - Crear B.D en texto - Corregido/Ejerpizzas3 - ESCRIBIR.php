<?php 

    //Para leer el archivo anteriormente creado y visualizar su contenido:
    //header('Content-Type: text/html; charset=UTF-8');
    include_once("Ejerpizzas1.php");

    $arch = fopen("Pedidospizza.txt","a") or die("ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.");
    fwrite ($arch,$_POST['nombre'].PHP_EOL);
    fwrite ($arch,$_POST['direccion'].PHP_EOL);   

    $pizzas=$_POST['pizzas'];
    $canti=$_POST['cantidades'];

    foreach ($pizzas as $valor) {
        fwrite($arch,$tipoPizzas[(int)$valor]);
        fwrite($arch,$canti[(int)$valor].PHP_EOL);
    }

    fwrite($arch," ********************** ".PHP_EOL);
    fclose($arch);// generamos la salida HTML 

?>

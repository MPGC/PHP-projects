<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <form action="Ejerpizzas3.php" method="post">
        <h1>Pedido Pizza:</h1>
        <p>Nombre: <input type="text" name="nombre" size="20"></p>
        <p>Dirección: <input type="text" name="direccion" size="50"></p>

            <?php 
            include_once("Ejerpizzas1.php");

            foreach($tipoPizzas as $indice=> $valor){
                echo '<br><input type="checkbox" name="pizzas[]" value="'.$indice.'">';
                echo $valor;
                echo '<input type="number" name="cantidades[]">';
            }

            ?>

        <p><input type="submit" name="submit" value="Confirmar"></p>

    </form>


</body>
</html>
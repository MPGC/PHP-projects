<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz</title>
    <style></style>
</head>
<body>
	<!--<label for="n1">Introduce un número<label>
	<input type="number" value="n1">


	 $numero1 = $_POST['n1'];
	 $alea = $_SESSION['numeroaleatorio'];
	 if($alea==$numero1){
	 	echo "Resultado correcto";
     }else{
	 	echo "Resultado incorrecto";
	}

	


	 ?>

-->

<form action="Ejercicio6php.php" method="GET">

	<label>Número a identificar</label>
    <img src="Ejer6php.php"/></br>
    <label>Teclea los números que aparecen en el gráfico:</label>
    <input type="text" name="numero">

    <input type="submit" name="boton" value="continuar">
</form>


</body>
</html>
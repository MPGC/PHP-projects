<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	if(!$_GET){
	?>
	<form method="GET" action="">
		<label>Teclea un numero: </label>
        <input type="number" name="numero"><br><br>

		<input type="submit" name="siguiente">
	</form>

	<?php
}else{
	$number=$_GET['numero'];
	//$sum=1;
	echo "El numero tecleado es : ".$number .'<br>';

	function f1(){
		global $number;
		$total=0; //Para sumas siempre inicialziamos a 0. Para multiplicar inicializamos a 1.

        for ($sum=1; $sum <($GLOBALS['number']+1); $sum++) { 
            $total = $sum + $sum + ($total-$sum);
            //echo "El numero que se va sumando :".$sum . '<br>';	
	    }
	  return $total;
    }
    $v=f1();
    echo "La suma total de todos los numeros hasta ".$number." es :".$v . '<br>';
}
	?>
</body>
</html>
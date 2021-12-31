
<?php 
//EJERCICIO1
/*Crear una funcion inicializar una variable y con 2 echos
Un echo visualiza el contenido de dicha variable y el otro echo visualiza una variable global con el mismo nombre que la variable local.*/


/*
	$x=9;

	function muestraNumero()
	{
		$x=27;
		echo $x;
		echo $GLOBALS['x'];
		
	}

	muestraNumero();
	*/

//EJERCICIO2

	/*Inicializar dos variables globales, crear una funcion con dos variables con la 
	palabra Global y pasar el valor de la primera variable a la segunda variable, visualizar fuera de la funcion el contenido de las dos variables de dos formas distintas*/
/*
$n1=3;
$n2=5;
function variableGlobal(){
	global $n1;
	global $n2;

	$n2=$n1;

	$GLOBALS['n2']= $GLOBALS['n1'];
}
variableGlobal();
echo "El primer número es:" .$n1. "y el otro número es: ".$n2;
echo "<br>";
echo " El valor de la primera variable es: " .$GLOBALS['n1'] ." el otro valor es: ".$GLOBALS['n2'];*/

//EJERCICIO3
/*Realizar un ejecicio con varias variables y realizar asignaciones por valor y por referencia*/
	
	
	

	$edad=25;

	$edadNueva=$edad;

	$miEdad=&$edad;
	

	

	echo "la primera edad es:".$edad. '<br>';
	echo "La edad Nueva es: ".$edadNueva.'<br>';
	echo "La edad desde referencia: ".$miEdad.'<br>';
	echo '<br>';
	
	$edad=33;

	echo "la primera edad es:".$edad. '<br>';
	echo "La edad Nueva es: ".$edadNueva.'<br>';
	echo "La edad desde referencia: ".$miEdad.'<br>';
	



	
 ?>



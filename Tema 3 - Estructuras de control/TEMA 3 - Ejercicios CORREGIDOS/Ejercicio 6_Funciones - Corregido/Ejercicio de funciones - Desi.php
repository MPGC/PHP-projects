<?php

$nombre=$_POST['nombre'];
$apel1=$_POST ['apellido1'];
&apel2=$_POST ['apellido2'];

$nota1=$_POST['nota1'];
$nota2=$_POST['nota2'];
$nota3=$_POST['nota3'];

/*Primer tipo de funcion*/
function calcularnota(){
	global1 $nota1;
	global2 $nota2;
	golbal3 $nota3;

$notaMedia= ($nota1+$nota2+$nota3)/3;
echo $GLOBALS['nom']." ". $GLOBALS['apel1']." ".$GLOBALS['apel2']. "tiene una nota media de: ". $notaMedia;

}
calcularNota();


/*Segundo tipo de función*/
function calcularnota2($nota1,$nota2,$nota3){
	$notaMedia= ($nota1+$nota2+$nota3)/3;
	echo $GLOBALS['nom']." ". $GLOBALS['apel1']." ".$GLOBALS['apel2']. "tiene una nota media de: ". $notaMedia;

}
calcularNota($nota1,$nota2,$nota3);

/*Tercer tipo de función que retorna */

function calcularnota3(){
	global1 $nota1;
	global2 $nota2;
	golbal3 $nota3;

$notaMedia= ($nota1+$nota2+$nota3)/3;
return $GLOBALS['nom']." ". $GLOBALS['apel1']." ".$GLOBALS['apel2']. "tiene una nota media de: ". $notaMedia;

}
$ret=calcularNota3();
echo $ret;

/* Cuarta funcion */

function calcularnota4($dato1,$dato2,$dato3){

$notaMedia= ($dato1+$dato2+$dato3)/3;
return $GLOBALS['nom']." ". $GLOBALS['apel1']." ".$GLOBALS['apel2']. "tiene una nota media de: ". $notaMedia;

}
$datos=calcularNota3($nota1,$nota2,$nota3);
echo $datos;

?>

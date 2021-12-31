<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	
	$vari=$_GET['numero'];
	$multi2=0;
	$nombre=0;
	//echo $vari . " x " . $multi . " = " . '<form method="GET">
	//<input type="number" name="00">' ; 
	
	echo '<form method="GET" action="3.parte3.php">';
		do{
			echo $vari . ' x ' . $multi2 . ' = ' . '<input type="number" name="'.$nombre.'"><br>';
			$multi2++;
			$nombre++;
		}while($multi2<=10);
		echo "<input type='hidden' value='$vari' name='oculto'>";
        echo "<input type='submit' value='Comprobar'>";
        echo "</form>";

/*
    $varia= $_GET['numero'];
    $cont = 0;
    echo '<form method="GET" action="3.parte3.php">';
          echo $varia.' x 0 = <input type="text" name="0"> <br/>';
          echo $varia.'  x 1 = <input type="text" name="1"> <br/>';
          echo $varia.'  x 2 = <input type="text" name="2"> <br/>';
          echo $varia.'  x 3 = <input type="text" name="3"> <br/>';
          echo $varia.'  x 4 = <input type="text" name="4"> <br/>';
          echo $varia.'  x 5 = <input type="text" name="5"> <br/>';
          echo $varia.'  x 6 = <input type="text" name="6"> <br/>';
          echo $varia.'  x 7 = <input type="text" name="7"> <br/>';
          echo $varia.'  x 8 = <input type="text" name="8"> <br/>';
          echo $varia.'  x 9 = <input type="text" name="9"> <br/>';
          echo $varia.'  x 10 = <input type="text" name="10"> <br/>';
          echo '<input type="hidden" value="'.$varia.'" name="oculto">';
         echo '<input type="submit" value="Comprobar">';
     echo '</form>';
    */
	?>
</body>
</html>
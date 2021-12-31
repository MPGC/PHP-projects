<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	
	$variab=$_GET['oculto'];
	$llamada=$_GET['$cont'];
	$multi3=0;
	$cont=0;
    do{
    	echo $variab . ' x ' .$multi3. ' = ' . $llamada ;
    	if($llamada == ($variab*$multi3) ){
    		echo "Correcto <br>";
    	}else{
    		echo "Incorrecto <br>";
    	}
    	$multi3++;
    }while($multi3<=10);
/*
	$variable0=$_GET['0'];
    $variable1=$_GET['1'];
    $variable2=$_GET['2'];
    $variable3=$_GET['3'];
    $variable4=$_GET['4'];
    $variable5=$_GET['5'];
    $variable6=$_GET['6'];
    $variable7=$_GET['7'];
    $variable8=$_GET['8'];
    $variable9=$_GET['9'];
    $variable10=$_GET['10'];
    

     echo '<form method="GET">';
     if($variable0==($variab*0)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.' x 0 = ' . $variable0 . '<br/>';
     if($variable1==($variab*1)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 1 = ' . $variable1 . '<br/>';
     if($variable2==($variab*2)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 2 = ' . $variable2 . ' <br/>';
     if($variable3==($variab*3)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 3 = ' . $variable3 . ' <br/>';
     if($variable4==($variab*4)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 4 = ' . $variable5 . ' <br/>';
     if($variable5==($variab*5)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 5 = ' . $variable6 . ' <br/>';
     if($variable6==($variab*6)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 6 = ' . $variable7 . ' <br/>';
     if($variable7==($variab*7)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 7 = ' . $variable8 . ' <br/>';
     if($variable8==($variab*8)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 8 = ' . $variable9 . ' <br/>';
     if($variable9==($variab*9)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 9 = ' . $variable10 . ' <br/>';
     if($variable10==($variab*10)){echo " CORRECTO ";}else{echo " INCORRECTO ";}
          echo $variab.'  x 10 = ' . $variable10 . ' <br/>';
     echo '</form>';
		*/
     ?>
</body>
</html>
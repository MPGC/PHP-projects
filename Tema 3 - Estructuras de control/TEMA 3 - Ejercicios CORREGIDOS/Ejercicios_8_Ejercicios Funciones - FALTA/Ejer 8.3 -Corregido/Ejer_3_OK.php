<?php
    //require("C:/wamp/www/Ejer_8.3_html.html");
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $mayor;

    echo "<h1> Resultado: </h1>";
	//echo "<h3>n1: $pri &nbsp n2: $seg <br> operacion: $op</h3>";


//function numeromayor($numero1,$numero2){

    if($numero1>$numero2){    
        echo "El numero mayor es: ".$numero1;
        
    }else if ($numero2>$numero1){
        $mayor == $numero2;
        echo "El numero mayor es: ".$mayor;

    }else{
        echo "Los números son iguales";
    }





//}

//numeromayor($numero1,$numero2);

?>
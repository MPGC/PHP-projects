<?php

    $num1 = $_POST['num1'];
 	$caract2 = $_POST['caract2'];
  

    function caracteres($num1,$caract2){
    	for($i=0;$i<=$num1;$i++){
     		 for($e=0;$e<=$caract2;$e++){ 		
    	        echo $caract2;
             }
        echo $caract2.'</br>';
        }
    }
    $result=caracteres($num1,$caract2);
    
?>
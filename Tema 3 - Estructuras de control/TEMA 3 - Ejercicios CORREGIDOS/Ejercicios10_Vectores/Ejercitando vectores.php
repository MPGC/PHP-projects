<?php

    //1º FORMA
    echo "Array bidimensionales <br />";
    $lista[0][0]="Jon ";
    $lista[0][1]="Ane ";
    $lista[0][2]="Miren";
    $lista[0][3]="Aitor";
    $lista[0][4]="Alberto";
    $lista[1][0]="Begoña";
    $lista[1][1]="Beatriz";
    $lista[1][2]="Carmen";
    $lista[1][3]="María";
    $lista[1][4]="Zaloa";


    //2º FORMA
    // $lista anterior se puede codificar:
    $lista[]=array("Jon","Ane","Miren","Aitor","Albert");
    $lista[]=array("Begoña","Bea","Carmen","Maria","Zaloa");


    //3º FORMA
    //$lista también se puede codificar:
    $lista=array(array("Jon","Ane","Miren","Aitor","Albert"),array("Begoña","Bea","Carmen","Maria","Zaloa"));


    //4º FORMA ???????????
    //$lista también se puede codificar: 
    $lista=['array'=>['Jon','Ane','Miren','Aitor','Albert'],
    'array'=>['Begoña','Bea','Carmen','Maria','Zaloa']];


    //Visualiza los nombres de la lista:
    for($i=0;$i<2;$i++){  //las filas siempre!!!
        for($e=0;$e<5;$e++){ // las columnas
        echo $lista[$i][$e]; // Visualiza todos los nombres de la lista
        }
    }

  
    //Visualiza los nombres de la lista con espacio entre medias:
    for($e=0;$e<2;$e++){   
        echo '</br>'; 
    for($i=0;$i<5;$i++){  
        echo $lista [$i][$e];

        }
    }


    //Visualiza los nombres de la lista con espacio entre medias más completo:
    for($e=0;$e<2;$e++){   
        echo "</br>"." Alumnos del curso ".($e+1)."</br>"; 

        for($i=0;$i<5;$i++){  
            echo $lista [$e][$i];
            }
    }


    //Añadir curso al programa
    $lista[]=array("Jon","Ane","Miren","Aitor","Albert");
    $lista[]=array("Begoña","Bea","Carmen","Maria","Zaloa");
    $curso=array("primero", "segundo"); //Añadir array unidimensional curso

    for($e=0;$e<2;$e++){   
        echo "</br> Alumnos de".$curso[$i]."curso ".'</br>'; 
        
        for($i=0;$i<5;$i++){  
            echo $lista [$e][$i];
            }
    }


    //Con contador
    $lista[]=array("Jon","Ane","Miren","Aitor","Albert");
    $lista[]=array("Begoña","Bea","Carmen","Maria","Zaloa");
    $cont=1;

    for($e=0;$e<2;$e++){   
        echo "</br> Alumnos de curso: ".$cont;
        $cont++;
        echo "</br>" ;

        for($i=0;$i<5;$i++){  
            echo $lista [$e][$i];
            }
    }


     //Con foreach dias de la semana: EN PLAN SIMPLE
     $semana= array ('lunes','martes','miercoles','jueves','viernes');

     foreach ($semana as $valor){
         echo $valor;
     }
 
     foreach ($semana as $indice=>$valor){
         echo "La posicion ".$indice."el contenido es".$valor;
     }
 


    //Con un foreach
    $lista[]=array("Jon","Ane","Miren","Aitor","Albert");
    $lista[]=array("Begoña","Bea","Carmen","Maria","Zaloa");
    
    
    foreach($lista as $indice=>$curso){
        echo "Alumnos del Curso:  ".($indice+1). '</br>'; //1º Foreach hace referencia a una fila! El ultimo siempre será el 1º del segundo for each (ej:$result)
        echo "<br />";
    
        foreach($curso as $alumnos){ // 2º Foreach hace referencia a cada uno dentro de esa fila.El 1º valor sera siempre el ultimo del 1º foreach
            //echo $alumnos;
            echo  $alumnos;
            echo "<br />";
        }
    }
    
    
    
?>

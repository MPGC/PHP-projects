<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Secret Code</title>
        <style></style>
    </head>
    <body>

    <?php

        if(!$_POST){

            $a=0; //OJO el contador se inicializa y se saca fuera del formulario
            //Se hace todas las partes de html con echos
            echo'<form action="" method="POST">';
            echo'<label for="text">Teclea un número:</label>'; 

            do{                 
                echo'<input type="number" name="numero[]">';
                $a++; 

            }while($a<4);

            echo '<input type="submit" name="enviar" value="Enviar">';
            echo'</form>';

        }else{

            $tecleados= $_POST['numero'];//Recibir el numero del html
            //Para que recoga los indices y recorra el array tecleados 
            for($i=0;$i<sizeof($tecleados);$i++){

                echo $tecleados[$i]. " ";

            }

            //Generamos los numeros aleatorios 
           // $aleatorio=rand(1,9);

               $aleatorio=rand(1,9);
               $numeros[]=$aleatorio; 

               do{
                $encontrado=false;
                $newaleatorio=rand(1,9);

                for($i=0;$i<sizeof($numeros);$i++){ 
                    if($newaleatorio == $numeros[$i]){
                        $encontrado=true;
                        $i=sizeof($numeros); //LLeva el indice al ultimo numero
                    }    

                }

                if($encontrado==false){
                      $numeros[]=$newaleatorio;
                }

                

               }while(sizeof($numeros)<4); //OJO NO CORCHETES
                foreach($numeros as $dato){
                    echo $dato;
                }


    

      /*      for($e=0;$e<4;$e++){
                echo $numaleatorios[$e];
            }



            for($e=0;$e<4;$e++){
                $aleatorio=rand(1,9);
                $numaleatorios[]=$aleatorio;
                echo $numaleatorios[$e];
            }*/



        }
?>
</body>
</html>
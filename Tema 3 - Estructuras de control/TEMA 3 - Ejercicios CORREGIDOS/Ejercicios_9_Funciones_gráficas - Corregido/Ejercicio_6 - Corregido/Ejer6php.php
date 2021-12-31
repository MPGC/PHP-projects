<?php
session_start();

$imagen=imageCreate(100,80);
$anaranjado=ImageColorAllocate($imagen,255,255,0); 
ImageFill($imagen,0,0,$anaranjado); 

$verde=ImageColorAllocate($imagen,0,255,0);
$valoraleatorio= rand(40000,10000);  //genera números aleatorios
$_SESSION["validarnumero"]=$valoraleatorio;  //generamos la variable dentro del captcha
ImageString($imagen,5,50,20,$valoraleatorio,$verde); //tamaño de la fuente máx.5 y coordenadas c y f

	for($i=0;$i<4;$i++){
        imageline(
            $imagen,
            $x1=rand(40,2000),
            $y1=rand(20,50),

            $x2=rand(0,50),
            $y2=rand(0,55),
            $mediumblue=ImageColorAllocate($imagen,0,0,205)
        );
	}

header ("content-type: image/jpeg"); 
imageJPEG ($imagen); 
imageDestroy($imagen); 



        if(isset($_GET["boton"])){
        $numero=$_GET["numero"];
        //include("funcionesGraficas.php");
    }

        function validarnumero($numero){
            if($numero== $_SESSION["valoraleatorio"]){
                echo "Los números tecleados son correctos.";
            }else{
                echo "Los números tecleados no son correctos";
            }
        }
        validarnumero($numero);

?>
 
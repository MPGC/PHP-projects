<?php
//Ejercicio 2. Crea un cuadrado amarillo.

$ancho=300;
$alto=500;
$imagen=imageCreate($ancho,$alto); //Tamaño del cuadrado por variables
$amarillo=ImageColorAllocate($imagen,120,180,0); //creamos una referencia a un color 255,255,0(RGB)
ImageFill($imagen,0,0,$amarillo); //rellenamos el fondo de la imagen con dicho color.
//0,0 son las coordenadas x, y

header ("content-type: image/jpeg"); 
imageJPEG ($imagen); 
imageDestroy($imagen); 
                      
?>


<?php
//Ejercicio3.- obtener un cuadrado amarillo con un número aleatorio dentro.
//Ejercicio4.-  Codifica el código correspondiente (utilizar repetitiva para crear  las 4 líneas)
// para visualizar el siguiente CAPTCHA:  → //COMO PREGUNTA DE EXAMEN *

$imagen=imageCreate(200,200);
$anaranjado=ImageColorAllocate($imagen,255,255,0); 
ImageFill($imagen,0,0,$anaranjado); 

$verde=ImageColorAllocate($imagen,0,255,0);
$valoraleatorio= rand(40000,10000);                  //genera números aleatorios
ImageString($imagen,5,50,20,$valoraleatorio,$verde); //tamaño de la fuente máx.5 y coordenadas c y f

	for($i=0;$i<4;$i++){
		$x1=rand(40,2000);
		$y1=rand(20,50);

		$x2=rand(0,50);
		$y2=rand(0,55);
	}

header ("content-type: image/jpeg"); 
imageJPEG ($imagen); 
imageDestroy($imagen); 
                     
?>



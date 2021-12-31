<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title here!</title>
    </head>
    <body>
    <?php
        echo'<p>Crear "3 variables" una para almacenar un nombre, otra para el telefono y otra para el sueldo</p>';
        echo'<p>Visualizar el contenido de las variables</p>';
        $nombre="Miren";
        $telefono=944157298;
        $sueldo=1560.98;
        echo"El telefono de $nombre es: $telefono y su sueldo es: $sueldo";
        echo'<p>Etiquetas de HTML</p>';
        echo'<p>NEGRITA:&lt;b&gt;&lt;/b&gt;</p>';
        echo'<p>CURSIVA:&lt;i&gt;&lt;/i&gt;</p>';
        echo'<p>ENCABEZADOS:&lt;h1&gt;&lt;/h1&gt;,&lt;h2&gt;&lt;/h2&gt;...&lt;h6&gt;&lt;/h6&gt;</p>';
        echo'<p>SUBRAYADO: &lt;u&gt;&lt;/u&gt;</p>';
        echo'<p>TACHADO:&lt;s&gt;&lt;/s&gt;</p>';
        echo'<p>Linea Horizontal:&lt;hr/&gt;</p>';
        echo'<p>Para alinear un texto se utiliza el atributo: align="center","left"...</p>';
        echo'<hr/>';
        echo'<h1 align="center"><b>PHP</b></h1>';
        echo'<hr/>';
        echo'<p><b>PHP</b> es un lenguaje de programacion del <b> del servidor.</b>
        <br>PHP puede ser usado en la <i>mayoria de  los servidores web.</i>
        <br>En cuanto a las <u>palabras clave,</u> PHP comparte con la mayoria de otros
        <br>lenguajes con sintaxis C las condiciones con if, los bcles con fot y while y
        <br>los retornos de funciones. Como es habitual en este tipo de lenguajes, las
        <br>sentencias deben acabar con punto y coma(;).</p>';
    ?>
    </body>
</html>

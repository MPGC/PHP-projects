 <!DOCTYPE html>
<html >
<head>
<meta  charset="utf-8" />
<title>FormulariosTren</title>
<style>
</style>
</head>
<body>
    <form action="datosTren.php" method="post">

        <label>Número:</label>
        <input type="number" name="numero"/>

        <label>Fecha compra:</label>
        <input type="date" name="fecha_compra"/>

        <label>Km recorridos:</label>
        <input type="number" name="km_recorridos"/>

        <input type="submit" name="boton" value="Aceptar"/>
    </form>
</body>
</html>
<?php 

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
     echo "<p class='promedio'>" . $nombre . ", Tu promedio es:" . round($promedio, 2) . "</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <h1>Promedios</h1>
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        <label for="">Nota 1:</label>
        <input type="text" name="nota1">
        <label for="">Nota 2:</label>
        <input type="text" name="nota2">
        <label for="">Nota 3:</label>
        <input type="text" name="nota3">
        <input type="submit" value="Calacular" name="submit" class="btn">
    </form>
</body>
</html>
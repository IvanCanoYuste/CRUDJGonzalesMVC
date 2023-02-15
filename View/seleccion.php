<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/controller.php" method="POST">
        <select name="seleccion" id="seleccion">
            <option value="peliculas">Peliculas Framaticas</option>
            <option value="actrices">Nombre de actrices</option>
            <option value="update">Cambiar algo</option>
        </select>
        <input type="submit" name="enviar">
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style_prueba2.css">

    <title>Prueba 2</title>

</head>
<body>

    <div class="container">
        <img src="./img/a.jpg" draggable="true" ondragstart="drag(event)" id="loro">
        <img src="./img/b.jpg" draggable="true" ondragstart="drag(event)" id="gato">
    </div>

    <div class="container-figura">
        <div class="figura">
            <div class="box" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <h2>Elite</h2>
        </div>
        <div class="figura">
            <div class="box" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <h2>Hibrido</h2>
        </div>
    </div>
    
    <form action="./prueba3.php">

    </form>

    <script src="script.js"></script>

    <?php
        
    ?>

</body> 
</html>
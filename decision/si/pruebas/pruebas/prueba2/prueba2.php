<?php
    
    session_start(); // Initialize session

    if (isset($_POST['btn'])) {
        $_SESSION['prueba2'] = $_POST['btn'];
    }

?>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style_prueba2.css">

    <title>Prueba nº2</title>

</head>
<body>

    <br>

    <h1>Prueba nº2</h1>

    <h4>¡Muevelos según lo que creas que son!</h4>

    <div class="container">
        <img src="./img/a.jpg" draggable="true" ondragstart="drag(event)" id="elite">
        <img src="./img/b.jpg" draggable="true" ondragstart="drag(event)" id="hibrido">
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
    
    <div class="div">
        <form action="../prueba3/prueba3.php" method="POST" id="formPHP">
            <input type="submit" name="btn" value="Siguiente prueba" id="botonMenu" style="display: none;" onclick="mostrarBotonMenu()">
        </form>
    </div>
    

    <script src="script.js"></script>

    <?php

        if (!isset($_SESSION['prueba2'])){
            header("Location: ../prueba1/prueba1.php?error=validacion_prueba1");
        }

    ?>

</body> 
</html>
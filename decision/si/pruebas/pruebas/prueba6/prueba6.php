<?php

    session_start(); // Initialize session

    if (isset($_POST['btn'])){
        $_SESSION['prueba6'] = $_POST['btn'];
    }

?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Prueba nº6</title>

</head>
<body>

    <h1>Prueba nº6</h1>

    <h4>En que año se hizo el ultimo reset?</h4>

    <form action="../final/final.php" method="POST">

        <label for="respuesta"></label>
        <input type="text" name="respuesta">
        <br>
        <br>
        <button name="btn" type="submit">Comprobar</button>

    </form>

</body>
</html>

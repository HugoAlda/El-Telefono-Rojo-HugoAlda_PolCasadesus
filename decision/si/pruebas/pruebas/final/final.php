<?php

    session_start(); // Initialize session

    if (isset($_POST['btn'])){
        $_SESSION['final'] = $_POST['btn'];
    }

?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style-final.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">

    <title>Prueba Final</title>

</head>
<body>

    <h1>¡Felicidades, has apagado el volcan y salvado a la humanidad!</h1>

    <div class="img">
        <img src="./img/final.png">
    </div>
    
</body>

<?php

if (isset($_POST['btn'])){
    $num=$_POST['respuesta'];
    if ($num == '1750'){
        header("Location: ../final/final.php");
    }else{
        header("Location: ../prueba6/prueba6.php?error=validacion_prueba6");
        echo "<p>Error, intenta otra vez.</p>";
        echo "<p>Pista: Esta entre 1700 y 1800...</p>";
    }
}

?>

</html>

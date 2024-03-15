<?php
    
    session_start(); // Initialize session

    if (isset($_POST['btn'])) {
        $_SESSION['prueba5'] = $_POST['btn'];
    }

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Prueba nº5</title>
</head>
<body>
    <h1>Prueba nº5</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="frecuencia">Escoge la frecuencia en la que vibra el toroide electromagnético de la tierra: </label>
        <select name="frecuencia" id="frecuencia">
            <option value=""></option>
            <?php
            // Rellenar el select con opciones de frecuencia en GHz hasta 50
            for ($i = 1; $i <= 50; $i++) {
                echo "<option value='$i'>" . $i . " GHz</option>";
            }
            ?>
        </select>
        <button id="comprobar" type="submit" name="submit">Comprobar</button>
    </form>
    <img src="./img/medidor.png" alt="Imagen del medidor">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Comprobamos si se ha enviado el valor de 'frecuencia' a través del formulario 
        if (isset($_POST['frecuencia'])) {
            // Obtenemos el valor de 'frecuencia' enviado a través del formulario
            $numfreq = $_POST['frecuencia'];
            // Comprobamos si el valor de 'frecuencia' es igual a 33
            if ($numfreq == 33) {
                // Redireccionamos si la frecuencia es igual a 33
                header("Location: ../prueba6/prueba6.php");
            }else{
                // Si la frecuencia no es 33, mostramos un mensaje de error
                echo "<p>Error, intenta otra vez.</p>";
                echo "<p>Pista: Confia en Aston Martin...</p>";
            }
        }
    }
    
    if (!isset($_SESSION['prueba5'])){
        header("Location: ../prueba4/prueba4.php?error=validacion_prueba4");
    }
    
    ?>
</body>
</html>

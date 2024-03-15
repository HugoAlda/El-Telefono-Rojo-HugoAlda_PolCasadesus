<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_prueba4.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">

    <title>Prueba nº4</title>
</head>
<body>
<h1>Prueba nº4</h1>

<body>
<h2>Selecciona al famoso reptiliano:</h2>
<form method="POST" action="recepcion_p4.php">
    <div class="img-container">
        <img src="img/isabel.jpg" alt="Imagen 1">
        <input type="radio" name="respuesta" value="imagen1" required>
    </div>

    <div class="img-container">
        <img src="img/justin.jpg" alt="Imagen 2">
        <input type="radio" name="respuesta" value="imagen2">
    </div>

    <div class="img-container">
        <img src="img/jordan.jpg" alt="Imagen 3">
        <input type="radio" name="respuesta" value="imagen3">
    </div> 
</form>
    <button type="submit">Enviar</button>
</body>
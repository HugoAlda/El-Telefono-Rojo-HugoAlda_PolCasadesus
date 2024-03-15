<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_prueba4.css">
    <title>Pregunta 1</title>
</head>
<body>
<h1>Pregunta 1</h1>

<body>
<h2>Selecciona al famoso reptiliano:</h2>
<form method="POST">
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
    
<?php
// Comprobamos si se ha enviado la respuesta y si es correcta
if(isset($_POST['respuesta']) && $_POST['respuesta'] === 'imagen1') {
    header("location: ../../menu.php");
} else {
    $mensaje = "Respuesta incorrecta. Por favor, intenta de nuevo.";
}
?>


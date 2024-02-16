<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="./css/style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
        
        <title>Teléfono Rojo</title>

    </head>

    <body>
        
        <h1>Teléfono Rojo</h1>

   

        <div class="contenedor-telefono">
            <img class="telefono" src="./img/telefono-rojo.webp">
        </div>

        <div class="contenedor-form">
            <p>¡Has recibido una llamada del teléfono rojo! ¿La vas a cojer?</p>        

            <form action="./recibir/recibir.php" method="GET">

                <button class="btn">
                    <a class="btn" href="./decision/si/reglas-juego.php">Si</a>
                </button>

                <button class="btn">
                    <a class="btn" href="./decision/no/rendicion.php"">No</a>
                </button>

            </form>

        </div>

    </body>

</html>
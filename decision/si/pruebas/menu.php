<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./../../../css/style-menu.css">

    <title>Menu</title>
</head>

<body>
    <div class="pagina">
        <div class="fila-h1">
            <br>
            <br>
            <h1>Menu</h1>
        </div>
        <div class="menu container">
            <div class="fila1">
                <div class="box" onclick="zoomIn(this)">
                    <h2>Título 1</h2>
                    <p>Contenido del div 1</p>
                    <button class="exit-button" onclick="zoomOut(event)">Salir del Zoom</button>
                </div>
                <div class="box" onclick="zoomIn(this)">
                    <h2>Título 2</h2>
                    <p>Contenido del div 2</p>
                    <button class="exit-button" onclick="zoomOut(event)">Salir del Zoom</button>
                </div>
                <div class="box" onclick="zoomIn(this)">
                    <h2>Título 3</h2>
                    <p>Contenido del div 3</p>
                    <button class="exit-button" onclick="zoomOut(event)">Salir del Zoom</button>
                </div>
            </div>
            <div class="fila2">
                <div class="box" onclick="zoomIn(this)">
                    <h2>Título 4</h2>
                    <p>Contenido del div 4</p>
                    <button class="exit-button" onclick="zoomOut(event)">Salir del Zoom</button>
                </div>
                <div class="box" onclick="zoomIn(this)">
                    <h2>Título 5</h2>
                    <p>Contenido del div 5</p>
                    <button class="exit-button" onclick="zoomOut(event)">Salir del Zoom</button>
                </div>
                <div class="box" onclick="zoomIn(this)">
                    <h2>Título 6</h2>
                    <p>Contenido del div 6</p>
                    <button class="exit-button" onclick="zoomOut(event)">Salir del Zoom</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script-menu.js"></script>

</body>
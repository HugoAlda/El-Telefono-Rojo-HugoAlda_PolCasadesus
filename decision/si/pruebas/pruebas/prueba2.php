<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pregunta 1</title>

</head>
<body>

    <h1>Pregunta 1 - Arrastra</h1>

    <div class="container">
        <img src="" draggable="true" ondragstart="drag(event)" id="">
        <img src="" draggable="true" ondragstart="drag(event)" id="">
        <img src="" draggable="true" ondragstart="drag(event)" id="">
        <img src="" draggable="true" ondragstart="drag(event)" id="">
    </div>
    
    <div class="container">
        <div class="figura">
            <div class="box" id="" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <h2>Persona 1</h2>
        </div>
        <div class="figura">
            <div class="box" id="" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <h2>Persona 2</h2>
        </div>
        <div class="figura">
            <div class="box" id="" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <h2>Persona 3</h2>
        </div>
        <div class="figura">
            <div class="box" id="" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <h2>Persona 4</h2>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
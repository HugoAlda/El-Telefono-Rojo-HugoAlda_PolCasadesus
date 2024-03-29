<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_prueba1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">

    <title>Prueba nº1</title>

</head>

<body>
    <h1 class="titulo">Prueba nº1</h1>
    <main>
        <section class="seccion1">
        <h1>Encuentra las parejas:</h1>
            <table>
                <tr>
                    <td><button id="0" onclick="destapar(0)"></button></td>
                    <td><button id="1" onclick="destapar(1)"></button></td>
                    <td><button id="2" onclick="destapar(2)"></button></td>
                    <td><button id="3" onclick="destapar(3)"></button></td>
                </tr>
                <tr>
                    <td><button id="4" onclick="destapar(4)"></button></td>
                    <td><button id="5" onclick="destapar(5)"></button></td>
                    <td><button id="6" onclick="destapar(6)"></button></td>
                    <td><button id="7" onclick="destapar(7)"></button></td>
                </tr>
                <tr>
                    <td><button id="8" onclick="destapar(8)"></button></td>
                    <td><button id="9" onclick="destapar(9)"></button></td>
                    <td><button id="10" onclick="destapar(10)"></button></td>
                    <td><button id="11" onclick="destapar(11)"></button></td>
                </tr>
                <tr>
                    <td><button id="12" onclick="destapar(12)"></button></td>
                    <td><button id="13" onclick="destapar(13)"></button></td>
                    <td><button id="14" onclick="destapar(14)"></button></td>
                    <td><button id="15" onclick="destapar(15)"></button></td>
                </tr>
            </table>
        </section>

        <section class="seccion2">
            <h2 id="aciertos" class="estadisticas">Aciertos: 0</h2>
            <h2 id="t-restante" class="estadisticas">Tiempo: 50 segundos</h2>
            <h2 id="movimientos" class="estadisticas">Movimientos: 0</h2>
            <br>
            <div class="div">
                <form action="../prueba2/prueba2.php" method="POST" id="formPHP">
                    <input type="submit" name="btn" value="Siguiente prueba" id="botonMenu" style="display: none;" onclick="mostrarBotonMenu()">
                </form>
            </div>
        </section>
    </main>
    
    <script src="./prueba1.js"></script>

</body>
</html>
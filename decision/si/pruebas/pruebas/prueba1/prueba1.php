<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_prueba1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">

    <title>Prueba nº1</title>

</head>

<?php

    // include_once "./../../menu.php"; // Ajusta la ruta según la ubicación real del archivo

    // // Inicia la sesión si aún no se ha iniciado
    // if (session_status() == PHP_SESSION_NONE) {
    //     session_start();
    // }

    // verificarProgreso('nivel1');

    // // Verificar si el usuario intenta acceder a un nivel sin completar los anteriores
    // function verificarProgreso($nivelActual) {  
    // $niveles = $_SESSION['niveles'];
    // switch ($nivelActual) {
    //     case 'nivel2':
    //         if (!$niveles['nivel2']) {
    //             header('Location: error.php?error=2');
    //             exit();
    //         }
    //         break;
    //     case 'nivel3':
    //         if (!$niveles['nivel3']) {
    //             header('Location: error.php?error=3');
    //             exit();
    //         }
    //         break;
    //     case 'nivel4':
    //         if (!$niveles['nivel4']) {
    //             header('Location: error.php?error=4');
    //             exit();
    //         }
    //         break;
    //     case 'nivel5':
    //         if (!$niveles['nivel5']) {
    //             header('Location: error.php?error=5');
    //             exit();
    //         }
    //         break;
    //     case 'nivel6':
    //         if (!$niveles['nivel6']) {
    //             header('Location: error.php?error=6');
    //             exit();
    //         }
    //         break;
    //     case 'nivelfinal':
    //         // Verifica que todos los niveles anteriores se hayan completado
    //         if (!array_reduce($niveles, function($carry, $item) {
    //             return $carry && $item;
    //         }, true)) {
    //             header('Location: error.php?error=final');
    //             exit();
    //         }
    //         break;
    // }
    // }
?>

<body>
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
            <form action="../../menu.php" method="POST" id="formPHP">
                <input type="submit" name="btn" value="Siguiente prueba" id="botonMenu" style="display: none;" onclick="mostrarBotonMenu()">
            </form>
        </section>
    </main>
    
    <script src="./prueba1.js"></script>

    <?php
        // // Suponiendo que la condición para completar el nivel 1 es cuando se envía un formulario llamado 'completar_nivel1'
        // if (isset($_POST['btn'])) {
        //     $_SESSION['niveles']['nivel1'] = true;
        //     header('Location: ./../../menu.php'); // Redirige al menú después de completar el nivel 1
        //     exit();
        // }
    ?>

</body>
</html>
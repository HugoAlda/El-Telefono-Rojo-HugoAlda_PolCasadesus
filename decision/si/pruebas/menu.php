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

<?php

    session_start();

    // Inicializar niveles en la sesión si aún no están establecidos
    if (!isset($_SESSION['niveles'])) {
        $_SESSION['niveles'] = array(
            'nivel1' => false,
            'nivel2' => false,
            'nivel3' => false,
            'nivel4' => false,
            'nivel5' => false,
            'nivel6' => false,
            'nivelfinal' => false
        );
    }

    // Verificar si el usuario intenta acceder a un nivel sin completar los anteriores
    function verificarProgreso($nivelActual) {
        $niveles = $_SESSION['niveles'];
        switch ($nivelActual) {
            case 'nivel2':
                if (!$niveles['nivel2']) {
                    header('Location: error.php?error=2');
                    exit();
                }
                break;
            case 'nivel3':
                if (!$niveles['nivel3']) {
                    header('Location: error.php?error=3');
                    exit();
                }
                break;
            case 'nivel4':
                if (!$niveles['nivel4']) {
                    header('Location: error.php?error=4');
                    exit();
                }
                break;
            case 'nivel5':
                if (!$niveles['nivel5']) {
                    header('Location: error.php?error=5');
                    exit();
                }
                break;
            case 'nivel6':
                if (!$niveles['nivel6']) {
                    header('Location: error.php?error=6');
                    exit();
                }
                break;
            case 'nivelfinal':
                // Verifica que todos los niveles anteriores se hayan completado
                if (!array_reduce($niveles, function($carry, $item) {
                    return $carry && $item;
                }, true)) {
                    header('Location: error.php?error=final');
                    exit();
                }
                break;
        }
    }

    // Lógica para marcar niveles como completados
    if (isset($_POST['completar_nivel'])) {
        $nivelCompletado = $_POST['completar_nivel'];
        $_SESSION['niveles'][$nivelCompletado] = true;
    }

    // Lógica para reiniciar el progreso
    if (isset($_POST['reiniciar_progreso'])) {
        $_SESSION['niveles'] = array(
            'nivel1' => false,
            'nivel2' => false,
            'nivel3' => false,
            'nivel4' => false,
            'nivel5' => false,
            'nivel6' => false,
            'nivelfinal' => false
        );
        header('Location: menu.php');
        exit();
    }

    // Verificar si el usuario intenta acceder a un nivel sin completar los anteriores
    if (isset($_GET['nivel'])) {
        verificarProgreso($_GET['nivel']);
        echo "Completa el nivel anterior para avanzar!";
    }

?>

<body>

    <header>
        <div class="header">
            <h1>Menu</h1>
        </div>
    </header>

    <div class="pagina">
        <div class="menu container">
            <div class="fila1">
                <div class="box">
                    <a href="./pruebas/prueba1/prueba1.php">
                        <img src="./../../../img/boton-rojo.png">
                    </a>
                    <h3>Prueba 1</h3>
                </div>
                <div class="box">
                    <a href="./pruebas/prueba2/prueba2.php">
                        <img src="./../../../img/boton-rojo.png">
                    </a>
                    <h3>Prueba 2</h3>
                </div>
                <div class="box">
                    <a href="./pruebas/prueba3/prueba3.php">
                        <img src="./../../../img/boton-rojo.png">
                    </a>
                    <h3>Prueba 3</h3>
                </div>
            </div>
            <div class="fila2">
                <div class="box">
                    <a href="./pruebas/prueba4/prueba4.php">
                        <img src="./../../../img/boton-rojo.png">
                    </a>
                    <h3>Prueba 4</h3>
                </div>
                <div class="box">
                    <a href="./pruebas/prueba5/prueba5.php">
                        <img src="./../../../img/boton-rojo.png">
                    </a>
                    <h3>Prueba 5</h3>
                </div>
                <div class="box">
                    <a href="./pruebas/prueba6/prueba6.php">
                        <img src="./../../../img/boton-rojo.png">
                    </a>
                    <h3>Prueba 6</h3>
                </div>
            </div>
        </div>
    </div>

    <script src="script-menu.js"></script>

</body>
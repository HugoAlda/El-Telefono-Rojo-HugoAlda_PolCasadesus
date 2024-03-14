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

    <?php

    $nivel1=$_SESSION['nivel1'];
    $nivel2=$_SESSION['nivel2'];
    $nivel3=$_SESSION['nivel3'];
    $nivel4=$_SESSION['nivel4'];
    $nivel5=$_SESSION['nivel5'];
    $nivel6=$_SESSION['nivel6'];
    $nivelfinal=$_SESSION['nivelfinal'];
    
    if($nivel1 == "True"){
        session_start();
        $_SESSION['nivel1'] = true;
    }

    // //
    // if(isset($_POST['error'])){
    //     $error = $_GET['error'];
    //     if($error == 1){
    //         echo "Datos incorrectos";
    //     }
    //     if($error == 2){
    //         echo "Completa el nivel 1 primero!";
    //     }
    // }

    ?>

</body>
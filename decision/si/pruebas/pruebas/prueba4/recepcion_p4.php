<?php
// Comprobamos si se ha enviado la respuesta y si es correcta
if($_POST['respuesta'] && $_POST['respuesta'] === 'imagen1') {
    header("location: ../../menu.php");
} else {
    echo "Respuesta incorrecta. Por favor, intenta de nuevo.";
}
?>
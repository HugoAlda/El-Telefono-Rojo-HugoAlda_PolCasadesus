<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Prueba nº5</title>

</head>
<body>

    <h1>Prueba nº5</h1>

    <form action="" method="post">
        <label for="escoger">Escoge la frecuencia en la que vibra el toroide electromagnético de la tierra: </label>
        <select name="frecuencia" id="frecuencia">
            <option value=""></option>
        </select>
        <input type="button" value="Comprobar" name="comprobar" id="comprobar">
    </form>

    <img src="./img/medidor.png" alt="Imagen del medidor">
    
    <script>
        // Obtener el elemento select
        let selectFrecuencia = document.getElementById('frecuencia');

        // Rellenar el select con opciones de frecuencia en GHz hasta 100
        for (let i = 1; i <= 100; i++) {
            let option = document.createElement('option');
            option.text = i + " GHz";
            option.value = i;
            selectFrecuencia.add(option);
        }
    </script>

</body>
</html>
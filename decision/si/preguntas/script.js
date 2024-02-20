document.addEventListener("DOMContentLoaded", function() {
    var barra = document.getElementById("progreso");
    var width = 0;
    var id = setInterval(frame, 10);

    function frame() {
        if (width >= 100) {
            clearInterval(id);
            setTimeout(function() {
                window.location.href = "./pregunta1/pregunta1.php";
            }, 2000); // Tiempo de espera antes de redirigir
        } else {
            width++;
            barra.style.width = width + "%";
        }
    }
});

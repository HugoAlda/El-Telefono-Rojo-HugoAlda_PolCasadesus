document.addEventListener("DOMContentLoaded", function() {
    var barra = document.getElementById("progreso");
    var width = 0;
    var id = setInterval(frame, 20); // Velocidad de llenado más lenta para que se llene gradualmente

    function frame() {
        if (width >= 100) {
            clearInterval(id);
            setTimeout(function() {
                window.location.href = "./menu.php";
            }, 2000); // Tiempo de espera antes de redirigir
        } else {
            width++;
            barra.style.width = width + "%";
        }
    }
});
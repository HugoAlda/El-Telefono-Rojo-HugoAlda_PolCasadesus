function mostrarBotonMenu() {
    // Mostrar el botón del menú
    document.getElementById("botonMenu").style.display = "block";
}

// Array de imágenes arrastrables
const images = [
    document.getElementById('elite'),
    document.getElementById('hibrido')
];

// Array de destinos de soltar
const targets = [
    document.getElementById('0'),
    document.getElementById('1')
];

// Adjuntar el escuchador de eventos 'dragstart' a cada imagen
images.forEach(image => {
    image.addEventListener('dragstart', e => {
        e.dataTransfer.setData('text', e.target.id);
    });
});

// Adjuntar el escuchador de eventos 'dragover' y 'drop' a cada destino
targets.forEach(target => {
    target.addEventListener('dragover', e => {
        e.preventDefault();
    });

    target.addEventListener('drop', e => {
        e.preventDefault();

        // Obtener el ID de la imagen arrastrable
        const id = e.dataTransfer.getData('text');

        // Obtener la imagen arrastrable
        const image = document.getElementById(id);

        // Mover la imagen al destino
        target.appendChild(image);

        // Ajustar el tamaño de la imagen para que se ajuste al contenedor de destino
        const targetWidth = target.clientWidth;
        const targetHeight = target.clientHeight;

        image.style.width = targetWidth + 'px';
        image.style.height = targetHeight + 'px';

        // Verificar si tanto 'elite' como 'hibrido' están en sus respectivos destinos
        const eliteInTarget0 = document.getElementById('0').contains(document.getElementById('elite'));
        const hibridoInTarget1 = document.getElementById('1').contains(document.getElementById('hibrido'));

        // Si ambas imágenes están en sus respectivos destinos, mostrar el botón
        if (eliteInTarget0 && hibridoInTarget1) {
            // Llamar a la función para mostrar el botón del menú
            mostrarBotonMenu();
        }
    });
});

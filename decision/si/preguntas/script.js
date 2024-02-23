function zoomIn(element) {
    element.classList.add('zoomed');
    var exitButton = element.querySelector('.exit-button');
    exitButton.style.display = 'block'; // Mostrar botón de salida del zoom
}
  
function zoomOut(event) {
    event.stopPropagation(); // Evitar que el evento se propague al hacer clic en el botón
    var zoomedBox = event.target.closest('.box'); // Obtener el box que fue clickeado
    zoomedBox.classList.remove('zoomed');
    var exitButton = zoomedBox.querySelector('.exit-button');
    exitButton.style.display = 'none'; // Ocultar botón de salida del zoom
}
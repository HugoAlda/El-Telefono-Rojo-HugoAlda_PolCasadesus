function zoomIn(element) {
  element.classList.add('zoomed');
  var exitButton = element.querySelector('.exit-button');
  exitButton.style.display = 'block'; // Mostrar botón de salida del zoom
}

function zoomOut(event) {
  event.stopPropagation(); // Evitar que el evento se propague al hacer clic en el botón
  var zoomedBoxes = document.querySelectorAll('.box.zoomed');
  for (var i = 0; i < zoomedBoxes.length; i++) {
    zoomedBoxes[i].classList.remove('zoomed');
    var exitButton = zoomedBoxes[i].querySelector('.exit-button');
    exitButton.style.display = 'none'; // Ocultar botón de salida del zoom
  }
}
function zoomIn(element) {
  var zoomedBoxes = document.querySelectorAll('.box.zoomed');
  
  // Si ya hay un elemento zoomed, sal de ese zoom antes de hacer zoom en el nuevo elemento
  if (zoomedBoxes.length > 0) {
      zoomOut();
  }
  
  element.classList.add('zoomed');
  var exitButton = element.querySelector('.exit-button');
  exitButton.style.display = 'block'; // Mostrar botón de salida del zoom
}

function zoomOut() {
  var zoomedBoxes = document.querySelectorAll('.box.zoomed');
  for (var i = 0; i < zoomedBoxes.length; i++) {
      zoomedBoxes[i].classList.remove('zoomed');
      var exitButton = zoomedBoxes[i].querySelector('.exit-button');
      exitButton.style.display = 'none'; // Ocultar botón de salida del zoom
  }
}

// Añadir un event listener para cerrar el zoom al hacer clic fuera del elemento zoomed
document.addEventListener('click', function (event) {
  if (!event.target.closest('.box.zoomed')) {
      zoomOut();
  }
});

// Añadir un event listener para prevenir la propagación del clic dentro del elemento zoomed
document.querySelector('.menu').addEventListener('click', function (event) {
  event.stopPropagation();
});

// Añadir event listener para el botón de salida del zoom
document.querySelectorAll('.exit-button').forEach(function (button) {
  button.addEventListener('click', function (event) {
      event.stopPropagation(); // Evitar que el evento se propague al hacer clic en el botón
      zoomOut();
  });
});
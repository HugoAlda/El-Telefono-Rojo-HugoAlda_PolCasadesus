// Array of draggable images
const images = [
    document.getElementById('loro'),
    document.getElementById('gato'),
    document.getElementById('perro')
];

// Array of drop targets
const targets = [
    document.getElementById('0'),
    document.getElementById('1'),
    document.getElementById('2')
];

// Attach dragstart event listener to each image
images.forEach(image => {
    image.addEventListener('dragstart', e => {
        e.dataTransfer.setData('text', e.target.id);
    });
});

// Attach dragover and drop event listeners to each target
targets.forEach(target => {
    target.addEventListener('dragover', e => {
        e.preventDefault();
    });

    target.addEventListener('drop', e => {
        e.preventDefault();

        // Get the ID of the draggable image
        const id = e.dataTransfer.getData('text');

        // Get the draggable image
        const image = document.getElementById(id);

        // Move the image to the target
        target.appendChild(image);
    });
});

// Attach click event listeners to each map label
const labels = document.querySelectorAll('.maplabels1');
labels.forEach(label => {
    label.addEventListener('click', e => {
        // Prevent default link behavior
        e.preventDefault();

        // Send AJAX request to PHP script to validate the link
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'prueba2.php?link=' + label.textContent);
        xhr.onload = () => {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Redirect to the specified URL if the link is valid
                    window.location.href = label.getAttribute('href');
                } else {
                    // Display error message if the link is invalid
                    const error = document.createElement('div');
                    error.className = 'error';
                    error.textContent = response.message;
                    document.body.appendChild(error);
                }
            }
        }
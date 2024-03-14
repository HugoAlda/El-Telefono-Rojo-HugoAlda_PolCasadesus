var rows = 5;
var columns = 5;
var currTile;
var otherTile;
var turns = 0;
window.onload = function() {
    //initialize the 5x5 board
    for (let r = 0; r < rows; r++) {
        for (let c = 0; c < columns; c++) {
            //<img>
            let tile = document.createElement("img");
            tile.src = "./img/puzzle/blank.jpg";

            //DRAG FUNCTIONALITY
            tile.addEventListener("dragstart", dragStart); //click on image to drag
            tile.addEventListener("dragover", dragOver);   //drag an image
            tile.addEventListener("dragenter", dragEnter); //dragging an image into another one
            tile.addEventListener("dragleave", dragLeave); //dragging an image away from another one
            tile.addEventListener("drop", dragDrop);       //drop an image onto another one
            tile.addEventListener("dragend", dragEnd);      //after you completed dragDrop

            document.getElementById("board").append(tile);
        }
    }
    
    function ocultarBotonMenu(){
        // Ocultar el botón del formulario
        document.getElementById("botonMenu").style.display = "none";
    }
    
    function mostrarBotonMenu(){
        // Mostrar el botón del formulario
        document.getElementById("botonMenu").style.display = "block";
    }
    
    function checkForWin() {
        function checkPuzzleComplete() {
            let boardTiles = document.getElementById("board").getElementsByTagName("img");
            let correctOrder = Array.from({ length: rows * columns }, (_, i) => (i + 1).toString());
    
            for (let i = 0; i < boardTiles.length; i++) {
                let tileSrc = boardTiles[i].src;
                let tileNumber = tileSrc.substring(tileSrc.lastIndexOf("/") + 1, tileSrc.lastIndexOf("."));
    
                if (tileNumber !== "blank" && tileNumber !== correctOrder[i]) {
                    return false; 
                }
            }
    
            alert("¡Felicidades! Has completado el rompecabezas.");
            return true; // El rompecabezas está completo
        }
    
        if (checkPuzzleComplete()) {
            let button = document.createElement("button");
            button.textContent = "Ir al menú";
            button.addEventListener("click", function() {
                window.location.href = "menu.php";
            });
            mostrarBotonMenu();
            document.body.appendChild(button);
        }
    }  
    
    //pieces
    let pieces = [];
    for (let i=1; i <= rows*columns; i++) {
        pieces.push(i.toString()); //put "1" to "25" into the array (puzzle images names)
    }
    pieces.reverse();
    for (let i =0; i < pieces.length; i++) {
        let j = Math.floor(Math.random() * pieces.length);

        //swap
        let tmp = pieces[i];
        pieces[i] = pieces[j];
        pieces[j] = tmp;
    }

    for (let i = 0; i < pieces.length; i++) {
        let tile = document.createElement("img");
        tile.src = "./img/puzzle/" + pieces[i] + ".jpg";

        //DRAG FUNCTIONALITY
        tile.addEventListener("dragstart", dragStart); //click on image to drag
        tile.addEventListener("dragover", dragOver);   //drag an image
        tile.addEventListener("dragenter", dragEnter); //dragging an image into another one
        tile.addEventListener("dragleave", dragLeave); //dragging an image away from another one
        tile.addEventListener("drop", dragDrop);       //drop an image onto another one
        tile.addEventListener("dragend", dragEnd);      //after you completed dragDrop

        document.getElementById("pieces").append(tile);
    }
}

//DRAG TILES
function dragStart() {
    currTile = this; //this refers to image that was clicked on for dragging
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter(e) {
    e.preventDefault();
}

function dragLeave() {

}

function dragDrop() {
    otherTile = this; 
}

function dragEnd() {
    if (currTile.src.includes("blank")) {
        return;
    }
    let currImg = currTile.src;
    let otherImg = otherTile.src;
    currTile.src = otherImg;
    otherTile.src = currImg;

    turns += 1;
checkForWin();
}


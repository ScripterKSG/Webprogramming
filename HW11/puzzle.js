function grabber(event) {
   // Set the global variable for the element to be moved
   theElement = event.currentTarget;

   // Determine the position of the word to be grabbed, first removing the units from left and top
   posX = parseInt(theElement.style.left);
   posY = parseInt(theElement.style.top);

   // Compute the difference between where it is and where the mouse click occurred
   diffX = event.clientX - posX;
   diffY = event.clientY - posY;

   // Now register the event handlers for moving and dropping the word
   document.addEventListener("mousemove", mover, true);
   document.addEventListener("mouseup", dropper, true);

}

// The event handler function for moving the word
function mover(event) {
   // Compute the new position, add the units, and move the word
   theElement.style.left = (event.clientX - diffX) + "px";
   theElement.style.top = (event.clientY - diffY) + "px";
}

// The event handler function for dropping the word
function dropper(event) {
   // Unregister the event handlers for mouseup and mousemove
   document.removeEventListener("mouseup", dropper, true);
   document.removeEventListener("mousemove", mover, true);
}

function loadPuzzle(){
    //pick random puzzle and load imgs into array
    puzzleNum = Math.floor(Math.random() * 3);
    var puzArray = fillPuzzle(puzzleNum)

    //keep track of element ids
    var numArray = fillNum()

    //randomize pieces
    for (i = 0; i < numArray.length; i++){
        id = Math.floor(Math.random() * puzArray.length)
        numArray[i].src = puzArray[id];
        puzArray.splice(id, 1)
    }

}

function fillPuzzle(puzzleNum){
    puzArray = []

    if (puzzleNum == 0){
        puzArray[0] = "./puzzle1/img1-1.jpg"
        puzArray[1] = "./puzzle1/img1-2.jpg"
        puzArray[2] = "./puzzle1/img1-3.jpg"
        puzArray[3] = "./puzzle1/img1-4.jpg"
        puzArray[4] = "./puzzle1/img1-5.jpg"
        puzArray[5] = "./puzzle1/img1-6.jpg"
        puzArray[6] = "./puzzle1/img1-7.jpg"
        puzArray[7] = "./puzzle1/img1-8.jpg"
        puzArray[8] = "./puzzle1/img1-9.jpg"
        puzArray[9] = "./puzzle1/img1-10.jpg"
        puzArray[10] = "./puzzle1/img1-11.jpg"
        puzArray[11] = "./puzzle1/img1-12.jpg"
    }
    else if (puzzleNum == 1){
        puzArray[0] = "./puzzle2/img2-1.jpg"
        puzArray[1] = "./puzzle2/img2-2.jpg"
        puzArray[2] = "./puzzle2/img2-3.jpg"
        puzArray[3] = "./puzzle2/img2-4.jpg"
        puzArray[4] = "./puzzle2/img2-5.jpg"
        puzArray[5] = "./puzzle2/img2-6.jpg"
        puzArray[6] = "./puzzle2/img2-7.jpg"
        puzArray[7] = "./puzzle2/img2-8.jpg"
        puzArray[8] = "./puzzle2/img2-9.jpg"
        puzArray[9] = "./puzzle2/img2-10.jpg"
        puzArray[10] = "./puzzle2/img2-11.jpg"
        puzArray[11] = "./puzzle2/img2-12.jpg"
    }
    else {
        puzArray[0] = "./puzzle3/img3-1.jpg"
        puzArray[1] = "./puzzle3/img3-2.jpg"
        puzArray[2] = "./puzzle3/img3-3.jpg"
        puzArray[3] = "./puzzle3/img3-4.jpg"
        puzArray[4] = "./puzzle3/img3-5.jpg"
        puzArray[5] = "./puzzle3/img3-6.jpg"
        puzArray[6] = "./puzzle3/img3-7.jpg"
        puzArray[7] = "./puzzle3/img3-8.jpg"
        puzArray[8] = "./puzzle3/img3-9.jpg"
        puzArray[9] = "./puzzle3/img3-10.jpg"
        puzArray[10] = "./puzzle3/img3-11.jpg"
        puzArray[11] = "./puzzle3/img3-12.jpg"
    }

    return puzArray
}

function fillNum(){
    numArray = []
    numArray[0] = document.getElementById("p1")
    numArray[1] = document.getElementById("p2")
    numArray[2] = document.getElementById("p3")
    numArray[3] = document.getElementById("p4")
    numArray[4] = document.getElementById("p5")
    numArray[5] = document.getElementById("p6")
    numArray[6] = document.getElementById("p7")
    numArray[7] = document.getElementById("p8")
    numArray[8] = document.getElementById("p9")
    numArray[9] = document.getElementById("p10")
    numArray[10] = document.getElementById("p11")
    numArray[11] = document.getElementById("p12")

    return numArray
}

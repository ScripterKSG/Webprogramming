var turn = "X"
var xWin = 0
var oWin = 0
//keep track of which buttons have been pressed
var pressed = new Array ();
//holds all button elements for convenience
var elems = new Array();
function toe(id){
    if (!pressed.includes(id)){
        document.getElementById(id).value = turn;
        pressed.push(id)
        if (turn == "X"){turn = "O"}
        else {turn = "X"}
        win()
    }
}

//holds all button elements for convenience
function elemSetup(){
    for (i = 1; i < 10; i++){
        elems.push(document.getElementById("b" + i))
    }
}

function win(){
    //horizontal 1
    if ((elems[0].value == elems[1].value) && (elems[0].value== elems[2].value)
        && elems[0].value != " "){
            alert(elems[0].value + " has won")
            if (elems[0].value == "X"){
                xWin++
                document.getElementById("xWins").innerHTML = xWin
            }
            else {
                oWin++
                document.getElementById("oWins").innerHTML = oWin
            }
    }
    //horizontal 2
    else if ((elems[3].value == elems[4].value) && (elems[3].value== elems[5].value)
        && elems[3].value != " "){
            alert(elems[3].value + " has won")
            if (elems[3].value == "X"){
                xWin++
                document.getElementById("xWins").innerHTML = xWin
            }
            else {
                oWin++
                document.getElementById("oWins").innerHTML = oWin
            }
    }
    //horizontal 3
    else if ((elems[6].value == elems[7].value) && (elems[6].value== elems[8].value)
        && elems[6].value != " "){
            alert(elems[6].value + " has won")
            if (elems[6].value == "X"){
                xWin++
                document.getElementById("xWins").innerHTML = xWin
            }
            else {
                oWin++
                document.getElementById("oWins").innerHTML = oWin
            }
    }
    //vertical 1
    else if ((elems[0].value == elems[3].value) && (elems[0].value== elems[6].value)
    && elems[0].value != " "){
        alert(elems[0].value + " has won")
        if (elems[0].value == "X"){
            xWin++
            document.getElementById("xWins").innerHTML = xWin
        }
        else {
            oWin++
            document.getElementById("oWins").innerHTML = oWin
        }
    }
    //vertical 2
    else if ((elems[1].value == elems[4].value) && (elems[1].value== elems[7].value)
    && elems[1].value != " "){
        alert(elems[1].value + " has won")
        if (elems[1].value == "X"){
            xWin++
            document.getElementById("xWins").innerHTML = xWin
        }
        else {
            oWin++
            document.getElementById("oWins").innerHTML = oWin
        }
    }
    //vertical 3
    else if ((elems[2].value == elems[5].value) && (elems[2].value== elems[8].value)
    && elems[2].value != " "){
        alert(elems[2].value + " has won")
        if (elems[2].value == "X"){
            xWin++
            document.getElementById("xWins").innerHTML = xWin
        }
        else {
            oWin++
            document.getElementById("oWins").innerHTML = oWin
        }
    }
    //diagonal left to right
    else if ((elems[0].value == elems[4].value) && (elems[0].value== elems[8].value)
    && elems[0].value != " "){
        alert(elems[0].value + " has won")
        if (elems[0].value == "X"){
            xWin++
            document.getElementById("xWins").innerHTML = xWin
        }
        else {
            oWin++
            document.getElementById("oWins").innerHTML = oWin
        }
    }
    //diagonal right to left
    else if ((elems[2].value == elems[4].value) && (elems[2].value== elems[6].value)
    && elems[2].value != " "){
        alert(elems[2].value + " has won")
        if (elems[2].value == "X"){
            xWin++
            document.getElementById("xWins").innerHTML = xWin
        }
        else {
            oWin++
            document.getElementById("oWins").innerHTML = oWin
        }
    }
}

function replay(){
    for (i = 0; i < elems.length; i++){
        elems[i].value = " "
    }
    pressed.length = 0;
}
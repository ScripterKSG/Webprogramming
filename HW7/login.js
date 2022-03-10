document.getElementById("clickMe").onclick = checkInfo();
function checkInfo(){
    user = document.getElementById("user").value
    pass = document.getElementById("pass").value
    repeat = document.getElementById("repeat").value
    if (!isNaN(parseInt(user[0])) || !isNaN(parseInt(pass[0]))){
        alert("Invalid username or password") 
        return false
    }

    else if (user.length > 10 || user.length < 6 || pass.length > 10 || pass.length < 6){
        alert("Invalid username or password")
        return false
    }

    else if (!isalphaNumeric(user) || !isalphaNumeric(pass)) {
        alert("Invalid username or password")
        return false
    }

    else if (repeat !== pass){
        alert("Repeat password must be the same")
        return false
    }
    
    alert("User validated")
}

function isalphaNumeric(entry){
    // Look at ASCII values to see if alphanumeric values only
    String(entry[0])
    for (i = 0; i < entry.length; i++) {
        val = entry.charCodeAt(i)
        if (!(val > 47 && val < 58) && // numeric (0-9) 
            !(val > 64 && val < 91) && // upper alpha (A-Z)
            !(val > 96 && val < 123)) { // lower alpha (a-z)
                return false
            }
    }
    return true
}
document.getElementById("clickMe").onclick = mortgage();
function mortgage(){
    P = parseFloat(document.getElementById("P").value)
    if (isNaN(P)) {alert("Principal Amount must be a floating point number!"); return false}
    else if (P < 0) {alert("Principal Amount can not be negative!"); return false}
    r = parseFloat(document.getElementById("r").value)

    if (isNaN(r)) {alert("Yearly Interest Rate must be a floating point number!"); return false}
    else if (r >= 1 || r <= 0) {alert("Yearly Interest Rate must be between 0 and 1!"); return false}
    n = parseInt(document.getElementById("n").value)

    if (isNaN(n)) {alert("Loan Term must be an integer!"); return false}
    else if (n < 0) {alert("Loan Term must be positive!"); return false}

    R =  P * r / (1 - (1 / (1 + r)**n))
    document.getElementById("result").value = ("Monthly payments: " + String(Math.round(R * 100) / 100) + "\n" +
    "Sum of all payments: " + String(Math.round(R * n * 100) / 100) + "\n" + 
    "Total interest paid: " + String(Math.round((R * n - P) * 100) / 100))
}


var hidden = true;

function toggleMenu(id) {
    if (hidden == true) {
    //console.log('opening menu');
    document.getElementById(id).style.left='12%'; 
    this.hidden = false;
    } else {
    //console.log('closing menu')
    document.getElementById(id).style.left='-200px';
    this.hidden=true;
    }
}


function verify() {
    var x = document.getElementById('user').value;

    var y = document.getElementById('pw').value;

    var z = document.getElementById('repeatpw').value;
    
    var pattern = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d).+$");
   
    if ((x.length<'6') || (x.length>'10') || (!(/^[A-Za-z0-9]*$/.test(x))) || (/^[0-9]*$/.test(x.charAt(0))) ) {
        alert("Invalid username");
    } else if ( (y.length<'6') || (y.length>'10') || (!(/^[A-Za-z0-9]*$/.test(y))) || 
        (!(pattern.test(y))) ) {
        alert("Invalid password");
    } else if  (!(y == z)) {
        alert('Passwords do not match');
    } else {
        alert('User validated');
        return true;
    }
}

function current_date(){
    var date_utc = new Date()
    var date_timeZone = new Date(date_utc.getFullYear(), date_utc.getMonth(), date_utc.getDate())
    console.log(date_timeZone)
//    console.log(document.getElementById('date').value)
    document.getElementById('date').innerHTML = date_timeZone.toDateString();
}
function Render(){
    current_date()
}
